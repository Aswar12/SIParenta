<div>
    <div id="main"
        class="main-content md:pl-52 bg-gray-100 relative  md:absolute md:inset-x-0 md:bottom-0 h-screen md:w-screen md:pb-5 overflow-hidden">

        <div class="bg-gray-800 md:pt-14 pt-6">
            <div class="rounded-tl-2xl bg-gradient-to-r from-blue-800 to-gray-900   px-4 shadow text-xl text-white">
                <h1 class="font-bold   pl-2">Kegiatan</h1>
            </div>
        </div>
        @if($openmodal===1)
        @include('livewire.kegiatan.add')
        @endif
        <div
            class="flex overflow-hidden px-2 md:px-8 flex-wrap md:flex-nowrap pt-8 pb-20 md:pb-0 justify-center md:pt-10">

            <div class="w-full py-2 left-0 overflow-hidden">
                <!--Metric Card-->
                <div class="pl-0   overflow-hidden" id="button">
                    <button wire:click="OpenModal"
                        class=" relative inline-flex justify-between  p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-600 to-blue-500 group-hover:from-cyan-600 group-hover:to-blue-500 hover:text-white">
                        <span
                            class="relative font-semibold  px-3 text-gray-700 py-2 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                            <i class="fa-solid fa-circle-plus"></i> Tambah
                        </span>
                    </button>
                </div>
                <div class="flex flex-col w-full  overflow-hidden bg-white shadow-md rounded-xl border border-gray-200">
                    <div class="inline-block min-w-full">

                        <header class="px-5 py-2 border-b justify-items-center border-gray-100">

                            <h2 class="font-semibold text-center text-gray-800">Kegiatan</h2>
                        </header>
                        <div class="overflow-x-auto shadow-md flex-col">
                            <table class="table-auto w-full flex-col overflow-x-auto overflow-y-auto max-h-4xl  ">
                                <thead
                                    class="text-xs justify-between font-semibold uppercase text-gray-500 bg-gray-100 rounded-lg overflow-hidden ">
                                    <tr class="text-center">
                                        <th class="p-2 w-10 whitespace-nowrap ">
                                            <div class="font-semibold text-center">No</div>
                                        </th>
                                        <th class="p-2 w-48 whitespace-nowrap">
                                            <div class="font-semibold text-center">Kegiatan</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Fungsional</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Satuan</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Volume</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center">Angka Kredit</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap w-10">
                                            <div class="font-semibold text-center">Aksi</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100 ">
                                    <?php $no=0; ?>
                                    @foreach ($kegiatan as $kegiatan )
                                    <?php $no++; ?>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00 py-2 ">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center text-sm">{{ $no }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">{{ $kegiatan->nama_kegiatan }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">{{ $kegiatan->nama_fungsional }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center  ">{{ $kegiatan->satuan_kegiatan }}
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center  ">{{ $kegiatan->vol_kegiatan }}
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-sm text-center">{{ $kegiatan->angka_kredit }}</div>
                                        </td>
                                        <td class="py-0.5 inline-flex  whitespace-nowrap pr-4 ">


                                            <button
                                                class="inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-500 to-blue-700 group-hover:from-blue-500  hover:text-white dark:text-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-800">
                                                <span
                                                    class=" py-1 px-2 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                                                    Edit
                                                </span>
                                            </button>

                                            <button
                                                class=" inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-pink-500 group-hover:from-red-500  hover:text-white dark:text-gray-800 focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800">
                                                <span
                                                    class=" py-1 px-2 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                                                    Hapus
                                                </span>
                                            </button>


                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->


        </div>

    </div>

</div>