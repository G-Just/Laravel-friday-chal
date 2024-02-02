<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Create new user') }}
        </h2>
    </x-slot>
    <div
        class="flex flex-col items-center justify-start min-h-screen pt-4 bg-gray-100 sm:justify-start sm:pt-12 dark:bg-gray-900">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-gray-800 sm:rounded-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block w-full mt-1 placeholder:text-gray-700" type="text"
                        name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    <x-input-label for="lname" :value="__('Last Name')" />
                    <x-text-input id="lname" class="block w-full mt-1 placeholder:text-gray-700" type="text"
                        name="lname" :value="old('lname')" required autofocus autocomplete="lname" placeholder="Doe" />
                    <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full mt-1 placeholder:text-gray-700" type="email"
                        name="email" :value="old('email')" required autocomplete="username"
                        placeholder="johndoe@gmail.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block w-full mt-1 placeholder:text-gray-700" type="password"
                        name="password" required autocomplete="new-password" placeholder="*********" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block w-full mt-1 placeholder:text-gray-700"
                        type="password" name="password_confirmation" required autocomplete="new-password"
                        placeholder="*********" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-6">

                    <x-primary-button class="ms-4">
                        {{ __('Create') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    </x-guest-layout>
