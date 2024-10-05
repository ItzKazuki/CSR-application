@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-red-900 relative">
    <div class="bg-white absolute w-[70%] right-0 h-full"></div>
    <div class="p-10">
        <div
        class="absolute w-[95%] h-[90%] bg-[url('https://s3-alpha-sig.figma.com/img/c481/0c1d/22981a667757feb5d90741fb48c4673c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=TXrhv3zcskLSZZkNrNDuIXGvTyATGfstHiblw5Gi68v9gCTUd74jsaYUSCqXkaTmSc0E-4Jh0lCmgPrRNVje44oDMJjjjLqWNRZL6nyo8ifySCm~BszxHy~28P9Awc7G~HdTDwezoI20O2tb7PblvcZEfatxN74aFyuyvqcjVuUxVPgzKjXxZA-iauU1eFp~CuGkVDDGI4b~TTig-LFt6erEHjYvqG8YTk0yUuMieA-L9vnqKhNyuA6mPrp~3RltIiRGR~ndbzpsJI7mcRqeniJKisGniGnhfvLWMsedGgKLZWn9eDfAyDZDsA9dDxdcMRewQxOZ5oIsG7gAaAweUg__')] bg-right-top bg-cover bg-no-repeat flex flex-col px-16 text-white justify-center bg-[rgba(0,0,0,0.5)] bg-blend-multiply">
        <h1 class="text-6xl font-bold">Selamat Datang <br> Di Portal CSR <br> Kab. Cirebon</h1>
        <p class="text-xl py-4">Ketahui dan kenali customer social responsibility <br> terhadap Kabupaten Cirebon
            dari para Mitra.</p>
    </div>
    </div>
</div>

<div class="py-20 px-12">
    <h1 class="font-bold text-4xl relative border-top-left">Mitra CSR <br> Kabupaten Cirebon</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 m-14">
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/248/zksYBdUKVBFieSQQ1kGLuuzjRamPHh50NQgF7eAb.png"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
        <div class="flex justify-center">
            <img src="https://csr.jabarprov.go.id/storage/uploads/perusahaan/foto/149/6mNg9xMazzKz4YNP9p4YvzBOvGACiS7wdeiA43Fj.jpeg"
                alt="Logo 1" class="h-36">
        </div>
    </div>
</div>

<div class="py-10 px-12">
    <h1 class="text-center font-bold text-4xl ">Data Statistik</h1>
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

<div class="grid grid-cols-2 gap-8 py-10 px-12">
    <div class="grid grid-cols-2 gap-4">
        <img src="https://s3-alpha-sig.figma.com/img/4575/4c61/f1b72751a2fc15ffefd7f2e1551429f9?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pGAJxJb7EvJ1fNgTrWQavfCPCIxHixCx1nnpRStA6TDCqIUwlWFR0pjmY25d7HKuy3prgrVnY9DH34T7x-9NTwa-dZBHU5sbF1E8RCez0WxcshblWPnVMmBs9iE4297iU1OHhUk8GsZ90GxoiTih84QF9GmnyWj9KCXFiormcPqU9DL54D5wYhM3PcgJ~CAc47wu0IOkwZqr7fig9e9Zsb1nnGKaPeqNlwVfwgUOQpr-HfPsfbgwPUcghNr5snqxA5s3GYCHT8Jj8aFzCB3b-bvtIWRx919Pc8RHTXxsdlr90Blbf-9OARJ7m9ygUHaL3VjIuifrYbQ2IM75leas2A__" alt="">
        <img src="https://s3-alpha-sig.figma.com/img/f092/cb35/506ec736c0fc23fa0c12473aa758fe0a?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=WFGM5-o8aiQV3XbC96KlLR6XhoTaxqLOeurkMMhFFhEEi8WJ-dNc2i4~BwC1q07rlIFDLn0SoZbKDxIDGWp9dyms-Bkz-9R7eHBEuF8mUzwxy~fjWmiDhBTobJZ5VANcX-gIpozl-OyL8B6Sfurh8RGKAyiJyqrv5jl1ApzPKUGnsDVWlc7NM1xPQCMsoKb2pT708zaZp~J8JzYDRtNku49Pf~uokU7YStLneLFe0ScDJc--ad-EQhx-RSPuQCrpFt18J0dJCsO6auiES8l9Gk0iI1otWvm29rUqs54exAtkclGcfeKMIqa0zHVZ6C2sDHEnJ7hUF1LduxzE7fjzmA__" alt="">
    </div>
    <div>
        <h1 class="font-bold text-5xl relative border-top-left ">Apa Itu <br> Kegiatan CSR</h1>
        <div class="text-lg text-gray-600">
            <p class="py-8">
                Corporate Social Responsibility (CSR) merupakan konsep di mana perusahaan secara sadar
                mengintegrasikan kepedulian sosial dan lingkungan ke dalam operasional bisnisnya. Ini melibatkan
                tindakan sukarela yang memberikan manfaat bagi masyarakat, seperti program pendidikan, kesehatan,
                dan lingkungan, serta upaya untuk mengurangi dampak negatif terhadap lingkungan. CSR tidak hanya
                mencerminkan tanggung jawab perusahaan terhadap masyarakat, tetapi juga dapat meningkatkan reputasi
                dan daya saing bisnis.
            </p>
            <p>
                Berdasarkan Undang-Undang nomor 40  Tahun 2007 tentang Perseroan Terbatas (UUPT) pasal 1 ayat 3,
                pengertian Tanggung Jawab Sosial dan Lingkungan Perusahaan (TJSLP) atau Corporate Social
                Responsibility (CSR) adalah komitmen perseroan untuk berperan serta dalam pembangunan ekonomi
                berkelanjutan guna meningkatkan kualitas kehidupan dan lingkungan yang bermanfaat, baik bagi
                perseroan sendiri, komunitas setempat, maupun masyarakat pada umumnya.
            </p>
        </div>
    </div>
