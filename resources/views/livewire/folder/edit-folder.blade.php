<x-slot name="header">
    <x-folder-header :folderid="$selectedFolder->id" :links="$selectedFolder->getHeaderLinks()"/>
</x-slot>

<div class="py-10">
    <div class="sm:px-6 lg:px-8">

        <x-folder-breadcrumb :parents="$selectedFolder->parents()"/>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
                    <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        Edit Folder
                    </h5>
                    <form wire:submit.prevent="updateFolder" class="max-w-xl">
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required  />
                        </div>
                        <div class="mb-5">
                            <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                            <textarea id="comment" wire:model="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <!-- <div class="mb-5">
                            <label for="defaultAccess" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default Access</label>
                            <select id="defaultAccess" wire:model="defaultAccess" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="0">All Permission</option>
                                <option value="1">Read/Write Permission</option>
                                <option value="2">Read Permission</option>
                                <option value="3">No Access</option>
                            </select>
                        </div> -->
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>                    
    </div>
</div>
