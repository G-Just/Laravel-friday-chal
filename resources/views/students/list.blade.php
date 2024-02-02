<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('User List') }}
        </h2>
    </x-slot>
    <div class="flex justify-center">
        <div class="my-10 w-full overflow-hidden border border-gray-500 rounded-lg shadow-md max-w-[1000px]">
            <table class="w-full text-sm text-left text-gray-500 border-collapse border-gray-100">
                <thead class="bg-white dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-200">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-200">Email</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-200 max-sm:hidden">Role</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-200">Actions</th>
                    </tr>
                </thead>
                <tbody class="border-t border-gray-200 divide-y divide-gray-400">
                    @forelse ($students as $student)
                        <tr class="bg-gray-800">
                            <th
                                class="flex items-center gap-4 px-6 py-4 font-normal text-gray-900 max-sm:px-2 max-sm:gap-2">
                                <div class="relative w-10 h-10 max-sm:hidden">
                                    <img class="object-cover object-center w-full h-full rounded-full"
                                        src="https://wallpapers.com/images/hd/basic-default-pfp-pxi77qv5o0zuz8j3.jpg"
                                        alt="" />
                                    <span
                                        class="absolute bottom-0 right-0 w-2 h-2 bg-green-400 rounded-full ring ring-white"></span>
                                </div>
                                <p class="font-medium text-gray-200">{{ $student->name }} {{ $student->lname }}</p>
                            </th>
                            <td class="px-6 py-4 max-sm:px-2">
                                <div class="text-sm">
                                    <div class="text-gray-200">{{ $student->email }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 max-sm:hidden">
                                <p class="text-gray-200">
                                    @if ($student->admin)
                                        <p>Admin</p>
                                    @else
                                        <p>Student</p>
                                    @endif
                                </p>
                            </td>
                            <td class="px-6 py-4 max-sm:px-2">
                                <div class="flex justify-end gap-4">
                                    <a x-data="{ tooltip: 'Delete' }" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                            x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </a>
                                    <a x-data="{ tooltip: 'Edit' }" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                            x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </x-guest-layout>
