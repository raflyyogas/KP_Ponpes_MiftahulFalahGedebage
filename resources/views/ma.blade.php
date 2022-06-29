@extends('layout.homepage')

@section('data')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up" data-aos-delay="100">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Madrasah Aliyah</h2>
                        <p>MA Miftahul Falah didirikan tahun 2014 atas prakarsa KH. Drs. Ahmad Djahid dan KH. Agus Ahmad
                            Syakur, Lc, MH. Kurikulum sekolah ini mengintegrasikan kurikulum kementrian Agama dan Kurikulum
                            Pesantren, yang mana ajaran dan nilai-nilai Islam melekat dalam semua mata pelajaran dan semua
                            kegiatan sekolah.</p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        {{-- Extrakurikuler --}}
        {{-- <div class="container-fluid">
            <section id="services" class="services " data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <h3 class="text-center mb-5">Extrakurikuler</h3>
                    <div class="row">
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-geo" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a>Seni Kaligrafi</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-geo" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a>Pramuka</a></h4>

                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-geo" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a>Sanpara / Paskibra</a></h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-geo" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a>Kesenian Islami</a></h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-geo" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a>Paduan Suara</a></h4>

                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-geo" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a>Futsal</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div> --}}
        {{-- End Extrakurikuler --}}

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <section id="services" class="services ">
                <div class="container ">
                    <h3 class="mb-3 text-center fw-bold">Syarat Pendaftaran</h3>
                    <ul>
                        <li>Lulusan MTs/SMP</li>
                        <li>Mengisi formulir pendaftaran</li>
                        <li>Foto Copy SKHUN dan Ijazah MTs/SMP</li>
                        <li>Foto Copy Kartu Keluarga</li>
                        <li>Foto Copy Rapor Kelas VII, VIII, IX</li>
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
