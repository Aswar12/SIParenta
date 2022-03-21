<div>
    <div id="main"
        class="main-content md:pl-52 bg-gray-100 relative h-full md:absolute md:inset-x-0 md:bottom-0 md:h-screen md:w-screen md:pb-5 overflow-hidden">

        <div class="bg-gray-800 md:pt-14 pt-6">
            <div class="rounded-tl-2xl bg-gradient-to-r from-blue-800 to-gray-900   px-4 shadow text-xl text-white">
                <h1 class="font-bold   pl-2">Operator</h1>
            </div>
        </div>
        @if($openmodal===1)
        @include('livewire.operator.add')
        @endif


        <div
            class="flex overflow-hidden md:px-8 flex-wrap md:flex-nowrap pt-8 pb-20 md:pb-0 mx-2 md:mx-10 justify-center md:pt-10">

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
                <div class="flex flex-col w-full  overflow-hidden bg-white shadow-lg rounded-xl border border-gray-200">
                    <div class="inline-block min-w-full">

                        <header class="px-5 py-2 border-b justify-items-center border-gray-100">

                            <h2 class="font-semibold text-center text-gray-800">Kegiatan</h2>
                        </header>
                        <div class="overflow-x-auto shadow-md flex-col">
                            <table class="table-auto min-w-full">
                                <thead
                                    class="text-xs font-semibold uppercase text-gray-500 bg-gray-100 rounded-lg overflow-hidden ">
                                    <tr class="text-center">
                                        <th class="p-2 w-48 whitespace-nowrap">
                                            <div class="font-semibold text-center">Kegiatan</div>
                                        </th>
                                        <th class="p-2 w-64 whitespace-nowrap">
                                            <div class="font-semibold text-center">Fungsional</div>
                                        </th>
                                        <th class="p-2 w-80 whitespace-nowrap">
                                            <div class="font-semibold text-center">Volume</div>
                                        </th>
                                        <th class="p-2 w-80 whitespace-nowrap">
                                            <div class="font-semibold text-center">Angka Kredit</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100 ">
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg"
                                                        width="40" height="40" alt="Alex Shatov"></div>
                                                <div class="font-medium text-gray-800">Alex Shatov</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">alexshatov@gmail.com</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-green-500">$2,890.66
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇺🇸</div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-06.jpg"
                                                        width="40" height="40" alt="Philip Harbach"></div>
                                                <div class="font-medium text-gray-800">Philip Harbach</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">philip.h@gmail.com</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-green-500">$2,767.04
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇩🇪</div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-07.jpg"
                                                        width="40" height="40" alt="Mirko Fisuk"></div>
                                                <div class="font-medium text-gray-800">Mirko Fisuk</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">mirkofisuk@gmail.com</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-green-500">$2,996.00
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇫🇷</div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-08.jpg"
                                                        width="40" height="40" alt="Olga Semklo"></div>
                                                <div class="font-medium text-gray-800">Olga Semklo</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">olga.s@cool.design</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-green-500">$1,220.66
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇮🇹</div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-00">
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img
                                                        class="rounded-full"
                                                        src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-09.jpg"
                                                        width="40" height="40" alt="Burak Long"></div>
                                                <div class="font-medium text-gray-800">Burak Long</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">longburak@gmail.com</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium text-green-500">$1,890.66
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-lg text-center">🇬🇧</div>
                                        </td>
                                    </tr>
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