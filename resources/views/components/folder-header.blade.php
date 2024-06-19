<div>
    <div class="flex items-center gap-x-10">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Folder') }}
        </h2>
        @foreach ($links as $link)
            <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500" href="{{ $link['route'] }}">
                {{ $link['text'] }}
            </a>
        @endforeach
    </div>
</div>
