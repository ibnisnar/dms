<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentContent extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'document_contents';
    protected $fillable = [
        'fk_document',
        'dir',
        'filename',
        'filetype',
        'mimetype',
    ];

    /**
     * Get the document that owns the content.
     */
    public function document()
    {
        return $this->belongsTo(Document::class, 'fk_document');
    }
}
