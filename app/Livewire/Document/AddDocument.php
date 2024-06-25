<?php

namespace App\Livewire\Document;

use Livewire\Component;
use App\Models\Folder;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;

class AddDocument extends Component
{
    public $folderid;
    public $name;
    public $comment;
    public $defaultAccess;
    public $expiredAt;
    public $selectedFolder;

    public function mount()
    {
        $this->folderid = request()->query('folderid');
        $this->selectedFolder = Folder::where('id', $this->folderid)->first();
    }

    public function addDocument()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:255',
            'defaultAccess' => 'required',
            'expiredAt' => 'nullable',
        ]);

        // Create the folder
        Document::create([
            'fk_folder' => $this->folderid,
            'fk_user' => Auth::id(),
            'name' => $this->name,
            'comment' => $this->comment,
            'defaultAccess' => $this->defaultAccess,
            'expired_at' => $this->expiredAt,
        ]);

        return redirect()->route('view-folder', ['folderid' => $this->folderid])->with('message', 'Document added successfully');
    }

    public function render()
    {
        return view('livewire.document.add-document', ['folderid' => $this->folderid, 'selectedFolder' => $this->selectedFolder])->layout('layouts.app');
    }
}
