<x-slot name="header">
    <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
        <a href="{{ route('view-folder', ['folderid' => $folderid]) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Folder') }}
        </a>
    </div>
    <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
        <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('add-folder', ['folderid' => $folderid]) }}">
            Add Subfolder
        </a>
    </div>
    <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
        <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('add-document', ['folderid' => $folderid]) }}">
            Add Document
        </a>
    </div>
    <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
        <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('edit-folder', ['folderid' => $folderid]) }}">
            Edit Folder
        </a>
    </div>
    <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
        <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('access-right', ['folderid' => $folderid]) }}">
            Access Right
        </a>
    </div>
    <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
        <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('notify-list', ['folderid' => $folderid]) }}">
            Notification List
        </a>
    </div>
</x-slot>

<div class="py-10">
    <div class="sm:px-6 lg:px-8">

        <nav class="flex px-5 py-3 text-gray-700 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
              </div>
            </li>
          </ol>
        </nav>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
                    <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        Add Subfolder
                    </h5>
                    <form wire:submit.prevent="addFolder" class="max-w-xl">
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                            <input type="text" id="comment" wire:model="comment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="defaultAccess" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default Access</label>
                            <select id="defaultAccess" wire:model="defaultAccess" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="0">All Permission</option>
                                <option value="1">Read/Write Permission</option>
                                <option value="2">Read Permission</option>
                                <option value="3">No Access</option>
                            </select>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>                    
    </div>
</div>
