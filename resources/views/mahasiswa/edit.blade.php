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

                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                          

                        <span class="mx-3">Edit Data</span>
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


                        <div class="mt-8">
                            <div class="container mx-auto px-4 py-8">
                                <h2 class="text-2xl font-semibold text-gray-700 mb-6">Edit Data Mahasiswa</h2>

                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                                            <div>
                                                <label for="nim"
                                                    class="block text-gray-700 font-medium">NIM</label>
                                                <input type="text" name="nim" id="nim"
                                                    class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:border-indigo-400"
                                                    value="{{ old('nim', $mahasiswa->nim) }}" required>
                                            </div>


                                            <div>
                                                <label for="email"
                                                    class="block text-gray-700 font-medium">Email</label>
                                                <input type="text" name="email" id="email"
                                                    class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:border-indigo-400"
                                                    value="{{ old('email', $mahasiswa->user ? $mahasiswa->user->email : '') }}"
                                                    required>
                                            </div>


                                            <div>
                                                <label for="name"
                                                    class="block text-gray-700 font-medium">Nama</label>
                                                <input type="text" name="name" id="name"
                                                    class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:border-indigo-400"
                                                    value="{{ old('name', $mahasiswa->name) }}" required>
                                            </div>

                                            <div>
                                                <label for="tempat_lahir"
                                                    class="block text-gray-700 font-medium">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                    class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:border-indigo-400"
                                                    value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                                                    required>
                                            </div>

                                            <div>
                                                <label for="tanggal_lahir"
                                                    class="block text-gray-700 font-medium">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:border-indigo-400"
                                                    value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}"
                                                    required>
                                            </div>

                                            <div>
                                                <label for="kelas_id"
                                                    class="block text-gray-700 font-medium">Kelas</label>
                                                <select name="kelas_id" id="kelas_id"
                                                    class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:border-indigo-400">
                                                    @foreach ($kelas as $kelasItem)
                                                        <option value="{{ $kelasItem->id }}"
                                                            {{ $mahasiswa->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                                                            {{ $kelasItem->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-6">
                                            <button type="submit"
                                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg transition-colors">
                                                Simpan Perubahan
                                            </button>
                                        </div>
                                    </form>
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
