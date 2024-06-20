<x-slot name="header">
    <x-folder-header :folderid="$selectedFolder->id" :links="$selectedFolder->getHeaderLinks()"/>
</x-slot>

<div class="py-10">
    <div class="sm:px-6 lg:px-8">

        <x-folder-breadcrumb :parents="$selectedFolder->parents()"/>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
                    <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        Access Rights
                    </h5>
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <form wire:submit.prevent="setOwner">
                                <div class="mb-5">                            
                                    <label for="owner" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Set Owner</label>
                                    <select wire:model="owner" id="owner" data-hs-select='{
                                      "hasSearch": true,
                                      "searchPlaceholder": "Search...",
                                      "searchClasses": "block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 py-2 px-3",
                                      "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "placeholder": "Select user",
                                      "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-neutral-200\" data-title></span></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative p-2.5 pe-9 flex text-nowrap w-full cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 text-start before:absolute before:inset-0 before:z-[1] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-200 hover:dark:bg-gray-800 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-neutral-200\" data-title></div></div></div>",
                                      "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                    }' class="hidden">
                                      <option value="">Choose</option>
                                      @foreach($users as $user)
                                          <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                          </option>
                                      @endforeach
                                    </select>
                                </div>
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </form>
                        </div>

                        <div class="space-y-4">
                            <form wire:submit.prevent="setDefaultAccess">
                                <div class="mb-5">
                                    <label for="defaultAccess" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default Access Mode</label>
                                    <select id="defaultAccess" wire:model="defaultAccess" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="0">All Permission</option>
                                        <option value="1">Read/Write Permission</option>
                                        <option value="2">Read Permission</option>
                                        <option value="3">No Access</option>
                                    </select>
                                </div>
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </form>
                            <form wire:submit.prevent="addUserGroupAccessMode">
                                <div class="mb-5">                            
                                    <label for="userAccess" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                                    <select wire:model="userAccess" id="userAccess" data-hs-select='{
                                      "hasSearch": true,
                                      "searchPlaceholder": "Search...",
                                      "searchClasses": "block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 py-2 px-3",
                                      "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "placeholder": "Select user",
                                      "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-neutral-200\" data-title></span></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative p-2.5 pe-9 flex text-nowrap w-full cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 text-start before:absolute before:inset-0 before:z-[1] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-200 hover:dark:bg-gray-800 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",
                                      "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-neutral-200\" data-title></div></div></div>",
                                      "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                    }' class="hidden">
                                        <option value="">Choose</option>
                                        @if($users->isEmpty())
                                            <option selected disabled>
                                                No User Found
                                            </option>
                                        @else
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                        
                                    </select>
                                </div>
                                <x-primary-button>{{ __('Add') }}</x-primary-button>
                            </form>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">List User/Group Access</label>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
</div>
