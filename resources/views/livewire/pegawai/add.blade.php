<div>
    <dh-component>
        <div class=" bg-gray-600 bg-opacity-20 transition duration-350 ease-in-out   fixed inset-y-0 left-0 mt-14  w-screen h-screen md:w-full md:h-full "
            id="modal">
            <div role="alert" class="container mx-auto w-full h-full md:w-2/3 max-w-lg">
                <div class="relative mb-2 py-4 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <div class="w-full flex justify-start text-gray-600 mb-3">

                    </div>

                    <h1 class="text-gray-800 font-lg font-bold tracking-normal text-center leading-tight ">Masukkan
                        Detail Pegawai </h1>
                    <form>
                        <label for="nama pegawai" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Nama Pegawai</label>
                        <div class="relative mb-2 ">
                            <input id="nama kegiatan" wire:model="nama_pegawai" name="nama_pegawai" type="text"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Masukkan Nama Pegawai" />
                            @error('nama_pegawai') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <label for="fungsional"
                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Pilih Fungsional
                        </label>
                        <div class="relative mb-2">
                            <input id="fungsional" wire:model.debounce.100ms="fungsional_cari" name="fungsional"
                                type="text"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="pilih fungsional" />
                            @error('search') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                            @if(!$fungsional_cari=="")
                            <select id="butir" wire:model.debounce.100ms="fungsional_cari" name="fungsional" type="text"
                                class="  text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="pilih fungsional">

                                @foreach($data as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_fungsional }}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>

                        <label for="username" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Username</label>
                        <div class="relative mb-2">
                            <input id="username" wire:model="username" name="username" type="text"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Masukkan Username" />
                            @error('username') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Email</label>
                        <div class="relative mb-2">
                            <input id="email" wire:model="email" name="email" type="text"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Masukkan email " />
                            @error('email') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <label for="nip" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Nip</label>
                        <div class="relative mb-2">
                            <input id="nip" wire:model="nip" name="nip" type="text"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Masukkan Nip" />
                            @error('nip') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <div class="relative mb-2">
                            <label for="peran" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                Peran</label>
                            <select id="Peran" wire:model="peran" name="peran" type="enum"
                                class=" text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-9 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Pilih Peran">
                                <option value="#">Pilih Peran</option>
                                <option value="Admin">Admin</option>
                                <option value="Operator">Operator</option>
                                <option value="Pegawai">Pegawai</option>

                            </select>
                            @error('peran') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <div class="flex items-center justify-start w-full">
                            <button wire:click.prevent="simpan"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-800 rounded text-white px-8 py-2 text-sm">Simpan</button>
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm"
                                wire:click.prevent="freshinput">Cancel</button>
                        </div>
                        <button
                            class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                            wire:click.prevent="closemodal" aria-label="close modal" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20"
                                height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center" id="button">

        </div>
    </dh-component>
</div>