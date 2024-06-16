<?php

namespace App\Livewire\Folder;

use Livewire\Component;
use App\Models\Folder;
use App\Models\User;
use App\Models\Groups;
use App\Models\InheritAccess;

class NotifyList extends Component
{
    public $folderid;
    public $users;
    public $groups;
    public $listAccess;
    public $selectedFolder;

    public function mount()
    {
        $this->folderid = request()->query('folderid');
        $this->users = User::all();
        $this->groups = Groups::all();
        $this->selectedFolder = Folder::where('id', $this->folderid)->with('children')->first();
        $this->listAccess = InheritAccess::all();
    }
    public function render()
    {
        return view('livewire.folder.notify-list', [
            'folderid' => $this->folderid,
            'users' => $this->users,
            'groups' => $this->groups,
            'selectedFolder' => $this->selectedFolder,
            'listAccess' => $this->listAccess,
        ])->layout('layouts.app');
    }
}
