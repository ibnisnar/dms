<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'documents';
    protected $fillable = [
        'fk_folder',
        'fk_user',
        'name',
        'comment',
        'defaultAccess',
        'expired_at',
    ];

    /**
     * Get the folder that owns the document.
     */
    public function folder()
    {
        return $this->belongsTo(Folder::class, 'fk_folder');
    }

    /**
     * Get the content document.
     */
    public function contents()
    {
        return $this->hasMany(DocumentContent::class, 'fk_document');
    }

    /**
     * Get the user that owns the folder.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user');
    }

    /**
     * Get Document Header Links
     */
    public function getHeaderLinks()
    {
        return [
            [
                'text' => 'Update Document',
                'route' => route('add-document', ['docid' => $this->id]),
            ],
            [
                'text' => 'Edit Document',
                'route' => route('add-document', ['docid' => $this->id]),
            ],
            [
                'text' => 'Access Right',
                'route' => route('access-right', ['docid' => $this->id]),
            ],
            [
                'text' => 'Notification List',
                'route' => route('notify-list', ['docid' => $this->id]),
            ],
        ];
    }
}
