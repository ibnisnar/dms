<?php

namespace App\Livewire\Folder;

use Livewire\Component;
use App\Models\Folder;
use App\Models\User;
use App\Models\Groups;
use App\Models\InheritAccess;

class AccessRight extends Component
{
    public $folderid;
    public $users;
    public $groups;
    public $listAccess;
    public $selectedFolder;
    public $owner;
    public $defaultAccess;
    public $userAccess;
    public $groupAccess;
    public $accessMode;

    public function mount()
    {
        $this->folderid = request()->query('folderid');
        $this->selectedFolder = Folder::where('id', $this->folderid)->first();
        $this->users = User::all();
        $this->groups = Groups::all();
        $this->listAccess = InheritAccess::all();
    }

    public function setOwner()
    {
        // Validate the input
        $this->validate([
            'owner' => 'required',
        ]);
        // Find the folder and update
        $folder = Folder::find($this->folderid);
        if ($folder) {
            $folder->update([
                'fk_user' => $this->owner,
            ]);

            return redirect()->route('view-folder', ['folderid' => $this->folderid])->with('message', 'Owner changed successfully');
        } else {
            return redirect()->route('view-folder')->with('error', 'Folder not found');
        }
    }

    public function setDefaultAccess()
    {
        $this->validate([
            'defaultAccess' => 'required|in:0,1,2,3', // Validate the access level
        ]);

        // Find the folder and update
        $folder = Folder::find($this->folderid);
        if ($folder) {
            $folder->update([
                'defaultAccess' => $this->defaultAccess,
            ]);

            return redirect()->route('view-folder', ['folderid' => $this->folderid])->with('message', 'Default Access changed successfully');
        } else {
            return redirect()->route('view-folder')->with('error', 'Folder not found');
        }
    }

    public function addUserGroupAccessMode()
    {
        $this->validate([
            'userAccess' => 'nullable|exists:users,id',
            'groupAccess' => 'nullable|exists:groups,id',
            'accessMode' => 'required|in:0,1,2,3',
        ]);

        $userOrGroupId = $this->userAccess ?? $this->groupAccess;
        $userOrGroupType = $this->userAccess ? User::class : Groups::class;

        $access = new InheritAccess([
            'fk_folder' => $this->folderid,
            'fk_user_or_group_id' => $userOrGroupId,
            'fk_user_or_group_type' => $userOrGroupType,
            'inherit_access' => $this->accessMode,
        ]);

        $access->save();

        return redirect()->route('view-folder', ['folderid' => $this->folderid])->with('message', 'Access Mode added successfully');
    }

    public function updateUserGroupAccessMode($id)
    {
        $this->validate([
            'accessMode' => 'required|in:0,1,2,3',
        ]);

        $access = InheritAccess::findOrFail($id);
        $access->update([
            'inheritAccess' => $this->accessMode,
        ]);

        session()->flash('message', 'Access Mode updated successfully');
    }

    public function deleteUserGroupAccessMode($id)
    {
        $access = InheritAccess::findOrFail($id);
        $access->delete();

        $this->listAccess = $this->listAccess->except($id); // Remove from the list

        session()->flash('message', 'Access Mode deleted successfully');
    }

    public function render()
    {
        return view('livewire.folder.access-right', [
            'folderid' => $this->folderid,
            'users' => $this->users,
            'groups' => $this->groups,
            'selectedFolder' => $this->selectedFolder,
            'listAccess' => $this->listAccess,
        ])->layout('layouts.app');
    }
}
