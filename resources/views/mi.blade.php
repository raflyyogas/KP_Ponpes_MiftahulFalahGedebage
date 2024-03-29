@extends('layout.homepage')

@section('data')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up" data-aos-delay="100">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Madrasah Ibtidaiyah</h2>
                        <p>Madrasah Ibtidaiyah memiliki visi yang membentuk pribadi siswa MI Miftahul Falah yang berakhlak
                            mulia, berwawasan luas, kreatif dan berprestasi.</p>
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
                                <div class="icon"><i class="bi bi-brush" style="color: #3fa24c;"></i></div>
                                <h4 class="title"><a>Seni Kaligrafi</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bxs-pyramid" style="color: hsl(32, 58%, 38%);"></i></div>
                                <h4 class="title"><a>Pramuka</a></h4>

                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon">
                                    {{-- <i class="bi bi-geo" style="color: #eac646;"></i> --}}
                                    <i class="fa-solid fa-person" style="color: #bea342;"></i>
                                    {{-- <i class="fa-regular fa-person"></i> --}}
                                </div>
                                <h4 class="title"><a>Sanpara / Paskibra</a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="fas fa-star-and-crescent" style="color: #5ebbe0;"></i></div>
                                <h4 class="title"><a>Kesenian Islami</a></h4>
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
                </div>
            </section>
        </div>
        {{-- End Extrakurikuler --}}

        <div class="container-fluid" style="background-color:#c1cfc0;" data-aos="fade-up" data-aos-delay="100">
            <section id="services" class="services ">
                <div class="container ">
                    <h3 class="mb-3 text-center fw-bold">Syarat Pendaftaran</h3>
                    <ul>
                        <li>Mengisi formulir pendaftaran</li>
                        <li>Foto Copy Akta Kelahiran</li>
                        <li>Foto terbaru 3x4: 4 lembar (Putri berjilbab)</li>
                        <li>Foto Copy Kartu Keluarga</li>
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
