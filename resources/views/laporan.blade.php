@extends('layouts.app')

@section('content')
    <div class="min-w-screen h-[450px] bg-red-950 relative">
        <div class="bg-white absolute w-[70%] right-0 h-full"></div>
        <div class="p-12">
            <div
                class="absolute w-[95%] h-[80%] bg-[url('https://s3-alpha-sig.figma.com/img/c481/0c1d/22981a667757feb5d90741fb48c4673c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=TXrhv3zcskLSZZkNrNDuIXGvTyATGfstHiblw5Gi68v9gCTUd74jsaYUSCqXkaTmSc0E-4Jh0lCmgPrRNVje44oDMJjjjLqWNRZL6nyo8ifySCm~BszxHy~28P9Awc7G~HdTDwezoI20O2tb7PblvcZEfatxN74aFyuyvqcjVuUxVPgzKjXxZA-iauU1eFp~CuGkVDDGI4b~TTig-LFt6erEHjYvqG8YTk0yUuMieA-L9vnqKhNyuA6mPrp~3RltIiRGR~ndbzpsJI7mcRqeniJKisGniGnhfvLWMsedGgKLZWn9eDfAyDZDsA9dDxdcMRewQxOZ5oIsG7gAaAweUg__')] bg-center bg-cover bg-fixed bg-no-repeat flex flex-col px-16 text-white justify-center bg-[rgba(0,0,0,0.8)] bg-blend-multiply">
                <p class="text-xl"><a href="/" class="text-red-500">Beranda</a> / Laporan</p>
                <h1 class="text-8xl font-bold py-4">Laporan</h1>
                <p class="text-xl py-4">Kegiatan Terkini Dari CSR Kabupaten Cirebon</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-4">
        <div class="py-4 flex justify-between items-center gap-4 pt-4">
            <div class="relative inline-block text-left">
                <button type="button"
                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-md font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                    Terbaru
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                {{-- <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-0">Account settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-1">Support</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-2">License</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="relative inline-block text-left">
                <button type="button"
                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-md font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                    Semua Mitra
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                {{-- <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-0">Account settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-1">Support</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-2">License</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 bg-white w-[70rem]">
                <i class="fas fa-search mr-2 text-gray-500"></i>
                <input type="text" placeholder="Search" class="outline-none w-full placeholder:text-black">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img alt="Person pointing" class="w-full h-48 object-cover" src="https://placehold.co/600x400" />
                <div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">
                    27 MAR, 2023
                </div>
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <img alt="Profile picture of Andri Sapulalung"
                            class="w-8 h-8 rounded-full mr-2 border-2 border-red-900" src="https://placehold.co/32x32" />
                        <div class="text-sm font-semibold">
                            Andri Sapulalung
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold mb-2">
                        Judul Laporan Terbaru.
                    </h2>
                    <p class="text-gray-600 text-sm">
                        Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus acc...
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img alt="People shaking hands" class="w-full h-48 object-cover" src="https://placehold.co/600x400" />
                <div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">
                    27 MAR, 2023
                </div>
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <img alt="Profile picture of Hesti Septian"
                            class="w-8 h-8 rounded-full mr-2 border-2 border-red-900" src="https://placehold.co/32x32" />
                        <div class="text-sm font-semibold">
                            Hesti Septian
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold mb-2">
                        Judul Laporan Terbaru.
                    </h2>
                    <p class="text-gray-600 text-sm">
                        Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus acc...
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img alt="Person working at a desk" class="w-full h-48 object-cover" src="https://placehold.co/600x400" />
                <div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">
                    27 MAR, 2023
                </div>
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <img alt="Profile picture of Fera Pablo" class="w-8 h-8 rounded-full mr-2 border-2 border-red-900"
                            src="https://placehold.co/32x32" />
                        <div class="text-sm font-semibold">
                            Fera Pablo
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold mb-2">
                        Judul Laporan Terbaru.
                    </h2>
                    <p class="text-gray-600 text-sm">
                        Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus acc...
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img alt="Laptop and coffee on a desk" class="w-full h-48 object-cover"
                    src="https://placehold.co/600x400" />
                <div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">
                    27 MAR, 2023
                </div>
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <img alt="Profile picture of Fera Pablo" class="w-8 h-8 rounded-full mr-2 border-2 border-red-900"
                            src="https://placehold.co/32x32" />
                        <div class="text-sm font-semibold">
                            Fera Pablo
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold mb-2">
                        Judul Laporan Terbaru.
                    </h2>
                    <p class="text-gray-600 text-sm">
                        Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus acc...
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
