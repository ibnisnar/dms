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
    public $defaultAccess = '0';

    public function mount()
    {
        $this->folderid = request()->query('folderid');
    }

    public function addFolder()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:255',
            'defaultAccess' => 'required|string|in:0,1,2,3',
        ]);

        // Create the folder
        Folder::create([
            'fk_folder' => $this->folderid,
            'fk_user' => Auth::id(),
            'name' => $this->name,
            'comment' => $this->comment,
            'defaultAccess' => $this->defaultAccess,
        ]);

        return redirect()->route('view-folder')->with('message', 'Folder added successfully');
    }

    public function render()
    {
        return view('livewire.folder.add-folder', ['folderid' => $this->folderid])->layout('layouts.app');
    }
}
