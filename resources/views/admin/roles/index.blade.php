<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full">
        <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4" x-data="app">
            <div class="flex flex-col justify-self-start h-full">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <div class="font-semibold text-gray-800">Manage Carts</div>
                    </header>

                    <div class="overflow-x-auto p-3">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2">
                                    <div class="font-semibold text-left">Product Name</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-left">Quantity</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-left">Total</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="text-sm divide-y divide-gray-100">
                            <!-- record 1 -->
                            <tr>
                                <td class="p-2">
                                    <div class="font-medium text-gray-800">
                                        Samsung Galaxy Note 4
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">1</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left font-medium text-green-500">
                                        RM 2,890.66
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <button>
                                            <svg class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1"
                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-end">
                        <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                        <input type="hidden" class="border border-black bg-gray-50" x-model="selected"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
