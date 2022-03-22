<div>
    <div id="main"
        class="main-content md:pl-52 bg-gray-100 relative h-full md:absolute md:inset-x-0 md:bottom-0 md:h-screen md:w-screen md:pb-5 overflow-hidden">

        <div class="bg-gray-800 md:pt-14 pt-6">
            <div class="rounded-tl-2xl bg-gradient-to-r from-blue-800 to-gray-900   px-4 shadow text-xl text-white">
                <h1 class="font-bold   pl-2">Dashboard</h1>
            </div>
        </div>
        <div class="flex flex-wrap md:flex-nowrap pt-8 pb-20 md:pb-0 md:mx-3 justify-center md:pt-20">
            <div class="w-full p-3 ml-12">
                <!--Metric Card-->
                <div class="flex flex-col max-w-2xl mx-auto bg-white shadow-lg rounded-xl border border-gray-200">
                    <div class="inline-block">
                        <header class="px-5 py-2 border-b border-gray-100">
                            <h2 class="font-semibold text-center text-gray-800">Daftar Kegiatan</h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto min-w-full ">
                                <table class="table-auto w-full flex-col   ">
                                    <thead
                                        class="text-xs justify-between font-semibold uppercase text-gray-500 bg-gray-100 rounded-lg overflow-hidden ">
                                        <tr class="text-center">
                                            <th class="w-10 whitespace-nowrap ">
                                                <div class="font-semibold text-center">No</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
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
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100 ">
                                        <?php $no=0; ?>
                                        @foreach ($kegiatan as $kegiatan )
                                        <?php $no++; ?>
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
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
            <div class="w-full p-3">
                <!--Metric Card-->
                <div class="flex flex-col max-w-2xl mx-auto bg-white shadow-lg rounded-xl border border-gray-200">
                    <div class="inline-block">
                        <header class="px-5 py-2 border-b border-gray-100">
                            <h2 class="font-semibold text-center text-gray-800">5 Pegawai Angka Kredit
                                Tertinggi/Terendah</h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto flex-col">
                                <table class="table-auto w-full flex-col   ">
                                    <thead
                                        class="text-xs justify-between font-semibold uppercase text-gray-500 bg-gray-100 rounded-lg overflow-hidden ">
                                        <tr class="text-center">
                                            <th class="w-10 whitespace-nowrap ">
                                                <div class="font-semibold text-center">No</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-center">Nama Pegawai</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-center">Fungsional</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-center">Angka Kredit</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100 ">
                                        <?php $i=0; ?>
                                        @foreach ($pegawai as $pegawai )
                                        <?php $i++; ?>
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-center text-sm">{{ $i }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-center">{{ $pegawai->name }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-center">{{ $pegawai->nama_fungsional }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-sm text-center">{{ $pegawai->angka_kredit }}</div>
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
            <!--/Metric Card-->
        </div>
    </div>
</div>