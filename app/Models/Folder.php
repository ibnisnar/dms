<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'folders';
    protected $fillable = [
        'fk_folder',
        'fk_user',
        'name',
        'comment',
        'defaultAccess',
    ];

    /**
     * Get the user that owns the folder.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user');
    }

    /**
     * Get the document folders.
     */
    public function documents()
    {
        return $this->hasMany(Document::class, 'fk_folder');
    }

    /**
     * Get the children folders.
     */
    public function children()
    {
        return $this->hasMany(Folder::class, 'fk_folder');
    }

    /**
     * Get the parent folders.
     */
    public function parent()
    {
        return $this->belongsTo(Folder::class, 'fk_folder');
    }

    /**
     * Get all parent folders recursively.
     */
    public function parents()
    {
        $parents = collect([]);
        $folder = $this;

        while ($folder) {
            $parents->prepend($folder);
            $folder = Folder::find($folder->fk_folder);
        }

        return $parents;
    }

    /**
     * Get Folder Tree Structure
     */
    public static function tree()
    {
        $allFolders = Folder::get();

        $rootFolder = $allFolders->whereNull('fk_folder');

        self::formatTree($rootFolder, $allFolders);

        return $rootFolder;
    }

    public static function formatTree($folders, $allFolders){
        foreach($folders as $folder){
            $folder->children = $allFolders->where('fk_folder', $folder->id)->values();

            if($folder->children->isNotEmpty()){
                self::formatTree($folder->children, $allFolders);
            }
        }
    }

    /**
     * Get Folder Header Links
     */
    public function getHeaderLinks()
    {
        return [
            [
                'text' => 'Info',
                'route' => route('add-folder', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Add Subfolder',
                'route' => route('add-folder', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Add Document',
                'route' => route('add-document', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Edit Folder',
                'route' => route('edit-folder', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Access Right',
                'route' => route('access-right', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Notification List',
                'route' => route('notify-list', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Download Folder',
                'route' => route('download-folder', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Move Folder',
                'route' => route('move-folder', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Lock Folder',
                'route' => route('lock-folder', ['folderid' => $this->id]),
            ],
            [
                'text' => 'Delete Folder',
                'route' => route('delete-folder', ['folderid' => $this->id]),
            ],
        ];
    }


}
