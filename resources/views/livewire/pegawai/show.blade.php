<div>
    <div id="main"
        class="main-content md:pl-52 bg-gray-100 relative  md:absolute md:inset-x-0 md:bottom-0 h-screen md:w-screen md:pb-5 overflow-hidden">

        <div class="bg-gray-800 md:pt-14 pt-6">
            <div class="rounded-tl-2xl bg-gradient-to-r from-blue-800 to-gray-900   px-4 shadow text-xl text-white">
                <h1 class="font-bold   pl-2">Pegawai</h1>
            </div>
        </div>
        @if($isOpen)
        @include('livewire.pegawai.add')
        @endif
        <div
            class="flex overflow-hidden px-2 md:px-8 flex-wrap md:flex-nowrap pt-8 pb-20 md:pb-0 justify-center md:pt-10">

            <div class="w-full py-2 left-0 overflow-hidden">
                <!--Metric Card-->

                <div class="pl-0 max-h-10 overflow-hidden w-96 mb-2">
                    <div class="w-96 inline-flex">
                        <button wire:click.prevent="$set('isOpen', true)"
                            class=" inline-flex justify-between justify-items-center  p-0.5 mb-2  overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-indigo-700 to-blue-700 group-hover:from-indigo-700 group-hover:to-blue-700 hover:text-white">
                            <span
                                class="flex font-semibold place-items-center overflow-hidden px-1.5 text-gray-700 py-2 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0 hover:text-white">
                                <i class="fa-solid fa-circle-plus text-gray-600 pr-0.5"></i> Tambah
                            </span>
                        </button>
                        <div class="flex border-2 rounded mb-2">
                            <input id="satuan_kegiatan" wire:model="search" name="search_kegiatan" type="text"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-30   text-sm border-gray-300 rounded border"
                                placeholder="Cari Pegawai" />
                            <button
                                class=" justify-center px-3 border focus:border focus:border-indigo-700 font-normal w-30  bg-white text-sm border-gray-300 rounded">
                                <i class="fa-solid fa-search text-gray-600"></i>
                            </button>
                        </div>
                    </div>


                </div>
                <div class="flex flex-col w-full  overflow-hidden bg-white shadow-md rounded-xl border border-gray-200">
                    @if (session()->has('message'))

                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b w-full text-teal-900 px-4 py-3 shadow-md "
                        role="alert">
                        <div class="flex w-full justify-center">
                            <div class="text-center">
                                <p class="text-sm font-semibold">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="inline-block min-w-full">

                        <header class="px-5 py-2 border-b justify-items-center border-gray-100">

                            <h2 class="font-semibold text-center text-gray-800">Pegawai</h2>
                        </header>
                        <div class="overflow-x-auto shadow-md flex-col">
                            <table class="table-auto w-full flex-col overflow-x-auto overflow-y-auto max-h-4xl  ">
                                <thead
                                    class="text-xs justify-between font-semibold uppercase text-gray-500 bg-gray-100 rounded-lg overflow-hidden ">
                                    <tr class="text-center">
                                        <th class="p-2 w-10 whitespace-nowrap ">
                                            <div class="font-semibold text-center">No</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Nama</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Username</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Email</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Nip</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">peran</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Fungsional</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap w-10">
                                            <div class="font-semibold text-center">Aksi</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100 ">
                                    @php $no=0; @endphp
                                    @foreach ($pegawais as $index => $pegawai)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00 py-2 ">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center text-sm">{{ $no }}
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">{{ $pegawai->name }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">{{ $pegawai->username }}</div>

                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center  ">{{ $pegawai->email }}</div>

                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center  ">{{ $pegawai->nip }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center  ">{{ $pegawai->peran}}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-sm text-center">{{ $pegawai->fungsional->nama_fungsional }}
                                            </div>
                                        </td>
                                        <td class=" inline-flex  whitespace-nowrap pr-4 pt-2  ">
                                            <button wire:click="edit({{ $pegawai->id }})"
                                                class="inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-500 to-blue-700 group-hover:from-blue-500  hover:text-white dark:text-gray-800 focus:ring-2 focus:outline-none focus:ring-blue-200">
                                                <span
                                                    class=" py-1 px-1 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                                                    <i
                                                        class="fa-solid fa-pen-to-square mr-1 text-gray-600 hover:text-white"></i>Edit
                                                </span>
                                            </button>
                                            <button wire:click="deleteConfirmation({{ $pegawai->id }})"
                                                class=" inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-pink-500 group-hover:from-red-500  hover:text-white dark:text-gray-800 focus:ring-2 focus:outline-none focus:ring-red-200">
                                                <span
                                                    class=" py-1 px-1 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                                                    <i
                                                        class="fa-solid fa-trash-can mr-1 text-gray-600 hover:text-white"></i>Hapus
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-2 p-2">
                                {{ $pegawais->links('pagination::tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->


            </div>

        </div>

    </div>
</div>