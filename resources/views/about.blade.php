@extends('layouts.app')

@section('content')
    <div class="min-w-screen h-[450px] bg-red-950 relative">
        <div class="bg-white absolute w-[70%] right-0 h-full"></div>
        <div class="p-12">
            <div
                class="absolute w-[95%] h-[80%] bg-[url('https://s3-alpha-sig.figma.com/img/c481/0c1d/22981a667757feb5d90741fb48c4673c?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=TXrhv3zcskLSZZkNrNDuIXGvTyATGfstHiblw5Gi68v9gCTUd74jsaYUSCqXkaTmSc0E-4Jh0lCmgPrRNVje44oDMJjjjLqWNRZL6nyo8ifySCm~BszxHy~28P9Awc7G~HdTDwezoI20O2tb7PblvcZEfatxN74aFyuyvqcjVuUxVPgzKjXxZA-iauU1eFp~CuGkVDDGI4b~TTig-LFt6erEHjYvqG8YTk0yUuMieA-L9vnqKhNyuA6mPrp~3RltIiRGR~ndbzpsJI7mcRqeniJKisGniGnhfvLWMsedGgKLZWn9eDfAyDZDsA9dDxdcMRewQxOZ5oIsG7gAaAweUg__')] bg-center bg-cover bg-fixed bg-no-repeat flex flex-col px-16 text-white justify-center bg-[rgba(0,0,0,0.8)] bg-blend-multiply">
                <p class="text-xl"><a href="/" class="text-red-500">Beranda</a> / Tentang</p>
                <h1 class="text-8xl font-bold py-4">Tentang</h1>
                <p class="text-xl py-4">Kegiatan Terkini Dari CSR Kabupaten Cirebon</p>
            </div>
        </div>
    </div>

    <div class="py-14 px-20">
        <div class="grid grid-cols-2 gap-8">
            <h1 class="font-bold text-5xl relative border-top-left ">Apa Itu <br> Kegiatan CSR</h1>
            <div>
                <p class="text-lg text-gray-600 w-[85%]">
                    Corporate Social Responsibility (CSR) merupakan konsep di mana perusahaan secara sadar
                    mengintegrasikan kepedulian sosial dan lingkungan ke dalam operasional bisnisnya. Ini melibatkan
                    tindakan sukarela yang memberikan manfaat bagi masyarakat, seperti program pendidikan, kesehatan,
                    dan lingkungan, serta upaya untuk mengurangi dampak negatif terhadap lingkungan. CSR tidak hanya
                    mencerminkan tanggung jawab perusahaan terhadap masyarakat, tetapi juga dapat meningkatkan reputasi
                    dan daya saing bisnis.
                </p>
            </div>
        </div>
        <p class="pt-6 text-lg text-gray-600">
            Berdasarkan Undang-Undang nomor 40  Tahun 2007 tentang Perseroan Terbatas (UUPT) pasal 1 ayat 3,
            pengertian Tanggung Jawab Sosial dan Lingkungan Perusahaan (TJSLP) atau Corporate Social
            Responsibility (CSR) adalah komitmen perseroan untuk berperan serta dalam pembangunan ekonomi
            berkelanjutan guna meningkatkan kualitas kehidupan dan lingkungan yang bermanfaat, baik bagi
            perseroan sendiri, komunitas setempat, maupun masyarakat pada umumnya.
        </p>
    </div>

    <div class="grid grid-cols-2 gap-8 py-10 px-12">
        <div class="grid grid-cols-2 gap-4">
            <img src="https://s3-alpha-sig.figma.com/img/4575/4c61/f1b72751a2fc15ffefd7f2e1551429f9?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pGAJxJb7EvJ1fNgTrWQavfCPCIxHixCx1nnpRStA6TDCqIUwlWFR0pjmY25d7HKuy3prgrVnY9DH34T7x-9NTwa-dZBHU5sbF1E8RCez0WxcshblWPnVMmBs9iE4297iU1OHhUk8GsZ90GxoiTih84QF9GmnyWj9KCXFiormcPqU9DL54D5wYhM3PcgJ~CAc47wu0IOkwZqr7fig9e9Zsb1nnGKaPeqNlwVfwgUOQpr-HfPsfbgwPUcghNr5snqxA5s3GYCHT8Jj8aFzCB3b-bvtIWRx919Pc8RHTXxsdlr90Blbf-9OARJ7m9ygUHaL3VjIuifrYbQ2IM75leas2A__" alt="">
            <img src="https://s3-alpha-sig.figma.com/img/f092/cb35/506ec736c0fc23fa0c12473aa758fe0a?Expires=1728864000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=WFGM5-o8aiQV3XbC96KlLR6XhoTaxqLOeurkMMhFFhEEi8WJ-dNc2i4~BwC1q07rlIFDLn0SoZbKDxIDGWp9dyms-Bkz-9R7eHBEuF8mUzwxy~fjWmiDhBTobJZ5VANcX-gIpozl-OyL8B6Sfurh8RGKAyiJyqrv5jl1ApzPKUGnsDVWlc7NM1xPQCMsoKb2pT708zaZp~J8JzYDRtNku49Pf~uokU7YStLneLFe0ScDJc--ad-EQhx-RSPuQCrpFt18J0dJCsO6auiES8l9Gk0iI1otWvm29rUqs54exAtkclGcfeKMIqa0zHVZ6C2sDHEnJ7hUF1LduxzE7fjzmA__" alt="">
        </div>
        <div class="p-6">
            <h1 class="font-bold text-5xl relative border-top-left ">Tujuan</h1>
            <div class="text-lg text-gray-600 w-[85%]">
                <p class="py-8">
                    Maksud pemerintah kabupaten dalam Corporate Social Responsibility (CSR) adalah untuk menciptakan sinergi yang kuat antara pemerintah, perusahaan, dan masyarakat. Tujuan utama dari upaya ini adalah untuk mendorong pembangunan berkelanjutan di wilayah kabupaten. Dengan melibatkan perusahaan dalam program CSR, diharapkan dapat tercipta solusi komprehensif bagi berbagai permasalahan sosial dan lingkungan, sehingga kesejahteraan masyarakat dapat meningkat secara signifikan.
                </p>
            </div>
        </div>
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

    <div class="px-20 py-20 grid grid-cols-2">
        <div>
            <h1 class="text-5xl font-bold py-3 relative border-top-left">Sambutan Bupati <br> Kabupaten Cirebon</h1>
            <div class="py-3 text-gray-600 w-[85%]">
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

    <div class="bg-gray-800 flex flex-col justify-center items-center text-white px-20 py-16">
        <div class="py-6 text-center">
            <h1 class="text-5xl font-bold">Panduan</h1>
            <p class="text-xl pt-4">Bagaimana proses CSR berlangsung</p>
        </div>
        <div class="container mx-auto py-12">
            <div class="relative flex justify-center items-start space-x-8">
                <div class="absolute top-6 left-0 right-0 flex justify-center">
                    <div class="w-2/3 border-t-2 z-0 border-white"></div>
                </div>
                <div class="flex flex-col items-center w-1/3 z-10">
                    <div class="bg-red-900 text-white rounded-md w-12 h-12 flex items-center justify-center text-2xl font-bold">1</div>
                    <div class="mt-4 text-center">
                        <h2 class="text-lg font-semibold">Penyerahan Proposal CSR</h2>
                        <p class="mt-2 text-sm leading-relaxed">
                            Pihak penerima menyerahkan proposal terkait CSR kepada Perusahaan yang akan di tuju. Jika perusahaan meminta rekomendasi Bupati Cirebon maka pihak penerima perlu membuat surat permohonan penerbitan surat rekomendasi CSR kepada Bupati dengan melampirkan dokumen proposal kegiatan.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-center w-1/3 z-10">
                    <div class="bg-red-900 text-white rounded-md w-12 h-12 flex items-center justify-center text-2xl font-bold">2</div>
                    <div class="mt-4 text-center">
                        <h2 class="text-lg font-semibold">Permohonan Penerbitan Surat CSR</h2>
                        <p class="mt-2 text-sm leading-relaxed">
                            Permohonan penerbitan surat rekomendasi CSR yang sudah masuk akan di disposisikan kepada Bagian Perekonomian dan SDA untuk di tindak lanjuti. Setelah Surat rekomendasi CSR di tandatangani Bupati maka pihak penerima perlu mengambil surat tersebut dan menyerahkan nya kepada perusahaan.
                        </p>
                        <p class="mt-2 text-sm font-semibold">Permohonan Penerbitan Surat CSR</p>
                    </div>
                </div>
                <div class="flex flex-col items-center w-1/3 z-10">
                    <div class="bg-red-900 text-white rounded-md w-12 h-12 flex items-center justify-center text-2xl font-bold">3</div>
                    <div class="mt-4 text-center">
                        <h2 class="text-lg font-semibold">Laporan CSR</h2>
                        <p class="mt-2 text-sm leading-relaxed">
                            Setelah perusahaan menerima surat rekomendasi CSR maka selanjutnya pihak perusahaan berhubungan langsung dengan pihak penerima tanpa ada intervensi dari pemda, di akhir tahun berjalan perusahaan yang mengeluarkan CSR perlu melaporkan penyaluran CSR tersebut kepada Pemda sebagai laporan kepada Bupati.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="bg-red-800 hover:bg-red-900 px-4 py-2 rounded-md">Ajukan surat rekomendasi CSR</a>

    </div>
@endsection