</div>

<div class="min-h-screen bg-gray-900 px-20 text-white">
    <div class="py-16">
        <h1 class="text-5xl font-bold pb-4 relative border-top-left">Sektor CSR</h1>
        <p>Bidang sektor CSR Kabupaten Cirebon yang tersedia</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="w-[80%]">
            <ul class="space-y-0 relative">
                <div class="absolute left-0 top-0 h-full border-l-4 border-gray-700"></div>
                <li class="flex items-center justify-between px-4 py-2 bg-gray-800 border-l-4 border-red-500 text-gray-300 relative">
                    <span>Sosial</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Lingkungan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Kesehatan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Pendidikan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Infrastruktur dan sanitasi lingkungan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Sarana dan prasarana keagamaan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Lainnya</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
            </ul>
        </div>

        <div>
            <div class="relative">
                <img src="https://s3-alpha-sig.figma.com/img/2462/6032/cdc89d6627b08fb5dbd4e678aaae5c38?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Q4eEsPFyY5AfnGb~RH2FDSQbPRcTqendE~SFBsq7cfMOy80fWqJZeNDAyEiFHdxR7yQt6SQ~3R6DbyRxN6DSGvoryBaBsYrLRdrzlQyv065~mgdjr7l6bBXK5rPT96SQayo036fc50LB7YfGwGGlexSFki~0EJRvjLZNcgv1qNwymayp10EAbXqRqoN5Zvf3LTiPEoKh1Krr~fvgqeMOOumzyEd9-hq8dbX6dt2gGqALuyHIE6~FAfvghDTEGpaYbHYbsSqmaKpteiVVqf7mjhJuV3epS85E4Mva-vdHybYo~YNAAMrGNyGwm7~g0ls78STv7ulufMWQ4c2xVBTiVg__"
                    class=" h-44">
            </div>
            <p class="mt-4">CSR dalam lingkup sosial merupakan komitmen perusahaan untuk memberikan kontribusi
                positif bagi masyarakat di sekitarnya. Ini melibatkan berbagai kegiatan yang bertujuan meningkatkan
                kualitas hidup masyarakat, seperti program pendidikan, kesehatan, pemberdayaan ekonomi, dan
                pengentasan kemiskinan. Melalui CSR sosial, perusahaan tidak hanya memenuhi tanggung jawab
                sosialnya, tetapi juga membangun hubungan yang baik dengan masyarakat, meningkatkan reputasi
                perusahaan, dan menciptakan dampak sosial yang berkelanjutan. Program CSR sosial dapat berupa
                bantuan langsung, seperti donasi, atau program jangka panjang yang melibatkan partisipasi aktif
                masyarakat, seperti pelatihan keterampilan dan pengembangan komunitas.</p>
            <div class="mt-6 flex gap-4">
                <button class="bg-red-800 hover:bg-red-900 px-4 py-2 rounded-md">Lihat program tersedia</button>
                <button class="border-2 hover:bg-gray-600 px-4 py-2 rounded-md">Lihat realisasi program</button>
            </div>
        </div>

    </div>
</div>

<div class="px-20 py-20 grid grid-cols-2">
    <div>
        <h1 class="text-5xl font-bold py-3 relative border-top-left">Sambutan Bupati <br> Kabupaten Cirebon</h1>
        <div class="py-3 text-gray-600">
            <p class="pb-2">Elit sit vitae nulla porttitor nulla platea lectus ultrices cursus. Proin mi nisi mi
                sed amet.
                Aliquam sit sed turpis ut sociis consequat nibh enim malesuada. Eget vestibulum volutpat cursus
                enim. Urna maecenas at sed dignissim augue aliquam. In diam condimentum ultricies sit proin egestas.
                Nunc eget quisque vestibulum vestibulum quisque ipsum gravida malesuada. Tempor quis arcu sociis non
                ut praesent mi id sit. Platea cursus diam sit vitae enim aliquet aliquam arcu.</p>
            <p>Elit sit vitae nulla porttitor nulla platea lectus ultrices cursus. Proin mi nisi mi sed amet.
                Aliquam sit sed turpis ut sociis consequat nibh enim malesuada. Eget vestibulum volutpat cursus
                enim. Urna maecenas at sed dignissim augue aliquam. In diam condimentum ultricies sit proin egestas.
                Nunc eget quisque vestibulum vestibulum quisque ipsum gravida malesuada. Tempor quis arcu sociis non
                ut praesent mi id sit. Platea cursus diam sit vitae enim aliquet aliquam arcu.</p>
        </div>
        <h3 class="text-2xl font-bold">Drs. H. Imron Rosyadi, Lc., M.Ag., M.M.</h3>
        <p class="text-gray-600">Bupati Kabupaten Cirebon</p>
    </div>
    <div></div>
