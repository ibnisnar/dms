<?php

namespace App\Livewire\Folder;

use Livewire\Component;
use App\Models\Folder;

class ViewFolder extends Component
{
    public $folderid;
    public $homeFolder;
    public $selectedFolder;

    public function mount()
    {
        $this->folderid = request()->query('folderid');
        $this->homeFolder = Folder::whereNull('fk_folder')->first();
        $this->selectedFolder = Folder::where('id', $this->folderid)->first();
    }

    public function render()
    {
        return view('livewire.folder.view-folder', ['homeFolder' => $this->homeFolder, 'selectedFolder' => $this->selectedFolder])->layout('layouts.app');
    }
}
