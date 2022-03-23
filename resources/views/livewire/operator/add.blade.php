<div>
    <dh-component>
        <div class=" bg-gray-600 bg-opacity-20 transition duration-350 ease-in-out   fixed inset-y-0 left-0 mt-14  w-screen h-screen md:w-full md:h-full "
            id="modal" wire:model="add_operator">
            <div role="alert" class="container mx-auto w-full h-full md:w-2/3 max-w-lg">
                <div class="relative py-4 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <div class="w-full flex justify-start text-gray-600 mb-3">

                    </div>
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal text-center leading-tight mb-4">Masukkan Informasi Operator</h1>
                    <label for="nama kegiatan" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                        Nama Operator</label>
                    <input id="nama kegiatan"
                        class="mb-4 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        placeholder="masukkan nama kegiatan" />
                    <label for="fungsional" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                        Username</label>
                    <input id="fungsional"
                        class="mb-4 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        placeholder="Masukkan Username" />

                    <div class="flex items-center justify-start w-full">
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-800 rounded text-white px-8 py-2 text-sm">Submit</button>
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm"
                            wire:click="closemodal">Cancel</button>
                    </div>
                    <button
                        class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                        wire:click="closemodal" aria-label="close modal" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20"
                            height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center" id="button">

        </div>
        <script>
            let modal = document.getElementById("modal");
        function modalHandler(val) {
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }
        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }
        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
        </script>

    </dh-component>
</div>
