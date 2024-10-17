<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <svg class="w-12 h-12 text-indigo-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 9h.01M8.99 9H9m12 3a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM6.6 13a5.5 5.5 0 0 0 10.81 0H6.6Z" />
                        </svg>

                        <span class="mx-2 text-2xl font-semibold text-white">MahaData</span>
                    </div>
                </div>

                <nav class="mt-10">
                    <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="#">

                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                clip-rule="evenodd" />
                        </svg>


                        <span class="mx-3">Profil</span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                        <div class="relative mx-4 lg:mx-0">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </svg>
                            </span>

                            <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600"
                                type="text" placeholder="Search">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full"
                                    src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                    alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                                style="display: none;">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>

                                <a href="/logout"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>


                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">


                        <h3 class="text-3xl font-medium text-gray-700">
                            Selamat Datang, {{ $mahasiswa->name }}
                        </h3>



                        <div class="mt-8">
                            <div class="flex flex-wrap -mx-4 sm:-mx-6">
                                <div class="w-full px-4 sm:w-1/2 xl:w-1/3">
                                    @if ($mahasiswa)
                                        <div
                                            class="bg-white shadow-lg rounded-lg p-4 sm:p-6 hover:shadow-2xl hover:border-indigo-500 border border-gray-200">


                                            <div class="flex justify-center mb-4 sm:mb-6">
                                                <img class="w-20 h-20 sm:w-24 sm:h-24 rounded-full shadow-lg"
                                                    src="https://ui-avatars.com/api/?name={{ urlencode($mahasiswa->name) }}&background=4F46E5&color=fff&size=128"
                                                    alt="Avatar">
                                            </div>

                                            <h4
                                                class="text-lg sm:text-xl font-semibold text-gray-800 mb-3 sm:mb-4 text-center">
                                                Informasi Pribadi</h4>

                                            <div class="grid grid-cols-2 gap-y-2 sm:gap-y-3">
                                                <div class="text-gray-600 font-semibold">NIM</div>
                                                <div class="text-gray-900">{{ $mahasiswa->nim }}</div>

                                                <div class="text-gray-600 font-semibold">Email</div>
                                                <div class="text-gray-900">
                                                    {{ $mahasiswa->user ? $mahasiswa->user->email : 'Tidak Ada Email' }}
                                                </div>

                                                <div class="text-gray-600 font-semibold">Nama</div>
                                                <div class="text-gray-900">{{ $mahasiswa->name }}</div>

                                                <div class="text-gray-600 font-semibold">Tempat Lahir</div>
                                                <div class="text-gray-900">{{ $mahasiswa->tempat_lahir }}</div>

                                                <div class="text-gray-600 font-semibold">Tanggal Lahir</div>
                                                <div class="text-gray-900">{{ $mahasiswa->tanggal_lahir }}</div>

                                                <div class="text-gray-600 font-semibold">Kelas</div>
                                                <div class="text-gray-900">
                                                    {{ $mahasiswa->kelas ? $mahasiswa->kelas->name : 'Tidak Ada Kelas' }}
                                                </div>
                                            </div>

                                            <div class="mt-4 sm:mt-6 flex flex-col space-y-3 sm:space-y-4">
                                                @if ($mahasiswa->edit)
                                                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 rounded-lg text-center transition-colors duration-200">
                                                        Edit Profil
                                                    </a>
                                                @else
                                                    <button
                                                        class="bg-gray-500 text-white font-bold py-2 rounded-lg text-center cursor-not-allowed"
                                                        disabled>
                                                        Edit Profil
                                                    </button>
                                                @endif
                                                <a href="{{ route('request.create', $mahasiswa->id) }}"
                                                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 rounded-lg text-center transition-colors duration-200">
                                                    Request Edit
                                                </a>
                                            </div>

                                        </div>
                                    @else
                                        <div class="bg-white shadow-lg rounded-lg p-4 sm:p-6 border border-gray-200">
                                            <p class="text-gray-700 text-center">Data mahasiswa tidak ditemukan.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
