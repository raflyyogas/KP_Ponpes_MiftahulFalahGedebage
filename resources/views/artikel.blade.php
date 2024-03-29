@extends('layout.homepage')

@section('data')
    <main id="main">

        @if ($count > 0)
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                        <li><a class="text-primary" href="{{ route('blog') }}">Artikel</a></li>
                        <li>{{ $item->judul }}</li>
                    </ol>
                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Single Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-8 entries">
                            <article class="entry entry-single">
                                <div class="entry-img">
                                    <img src="{{ asset('upload/thumbnail/' . $item->foto) }}" alt=""
                                        class="img-fluid" style="min-width:100px">
                                </div>
                                <h2 class="entry-title">
                                    <a href="#" style="word-wrap: break-word;">{{ $item->judul }}</a>
                                </h2>
                                <div class="entry-meta">
                                    <ul>

                                        <li class="d-flex align-items-center"><i
                                                class="bi bi-person"></i>{{ $item->penulis }}

                                        </li>

                                        <li class="d-flex align-items-center"><i
                                                class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}

                                        </li>
                                        <li class="d-flex align-items-center"><i
                                                class="bi bi-tags-fill"></i>{{ $item->kategori }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content" style="word-wrap: break-word;">
                                    {!! $item->deskripsi !!}
                                </div>
                            </article><!-- End blog entry -->
                        </div><!-- End blog entries list -->
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <h3 class="sidebar-title">Search</h3>
                                <div class="sidebar-item search-form">
                                    <form action="/blog">
                                        <input type="text" placeholder="Cari artikel" name="search"
                                            value="{{ request('search') }}">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                </div><!-- End sidebar search formn-->
                                <h3 class="sidebar-title">Kategori</h3>
                                <div class="sidebar-item search-form">
                                    <ul>
                                        <li><a href="{{ route('ktgri', ['kategori' => 'Madrasah Ibtidaiyah']) }}"
                                                class="text-black">Madrasah
                                                Ibtidaiyah</a></li>
                                        <li><a href="{{ route('ktgri', ['kategori' => 'Madrasah Tsanawiyah']) }}"
                                                class="text-black">Madrasah
                                                Tsanawiyah</a></li>
                                        <li><a href="{{ route('ktgri', ['kategori' => 'Madrasah Aliyah']) }}"
                                                class="text-black">Madrasah
                                                Aliyah</a></li>
                                    </ul>
                                </div>
                                <h3 class="sidebar-title">Recent Posts</h3>
                                <div class="sidebar-item recent-posts">
                                    @foreach ($latest as $data)
                                        <div class="post-item clearfix">
                                            <img src="{{ asset('upload/thumbnail/' . $data->foto) }}"
                                                alt="{{ Str::limit($data->judul, 50) }}" style="word-wrap: break-word;">
                                            <h4><a href="{{ route('slug', ['slug' => $data->slug]) }}"
                                                    style="word-wrap: break-word;">{{ Str::limit($data->judul, 50) }}</a>
                                            </h4>
                                            <time
                                                datetime="2020-01-01">{{ \Carbon\Carbon::parse($data->created_at)->format('j F Y') }}</time>
                                        </div>
                                        <?php $i++; ?>
                                        @if ($i > 4)
                                        @break
                                    @endif
                                @endforeach
                            </div><!-- End sidebar recent posts-->
                        </div><!-- End blog sidebar -->
                    </div>
                </div>
        </section><!-- End Blog Single Section -->
    @else
        <!-- ======= Breadcrumbs ======= -->

        <section id="breadcrumbs" class="breadcrumbs">

            <div class="container">
                <ol>
                    <li><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                    <li><a>Artikel</a></li>
                </ol>

            </div>

        </section><!-- End Breadcrumbs -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <p> Data Not found. Please go back into <a href="{{ route('blog') }}" class="text-primary">Artikel</a>
                </p>
            </div>
        </section>
    @endif



</main><!-- End #main -->
@endsection
