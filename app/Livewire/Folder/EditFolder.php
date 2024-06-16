<?php

namespace App\Livewire\Folder;

use Livewire\Component;
use App\Models\Folder;

class EditFolder extends Component
{
    public $folderid;
    public $name;
    public $comment;
    public $selectedFolder;

    public function mount()
    {
        $this->folderid = request()->query('folderid');
        $folder = Folder::where('id', $this->folderid)->first();
        $this->selectedFolder = Folder::where('id', $this->folderid)->first();

        if ($folder) {
            $this->name = $folder->name;
            $this->comment = $folder->comment;
        }
    }

    public function updateFolder()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'comment' => 'nullable|string|max:255',
        ]);

        // Find the folder and update
        $folder = Folder::find($this->folderid);
        if ($folder) {
            $folder->update([
                'name' => $this->name,
                'comment' => $this->comment,
            ]);

            return redirect()->route('view-folder', ['folderid' => $this->folderid])->with('message', 'Folder updated successfully');
        } else {
            return redirect()->route('view-folder')->with('error', 'Folder not found');
        }
    }

    public function render()
    {
        return view('livewire.folder.edit-folder', ['folderid' => $this->folderid, 'selectedFolder' => $this->selectedFolder])->layout('layouts.app');
    }
}
