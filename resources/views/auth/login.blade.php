<x-guest-layout>
    <x-auth-card>
      
       
        <div class="place-items-center ">
        <x-slot name="logo" >
            <img   src="{{ asset('img/bps.svg') }}" class=" w-1/5 mx-auto my-2">
            <img  class="py-2 px-16" src="{{ asset('img/head_bps.svg') }}" alt="">
        </x-slot>
        </div>
        

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h1 class="px-2 py-2 block-inline text-center text-2xl font-bold">Silahkan Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="">
            <!-- Email Address -->
            <div class="mt-4 text-m px-14">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full @error('username') is-invalid @enderror" 
                                type="text" 
                                name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4 text-m px-14 ">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4 px-14">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue -600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>

            <div class="flex items-center justify-between px-14 mt-4">
  
                @if (Route::has('register'))
                    <a class="text-sm text-blue-700 hover:font-semibold" href="{{ route('register') }}">
                        {{ __('Create new account') }}
                    </a>
                @endif

                <x-button class="ml-3  ">
                    {{ __('Login') }}
                </x-button>
            </div>
        </div>
        </form>
        <div class="block text-center d-xl-inline-block text-sm pt-4 ">
            
                 <a  class="text-align text-center text-gray-700 hover:text-blue-900" href="https://sulsel.bps.go.id" target="_blank">&copy; Badan Pusat Statistik Provinsi Sulawesi Selatan</a>  
                 <hr>

                 2022. All rights reserved.

        </div>
           
               
    </x-auth-card>
</x-guest-layout>
