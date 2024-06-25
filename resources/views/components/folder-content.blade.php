<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div>
            <div class="text-gray-900 dark:text-gray-100">
                <div class="flex items-center justify-between">
                    <div class="w-full items-center gap-1 text-gray-700 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:border-gray-500 dark:text-gray-500">
                        <div class="relative">
                            @if($folder->id != 1)
                                @php
                                    $currentFolder = App\Models\Folder::where('id', $folder->id)->first();
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
                                    <a href="{{ route('view-folder', ['folderid' => $folder->fk_folder]) }}" id="hover-svg" class="hidden">
                                        <svg class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8"/>
                                        </svg>
                                    </a>
                                @endif
                            @else
                            <svg class="ml-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19V6a1 1 0 0 1 1-1h4.032a1 1 0 0 1 .768.36l1.9 2.28a1 1 0 0 0 .768.36H16a1 1 0 0 1 1 1v1M3 19l3-8h15l-3 8H3Z"/>
                            </svg>
                            @endif
                        </div>
                        <div class="mr-2 ml-2 inline-block w-0.5 self-stretch bg-neutral-100 dark:bg-white/10"></div>
                        <span>{{ $folder->name }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <button  type="button" data-modal-target="modal-{{ $folder->id }}" data-modal-toggle="modal-{{ $folder->id }}" data-tooltip-target="folder-info" type="button" class="text-gray-700 hover:bg-gray-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:border-gray-500 dark:text-gray-500 dark:hover:text-white dark:focus:ring-gray-800 dark:hover:bg-gray-500">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span class="sr-only">{{ $folder->name }}</span>
                            </button>
                            <div id="folder-info" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Info
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <div id="modal-{{ $folder->id }}" data-modal-placement="top-left" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full max-w-xl">
                                <div class="relative w-full max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5">
                                            <h3 class="text-md font-medium text-gray-900 dark:text-white">
                                                Folder Information
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-{{ $folder->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="px-4 md:px-5 pb-5 space-y-4">
                                            <div class="relative overflow-x-auto">
                                                <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <tbody>
                                                        <tr class="border-b dark:border-gray-700">
                                                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                ID
                                                            </th>
                                                            <td class="px-4">
                                                                {{ $folder->id }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b dark:border-gray-700">
                                                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Name
                                                            </th>
                                                            <td class="px-4">
                                                                {{ $folder->name }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b dark:border-gray-700">
                                                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Owner
                                                            </th>
                                                            <td class="px-4">
                                                                {{ $folder->user->name }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b dark:border-gray-700">
                                                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Created
                                                            </th>
                                                            <td class="px-4">
                                                                {{ $folder->created_at }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b dark:border-gray-700">
                                                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Comment
                                                            </th>
                                                            <td class="px-4">
                                                                {{ $folder->comment }}
                                                            </td>
                                                        </tr>
                                                        <tr class="border-b dark:border-gray-700">
                                                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                Default Access Mode
                                                            </th>
                                                            <td class="px-4">
                                                                All Permission
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($folder->getHeaderLinks() as $link)
                            <div>
                                <button data-modal-target="modal-{{ Str::slug($link['text']) }}" data-modal-toggle="modal-{{ Str::slug($link['text']) }}" data-tooltip-target="{{ Str::slug($link['text']) }}" type="button" class="text-gray-700 hover:bg-gray-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:border-gray-500 dark:text-gray-500 dark:hover:text-white dark:focus:ring-gray-800 dark:hover:bg-gray-500">
                                    @switch($link['text'])
                                        @case('Add Subfolder')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 8H4m8 3.5v5M9.5 14h5M4 6v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z"/>
                                            </svg>
                                            @break
                                        @case('Add Document')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                                            </svg>
                                            @break
                                        @case('Edit Folder')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                            </svg>
                                            @break
                                        @case('Access Right')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18.5A2.493 2.493 0 0 1 7.51 20H7.5a2.468 2.468 0 0 1-2.4-3.154 2.98 2.98 0 0 1-.85-5.274 2.468 2.468 0 0 1 .92-3.182 2.477 2.477 0 0 1 1.876-3.344 2.5 2.5 0 0 1 3.41-1.856A2.5 2.5 0 0 1 12 5.5m0 13v-13m0 13a2.493 2.493 0 0 0 4.49 1.5h.01a2.468 2.468 0 0 0 2.403-3.154 2.98 2.98 0 0 0 .847-5.274 2.468 2.468 0 0 0-.921-3.182 2.477 2.477 0 0 0-1.875-3.344A2.5 2.5 0 0 0 14.5 3 2.5 2.5 0 0 0 12 5.5m-8 5a2.5 2.5 0 0 1 3.48-2.3m-.28 8.551a3 3 0 0 1-2.953-5.185M20 10.5a2.5 2.5 0 0 0-3.481-2.3m.28 8.551a3 3 0 0 0 2.954-5.185"/>
                                            </svg>
                                            @break
                                        @case('Notification List')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
                                            </svg>
                                            @break
                                        @case('Download Folder')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/>
                                            </svg>
                                            @break
                                        @case('Move Folder')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z"/>
                                            </svg>
                                            @break
                                        @case('Lock Folder')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                            </svg>
                                            @break
                                        @case('Delete Folder')
                                            <!-- SVG icon -->
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                            @break
                                    @endswitch
                                    <span class="sr-only">{{ $link['text'] }}</span>
                                </button>
                                 <div id="{{ Str::slug($link['text']) }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    {{ $link['text'] }}
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                                <div id="modal-{{ Str::slug($link['text']) }}" data-modal-placement="top-left" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full max-w-xl">
                                    <div class="relative w-full max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5">
                                                <h3 class="text-md font-medium text-gray-900 dark:text-white">
                                                    {{ $link['text'] }}
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-{{ Str::slug($link['text']) }}">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="px-4 md:px-5 pb-5 space-y-4">
                                                @include('modals.' . Str::slug($link['text']))
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6">
            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                @foreach($folder->children as $folder)
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
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on {{ \Carbon\Carbon::parse($folder->created_at)->format('l, F j, Y') }}</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{ $folder->comment }}</p>
                        </a>           
                    </li>
                @endforeach
                @foreach($folder->documents as $document)
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
        </div>
    </div>
</div>