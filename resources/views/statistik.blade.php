@extends('layouts.app')

@section('content')
<div class="min-w-screen h-[450px] bg-red-950 relative">
    <div class="bg-white absolute w-[70%] right-0 h-full"></div>
    <div class="p-12">
        <div
            class="absolute w-[95%] h-[80%] bg-[url('https://s3-alpha-sig.figma.com/img/c481/0c1d/22981a667757feb5d90741fb48c4673c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=TXrhv3zcskLSZZkNrNDuIXGvTyATGfstHiblw5Gi68v9gCTUd74jsaYUSCqXkaTmSc0E-4Jh0lCmgPrRNVje44oDMJjjjLqWNRZL6nyo8ifySCm~BszxHy~28P9Awc7G~HdTDwezoI20O2tb7PblvcZEfatxN74aFyuyvqcjVuUxVPgzKjXxZA-iauU1eFp~CuGkVDDGI4b~TTig-LFt6erEHjYvqG8YTk0yUuMieA-L9vnqKhNyuA6mPrp~3RltIiRGR~ndbzpsJI7mcRqeniJKisGniGnhfvLWMsedGgKLZWn9eDfAyDZDsA9dDxdcMRewQxOZ5oIsG7gAaAweUg__')] bg-center bg-cover bg-fixed bg-no-repeat flex flex-col px-16 text-white justify-center bg-[rgba(0,0,0,0.8)] bg-blend-multiply">
            <p class="text-xl"><a href="/" class="text-red-500">Beranda</a> / Statistik</p>
            <h1 class="text-8xl font-bold py-4">Statistik</h1>
            <p class="text-xl py-4">Program CSR Yang Sudah Berjalan Di Kabupaten Cirebon</p>
        </div>
    </div>
</div>

<div class="py-10 px-12">
    <h1 class="text-center font-bold text-4xl ">Data Statistik</h1>
    <div class="flex items-center justify-center py-10">
        <div class="flex space-x-4">
            <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 bg-white w-[35rem]">
                <input type="text" placeholder="Tahun" class="outline-none w-full placeholder:text-black">
                <i class="far fa-calendar-alt ml-2 text-gray-500"></i>
            </div>
            <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 bg-white w-[35rem]">
                <input type="text" placeholder="Kuartal 2 (April, Mei, Juni)" class="outline-none w-full placeholder:text-black">
                <i class="far fa-calendar-alt ml-2 text-gray-500"></i>
            </div>
            <button class="flex items-center border border-gray-300 rounded-lg px-3 py-2 bg-white">
                <i class="fas fa-download text-gray-500 mr-2"></i>
                Unduh .csv
            </button>
            <button class="flex items-center border border-gray-300 rounded-lg px-3 py-2 bg-white">
                <i class="fas fa-download text-gray-500 mr-2"></i>
                Unduh .pdf
            </button>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-8 m-14">
        <div class="border-l-4 border-red-400 px-8 text-blue-950">
            <h1 class="text-5xl font-bold pb-3 text-red-900">124</h1>
            <p>Total Proyek CSR</p>
        </div>
        <div class="border-l-4 border-red-400 px-8">
            <h1 class="text-5xl font-bold pb-3 text-red-900">119</h1>
            <p>Proyek terealisasi</p>
        </div>
        <div class="border-l-4 border-red-400 px-8">
            <h1 class="text-5xl font-bold pb-3 text-red-900">89</h1>
            <p>Mitra Bergabung</p>
        </div>
        <div class="border-l-4 border-red-400 px-8">
            <h1 class="text-5xl font-bold pb-3 text-red-900">Rp2000T +</h1>
            <p>Dana realisasi CSR</p>
        </div>
    </div>
</div>

<div class="min-h-screen px-20 py-10">
    <h1 class="text-5xl font-bold">Realisasi <br> Proyek CSR</h1>

    <div class="grid grid-cols-2 gap-8 p-6">
        <div>
            <h4 class="text-xl font-bold">Persentasi jumlah realisasi proyek per sektor</h4>
        </div>
        <div>
            <h4 class="text-xl font-bold">Total realisasi proyek per sektor</h4>
        </div>
        <div>
            <h4 class="text-xl font-bold">Persentasi realisasi proyek per sektor</h4>
        </div>
        <div>
            <h4 class="text-xl font-bold">Persentasi realisasi proyek per sektor</h4>
        </div>
    </div>
</div>
@endsection