</div>

<div class="px-20 py-10">
    <h1 class="text-5xl font-bold text-center">Laporan <br> Kegiatan Terbaru</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 py-14 px-16">
        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Person extending hand for handshake" class="w-full h-48 object-cover" height="400"
                src="https://storage.googleapis.com/a1aa/image/F91ixcMxcd4VB5FMW5ZfZagxQKba9wzKjm9EeQwO87fo2PHnA.jpg"
                width="600" />
            <div class="p-4">
                <span class="text-xs text-white bg-red-600 px-2 py-1 rounded">
                    27 MAR, 2023
                </span>
                <h2 class="mt-2 font-bold text-lg">
                    Judul Kegiatan Terbaru.
                </h2>
                <p class="mt-2 text-gray-600">
                    Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus ac...
                </p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Group of people putting hands together" class="w-full h-48 object-cover" height="400"
                src="https://storage.googleapis.com/a1aa/image/euMAZO1LpSVaESwaWqpzDk8gGIffx6vjVtQDwJks09Ei2PHnA.jpg"
                width="600" />
            <div class="p-4">
                <span class="text-xs text-white bg-red-600 px-2 py-1 rounded">
                    27 MAR, 2023
                </span>
                <h2 class="mt-2 font-bold text-lg">
                    Judul Kegiatan Terbaru.
                </h2>
                <p class="mt-2 text-gray-600">
                    Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus ac...
                </p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Person working at a desk" class="w-full h-48 object-cover" height="400"
                src="https://storage.googleapis.com/a1aa/image/SqwcZlxUyWZrEtwfw2ls3M6QtjriR8HlUJhEgeA7QBffsfccC.jpg"
                width="600" />
            <div class="p-4">
                <span class="text-xs text-white bg-red-600 px-2 py-1 rounded">
                    27 MAR, 2023
                </span>
                <h2 class="mt-2 font-bold text-lg">
                    Judul Kegiatan Terbaru.
                </h2>
                <p class="mt-2 text-gray-600">
                    Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus ac...
                </p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Laptop and plant on a desk" class="w-full h-48 object-cover" height="400"
                src="https://storage.googleapis.com/a1aa/image/KtWpH7pzAMIKMxdm0jYy7z3MCZmvdijDqtqdeeH48AdS7njTA.jpg"
                width="600" />
            <div class="p-4">
                <span class="text-xs text-white bg-red-600 px-2 py-1 rounded">
                    27 MAR, 2023
                </span>
                <h2 class="mt-2 font-bold text-lg">
                    Judul Kegiatan Terbaru.
                </h2>
                <p class="mt-2 text-gray-600">
                    Praesent viverra sapien congue aliquet viverra maecenas sed bibendum. Elementum risus ac...
                </p>
            </div>
        </div>
    </div>
    <div class="text-center mt-6">
        <button class="bg-white text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            Lihat semua kegiatan
        </button>
    </div>
</div>

<div class="bg-gray-900 min-h-screen px-20 text-white">
    <div class="py-20">
        <h1 class="text-5xl font-bold pb-4 relative border-top-left">Frequently Asked Question (FAQ)</h1>
        <p>Pertanyaan yang sering muncul</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="w-[80%]">
            <ul class="space-y-0 relative">
                <div class="absolute left-0 top-0 h-full border-l-4 border-gray-700"></div>
                <li class="flex items-center justify-between px-4 py-2 bg-gray-800 border-l-4 border-red-500 text-gray-300 relative">
                    <span>Sosial</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Lingkungan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Kesehatan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Pendidikan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Infrastruktur dan sanitasi lingkungan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Sarana dan prasarana keagamaan</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="flex items-center justify-between px-4 py-2 hover:bg-gray-700 hover:text-gray-300 relative">
                    <span>Lainnya</span>
                    <i class="fas fa-chevron-right"></i>
                </li>
            </ul>
        </div>

        <p class="">
            CSR atau Corporate Social Responsibility adalah komitmen perusahaan untuk berkontribusi dalam
            pembangunan berkelanjutan dengan cara memberikan dampak positif bagi masyarakat dan lingkungan
            sekitar. Di Kabupaten Cirebon, CSR dapat diwujudkan melalui berbagai program seperti pendidikan,
            kesehatan, lingkungan, dan pemberdayaan masyarakat.
        </p>
    </div>
</div>
@endsection