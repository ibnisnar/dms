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
     * Get the children folders.
     */
    public function children()
    {
        return $this->hasMany(Folder::class, 'fk_folder');
    }
}
