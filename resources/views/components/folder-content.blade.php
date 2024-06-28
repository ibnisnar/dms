<div class="bg-white bg-opacity-30 dark:bg-opacity-50 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="mb-4">
            <ul class="flex justify-between -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <div class="flex justify-between">
                    <li class="" role="presentation">
                        <div class="relative inline-block p-4">
                            @if($folders->id != 1)
                                @php
                                    $currentFolder = App\Models\Folder::where('id', $folders->id)->first();
                                    $parentFolder = App\Models\Folder::where('id', $currentFolder->fk_folder)->first();
                                @endphp
                                @if($parentFolder->id == 1)
                                    <svg id="default-svg" class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19V6a1 1 0 0 1 1-1h4.032a1 1 0 0 1 .768.36l1.9 2.28a1 1 0 0 0 .768.36H16a1 1 0 0 1 1 1v1M3 19l3-8h15l-3 8H3Z"/>
                                    </svg>
                                    <a href="{{ route('view-folder') }}" id="hover-svg" class="hidden">
                                        <svg class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8"/>
                                        </svg>
                                    </a>
                                @else
                                    <svg id="default-svg" class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19V6a1 1 0 0 1 1-1h4.032a1 1 0 0 1 .768.36l1.9 2.28a1 1 0 0 0 .768.36H16a1 1 0 0 1 1 1v1M3 19l3-8h15l-3 8H3Z"/>
                                    </svg>
                                    <a href="{{ route('view-folder', ['folderid' => $folders->fk_folder]) }}" id="hover-svg" class="hidden">
                                        <svg class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8"/>
                                        </svg>
                                    </a>
                                @endif
                            @else
                            <a href="{{ route('view-folder') }}">
                                <svg class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19V6a1 1 0 0 1 1-1h4.032a1 1 0 0 1 .768.36l1.9 2.28a1 1 0 0 0 .768.36H16a1 1 0 0 1 1 1v1M3 19l3-8h15l-3 8H3Z"/>
                                </svg>
                            </a>
                            @endif
                        </div>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block w-full p-4" id="table-tab" data-tabs-target="#table" type="button" role="tab" aria-controls="table" aria-selected="false">
                            <x-folder-breadcrumb :folderid="$folders->id"  :parents="$folders->parents()"/>
                        </button>
                    </li>
                </div>
                <div class="flex justify-between">
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="info-tab" data-tabs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="add-subfolder-tab" data-tabs-target="#add-subfolder" type="button" role="tab" aria-controls="add-subfolder" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 8H4m8 3.5v5M9.5 14h5M4 6v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="add-document-tab" data-tabs-target="#add-document" type="button" role="tab" aria-controls="add-document" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="edit-folder-tab" data-tabs-target="#edit-folder" type="button" role="tab" aria-controls="edit-folder" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                            </svg>
                        </button>
                    </li> 
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="access-right-tab" data-tabs-target="#access-right" type="button" role="tab" aria-controls="access-right" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18.5A2.493 2.493 0 0 1 7.51 20H7.5a2.468 2.468 0 0 1-2.4-3.154 2.98 2.98 0 0 1-.85-5.274 2.468 2.468 0 0 1 .92-3.182 2.477 2.477 0 0 1 1.876-3.344 2.5 2.5 0 0 1 3.41-1.856A2.5 2.5 0 0 1 12 5.5m0 13v-13m0 13a2.493 2.493 0 0 0 4.49 1.5h.01a2.468 2.468 0 0 0 2.403-3.154 2.98 2.98 0 0 0 .847-5.274 2.468 2.468 0 0 0-.921-3.182 2.477 2.477 0 0 0-1.875-3.344A2.5 2.5 0 0 0 14.5 3 2.5 2.5 0 0 0 12 5.5m-8 5a2.5 2.5 0 0 1 3.48-2.3m-.28 8.551a3 3 0 0 1-2.953-5.185M20 10.5a2.5 2.5 0 0 0-3.481-2.3m.28 8.551a3 3 0 0 0 2.954-5.185"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="notification-list-tab" data-tabs-target="#notification-list" type="button" role="tab" aria-controls="notification-list" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
                            </svg>
                        </button>
                    </li> 
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="download-folder-tab" data-tabs-target="#download-folder" type="button" role="tab" aria-controls="download-folder" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="move-folder-tab" data-tabs-target="#move-folder" type="button" role="tab" aria-controls="move-folder" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="lock-folder-tab" data-tabs-target="#lock-folder" type="button" role="tab" aria-controls="lock-folder" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                            </svg>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full p-4" id="delete-folder-tab" data-tabs-target="#delete-folder" type="button" role="tab" aria-controls="delete-folder" aria-selected="false">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                            </svg>
                        </button>
                    </li>                 
                </div>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden px-8" id="table" role="tabpanel" aria-labelledby="table-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <ol class="relative border-s border-gray-200 dark:border-gray-700">
                        @foreach($folders->children as $folder)
                            <li class="mb-1 ms-6 hover:dark:bg-gray-700 hover:bg-gray-700 rounded py-2 px-4 group">
                                <a href="{{ route('view-folder', ['folderid' => $folder->id]) }}">
                                    <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 dark:ring-gray-900 dark:bg-gray-900">
                                        <svg class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </span>
                                    <h3 class="flex justify-between items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                        <span class="block mb-2 text-sm font-semibold leading-none text-gray-800 dark:text-gray-300 group-hover:text-gray-300">
                                            {{ $folder->name }}
                                        </span>
                                        <span class="flex items-center gap-x-1 bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300 ms-3">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z"/>
                                            </svg>
                                            {{ $folder->children->count() }}
                                        </span>
                                    </h3>
                                    <time class="block mb-2 text-sm font-normal leading-none text-gray-700 dark:text-gray-500 group-hover:text-gray-300">Released on {{ \Carbon\Carbon::parse($folder->created_at)->format('l, F j, Y') }}</time>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 group-hover:text-gray-500">{{ $folder->comment }}</p>
                                </a>           
                            </li>
                        @endforeach
                        @foreach($folders->documents as $document)
                            <li class="mb-1 ms-6 hover:dark:bg-gray-700 hover:bg-gray-700 rounded py-2 px-4 group">
                                <a href="{{ route('view-folder', ['folderid' => $folder->id]) }}">
                                    <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 dark:ring-gray-900 dark:bg-gray-900">
                                        <svg class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </span>
                                    <h3 class="flex justify-between items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                        <span class="block mb-2 text-sm font-semibold leading-none text-gray-800 dark:text-gray-300 group-hover:text-gray-300">
                                            {{ $document->name }}
                                        </span>
                                        <span class="flex items-center gap-x-1 bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300 ms-3">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z"/>
                                            </svg>
                                            Pending
                                        </span>
                                    </h3>
                                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on {{ \Carbon\Carbon::parse($document->created_at)->format('l, F j, Y') }}</time>
                                    <p class=" text-base font-normal text-gray-500 dark:text-gray-400">{{ $document->comment }}</p>
                                </a>           
                            </li>
                        @endforeach               
                    </ol>
                </p>
            </div>
            <div class="hidden px-8" id="info" role="tabpanel" aria-labelledby="info-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Folder Information</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $folders->name }}</p>
                </p>
            </div>
            <div class="hidden px-8" id="add-subfolder" role="tabpanel" aria-labelledby="add-subfolder-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Add Subfolder</h5>
                    </a>
                    <form class="max-w-md">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" id="name" class="bg-transparent border-2 border-gray-500 dark:border-gray-400 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                            <textarea id="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-500 dark:border-gray-400 rounded focus:ring-blue-500 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:placeholder-gray-200" placeholder="Leave a comment..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                </p>
            </div>
            <div class="hidden px-8" id="add-document" role="tabpanel" aria-labelledby="add-document-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Add Document</h5>
                    </a>
                    <form class="max-w-md">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" id="name" class="bg-transparent border-2 border-gray-500 dark:border-gray-400 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border-2 border-gray-500 dark:border-gray-400 rounded cursor-pointer bg-transparent  dark:text-gray-400 focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                </p>
            </div>
            <div class="hidden px-8" id="edit-folder" role="tabpanel" aria-labelledby="edit-folder-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Edit Folder</h5>
                    </a>
                    <form class="max-w-md">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" id="name" class="bg-transparent border-2 border-gray-500 dark:border-gray-400 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $folders->name }}" required />
                        </div>
                        <div class="mb-5">
                            <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                            <textarea id="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-500 dark:border-gray-400 rounded focus:ring-blue-500 focus:border-blue-500 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $folders->comment }}</textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                </p>
            </div>
            <div class="hidden px-8" id="access-right" role="tabpanel" aria-labelledby="access-right-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Access Right</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Extra small</button>
                </p>
            </div>
            <div class="hidden px-8" id="notification-list" role="tabpanel" aria-labelledby="notification-list-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Notification List</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Extra small</button>
                </p>
            </div>
            <div class="hidden px-8" id="download-folder" role="tabpanel" aria-labelledby="download-folder-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Download Folder</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Extra small</button>
                </p>
            </div>
            <div class="hidden px-8" id="move-folder" role="tabpanel" aria-labelledby="move-folder-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Move Folder</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Extra small</button>
                </p>
            </div>
            <div class="hidden px-8" id="lock-folder" role="tabpanel" aria-labelledby="lock-folder-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Lock Folder</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Extra small</button>
                </p>
            </div>
            <div class="hidden px-8" id="delete-folder" role="tabpanel" aria-labelledby="delete-folder-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight">Delete Folder</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Extra small</button>
                </p>
            </div>
        </div>
    </div>
</div>



