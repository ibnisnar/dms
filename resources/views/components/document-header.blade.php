<div>
    <div class="flex justify-between">
        <div class="flex items-center gap-x-10">
            <a href="{{ route('view-document', ['docid' => $docid]) }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Document') }}
            </a>
            @foreach ($links as $link)
                <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ $link['route'] }}">
                    {{ $link['text'] }}
                </a>
            @endforeach            
        </div>
        <div class="w-px self-stretch bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400"></div>
        <div class="flex gap-x-8">
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">
                Download Folder
            </a>
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">
                Move Folder
            </a>
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">
                Lock Folder
            </a>
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">
                Delete Folder
            </a>
        </div>
    </div>
</div>
