<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                            <path
                                d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z" />
                        </svg>


                        <span class="mx-3">Dashboard</span>
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
                        <h3 class="text-3xl font-medium text-gray-700">Dashboard Kaprodi</h3>

                        <div class="mt-4">
                            <div class="flex flex-wrap -mx-6">
                                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                        <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
                                            <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700">{{ $jumlahDosen }}</h4>
                                            <div class="text-gray-500">Dosen</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                        <div class="p-3 bg-orange-600 bg-opacity-75 rounded-full">
                                            <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700">{{ $jumlahMahasiswa }}
                                            </h4>
                                            <div class="text-gray-500">Mahasiswa</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                        <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                            <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700">{{ $jumlahKelas }}</h4>
                                            <div class="text-gray-500">Kelas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col mt-8">
                            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="flex flex-wrap">
                                    <div class="w-full mb-4">
                                        <div class="flex items-center justify-between mb-4">
                                            <h4 class="text-lg font-semibold text-gray-600">Daftar Dosen</h4>
                                            <button
                                                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-500"><a
                                                    href="{{ route('dosen.create') }}">Tambah Dosen</a>
                                            </button>
                                        </div>

                                        <div
                                            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow-lg sm:rounded-lg bg-white">

                                            <table class="min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            NIP</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Nama Dosen</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Kode Dosen</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Kelas Yang Diampu</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Status</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    @foreach ($dosen as $dosen)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $dosen->nip }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $dosen->name }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $dosen->kode_dosen }}</td>
                                                            <td
                                                                class="px-6 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $dosen->kelas ? $dosen->kelas->name : '' }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $dosen->kelas_id ? 'Dosen Wali' : 'Dosen Biasa' }}
                                                            </td>
                                                            <td class="">
                                                                <a href="{{ route('dosen.edit', $dosen->id) }}"
                                                                    class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-500">Edit</a>

                                                                <form id="delete-form-{{ $dosen->id }}"
                                                                    action="{{ route('dosen.destroy', $dosen->id) }}"
                                                                    method="POST" class="inline-block ml-4">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button"
                                                                        class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-500"
                                                                        onclick="confirmDelete({{ $dosen->id }})">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col mt-8">
                            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                <div class="flex flex-wrap">
                                    
                                    <div class="w-full mb-4">
                                        <div class="flex items-center justify-between mb-4">
                                            <h4 class="text-lg font-semibold text-gray-600">Daftar Kelas</h4>
                                            <button
                                                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-500">
                                                <a href="{{ route('kelas.create') }}">Tambah Kelas</a>
                                            </button>
                                        </div>
                                        <div
                                            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow-lg sm:rounded-lg bg-white">
                                            <table class="min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            No</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Nama Kelas</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Jumlah Mahasiswa</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Dosen Wali</th>
                                                        <th
                                                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                            Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    @foreach ($kelas as $kelas)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $kelas->id }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $kelas->name }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                {{ $kelas->jumlah }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                                @if ($kelas->dosen)
                                                                    {{ $kelas->dosen->name }}
                                                                @else
                                                                    Tidak ada Dosen Wali
                                                                @endif
                                                            </td>

                                                            <td class="">
                                                                <a href="{{ route('kelas.edit', $kelas->id) }}"
                                                                    class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-500">Edit</a>

                                                                <form id="delete-form-{{ $kelas->id }}"
                                                                    action="{{ route('kelas.destroy', $kelas->id) }}"
                                                                    method="POST" class="inline-block ml-4">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button"
                                                                        class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-500"
                                                                        onclick="confirmDelete({{ $kelas->id }})">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        @if (session('success'))
                            <script>
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: '{{ session('success') }}',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            </script>
                        @endif


                        <script>
                            function confirmDelete(id) {
                                Swal.fire({
                                    title: "Apakah Anda yakin?",
                                    text: "Data ini akan dihapus secara permanen!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Ya, hapus ini!"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('delete-form-' + id).submit();
                                        Swal.fire({
                                            title: "Terhapus!",
                                            text: "Data mahasiswa telah terhapus",
                                            icon: "success"
                                        });
                                    }
                                });
                            }
                        </script>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
