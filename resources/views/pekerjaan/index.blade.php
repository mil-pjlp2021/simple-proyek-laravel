<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pekerjaan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                      <div class="overflow-hidden">
                        <a href="{{ route('pekerjaan.create') }}">
                            <x-secondary-button class="mb-6 mt-4">Tambah</x-secondary-button>
                        </a>

                        <table class="min-w-full border table-auto text-center text-sm font-light dark:border-neutral-500 mb-6">
                          <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                              <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                #
                              </th>
                              <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                Nama
                              </th>
                              <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                Deskripsi
                              </th>
                              <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                Tipe
                              </th>

                              <th
                                scope="col"
                                class="border-r px-6 py-4 dark:border-neutral-500">
                                Aksi
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($pekerjaan as $key=> $u)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                    {{ $key+1 }}
                                </td>
                                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                    {{ $u->nama }}
                                </td>
                                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                    {{ $u->deskripsi }}
                                </td>
                                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                    {{ $u->tipe->nama }}
                                </td>

                                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                    <div>
                                        <a href="{{ route('pekerjaan.edit',['id'=>$u->id]) }}">
                                            <x-button type='button' >Edit</x-button>
                                        </a>
                                    </div>
                                    <div>
                                        <form action="{{ route('pekerjaan.destroy',['id'=>$u->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <x-danger-button type="submit">
                                                Delete
                                            </x-danger-button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
