<div>
    <ol class="inline-flex items-center rtl:space-x-reverse">
        @foreach ($parents as $parent)
            <li class="inline-flex items-center">
                @if (!$loop->last)
                    <a href="{{ route('view-folder', ['folderid' => $parent->id]) }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        {{ $parent->name }}
                    </a>
                @else
                    <div class="flex items-center">
                        <span class=" text-sm font-medium text-gray-500 dark:text-gray-400">{{ $parent->name }}</span>
                    </div>
                @endif
            </li>
            @if (!$loop->last)
                <p class="">/</p>
            @endif
        @endforeach
    </ol>
</div>
