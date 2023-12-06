<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Klien
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                      <div class="overflow-hidden">

                        <form class="row" method="post" action="{{ route('klien.update',['id'=>$klien->id]) }}">
                            @method('put')
                            @csrf
                            <div class="col-span-12 sm:col-span-4">
                                <x-label for="nama" value="{{ __('Name') }}" />
                                <x-input name="nama" value="{{ $klien->nama }}" id="name" type="text" class="mt-1 block w-full"  required autocomplete="nama" />
                                <x-input-error for="nama" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="kontak" value="{{ __('Kontak') }}" />
                                <x-input name="kontak" value="{{ $klien->kontak }}" id="kontak" type="tel" class="mt-1 block w-full"  required />
                                <x-input-error for="kontak" class="mt-2" />
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
