<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Proyek
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                      <div class="overflow-hidden">

                        <form class="row" method="post" action="{{ route('proyek.update',['id'=>$proyek->id]) }}">
                            @method('put')
                            @csrf
                            <div class="col-span-12 sm:col-span-4">
                                <x-label for="nama" value="{{ __('Name') }}" />
                                <x-input name="nama" value="{{ $proyek->nama }}" id="name" type="text" class="mt-1 block w-full"  required autocomplete="nama" />
                                <x-input-error for="nama" class="mt-2" />
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <x-label for="deskripsi" value="{{ __('deskripsi') }}" />
                                <textarea id="deskripsi" name="deskripsi" type="text" class="mt-1 block w-full"  required autocomplete="deskripsi" >
                                    {{ $proyek->deskripsi }}
                                    </textarea>
                                <x-input-error for="deskripsi" class="mt-2" />
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <x-label for="klien_id" value="{{ __('Tipe Proyek') }}" />
                                <select id="klien_id" name="klien_id" type="text" class="mt-1 block w-full"  required autocomplete="klien_id" >
                                    @foreach($klien as $key => $val)
                                    <option {{  ($proyek->klien_id==$val->id)?'selected':'' }} value="{{ $val->id }}">{{ $val->nama }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="klien_id" class="mt-2" />
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
