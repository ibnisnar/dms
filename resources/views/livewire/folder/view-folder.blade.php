@php
    $folderTree = App\Models\Folder::tree();
@endphp
@if($folderid)
    <div class="py-5">
        <div class="sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <x-folder-tree-main :folderTree="$folderTree"/>    
                </div>
                <div class="col-span-3">
                    <x-folder-content :folders="$selectedFolder" :folderid="$selectedFolder->id"/>           
                </div>
            </div>
        </div>
    </div>
@else
    <div class="sm:px-6 lg:px-8">
        <div class="mt-5 grid grid-cols-4 gap-4">
            <div>
                <x-folder-tree-main :folderTree="$folderTree"/>
            </div>
            <div class="col-span-3">
                <x-folder-content :folders="$homeFolder"/>
            </div>
        </div>
    </div>
@endif
