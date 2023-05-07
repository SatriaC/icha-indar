<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Wedding of {{ $groom }} & {{ $bride }}</title>
    <link rel="icon" href="{{ asset('assets/heart.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;400&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
</head>

<body>
    <!-- SECTION COVER START -->
    <section id="cover" class="fixed z-[99999] w-full h-screen text-slate-800 bg-paper">
        <img src="{{ asset('assets/img/cover/top-start.png') }}" class="absolute top-0 left-0 w-64 md:w-96" />
        <img src="{{ asset('assets/img/cover/bottom-start.png') }}"
            class="absolute bottom-0 left-0 w-32 md:w-64 lg:w-32" />
        <img src="{{ asset('assets/img/cover/bottom-end.png') }}" class="absolute bottom-0 right-0 w-60 md:w-96" />
        <div class="relative flex flex-col items-center justify-center h-screen px-4 font-serif text-center">
            <div class="">
                <h4 class="mx-16 mt-20 mb-8 text-xl md:mx-20 md:mt-28 md:text-3xl lg:mt-20 lg:text-xl lg:mx-16">
                    The Wedding of
                </h4>
                <h1 class="mb-4 text-5xl font-semibold md:text-8xl lg:text-6xl font-greatVibes">
                    {{ $groom }}
                </h1>
                <h3 class="mb-2 text-3xl font-semibold md:text-6xl lg:text-5xl font-greatVibes">
                    &
                </h3>
                <h1 class="mb-12 text-5xl font-semibold md:mb-28 md:text-8xl lg:text-6xl lg:mb-20 font-greatVibes">
                    {{ $bride }}
                </h1>
            </div>
            <div class="mt-8 text-lg md:text-2xl lg:text-lg">
                <p class="">Kepada Yth</p>
                <!-- <p class="">Bapak/Ibu/Saudara/i</p> -->
                <h4 class="mt-1 text-2xl font-semibold scale-x-90 md:text-4xl">
                    {{ isset($for) ? $for : '' }}
                </h4>
                <div></div>
                <!-- <p class="text-xs md:text-lg lg:text-xs">
            *mohon maaf apabila ada kesalahan penulisan nama/gelar
          </p> -->
                <button id="openPage"
                    class="px-8 py-2 mt-6 mb-20 text-2xl font-semibold border-2 rounded-lg md:py-4 md:text-4xl lg:text-2xl border-slate-700 bg-primary hover:bg-opacity-75 animate-pulse2 font-quicksand">
                    Buka Undangan
                </button>
            </div>
        </div>
    </section>
    <!-- SECTION COVER END -->
    <div id="page" class="hidden">
        <!-- MUSIC ICON START -->
        <div id="music" class="fixed bottom-0 left-0 z-50 px-6 pb-32">
            <button id="btn-music" class="w-8 h-8 px-2 py-2 border-slate-300 bg-secondary" style="border-radius: 100px"
                data-active="1">
                <!-- <p class="text-white">HALLOOO</p> -->
                <img src="{{ asset('assets/img/play.png') }}" class="w-6" id="btn-music-play" />
                <img src="{{ asset('assets/img/pause.png') }}" class="hidden w-6" id="btn-music-pause" />
            </button>
        </div>
        <!-- MUSIC ICON END -->

        <!-- SECTION NAVBAR START -->
        <section id="navbar" class="hidden">
            <nav id="nav-menu"
                class="fixed bottom-0 z-50 w-full px-2 py-2 bg-transparent rounded-none shadow-none lg:px-24">
                <ul class="flex justify-center w-full rounded-md bg-secondary">
                    <li>
                        <a href="#home">
                            <div class="grid content-center h-full grid-cols-1 px-4 py-2 justify-items-center"
                                onclick="delay500()">
                                <img src="{{ asset('assets/img/navbar/home.png') }}" class="" />
                                <span class="text-base text-slate-200 hover:text-primary font-quicksand">Beranda</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#profile">
                            <div class="grid content-center h-full grid-cols-1 px-4 py-2 justify-items-center"
                                onclick="delay500()">
                                <img src="{{ asset('assets/img/navbar/ring.png') }}" class="" />
                                <span class="text-base text-slate-200 hover:text-primary font-quicksand">Pasangan</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#event">
                            <div class="grid content-center h-full grid-cols-1 px-4 py-2 justify-items-center"
                                onclick="delay500()">
                                <img src="{{ asset('assets/img/navbar/schedule.png') }}" class="" />
                                <span class="text-base text-slate-200 hover:text-primary font-quicksand">Acara</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#gallery">
                            <div class="grid content-center h-full grid-cols-1 px-4 py-2 justify-items-center"
                                onclick="delay500()">
                                <img src="{{ asset('assets/img/navbar/gallery.png') }}" class="" />
                                <span class="text-base text-slate-200 hover:text-primary font-quicksand">Galeri</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#rsvp">
                            <div class="grid content-center h-full grid-cols-1 px-4 py-2 justify-items-center"
                                onclick="delay500()">
                                <img src="{{ asset('assets/img/navbar/wish.png') }}" class="" />
                                <span class="text-base text-slate-200 hover:text-primary font-quicksand">Ucapan</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <!-- SECTION NAVBAR END -->
        <!-- SECTION HOME START -->
        <section id="home" class="relative text-slate-800">
            <img src="{{ asset('assets/img/home/top-end.png') }}"
                class="absolute top-0 right-0 w-64 md:w-96 lg:w-64" />
            <!-- <img
        src="{{ asset('assets/img/home/top-end-leaf.png') }}"

        class="absolute right-0 z-10 w-28 top-36 md:w-64"
      /> -->
            <!-- <img
        src="{{ asset('assets/img/home/bottom-start.png') }}"

        class="absolute bottom-0 left-0 z-10 w-32 md:w-64 lg:w-48"
      /> -->
            <img src="{{ asset('assets/img/home/bottom-end.png') }}"
                class="absolute bottom-0 right-0 w-60 md:w-96 lg:w-64" />
            <div class="relative flex flex-col items-center h-screen px-4 font-serif text-center"
                style="padding-top: 150px;">
                <img src="{{ asset('assets/img/home/pengantin-3.png') }}"
                    class="w-1/2 p-5 rounded-t-full md:w-1/3 md:p-6 lg:w-1/3" />
                <h4 class="mx-16 mb-3 text-xl md:mx-20 md:text-3xl lg:text-xl lg:mx-16">
                    The Wedding of
                </h4>
                <h2 class="mb-4 text-4xl font-semibold md:text-6xl lg:text-6xl font-greatVibes">
                    {{ $groom }} & {{ $bride }}
                </h2>
            </div>
        </section>
        <!-- SECTION HOME END -->

        <!-- SECTION AYAT START -->
        <section id="ayat" class="relative text-slate-800 bg-secondary">
            <img src="{{ asset('assets/img/ayat/separator-top.png') }}"
                class="absolute top-0 left-0 w-full scale-y-[2] sm:scale-y-100" />
            <img src="{{ asset('assets/img/ayat/end.png') }}" class="absolute bottom-0 right-0 z-20 w-36" />
            <div
                class="relative flex flex-col items-center justify-center h-screen px-4 pr-32 text-center text-white font-quicksand md:px-20 lg:px-32">
                <img src="{{ asset('assets/img/ayat/icon.png') }}" class="w-16 mb-5 md:w-28" />
                <p class="mb-3 text-base md:text-2xl">
                    Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                    jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu
                    rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran
                    Allah) bagi kaum yang berpikir.
                </p>
                <p class="text-base md:text-2xl">- QS. Ar-Rum : 21 -</p>
            </div>
        </section>
        <!-- SECTION AYAT END -->

        <!-- SECTION PREFACE START -->
        <section id="preface" class="relative h-screen text-slate-800">
            <img src="{{ asset('assets/img/preface/separator-top.png') }}"
                class="absolute top-0 left-0 w-full lg:scale-y-50 lg:-top-1/4" />
            <img src="{{ asset('assets/img/preface/separator-top.png') }}"
                class="absolute bottom-0 left-0 w-full rotate-180 lg:scale-y-50 lg:-bottom-1/4" />
            <img src="{{ asset('assets/img/preface/bg-pict.png') }}"
                class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 md:w-4/5 lg:w-1/3" />
            <div
                class="absolute w-3/4 p-4 -translate-x-1/2 -translate-y-1/2 bg-white shadow-2xl top-1/2 left-1/2 lg:w-2/5">
                <div class="flex flex-col text-sm font-semibold text-center font-quicksand md:text-xl">
                    <p class="mb-3">Assalamu’alaikum Wr. Wb.</p>
                    <p class="mb-3">
                        Maha Suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan. Perkenankan kami
                        untuk mengundang anda pada pernikahan kami :
                    </p>
                    {{-- <p>We've Married for</p> --}}
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <p class="text-lg md:text-2xl" id="days">00</p>
                            <p>Hari</p>
                        </div>
                        <div>
                            <p class="text-lg md:text-2xl" id="hours">00</p>
                            <p>Jam</p>
                        </div>
                        <div>
                            <p class="text-lg md:text-2xl" id="minutes">00</p>
                            <p>Menit</p>
                        </div>
                        <div>
                            <p class="text-lg md:text-2xl" id="seconds">00</p>
                            <p>Detik</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PREFACE END -->

        <!-- SECTION PROFILE START -->
        <section id="profile" class="relative text-slate-800 bg-secondary">
            <img src="{{ asset('assets/img/profile/center-end.png') }}" class="absolute right-0 w-32 top-96" />
            <div class="relative flex flex-col items-center px-8 py-8 text-center text-white font-quicksand">
                <img src="{{ asset('assets/img/profile/center-1.png') }}" class="absolute left-0 w-3/4 lg:w-1/4" />
                <img src="{{ asset('assets/img/profile/center-2.png') }}"
                    class="absolute bottom-0 left-0 w-3/5 lg:w-1/4" />
                <h2 class="mt-20 text-3xl font-satisfy md:text-5xl lg:text-6xl">
                    Mempelai Pria
                </h2>
                <div class="pl-6 pr-6 mt-8 lg:w-1/3">
                    <div class="px-4 py-4 bg-white text-secondary">
                        <h4 class="mt-1 mb-3 text-xl font-semibold text-secondary" style="color: black">
                            {{ $groom }}</h4>
                        <img class="w-full" src="{{ asset('assets/img/profile/pria.jpg') }}" alt="" />
                        <div class="">
                        </div>
                    </div>
                </div>
                {{-- <img src="{{ asset('assets/img/profile/pria.png') }}"
                    class="relative p-5 mb-3 rounded-t-full w-60 lg:w-72" /> --}}
                <h2 class="mt-4 text-3xl font-satisfy lg:text-5xl md:text-4xl">
                    Indar Jaya, S. E.
                </h2>
                <p class="text-xl">Putra dari</p>
                <p class="text-xl">H. Jumaring</p>
                <p class="text-xl">& Ibu Cane</p>
                <h1 class="mt-12 text-5xl font-satisfy">&</h1>
                <h2 class="mt-12 text-3xl font-satisfy md:text-5xl lg:text-6xl">
                    Mempelai Wanita
                </h2>
                <div class="pl-6 pr-6 mt-8 lg:w-1/3">
                    <div class="px-4 py-4 bg-white text-secondary">
                        <h4 class="mt-1 mb-3 text-xl font-semibold text-secondary" style="color: black">
                            {{ $bride }}</h4>
                        <img class="w-full" src="{{ asset('assets/img/profile/wanita.jpg') }}" alt="" />
                        <div class="">
                        </div>
                    </div>
                </div>
                {{-- <img src="{{ asset('assets/img/profile/wanita.png') }}"
                    class="relative p-5 mb-3 rounded-t-full w-60 lg:w-72" /> --}}
                <h2 class="mt-4 text-3xl font-satisfy lg:text-5xl md:text-4xl">
                    Isa Bela Islami, S. Pd.
                </h2>
                <p class="text-xl">Putri dari</p>
                <p class="text-xl">Dr. Triyanto Pristiwaluyo, M.Pd.</p>
                <p class="mb-20 text-xl">& Ibu Zulaicha</p>
            </div>
        </section>
        <!-- SECTION PROFILE END -->

        <!-- SECTION EVENT START -->
        <section id="event" class="relative bg-top bg-cover text-slate-800 bg-event_bg">
            <img src="{{ asset('assets/img/event/separator-top.png') }}" class="absolute top-0 left-0 w-full" />
            <img src="{{ asset('assets/img/event/separator-bottom.png') }}"
                class="absolute bottom-0 left-0 z-40 w-full" />
            <img src="{{ asset('assets/img/event/bottom-start.png') }}"
                class="absolute bottom-0 left-0 w-48 md:w-96" />
            <img src="{{ asset('assets/img/event/bottom-end.png') }}"
                class="absolute bottom-0 right-0 z-50 w-48 md:w-96" />
            <div
                class="relative flex flex-col items-center px-8 pt-8 pb-32 font-semibold text-center text-slate-800 font-quicksand">
                <div class="mt-10 font-medium font-satisfy md:mt-40 lg:mt-60">
                    <h1 class="text-7xl">Save</h1>
                    <span class="text-3xl">the</span>
                    <h1 class="text-7xl">Date</h1>
                </div>
                <div class="grid grid-cols-1 md:mb-32 lg:mb-40">
                    <div
                        class="relative flex flex-col items-center px-2 py-8 mt-12 text-center bg-[rgba(118,123,104,.4)] rounded-lg lg:w-[95%] lg:px-8">
                        <img src="{{ asset('assets/img/event/ring.png') }}" class="w-28" />
                        <h3 class="mt-3 mb-3 text-3xl">Resepsi</h3>
                        <span class="w-2/5 h-[1.5px] mx-auto my-0 bg-slate-800"></span>
                        <p class="mt-3 mb-2">Sabtu</p>
                        <p class="mb-2">20 | Mei | 2023</p>
                        <p class="mb-2">10.00 - Selesai</p>
                        <span class="w-2/5 h-[1.5px] mx-auto my-0 bg-slate-800"></span>
                        <p class="mt-3 mb-2">Alamat</p>
                        {{-- <p class="">Balai Aroepala Hertasning</p> --}}
                        <p class="mb-2">
                            Jln. Pros Barakassi Kamp. Parang Desa Pa'bentengang kecamatan Eremerasa Kabupaten Bantaeng.
                        </p>

                        <a href="https://maps.app.goo.gl/MfRPFtNEHy9EudzN6" target="_blank"
                            class="px-16 py-2 mt-3 text-xl font-medium border-2 rounded-lg text-slate-100 md:py-4 md:text-4xl lg:text-2xl border-slate-700 bg-secondary hover:bg-opacity-75 font-quicksand">
                            Lihat Lokasi
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION EVENT END -->

        <!-- SECTION GALLERY START -->
        <section id="gallery" class="relative pt-12 pb-12 bg-top bg-cover text-slate-800 bg-gallery_bg">
            <div class="relative">
                <h2 class="mb-8 ml-4 text-3xl text-white font-satisfy md:text-5xl lg:text-6xl">
                    Bagaimana cerita dimulai...
                </h2>
                <div class="grid grid-cols-2 px-4 md:px-[200px] lg:px-[400px] justify-items-center">
                    <img src="{{ asset('assets/img/gallery/1.jpg') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/2.jpg') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/3.JPG') }}"
                        class="relative w-[95%] mb-4 rounded-[10%] border-white" />
                    <img src="{{ asset('assets/img/gallery/4.JPG') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/5.JPG') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/6.JPG') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/7.JPG') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/8.JPG') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/9.jpg') }}" class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/10.jpg') }}"
                        class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/11.jpg') }}"
                        class="relative w-[95%] mb-4 rounded-[10%]" />
                    <img src="{{ asset('assets/img/gallery/12.jpg') }}"
                        class="relative w-[95%] mb-4 rounded-[10%]" />
                </div>
                <div class="px-4 lg:px-[400px] md:px-[200px]">
                    <div
                        class="relative flex flex-col items-center px-4 py-4 text-center bg-[rgba(255,255,255,.8)] rounded-lg text-slate justify-items-center">
                        <!-- <img src="assets/img/event/ring.png" class="w-28" /> -->
                        <!-- <h3 class="mt-3 mb-3 text-3xl">Resepsi</h3> -->
                        <span class="w-2/5 h-[1.5px] mx-auto my-0 bg-slate-800"></span>
                        <p class="mt-4 mb-2 lg:text-2xl md:text-xl font-quicksand">
                            "Kami pertama kali bertemu pada 3 Maret 2022 di salah satu acara keakraban remaja muda-mudi
                            di Bulukumba. Itu adalah pertemuan singkat namun sangat mengesankan bagi kami berdua
                            sehingga kami berhasil mengenal dan memahami satu sama lain sesudahnya. Setelah berjuta doa
                            yang kami panjatkan dalam dua bulan setelahnya, kami berdua kemudian bersepakat untuk
                            bertemu dengan orang tua kami untuk pertama kalinya pada tanggal 5 Mei 2022. Dan akhirnya
                            kami memutuskan untuk melangkah maju mengikatkan diri dengan tali suci pernikahan pada
                            tanggal 15 April 2023."
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION GALLERY END -->

        <!-- SECTION RSVP START -->
        <section id="rsvp" class="relative bg-top bg-cover text-slate-800 bg-rsvp_bg">
            <!-- <img
                                src="assets/img/preface/separator-top.png"

                                class="absolute top-0 left-0 w-full lg:scale-y-50 lg:-top-[140px]"
                            /> -->
            <!-- <img
                                src="assets/img/event/separator-bottom.png"

                                class="absolute bottom-0 left-0 z-40 w-full"
                            /> -->
            <img src="{{ asset('assets/img/preface/separator-top.png') }}"
                class="absolute bottom-0 left-0 w-full rotate-180 lg:scale-y-50 lg:-bottom-[10%] z-40" />
            <img src="{{ asset('assets/img/event/bottom-start.png') }}"
                class="absolute bottom-0 left-0 w-48 md:w-96" />
            <!-- <img
                        src="assets/img/event/bottom-end.png"

                        class="absolute bottom-0 right-0 z-50 w-48 md:w-96"
                    /> -->
            <div
                class="relative flex flex-col items-center px-8 pt-8 pb-32 font-semibold text-center text-slate-800 font-quicksand">
                <img src="{{ asset('assets/img/rsvp/live.png') }}" class="w-20 mt-20 md:mt-30 lg:mt-36" />
                <div class="md:px-40">
                    <div
                        class="relative flex flex-col items-center px-4 py-8 mt-8 text-center bg-[rgba(118,123,104,.3)] rounded-lg text-slate">
                        <h3 class="mt-3 mb-3 text-3xl">Live Streaming</h3>
                        <span class="w-2/5 h-[1.5px] mx-auto my-0 bg-slate-800 mb-3"></span>
                        <p class="mb-2">
                            Apabila Anda ingin menonton acara melalui laive streaming silakan menekan tombol di bawah
                            ini
                        </p>

                        <a href="https://www.instagram.com/isa_bela_islami/" target="_blank"
                            class="w-full px-16 py-2 mt-3 text-xl font-medium rounded-lg text-slate-700 md:py-4 md:text-2xl bg-primary hover:bg-opacity-75 font-quicksand">
                            Klik disini
                        </a>
                    </div>
                </div>
                <img src="{{ asset('assets/img/rsvp/gift.png') }}" class="w-20 mt-12" />
                <div class="md:px-40">
                    <div
                        class="relative flex flex-col items-center px-4 py-8 mt-8 text-center bg-[rgba(118,123,104,.3)] rounded-lg text-slate">
                        <h3 class="mt-3 mb-3 text-3xl">Wedding Gift</h3>
                        <span class="w-2/5 h-[1.5px] mx-auto my-0 bg-slate-800 mb-3"></span>
                        <p class="mb-2">
                            Apabila Anda ingin mengirimkan hadiah secara virtual/digital
                            kepada mempelai, silakan menekan tombol di bawah ini
                        </p>

                        <button
                            class="w-full px-16 py-2 mt-3 text-xl font-medium rounded-lg text-slate-700 md:py-4 md:text-2xl bg-primary hover:bg-opacity-75 font-quicksand"
                            id="open">
                            Klik disini
                        </button>
                    </div>
                </div>
                <img src="{{ asset('assets/img/rsvp/congrat.png') }}" class="w-20 mt-12" />
                <div class="grid w-full mb-20 lg:px-4 lg:grid-cols-2 md:mb-40 md:px-40">
                    <!-- Form Ucapan & Doa -->
                    <div
                        class="relative flex flex-col items-center px-4 py-8 mt-8 text-center bg-[rgba(118,123,104,.3)] rounded-lg w-full lg:w-[95%]">
                        <h3 class="mb-2 text-3xl">Wedding Wish</h3>
                        <span class="w-2/5 h-[1.5px] mx-auto my-0 bg-slate-800 mb-3"></span>
                        <input type="text" name="" id="guest_name"
                            class="w-full px-4 py-2 mt-3 rounded-lg bg-[rgba(118,123,104,.4)] text-slate-100 placeholder:text-slate-100"
                            placeholder="Name" />
                        <div class="hidden mt-2" id="alert-name" style="color: red"></div>
                        <input type="text" name="" id="guest_relationship"
                            class="w-full px-4 py-2 mt-3 rounded-lg bg-[rgba(118,123,104,.4)] text-slate-100 placeholder:text-slate-100"
                            placeholder="Relationship (family/friends/etc)" />
                        <div class="hidden mt-2" id="alert-relationship" style="color: red"></div>
                        <textarea name="" id="guest_wishes" rows="5"
                            class="w-full px-4 py-2 mt-3 rounded-lg bg-[rgba(118,123,104,.4)] text-slate-100 placeholder:text-slate-100"
                            placeholder="Best Wishes for {{ $groom }} & {{ $bride }}"></textarea>
                        <div class="hidden mt-2" id="alert-wishes" style="color: red"></div>
                        <button id="submit_wish"
                            class="w-full px-16 py-2 mt-3 text-xl font-medium rounded-lg text-slate-700 md:py-4 lg:text-2xl bg-primary hover:bg-opacity-75 font-quicksand">
                            Submit
                        </button>
                    </div>
                    <!-- List Ucapan & Doa -->
                    <div id="list-wishes"
                        class="w-full lg:w-[95%] relative flex flex-col items-center px-4 py-8 mt-8 text-center bg-[rgba(118,123,104,.3)] rounded-lg text-slate-800 overflow-auto max-h-[488px]">
                        <!-- Ucapan & Doa Start -->
                        @foreach ($wishes as $item)
                            <div class="w-full px-2 py-2 mb-2 rounded-md shadow-lg text-start bg-primary">
                                <div class="grid grid-cols-2">
                                    <div class="">
                                        <p class="text-lg font-extrabold">{{ $item->name }}</p>
                                    </div>
                                    <div class="text-sm text-end">
                                        <span class="bg-orange-300 badge">{{ $item->relationship }}</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1">
                                    <p class="font-medium">
                                        {{ $item->wishes }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <!-- Ucapan & Doa End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION RSVP END -->

        <!-- SECTION CLOSING START -->
        <section id="closing" class="relative text-slate-800 bg-secondary" data-closing="7000">
            <div class="relative flex flex-col items-center px-8 py-8 text-center text-white font-quicksand">
                <img src="{{ asset('assets/img/profile/center-1.png') }}"
                    class="absolute left-0 w-3/4 lg:w-1/4 lg:left-[25%]" />
                <img src="{{ asset('assets/img/profile/center-2.png') }}"
                    class="absolute bottom-0 left-0 w-3/5 lg:w-1/4 lg:left-1/2" />
                <img src="{{ asset('assets/img/home/pengantin-3.png') }}"
                    class="w-[150%] md:w-3/5 md:p-6 lg:w-1/4 relative" />
                <h3 class="mb-2 text-xl">Best Regards,</h3>
                <h2 class="text-3xl font-greatVibes md:text-5xl lg:text-6xl">
                    {{ $groom }} & {{ $bride }}
                </h2>
            </div>
        </section>
        <!-- SECTION CLOSING END -->

        <!-- SECTION FOOTER START -->
        <footer class="px-5 py-5 text-center w-100 bg-primary">
            <p class="font-quicksand">
                Copyright 2022. Wedding Invitation.<br />
                Created with <span style="color: red">❤</span> by Wemate
            </p>
        </footer>
        <!-- SECTION FOOTER END -->
        <!-- MODAL GIFT START -->
        <!-- Overlay element -->
        <div id="overlay" class="fixed inset-0 z-40 hidden w-screen h-screen bg-gray-900 bg-opacity-60"></div>

        <!-- The dialog -->
        <div id="dialog"
            class="fixed z-50 hidden px-4 py-6 space-y-5 -translate-x-1/2 -translate-y-1/2 bg-white rounded-md top-1/2 left-1/2 w-[400px] md:w-[600px] drop-shadow-lg text-center">
            <!-- <h1 class="text-2xl font-semibold">Dialog Title</h1> -->
            <div class="py-5 border-t border-b border-gray-300 font-quicksand">
                <div class="px-8">
                    <img src="{{ asset('assets/img/rsvp/bca.png') }}" class="w-32" />
                </div>
                <div class="mt-2">
                    <input type="text" name="" id=""
                        class="w-full px-4 py-2 rounded-lg bg-[rgba(118,123,104,.4)] text-slate-900 placeholder:text-slate-100 text-center font-bold"
                        value="022501080062509" readonly />
                </div>
                <div class="mt-3">
                    <label for="" class="text-lg font-extrabold">Alamat</label>
                    <textarea name="" id="" cols="30" rows="5"
                        class="w-full px-4 py-2 rounded-lg bg-[rgba(118,123,104,.4)] text-slate-900 text-center font-bold mt-1">BTN Gowa Lestari Blok C no 11, Kel. Batangkaluku, Kec. Somba Opu, Kab. Gowa, Sulawesi Selatan.</textarea>
                </div>
            </div>
            <div class="text-center">
                <!-- This button is used to close the dialog -->
                <button id="close"
                    class="px-5 py-2 text-white rounded-md cursor-pointer bg-secondary hover:bg-indigo-700">
                    Close
                </button>
            </div>
        </div>
        <!-- MODAL GIFT END -->

        <!-- MUSIC START -->
        <audio id="musicPlay">
            <source src="{{ asset('assets/audio/music.mp3') }}" type="audio/mpeg" />
        </audio>
        <!-- MUSIC END -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Javascript code -->
    <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
    </script>
    <script>
        var openButton = document.getElementById("open");
        var dialog = document.getElementById("dialog");
        var closeButton = document.getElementById("close");
        var overlay = document.getElementById("overlay");
        var musicPlay = document.getElementById("musicPlay");
        var btnMusic = document.getElementById("btn-music");
        var overlay = document.getElementById("overlay");
        $(document).ready(function() {
            $("#openPage").click(function() {
                $("#page").show();
                $("#cover").hide(2000);
                $("#btn-music-play").hide();
                $("#btn-music-pause").show();
                musicPlay.play(2000);
                btnMusic.setAttribute("data-active", 1);
            });
            $("#btn-music").click(function() {
                if (btnMusic.getAttribute("data-active") == 1) {
                    $("#btn-music-play").show();
                    $("#btn-music-pause").hide();
                    musicPlay.pause();
                    btnMusic.setAttribute("data-active", 0);
                } else {
                    $("#btn-music-play").hide();
                    $("#btn-music-pause").show();
                    musicPlay.play();
                    btnMusic.setAttribute("data-active", 1);
                }
            });
        });

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                document.getElementById("navbar").style.display = "block";
                if (
                    document.documentElement.scrollTop >
                    document.getElementById("closing").getAttribute("data-closing")
                ) {
                    document.getElementById("navbar").style.display = "none";
                }
            } else {
                document.getElementById("navbar").style.display = "none";
            }
        }

        openButton.addEventListener("click", function() {
            dialog.classList.remove("hidden");
            overlay.classList.remove("hidden");
        });

        // hide the overlay and the dialog
        closeButton.addEventListener("click", function() {
            dialog.classList.add("hidden");
            overlay.classList.add("hidden");
        });
    </script>
    <script>
        function delay500() {
            setTimeout(function() {}, 500);
        }
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 20, 2023 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text
            // if (distance < 0) {
            //   clearInterval(x);
            //   document.getElementById("demo").innerHTML = "EXPIRED";
            // }
        }, 1000);
    </script>
    <script>
        $('#guest_name').keyup(function(e) {
            $('#alert-name').removeClass('block');
            $('#alert-name').addClass('hidden');
        });
        $('#guest_relationship').keyup(function(e) {
            $('#alert-relationship').removeClass('block');
            $('#alert-relationship').addClass('hidden');
        });
        $('#guest_wishes').keyup(function(e) {
            $('#alert-wishes').removeClass('block');
            $('#alert-wishes').addClass('hidden');
        });
        //action create post
        $('#submit_wish').click(function(e) {
            e.preventDefault();

            //define variable
            let name = $('#guest_name').val();
            let relationship = $('#guest_relationship').val();
            let wishes = $('#guest_wishes').val();
            let token = $("meta[name='csrf-token']").attr("content");

            //ajax

            $.ajax({

                url: `/wish`,
                type: "POST",
                cache: false,
                data: {
                    "name": name,
                    "relationship": relationship,
                    "wishes": wishes,
                    "_token": token
                },
                success: function(response) {

                    //show success message
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    //data post
                    let post = `
                    <div class="w-full px-2 py-2 mb-2 rounded-md shadow-lg text-start bg-primary">
                                <div class="grid grid-cols-2">
                                    <div class="">
                                        <p class="text-lg font-extrabold">${response.data.name}</p>
                                    </div>
                                    <div class="text-sm text-end">
                                        <span class="bg-orange-300 badge">${response.data.relationship}</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1">
                                    <p class="font-medium">
                                        ${response.data.wishes}
                                    </p>
                                </div>
                            </div>
                    `;

                    //append to table
                    $('#list-wishes').append(post);

                    //clear form
                    $('#guest_name').val('');
                    $('#guest_relationship').val('');
                    $('#guest_wishes').val('');


                },
                error: function(error) {
                    if (error.responseJSON.name[0]) {
                        console.log(error.responseJSON.name[0]);

                        //show alert
                        $('#alert-name').removeClass('hidden');
                        $('#alert-name').addClass('block');

                        //add message to alert
                        $('#alert-name').html(error.responseJSON.name[0]);
                    }

                    if (error.responseJSON.relationship[0]) {
                        console.log(error.responseJSON.name[0]);

                        //show alert
                        $('#alert-relationship').removeClass('hidden');
                        $('#alert-relationship').addClass('block');

                        //add message to alert
                        $('#alert-relationship').html(error.responseJSON.relationship[0]);
                    }

                    if (error.responseJSON.wishes[0]) {
                        console.log(error.responseJSON.name[0]);

                        //show alert
                        $('#alert-wishes').removeClass('hidden');
                        $('#alert-wishes').addClass('block');

                        //add message to alert
                        $('#alert-wishes').html(error.responseJSON.wishes[0]);
                    }

                }

            });

        });
    </script>
</body>

</html>
