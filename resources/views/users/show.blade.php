<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                      <div class="overflow-hidden">

                        <form class="row" method="post" action="{{ route('users.update',['id'=>$user->id]) }}">
                            @method('put')
                            @csrf
                            <div class="col-span-12 sm:col-span-4">
                                <x-label for="name" value="{{ __('Name') }}" />
                                <x-input name="name" value="{{ $user->name }}" id="name" type="text" class="mt-1 block w-full"  required autocomplete="name" />
                                <x-input-error for="name" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input name="email" value="{{ $user->email }}" id="email" type="email" class="mt-1 block w-full"  required />
                                <x-input-error for="email" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input name="password" value="" id="password" type="password" class="mt-1 block w-full"  required />
                                <x-input-error for="password" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="retype_password" value="{{ __('Retype Password') }}" />
                                <x-input name="retype_password" value="" id="retype_password" type="password" class="mt-1 block w-full"  required />
                                <x-input-error for="retype_password" class="mt-2" />
                            </div>

                            <x-button class="me-3 mt-4" >
                                {{ __('Save') }}
                            </x-button>

                        </form>

                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
