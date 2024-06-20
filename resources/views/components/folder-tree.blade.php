<div class="hs-accordion" id="hs-basic-tree-heading-{{ $folder->id }}">
    <div class="hs-accordion-heading py-0.5 flex items-center gap-x-0.5 w-full">
        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-controls="hs-basic-tree-collapse-{{ $folder->id }}">
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
                    <a href="{{ route('view-folder', ['folderid' => $folder->id]) }}" class="text-sm text-gray-800 dark:text-neutral-200">
                        {{ $folder->name }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if($folder->children->isNotEmpty())
        <div id="hs-basic-tree-collapse-{{ $folder->id }}" class="hidden hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-tree-heading-{{ $folder->id }}">
            <div class="hs-accordion-group ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 dark:before:bg-neutral-700">
                @foreach($folder->children as $child)
                    <x-folder-tree :folder="$child"/>
                @endforeach
            </div>
        </div>
    @endif
</div>
