@extends('layout.homepage')

@section('data')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up" data-aos-delay="100">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Madrasah Tsanawiyah</h2>
                        <p>Madrasah Tsanawiyah memiliki visi yang membentuk pribadi MTs Miftahul Falah Kota Bandung yang
                            berakhlak mulia, berwawasan luas dan berprestasi.</p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        {{-- Extrakurikuler --}}
        <div class="container-fluid">
            <section id="services" class="services " data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <h3 class="text-center mb-5">Extrakurikuler</h3>
                    <div class="row">
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <i class="fa-solid fa-book-quran" style="color: #5ebbe0;"></i>
                                </div>
                                <h4 class="title"><a>Tahfid</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    {{-- <i class="bi bi-geo" style="color: #ff689b;"></i> --}}
                                    <i class="fa-solid fa-drum-steelpan" style="color: #867359;"></i>
                                </div>
                                <h4 class="title"><a>Hadroh</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <img src="https://cdn-icons.flaticon.com/png/128/1894/premium/1894836.png?token=exp=1661099269~hmac=1c6d515319bddabae4a4de008b90e914" width="64" height="64">
                                </div>
                                <h4 class="title"><a>Marawis</a></h4>

                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2884/2884518.png" width="64" height="64">
                                </div>
                                <h4 class="title"><a>Qosidah</a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <a href="https://www.flaticon.com/free-icon/arabic-language_7325574" class="view link-icon-detail" title="Arabic language" data-id="7325574" data-src="?term=arabian&amp;page=1&amp;position=3">
                                        <img src="https://cdn-icons-png.flaticon.com/128/7325/7325574.png" data-src="https://cdn-icons-png.flaticon.com/128/7325/7325574.png" alt="Arabic language " title="Arabic language " width="64" height="64" class="lzy lazyload--done" srcset="https://cdn-icons-png.flaticon.com/128/7325/7325574.png 4x">
                                      </a>                                </div>
                                <h4 class="title"><a>Bahasa Arab</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/128/197/197374.png" width="64" height="64">                                
                                </div>
                                <h4 class="title"><a>English Club</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/128/4268/4268769.png" width="64" height="64">                                
                                </div>                                
                                <h4 class="title"><a>Paduan Suara</a></h4>

                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="fa-solid fa-futbol" style="color: #000000;"></i></div>
                                <h4 class="title"><a>Futsal</a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <img src="https://cdn-icons.flaticon.com/png/128/1880/premium/1880745.png?token=exp=1661099770~hmac=c8455c62e8cb3380f3e776afba6edf01" width="64" height="64">                                
                                </div>
                                <h4 class="title"><a>Bulutangkis</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    <img src="https://cdn-icons.flaticon.com/png/128/3396/premium/3396051.png?token=exp=1661100743~hmac=0c19fafae3083904b59f3e916bd57b6e" width="64" height="64" >                                
                                </div>
                                <h4 class="title"><a>Drum Band</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bxs-pyramid" style="color: hsl(32, 58%, 38%);"></i></div>
                                <h4 class="title"><a>Pramuka</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- End Extrakurikuler --}}

        <div class="container-fluid" style="background-color:#c1cfc0;" data-aos="fade-up" data-aos-delay="100">
            <section id="services" class="services ">
                <div class="container ">
                    <h3 class="mb-3 text-center fw-bold">Syarat Pendaftaran</h3>
                    <ul>
                        <li>Lulus MI/SD</li>
                        <li>Mengisi formulir pendaftaran</li>
                        <li>Foto Copy SKHUN dan Ijazah (Lulusan tahun ajaran sebelumnya)</li>
                        <li>Foto Copy Akta Kelahiran</li>
                        <li>Kelakuan baik dari sekolah</li>
                        <li>Foto terbaru 3x4: 4 lembar (Putri berjilbab)</li>
                        <li>Foto Copy Kartu Keluarga</li>
                        <li>NISN</li>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="btn rounded-pill text-white mx-5"
                            style="background:#6c7ba1">Send Message</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
