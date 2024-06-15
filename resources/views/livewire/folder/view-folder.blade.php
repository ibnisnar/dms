@if($folderid)
    <x-slot name="header">
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
            <a href="{{ route('view-folder', ['folderid' => $selectedFolder->id]) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Folder') }}
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
            <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('add-folder', ['folderid' => $selectedFolder->id]) }}">
                Add Subfolder
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('add-document', ['folderid' => $selectedFolder->id]) }}">
                Add Document
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('edit-folder', ['folderid' => $selectedFolder->id]) }}">
                Edit Folder
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('access-right', ['folderid' => $selectedFolder->id]) }}">
                Access Right
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex text-xs items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('notify-list', ['folderid' => $selectedFolder->id]) }}">
                Notification List
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="sm:px-6 lg:px-8">

            <!-- <nav class="flex px-5 py-3 text-gray-700 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
            </nav> -->
            <div class="bg-white px-5 py-3 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
            </div>
            <div class="mt-8 grid grid-cols-4 gap-4">
                <div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="hs-accordion-treeview-root">
                              <div class="hs-accordion-group" data-hs-accordion-always-open="">
                                <!-- 1st Level Accordion -->
                                <div class="hs-accordion active" id="hs-basic-tree-heading-one">
                                  <!-- 1st Level Accordion Heading -->
                                    <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
                                        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-collapse-one">
                                            <svg class="size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                            </svg>
                                        </button>

                                        <div class="grow hs-accordion-selectable hs-accordion-selected:bg-gray-100 dark:hs-accordion-selected:bg-neutral-700 px-1.5 rounded-md cursor-pointer">
                                            <div class="flex items-center gap-x-3">
                                                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path>
                                                </svg>
                                                <div class="grow">
                                                    <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                        assets
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <!-- End 1st Level Accordion Heading -->

                                  <!-- 1st Level Collapse -->
                                  <div id="hs-basic-tree-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-heading-one">
                                    <!-- 2nd Level Accordion Group -->
                                    <div class="hs-accordion-group ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 dark:before:bg-neutral-700" data-hs-accordion-always-open="">
                                      <!-- 2nd Level Nested Accordion -->
                                      <div class="hs-accordion" id="hs-basic-tree-sub-heading-one">
                                        <!-- 2nd Level Accordion Heading -->
                                        <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
                                          <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-sub-collapse-one">
                                            <svg class="size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M5 12h14"></path>
                                              <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                            </svg>
                                          </button>

                                          <div class="grow hs-accordion-selectable hs-accordion-selected:bg-gray-100 dark:hs-accordion-selected:bg-neutral-700 px-1.5 rounded-md cursor-pointer">
                                            <div class="flex items-center gap-x-3">
                                              <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path>
                                              </svg>
                                              <div class="grow">
                                                <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                  css
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- End 2nd Level Accordion Heading -->

                                        <!-- 2nd Level Collapse -->
                                        <div id="hs-basic-tree-sub-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-sub-heading-one">

                                        </div>
                                        <!-- End 2nd Level Collapse -->
                                      </div>
                                      <!-- Ed 2nd Level Nested Accordion -->

                                      <!-- 2nd Level Nested Accordion -->
                                      <div class="hs-accordion" id="hs-basic-tree-sub-heading-two">
                                        <!-- 2nd Level Accordion Heading -->
                                        <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
                                          <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-sub-collapse-two">
                                            <svg class="size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M5 12h14"></path>
                                              <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                            </svg>
                                          </button>

                                          <div class="grow hs-accordion-selectable hs-accordion-selected:bg-gray-100 dark:hs-accordion-selected:bg-neutral-700 px-1.5 rounded-md cursor-pointer">
                                            <div class="flex items-center gap-x-3">
                                              <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path>
                                              </svg>
                                              <div class="grow">
                                                <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                  img
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- End 2nd Level Accordion Heading -->

                                        <!-- 2nd Level Collapse -->
                                        <div id="hs-basic-tree-sub-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-sub-heading-two">
                                        </div>
                                        <!-- End 2nd Level Collapse -->
                                      </div>
                                      <!-- End 2nd Level Nested Accordion -->
                                    </div>
                                    <!-- 2nd Level Accordion Group -->
                                  </div>
                                  <!-- End 1st Level Collapse -->
                                </div>
                                <!-- End 1st Level Accordion -->
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div>
                                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                                    Folder Information
                                </h5>
                                <ul class="flex flex-col">
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            ID
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ $selectedFolder->id }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Owner
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ $selectedFolder->user->name }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Created
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ \Carbon\Carbon::parse($selectedFolder->created_at)->format('l, F j, Y') }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Comment
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ $selectedFolder->comment }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Default Access Mode
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">
                                                @if($selectedFolder->defaultAccess == 0)
                                                    All Permission
                                                @elseif($selectedFolder->defaultAccess == 1)
                                                    Read/Write Permission
                                                @elseif($selectedFolder->defaultAccess == 2)
                                                    Read Permission
                                                @elseif($selectedFolder->defaultAccess == 3)
                                                    No Access
                                                @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Access mode
                                            <!-- <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">99+</span> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-5">
                                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                                    Folder Contents
                                </h5>
                                <div class="relative overflow-x-auto sm:rounded">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        @if($folderid != 1)
                                                            <a href="{{ route('view-folder', ['folderid' => $selectedFolder->fk_folder]) }}">
                                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8"/>
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        Name
                                                    </div>
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Status
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-right">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($selectedFolder->children as $folder)
                                                <tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700">
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center gap-x-3">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h5.532a2 2 0 0 1 1.536.72l1.9 2.28H3V6Zm0 3v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Z" clip-rule="evenodd"/>
                                                            </svg>
                                                            {{ $folder->name }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center gap-x-2">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z"/>
                                                            </svg>
                                                            {{ $folder->children->count() }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="flex justify-end items-center gap-1">
                                                            <a href="{{ route('view-folder', ['folderid' => $folder->id]) }}">
                                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                                </svg>
                                                            </a>                                                   
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-x-3">
                                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z" clip-rule="evenodd"/>
                                                        </svg>
                                                        LPJ/IP
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-x-2">
                                                        <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                            </svg>
                                                            <span class="sr-only">Icon description</span>
                                                        </span>
                                                        Pending Approval
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex justify-end items-center gap-1">
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                            </svg>
                                                        </a>                                             
                                                    </div>
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
        </div>
    </div>
@else
    <x-slot name="header">
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Folder') }}
            </h2>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('add-folder', ['folderid' => $homeFolder->id]) }}">
                Add Subfolder
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('add-document', ['folderid' => $homeFolder->id]) }}">
                Add Document
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('edit-folder', ['folderid' => $homeFolder->id]) }}"">
                Edit Folder
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('access-right', ['folderid' => $homeFolder->id]) }}"">
                Access Right
            </a>
        </div>
        <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ route('notify-list', ['folderid' => $homeFolder->id]) }}"">
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
            <div class="mt-8 grid grid-cols-4 gap-4">
                <div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="hs-accordion-treeview-root">
                              <div class="hs-accordion-group" data-hs-accordion-always-open="">
                                <!-- 1st Level Accordion -->
                                <div class="hs-accordion active" id="hs-basic-tree-heading-one">
                                  <!-- 1st Level Accordion Heading -->
                                    <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
                                        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-collapse-one">
                                            <svg class="size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                            </svg>
                                        </button>

                                        <div class="grow hs-accordion-selectable hs-accordion-selected:bg-gray-100 dark:hs-accordion-selected:bg-neutral-700 px-1.5 rounded-md cursor-pointer">
                                            <div class="flex items-center gap-x-3">
                                                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path>
                                                </svg>
                                                <div class="grow">
                                                    <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                        assets
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <!-- End 1st Level Accordion Heading -->

                                  <!-- 1st Level Collapse -->
                                  <div id="hs-basic-tree-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-heading-one">
                                    <!-- 2nd Level Accordion Group -->
                                    <div class="hs-accordion-group ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 dark:before:bg-neutral-700" data-hs-accordion-always-open="">
                                      <!-- 2nd Level Nested Accordion -->
                                      <div class="hs-accordion" id="hs-basic-tree-sub-heading-one">
                                        <!-- 2nd Level Accordion Heading -->
                                        <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
                                          <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-sub-collapse-one">
                                            <svg class="size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M5 12h14"></path>
                                              <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                            </svg>
                                          </button>

                                          <div class="grow hs-accordion-selectable hs-accordion-selected:bg-gray-100 dark:hs-accordion-selected:bg-neutral-700 px-1.5 rounded-md cursor-pointer">
                                            <div class="flex items-center gap-x-3">
                                              <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path>
                                              </svg>
                                              <div class="grow">
                                                <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                  css
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- End 2nd Level Accordion Heading -->

                                        <!-- 2nd Level Collapse -->
                                        <div id="hs-basic-tree-sub-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-sub-heading-one">

                                        </div>
                                        <!-- End 2nd Level Collapse -->
                                      </div>
                                      <!-- Ed 2nd Level Nested Accordion -->

                                      <!-- 2nd Level Nested Accordion -->
                                      <div class="hs-accordion" id="hs-basic-tree-sub-heading-two">
                                        <!-- 2nd Level Accordion Heading -->
                                        <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
                                          <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-sub-collapse-two">
                                            <svg class="size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M5 12h14"></path>
                                              <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                            </svg>
                                          </button>

                                          <div class="grow hs-accordion-selectable hs-accordion-selected:bg-gray-100 dark:hs-accordion-selected:bg-neutral-700 px-1.5 rounded-md cursor-pointer">
                                            <div class="flex items-center gap-x-3">
                                              <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"></path>
                                              </svg>
                                              <div class="grow">
                                                <span class="text-sm text-gray-800 dark:text-neutral-200">
                                                  img
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- End 2nd Level Accordion Heading -->

                                        <!-- 2nd Level Collapse -->
                                        <div id="hs-basic-tree-sub-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-sub-heading-two">
                                        </div>
                                        <!-- End 2nd Level Collapse -->
                                      </div>
                                      <!-- End 2nd Level Nested Accordion -->
                                    </div>
                                    <!-- 2nd Level Accordion Group -->
                                  </div>
                                  <!-- End 1st Level Collapse -->
                                </div>
                                <!-- End 1st Level Accordion -->
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div>
                                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                                    Folder Information
                                </h5>
                                <ul class="flex flex-col">
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            ID
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ $homeFolder->id }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Owner
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ $homeFolder->user->name }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Created
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ \Carbon\Carbon::parse($homeFolder->created_at)->format('l, F j, Y') }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Comment
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">{{ $homeFolder->comment }}</span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Default Access Mode
                                            <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">
                                                @if($homeFolder->defaultAccess == 0)
                                                    All Permission
                                                @elseif($homeFolder->defaultAccess == 1)
                                                    Read/Write Permission
                                                @elseif($homeFolder->defaultAccess == 2)
                                                    Read Permission
                                                @elseif($homeFolder->defaultAccess == 3)
                                                    No Access
                                                @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2 py-2 px-4 text-sm font-medium border border-gray-200 text-gray-800 -mt-px first:rounded-t first:mt-0 last:rounded-b dark:border-neutral-700 dark:text-white">
                                        <div class="flex justify-between w-full">
                                            Access mode
                                            <!-- <span class="inline-flex items-center py-1 px-2 rounded text-xs font-medium bg-blue-500 text-white">99+</span> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-5">
                                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                                    Folder Contents
                                </h5>
                                <div class="relative overflow-x-auto sm:rounded">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Status
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-right">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($homeFolder->children as $folder)
                                                <tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700">
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center gap-x-3">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h5.532a2 2 0 0 1 1.536.72l1.9 2.28H3V6Zm0 3v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Z" clip-rule="evenodd"/>
                                                            </svg>
                                                            {{ $folder->name }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="flex items-center gap-x-2">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z"/>
                                                            </svg>
                                                            {{ $folder->children->count() }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="flex justify-end items-center gap-1">
                                                            <a href="{{ route('view-folder', ['folderid' => $folder->id]) }}">
                                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                                </svg>
                                                            </a>                                                   
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-x-3">
                                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z" clip-rule="evenodd"/>
                                                        </svg>
                                                        LPJ/IP
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-x-2">
                                                        <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                            </svg>
                                                            <span class="sr-only">Icon description</span>
                                                        </span>
                                                        Pending Approval
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div class="flex justify-end items-center gap-1">
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                                                            </svg>
                                                        </a>
                                                        <a href="">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                            </svg>
                                                        </a>                                             
                                                    </div>
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
        </div>
    </div>
@endif