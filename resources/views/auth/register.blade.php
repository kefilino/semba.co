<x-guest-layout>
    <div class="container rounded-xl bg-white text-gray-600 p-6 sm:p-12 mx-auto my-auto w-auto lg:w-1/2">
        <x-jet-validation-errors class="mb-4" />

        <form class="flex flex-wrap lg:space-x-4 items-start justify-center w-auto" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="w-full xl:w-1/3">
                <div>
                    <x-jet-label for="name" value="{{ __('Nama') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-1 sm:mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-1 sm:mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-1 sm:mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
            <div class="w-full xl:w-7/12">
                <div class="mt-1 sm:mt-0">
                    <x-jet-label for="nik" value="{{ __('Nomor Induk Kependudukan') }}" />
                    <x-jet-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required />
                </div>

                <div class="mt-1 sm:mt-4">
                    <x-jet-label for="kk" value="{{ __('Nomor Kartu Keluarga') }}" />
                    <x-jet-input id="kk" class="block mt-1 w-full" type="text" name="kk" :value="old('kk')" required />
                </div>

                <div class="mt-1 sm:mt-4">
                    <x-jet-label for="address" value="{{ __('Alamat') }}" />
                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                </div>

                <div class="mt-1 sm:mt-4">
                    <x-jet-label for="zipcode" value="{{ __('Kode Pos') }}" />
                    <x-jet-input id="zipcode" class="block mt-1 w-full" type="text" name="zipcode" :value="old('zipcode')" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Sudah punya akun?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>