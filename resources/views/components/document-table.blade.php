<tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700 cursor-pointer hover:bg-gray-100 hover:dark:bg-gray-800" data-href="{{ route('view-document', ['docid' => $document->id]) }}">
    <td class="px-6 py-4">
        <div class="flex items-center gap-x-3">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z" clip-rule="evenodd"/>
            </svg>
            <div>
                <p class="font-bold text-md">
                    {{ $document->name }}
                </p>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ $document->comment }}</p>
                <p class="mt-1 text-xs italic text-gray-500 dark:text-gray-400">Owner : <span class="font-bold">{{ $document->user->name }}</span>, Created : <span class="font-bold">{{ \Carbon\Carbon::parse($document->created_at)->format('l, F j, Y') }}</span></p>
            </div>
        </div>
    </td>
    <td class="px-6 py-4">
        <div class="flex justify-end items-center gap-x-2">
            <span class="inline-flex items-center justify-center w-6 h-6 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Icon description</span>
            </span>
            Pending Approval
        </div>
    </td>
</tr>