@php
    $folderTree = App\Models\Folder::tree();
@endphp
@if($folderid)
    <x-slot name="header">
        <x-folder-header :folderid="$selectedFolder->id"  :parents="$selectedFolder->parents()"/>
    </x-slot>

    <div class="py-8">
        <div class="sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <x-folder-tree-main :folderTree="$folderTree"/>    
                </div>
                <div class="col-span-3">
                    <x-folder-content :folder="$selectedFolder" :folderid="$selectedFolder->id"/>           
                </div>
            </div>
        </div>
    </div>
@else
    <x-slot name="header">
        <x-folder-header :folderid="$homeFolder->id"  :parents="$homeFolder->parents()"/>
    </x-slot>

    <div class="sm:px-6 lg:px-8">
        <div class="mt-8 grid grid-cols-4 gap-4">
            <div>
                <x-folder-tree-main :folderTree="$folderTree"/>
            </div>
            <div class="col-span-3">
                <x-folder-content :folder="$homeFolder"/>
            </div>
        </div>
    </div>
@endif
