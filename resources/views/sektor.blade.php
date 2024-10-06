@extends('layouts.app')

@section('content')
    <div class="min-w-screen h-[450px] bg-red-950 relative">
        <div class="bg-white absolute w-[70%] right-0 h-full"></div>
        <div class="p-12">
            <div
                class="absolute w-[95%] h-[80%] bg-[url('https://s3-alpha-sig.figma.com/img/c481/0c1d/22981a667757feb5d90741fb48c4673c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=TXrhv3zcskLSZZkNrNDuIXGvTyATGfstHiblw5Gi68v9gCTUd74jsaYUSCqXkaTmSc0E-4Jh0lCmgPrRNVje44oDMJjjjLqWNRZL6nyo8ifySCm~BszxHy~28P9Awc7G~HdTDwezoI20O2tb7PblvcZEfatxN74aFyuyvqcjVuUxVPgzKjXxZA-iauU1eFp~CuGkVDDGI4b~TTig-LFt6erEHjYvqG8YTk0yUuMieA-L9vnqKhNyuA6mPrp~3RltIiRGR~ndbzpsJI7mcRqeniJKisGniGnhfvLWMsedGgKLZWn9eDfAyDZDsA9dDxdcMRewQxOZ5oIsG7gAaAweUg__')] bg-center bg-cover bg-fixed bg-no-repeat flex flex-col px-16 text-white justify-center bg-[rgba(0,0,0,0.8)] bg-blend-multiply">
                <p class="text-xl"><a href="/" class="text-red-500">Beranda</a> / Sektor</p>
                <h1 class="text-8xl font-bold py-4">Sektor</h1>
                <p class="text-xl py-4">Program CSR Yang Sudah Berjalan Di Kabupaten Cirebon</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center gap-4 px-20 py-16">
        <div class="py-6 text-center">
            <h1 class="text-5xl font-bold">Sektor CSR</h1>
            <p class="text-xl pt-4">Bidang program CSR Kabupaten Cirebon yang tersedia</p>
        </div>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            Sosial
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Tersedia: 10
                        </p>
                        <button class="bg-red-900 text-white w-full px-4 py-2 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            Sosial
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Tersedia: 10
                        </p>
                        <button class="bg-red-900 text-white w-full px-4 py-2 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            Sosial
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Tersedia: 10
                        </p>
                        <button class="bg-red-900 text-white w-full px-4 py-2 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            Sosial
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Tersedia: 10
                        </p>
                        <button class="bg-red-900 text-white w-full px-4 py-2 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            Sosial
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Tersedia: 10
                        </p>
                        <button class="bg-red-900 text-white w-full px-4 py-2 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            Sosial
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Tersedia: 10
                        </p>
                        <button class="bg-red-900 text-white w-full px-4 py-2 rounded">
                            Lihat detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-20 py-10">
        <div class="">
            <h1 class="text-5xl font-bold">Proyek Tersedia</h1>
            <div class="py-4 flex justify-center items-center gap-4 px-4 pt-4">
                <div class="relative inline-block text-left">
                    <button type="button"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-md font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Semua Sektor CSR
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
                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
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
                    </div>
                </div>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 bg-white w-[76rem]">
                    <i class="fas fa-search mr-2 text-gray-500"></i>
                    <input type="text" placeholder="Search" class="outline-none w-full placeholder:text-black">
                </div>
            </div>
        </div>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person extending a handshake" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            Judul Proyek Terbaru.
                        </h2>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Kec. Karangwareng
                        </div>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            Sosial
                        </div>
                        <div class="text-gray-600 bg-gray-200 p-2 rounded">
                            Tgl. Berakhir: Jul 15,2024
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="Hands of multiple people joining together" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            Judul Proyek Terbaru.
                        </h2>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Kec. Karangwareng
                        </div>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            Lingkungan
                        </div>
                        <div class="text-gray-600 bg-gray-200 p-2 rounded">
                            Tgl. Berakhir: Jul 15,2024
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A person working at a desk with a computer" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            Judul Proyek Terbaru.
                        </h2>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Kec. Karangwareng
                        </div>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            Kesehatan
                        </div>
                        <div class="text-gray-600 bg-gray-200 p-2 rounded">
                            Tgl. Berakhir: Jul 15,2024
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img alt="A laptop and a cup of coffee on a desk" class="w-full h-64 object-cover"
                        src="https://s3-alpha-sig.figma.com/img/c18a/03b3/42153531d7f24e57fd9fc1a9abf77695?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Y2eqq1hhp7BMziB6B0o5SV47B0BlfRHzB821PwyAEW4EHZgQpbLgUPAYky98hxUV0ZRJLWh9eMDreBWiSMsMmHKTvXsoVYm7NEGik3VT~8nN1ZKpXnuMtVTgsaqohL9PhdMtRiQbyYt3kLtNToApB5uGiWxms-g1ojFRIzp0XmmIdmEChXbwGv35ZUtP2-EV-awRsqjZmD6-B3pzeiXygkxlYZ~KRHkPBKmRHJJi2hSY0-3pW0264uCIQq-q8RkvOv~JNr-dvqwgbGzgqyIN~O1FrmNHaJJnFcew7hmSVIXPF9uXkVTnTWtv60xfySLYYw6vxVq8za7n-6ZUDArFjg__" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-2">
                            Judul Proyek Terbaru.
                        </h2>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Kec. Karangwareng
                        </div>
                        <div class="text-gray-600 mb-2 bg-gray-200 p-2 rounded">
                            Pendidikan
                        </div>
                        <div class="text-gray-600 bg-gray-200 p-2 rounded">
                            Tgl. Berakhir: Jul 15,2024
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
