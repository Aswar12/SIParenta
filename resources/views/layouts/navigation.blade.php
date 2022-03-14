<nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

    <div class="px-3 pt-2 flex flex-inline items-center justify-between">
        <div class="inline-flex md:w-1/3 justify-center md:justify-start text-white">
            <a href="#" aria-label="Home" class="w-10 ">
                <img class="place-items-center" src="{{ asset('img/siparenta.png') }}">

            </a>
            <span class="p-2">SIParenta</span>
        </div>

        <div class="flex flex-1 justify-end text-white px-1">

            <div class="relative w-auto ">
                <button onclick="toggleDD('myDropdown')"
                    class="hover:bg-gray-500 rounded drop-button transition-transform text-white pt-1 px-2">Hi,
                    {{
                    Auth::user()->name }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg></button>
                <div id="myDropdown"
                    class="dropdownlist absolute bg-gray-800 text-white right-0 p-2 overflow-auto z-30 invisible">

                    <a href="profil"
                        class="block px-4 p-2 text-sm leading-5 text-white-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">

                        <i class="fa-solid fa-circle-user"></i> Profil
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> {{ __('Logout') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>

</nav>