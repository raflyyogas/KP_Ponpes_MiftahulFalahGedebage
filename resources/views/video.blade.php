@extends('layout.homepage')

@section('data')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->

        <section id="breadcrumbs" class="breadcrumbs">

            <div class="breadcrumb-hero">

                <div class="container">

                    <div class="breadcrumb-hero">

                        <h2>Video</h2>

                        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia

                            voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum

                            praesentium. </p>

                    </div>

                </div>

            </div>

        </section><!-- End Breadcrumbs -->

        <section id="portfolio" class="portfolio">

            <div class="container">



                <div class="row">
                    <div class="col d-flex justify-content-center" data-aos="fade-up">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-Ibtidaiyah">Madrasah Ibtidaiyah</li>
                            <li data-filter=".filter-Tsanawiyah">Madrasah Tsanawiyah</li>
                            <li data-filter=".filter-Aliyah">Madrasah Aliyah</li>
                        </ul>
                    </div>
                </div>



                <div class="row portfolio-container" data-aos="fade-up">



                    @foreach ($video as $data)
                        @if ($data->kategori == 'Madrasah Ibtidaiyah')
                            <div class="col col-md-6 portfolio-item filter-Ibtidaiyah">

                                <div class="portfolio-video">
                                    <p class="text-center"><iframe width="560" height="340"
                                            src="https://www.youtube.com/embed/{{ substr($data->link, -11) }}"
                                            title="Youtube portfolio Player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                                            allowfullscreen>

                                        </iframe></p>

                                </div>

                            </div>
                        @elseif ($data->kategori == 'Madrasah Tsanawiyah')
                            <div class="col col-md-6 portfolio-item filter-Tsanawiyah">

                                <div class="portfolio-video">

                                    <p class="text-center"><iframe width="560" height="340"
                                            src="https://www.youtube.com/embed/{{ substr($data->link, -11) }}"
                                            title="Youtube portfolio Player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                                            allowfullscreen>

                                        </iframe></p>

                                </div>

                            </div>
                        @elseif ($data->kategori == 'Madrasah Aliyah')
                            <div class="col col-md-6 portfolio-item filter-Aliyah">

                                <div class="portfolio-video">

                                    <p class="text-center"><iframe width="560" height="340"
                                            src="https://www.youtube.com/embed/{{ substr($data->link, -11) }}"
                                            title="Youtube portfolio Player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                                            allowfullscreen>

                                        </iframe></p>

                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>



            </div>

        </section><!-- End portfolio Section -->

        <!-- ======= Team Section ======= -->


        {{-- <section class="team" id="team">

            <div class="container">

                <div class="row">

                    @foreach ($portfolio as $data)
                        <div class="col-6">

                            <p class="text-center"><iframe width="560" height="340"
                                    src="https://www.youtube.com/embed/{{ substr($data->link, -11) }}"
                                    title="Youtube portfolio Player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                                    allowfullscreen>

                                </iframe></p>

                        </div>
                    @endforeach

                </div>

            </div>

        </section> --}}

    </main><!-- End #main -->
@endsection
