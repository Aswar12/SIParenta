<div>
    <dh-component>
        <div class=" bg-gray-600 bg-opacity-20 transition duration-350 ease-in-out   fixed inset-y-0 left-0 mt-14  w-screen h-screen md:w-full md:h-full "
            id="modal">
            <div role="alert" class="container mx-auto w-full h-full md:w-2/3 max-w-lg">
                <div class="relative mb-4 py-4 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <div class="w-full flex justify-start text-gray-600 mb-3">

                    </div>

                    <h1 class="text-gray-800 font-lg font-bold tracking-normal text-center leading-tight ">Masukkan
                        Detail Kegiatan </h1>
                    <form>
                        <label for="nama kegiatan"
                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Nama kegiatan</label>
                        <div class="relative mb-4 ">
                            <input id="nama kegiatan" wire:model="nama_kegiatan" name="nama_kegiatan" type="text"
                                class=" mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="masukkan nama kegiatan" />
                            @error('nama_kegiatan') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <label for="fungsional"
                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Butir
                            Kegiatan</label>
                        <div class="relative mb-4">
                            <input id="butir" wire:model.debounce.100ms="butir_cari" name="butir" type="text"
                                class=" mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="pilih butir kegiatan" />
                            @error('search') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                            @if(!$butir_cari=="")
                            <select id="butir" wire:model.debounce.100ms="butir_cari" name="butir" type="text"
                                class="  text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="pilih fungsional">

                                @foreach($data as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_butir }}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>
                        <label for="satuan_kegiatan"
                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Satuan Kegiatan</label>
                        <div class="relative mb-4">
                            <input id="satuan_kegiatan" wire:model="satuan_kegiatan" name="satuan_kegiatan" type="text"
                                class=" mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Masukkan Satuan Kegiatan " />
                            @error('satuan_kegiatan') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <label for="vol_kegiatan" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                            Volume Kegiatan</label>
                        <div class="relative mb-4">
                            <input id="vol_kegiatan" wire:model="vol_kegiatan" name="volume kegiatan" type="text"
                                class=" mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="Masukkan Volume Kegiatan " />
                            @error('vol_kegiatan') <span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                        </div>
                        <div class="flex items-center justify-start w-full">
                            <button wire:click.prevent="simpan"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-800 rounded text-white px-8 py-2 text-sm">
                                <i class="fa-solid fa-floppy-disk pl-1 text-md"></i> Simpan</button>
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm"
                                wire:click.prevent="freshinput"><i
                                    class=" fa-solid fa-trash-can-xmark pl-1"></i>Cancel</button>
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