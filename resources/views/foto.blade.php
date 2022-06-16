@extends('layout.homepage')
@section('data')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Galeri Foto</h2>
                        <p>Galeri foto ini merupakan kumpulan foto dokumentasi mengenai kegiatan yang dilaukan di Pesantren
                            Miftahul Falah</p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                {{-- <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div> --}}

                <div class="row portfolio-container" data-aos="fade-up">

                    @foreach ($foto as $data)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('upload/gallery-foto/' . $data->foto) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $data->judul }}</h4>
                                    <p>{{ Str::limit($data->deskripsi, 10) }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('upload/gallery-foto/' . $data->foto) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $data->deskripsi }}"><i class="bx bx-plus"></i></a>
                                        {{-- <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
