<tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700 cursor-pointer hover:bg-gray-100 hover:dark:bg-gray-800" data-href="{{ route('view-folder', ['folderid' => $folder->id]) }}">
    <td class="px-6 py-4">
        <div class="flex items-center gap-x-3">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h5.532a2 2 0 0 1 1.536.72l1.9 2.28H3V6Zm0 3v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Z" clip-rule="evenodd"/>
            </svg>
            <div>
                <p class="font-bold text-md">
                    {{ $folder->name }}
                </p>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ $folder->comment }}</p>
                <p class="mt-2 text-xs italic text-gray-500 dark:text-gray-400">Owner : <span class="font-bold">{{ $folder->user->name }}</span>, Created : <span class="font-bold">{{ \Carbon\Carbon::parse($folder->created_at)->format('l, F j, Y') }}</span></p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="flex justify-end items-center gap-x-2">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z"/>
            </svg>
            {{ $folder->children->count() }}
        </div>
    </td>
</tr>