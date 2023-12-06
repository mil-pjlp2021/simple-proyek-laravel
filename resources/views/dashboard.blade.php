<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    {{--  <x-application-logo class="block h-12 w-auto" />  --}}

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Welcome!
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">

                    </p>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div class="flex items-center">

                            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('users.index') }}">User</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">

                        </p>

                        <p class="mt-4 text-sm">
                            <a href="{{ route('users.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                More

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('klien.index') }}">Klien</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">

                        </p>

                        <p class="mt-4 text-sm">
                            <a href="{{ route('klien.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                More

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">

                            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('pekerjaan.index') }}">Pekerjaan</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">

                        </p>
                        <p class="mt-4 text-sm">
                            <a href="{{ route('pekerjaan.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                More

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">

                            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                <a href="{{ route('tipe_pekerjaan.index') }}">
                                    Tipe Pekerjaan
                                </a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">

                        </p>
                        <p class="mt-4 text-sm">
                            <a href="{{ route('tipe_pekerjaan.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                More

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
