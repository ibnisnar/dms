<?php

namespace App\Livewire\Folder;

use Livewire\Component;
use App\Models\Folder;
use Illuminate\Support\Facades\Auth;

class AddFolder extends Component
{
    public $folderid;
    public $name;
    public $comment;
    public $selectedFolder;

    public function mount()
    {
        $this->folderid = request()->query('folderid');
        $this->selectedFolder = Folder::where('id', $this->folderid)->first();
    }

    public function addFolder()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:255',
        ]);

        // Create the folder
        Folder::create([
            'fk_folder' => $this->folderid,
            'fk_user' => Auth::id(),
            'name' => $this->name,
            'comment' => $this->comment,
        ]);

        return redirect()->route('view-folder', ['folderid' => $this->folderid])->with('message', 'Folder added successfully');
    }

    public function render()
    {
        return view('livewire.folder.add-folder', ['folderid' => $this->folderid, 'selectedFolder' => $this->selectedFolder])->layout('layouts.app');
    }
}
