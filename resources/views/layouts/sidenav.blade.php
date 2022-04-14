<nav aria-label="alternative nav">

    <div
        class="bg-gray-800 shadow-xl h-16 fixed bottom-0  md:absolute md:inset-y-0 md:left-0 md:h-full justify-items-center  z-10 w-full md:w-52 md:p-3 content-center">

        <div
            class=" md:mt-2 md:relative md:left-0 md:top-0 content-center md:content-start text-left justify-items-center justify-between">
            <ul class="list-reset flex flex-row md:flex-col  md:py-8 px-1  md:px-2 text-center md:text-left">

                <li class="mt-2 mr-1 flex-1 ">
                    <a href="dashboard"
                        class="block md:py-3 align-middle text-white hover:text-blue-300  {{ ($title === 'Dashboard') ? ' border-b-2 text-blue-300 border-blue-300 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-blue-300' }}">
                        <i class="fa-solid fa-gauge pr-0 md:pr-3"></i><span class=" md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block
                                md:inline-block">Dashboard</span>

                    </a>
                </li>
                {{-- @if(Auth::user()->peran == 'Admin') --}}
                <li class="mr-1 mt-2 flex-1 ">
                    <a href="kegiatan"
                        class="block  md:py-3 align-middle text-white hover:text-blue-300 {{ ($title === 'Kegiatan') ? ' text-blue-300 border-b-2 border-blue-300 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-blue-300' }}">
                        <i class="fa-solid fa-list pr-0 md:pr-3"></i><span class=" md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block
                                md:inline-block">Kegiatan</span>

                    </a>
                </li>
                <li class="mr-1 mt-2 flex-1 ">
                    <a href="pegawai"
                        class="block  md:py-3 align-middle text-white no-underline hover:text-blue-300 {{ ($title === 'Pegawai') ? ' text-blue-300 border-b-2 border-blue-300 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-blue-300' }}">
                        <i class="fa-solid fa-person pr-0 md:pr-3 "></i><span
                            class=" md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">
                            Pegawai</span>
                    </a>
                </li>
                {{-- @elseif(Auth::user()->peran == 'Operator') --}}
                <li class="mr-1 mt-2 flex-1 ">
                    <a href="beri_kegiatan"
                        class="block  md:py-3 align-middle text-white no-underline hover:text-blue-300 {{ ($title === 'Beri Kegiatan') ? 'text-blue-300 border-b-2 border-blue-300 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-blue-300' }}">
                        <i class="fa-solid fa-clipboard-list pr-0 md:pr-3"></i>
                        <span class=" md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Beri
                            Kegiatan</span>
                    </a>
                </li>
                <li class="mr-1 mt-2 flex-1 ">
                    <a href="daftar_pegawai"
                        class="block  md:py-3 pl-0  align-middle text-white no-underline hover:text-blue-300 {{ ($title === 'Daftar Pegawai') ? 'text-blue-300 border-b-2 border-blue-300 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-blue-300' }}">
                        <i class="fa-solid fa-address-book pr-0 md:pr-3"></i>
                        <span
                            class=" md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Daftar
                            Pegawai</span>
                    </a>
                </li>
                {{-- @elseif(Auth::user()->peran == 'Pegawai') --}}
                <li class="mr-1 mt-2 flex-1 ">
                    <a href="daftar_kegiatan"
                        class="block  md:py-3 pl-0  align-middle text-white no-underline hover:text-blue-300 {{ ($title === 'Daftar Kegiatan') ? 'text-blue-300 border-b-2 border-blue-300 hover:border-gray-800' : 'border-b-2 border-gray-800 hover:border-blue-300' }}">
                        <i class="fas fa-tasks pr-0 md:pr-3"></i>
                        <span
                            class=" md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Daftar
                            Kegiatan</span>
                    </a> </a>
                </li>
                {{-- @endif --}}
            </ul>
        </div>
    </div>
</nav>