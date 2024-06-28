<div>
    <ol class="inline-flex items-center rtl:space-x-reverse">
        @foreach ($parents as $parent)
            <li class="inline-flex items-center">
                @if (!$loop->last)
                    <p class="inline-flex items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                        {{ $parent->name }}
                    </p>
                @else
                    <div class="flex items-center">
                        <span class=" text-sm font-medium text-gray-500 dark:text-gray-400">{{ $parent->name }}</span>
                    </div>
                @endif
            </li>
            @if (!$loop->last)
                <p class="ms-0.5 me-0.5 text-gray-100">/</p>
            @endif
        @endforeach
    </ol>
</div>