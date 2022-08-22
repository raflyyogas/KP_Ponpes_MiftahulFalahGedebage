@extends('layout.homepage')

@section('data')
    <main id="main">



        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Artikel</h2>
                        <p>Sekumpulan artikel yang diposting oleh Admin Miftahul Falah</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <ol>
                    <li><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                    <li>Artikel</li>
                </ol>
            </div>

        </section><!-- End Breadcrumbs -->



        <!-- ======= Blog Section ======= -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">
                        @foreach ($blog as $item)
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="{{ asset('upload/thumbnail/' . $item->foto) }}" alt=""
                                        class="img-fluid" style="min-width:100px">
                                </div>
                                <h2 class="entry-title" style="word-wrap: break-word;">{{ $item->judul }}
                                </h2>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i
                                                class="bi bi-person"></i>{{ $item->penulis }}</li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time
                                                datetime="2020-01-01">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</time>
                                        </li>
                                        <li class="d-flex align-items-center"><i
                                                class="bi bi-tags-fill"></i>{{ $item->kategori }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content" style="word-wrap: break-word;">
                                    {!! strip_tags(Str::limit($item->deskripsi, 150)) !!}
                                </div>
                                <div class="text-end mt-3">
                                    <a href="{{ route('slug', ['slug' => $item->slug]) }}"
                                        style="

                                                                                display: inline-block;

                                                                                background: #6c7ba1;

                                                                                color: #fff;

                                                                                padding: 6px 20px;

                                                                                transition: 0.3s;

                                                                                font-size: 14px;

                                                                                border-radius: 4px;">Read

                                        More
                                    </a>
                                </div>
                            </article><!-- End blog entry -->
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $blog->links() }}
                        </div>
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
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Section -->
</main><!-- End #main -->
@endsection
