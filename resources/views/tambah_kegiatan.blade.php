<x-app-layout title="Tambah Kegiatan">
    <section>
        <div id="main"
            class="main-content md:pl-52 bg-gray-100 absolute inset-x-0 bottom-0 h-screen w-screen md:pb-5 overflow-hidden">

            <div class="bg-gray-800 pt-16">
                <div
                    class="rounded-tl-2xl bg-gradient-to-r from-gray-800 to-blue-900 p-2  px-4 shadow text-xl text-white">
                    <h1 class="font-bold pl-2">Tambah Kegiatan</h1>
                </div>
            </div>
            <div class="flex flex-wrap pb-20 md:pb-0 md:mx-6 md:pt-20 ">
                <div class="w-full  xl:w-1/2 px-6  pt-6">
                    <!--Metric Card-->
                    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200 flex-col">
                        <header class="px-5 py-4 border-b border-gray-100">
                            <h2 class="font-semibold text-center text-gray-800">5 Pegawai Angka Kredit
                                Tertinggi/Terendah </h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto  flex-row flex-no-wrap ">
                                <table class="table-auto w-full flex-col ">
                                    <thead class="text-xs font-semibold uppercase text-gray-500 bg-gray-100">
                                        <tr class="flex-col flex-no wrap">
                                            <th class="p-2 whitespace-nowrap flex-col ">
                                                <div class="font-semibold text-left">Name</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Email</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Spent</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-center">Country</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100 ">
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-00 flex-col flex-no wrap">
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
                                                <div class="text-left font-medium text-green-500">$2,890.66</div>
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
                                                <div class="text-left font-medium text-green-500">$2,767.04</div>
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
                                                <div class="text-left font-medium text-green-500">$2,996.00</div>
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
                                                <div class="text-left font-medium text-green-500">$1,220.66</div>
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
                                                <div class="text-left font-medium text-green-500">$1,890.66</div>
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
                    <!--/Metric Card-->
                </div>




            </div>
    </section>
</x-app-layout>