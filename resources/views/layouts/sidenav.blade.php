  <nav aria-label="alternative nav">

            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0  md:relative md:h-full   z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-12 px-1  md:px-2 text-center md:text-left">

                        <li class="mr-3 flex-1 md:px-3">
                            <a href="dashboard" class="block py-1 md:py-3 align-middle text-white hover:text-red-200  {{ ($title === 'Dashboard') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}" >
                                <i class="fa-solid fa-gauge pr-0 md:pr-3"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block
                                md:inline-block">Dashboard</span>

                            </a>
                        </li>
                        @if(Auth::user()->peran == 'Admin')
                        <li class="mr-3 flex-1 md:px-3">
                            <a href="tambah_kegiatan" class="block py-1 md:py-3 align-middle text-white hover:text-red-200 {{ ($title === 'Tambah Kegiatan') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}">
                                <i class="fa-solid fa-list pr-0 md:pr-3"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block
                                md:inline-block">Tambah Kegiatan</span>

                            </a>
                        </li>
                        <li class="mr-3 flex-1 md:ml-3">
                            <a href="tambah_operator" class="block py-1 md:py-3 align-middle text-white no-underline hover:text-red-200 {{ ($title === 'Tambah Operator') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}">
                                <i class="fa-solid fa-person pr-0 md:pr-3 "></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Tambah Operator</span>
                            </a>
                        </li>
                        @elseif(Auth::user()->peran == 'Operator')
                        <li class="mr-3 flex-1 md:ml-3">
                            <a href="#" class="block py-1 md:py-3 align-middle text-white no-underline hover:text-red-200 {{ ($title === 'Tambah Kegiatan') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}">
                                <i class="fa-solid fa-clipboard-list pr-0 md:pr-3"></i>
                                <span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Beri Kegiatan</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 md:ml-3">
                            <a href="#" class="block py-1 md:py-3 pl-0  align-middle text-white no-underline hover:text-red-200 {{ ($title === 'Tambah Kegiatan') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}">
                                <i class="fa-solid fa-address-book pr-0 md:pr-3"></i>
                                <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Daftar Pegawai</span>
                            </a>
                        </li>
                        @elseif(Auth::user()->peran == 'Pegawai')
                    <li class="mr-3 flex-1 md:ml-3">
                        <a href="#" class="block py-1 md:py-3 pl-0  align-middle text-white no-underline hover:text-red-200 {{ ($title === 'Tambah Kegiatan') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Daftar Kegiatan</span>
                        </a> </a>
                        </li>
                    </li>
                    <li class="mr-3 flex-1 md:ml-3">
                        <a href="#" class="block py-1 md:py-3 pl-0  align-middle text-white no-underline hover:text-red-200 {{ ($title === 'Tambah Kegiatan') ? ' border-b-2 border-red-200 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-red-200' }}">
                            <i class="fa-solid fa-star pr-0 md:pr-3"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Angka Kredit</span>
                        </a>
                    </li>
                    @endif
                    </ul>
                </div>


            </div>

        </nav>
