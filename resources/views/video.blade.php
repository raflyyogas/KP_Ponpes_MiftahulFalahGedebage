@extends('layout.homepage')
@section('data')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Galeri Video</h2>
                        <p>Galeri video ini merupakan kumpulan video dokumentasi mengenai kegiatan yang dilaukan di
                            Pesantren
                            Miftahul Falah. </p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->

        <section class="team" id="team">
            <div class="container">
                <div class="row">
                    @foreach ($video as $data)
                        <div class="col-6">
                            <p class="text-center"><iframe width="560" height="340"
                                    src="https://www.youtube.com/embed/{{ substr($data->link, -11) }}"
                                    title="Youtube Video Player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                                    allowfullscreen>
                                </iframe></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
