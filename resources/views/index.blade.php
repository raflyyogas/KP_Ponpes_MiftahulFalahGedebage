@extends('layout.homepage')

@section('data')
    <!-- ======= Hero Section ======= -->

    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Welcome to Pondok Pesantren Miftahul Falah </h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-end">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">
                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box py-5">
                                    <i class="bi bi-people"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $mi->total }}"
                                        class="purecounter">0</span>
                                    <p>Santri MI</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box py-5">
                                    <i class="bi bi-people"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $mts->total }}"
                                        class="purecounter">0</span>
                                    <p>Santri MTs</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box py-5">
                                    <i class="bi bi-people"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $ma->total }}"
                                        class="purecounter">0</span>
                                    <p>Santri MA</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box pb-5 pt-0 pt-lg-5">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $prestasi->total }}"
                                        class="purecounter">0</span>
                                    <p>Total Prestasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 video-box align-self-baseline position-relative">
                        <img src="{{ asset('images\profilsekolah\Drone.jpg') }}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=ud2g9PCV1bk&ab_channel=MIFAMediaChannel"
                            class="glightbox play-btn mb-4"></a>
                    </div>
                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>Sambutan Mudir 'Am</h3>
                        <br>
                        <p style="text-align:justify;">
                            Assalamualaikum warohmatullahi wabarokatuh.
                            Tiada kata yang paling mulia kita ucapkan hanyalah Ucapan Puji Syukur yang tak terhingga kita
                            panjatkan pada Allah SWT, yang selalu memberikan kesehatan dan keselamatan serta perlindungannya
                            sehingga kita dapat menjalankan aktivitas sehari-hari.
                            Begitu pula tak lupa kita sampaikan Salam dan Shalawat kepada Nabi Muhammad SAW beserta
                            keluarga, sahabat dan kita semua selaku umatnya yang selalu setia mengamalkan ajaran-ajaran
                            agama islam yang dapat memanusiakan manusia yang sampai saat ini kita rasakan mafaatnya.
                            YPI MIFTAHUL FALAH BANDUNG adalah lembaga yang bergerak dalam bidang Sosial, Pendidikan dan
                            Keagamaan untuk memberikan nilai dan manfaat kepada masyarakat. Dari dasar itu lahirlah
                            program-program diantaranya adalah pembentukan lembaga pendidikan yaitu Pondok Pesantren, MI,
                            Mts, MA, Diniyah dan Majlis Ta'lim guna melahirkan generasi muda Islam yang lebih cerah,
                            memiliki rasa percaya diri, mandiri, saling menghargai, dan mempunyai jiwa sosial.
                            Kami berusaha mengikuti perkembangan zaman dengan meningkatkan penggunaan teknologi informasi,
                            salah satunya dengan memanfaatkan website secara optimal. Dengan demikian arus informasi akan
                            menjadi lebih efektif dan efisien dengan adanya akses internet yang memadai. Akhir kata kami
                            memberikan iringan do’a semoga website ini dapat
                            menjadikan manfaat dan barokah untuk kita semua. Kepada Allah Swt kita bertawakal dan
                            menyerahkan diri, semoga kita selalu dalam bimbinganNya serta diberi kekuatan, kesehatan dan
                            kemampuan dalam mengemban amanah mulia ini dengan sebaik-baiknya. Aamiin Yaa Rabbalamiin.
                            Wassalamu'alaikum warahmatullahi wa barakaatuh.
                        </p>

                        <p>
                            - KH. Agus Ahmad Syakur,Lc., M.H -
                        </p>

                        <p>
                            Mudir 'Am Pesantren Miftahul Falah
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Profile</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1"><span
                                        class="ms-2">Sejarah</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><span class="ms-2">Visi</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3"><span class="ms-2">Misi</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4"><span class="ms-2">Karakter
                                        Santri</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="details order-2 order-lg-1">
                                        <h3>Sejarah</h3>
                                        <p class="text-dark" style="text-align:justify;">Pondok pesantren Miftahul
                                            falah ini didirikan sudah sejak tahun 1930 7 hal ini didasarkan pada sebuah
                                            piagam berdirinya pondok pesantren ini yang didirikan oleh kyai haji Ahmad
                                            Syafii dengan tujuan supaya Ada apa perkembangan pendidikan agama Islam untuk
                                            warga masyarakat Gedebage rancabolang dan meskipun pondok pesantren Miftahul
                                            falah ini sudah cukup lama berdiri tapi perkembangan dari pesantren Miftahul
                                            falah dinilai memiliki pengaruh dan masih tetap bertahan hingga saat ini hal
                                            tersebut disebabkan karena adanya keunggulan keunggulan atau juga faktor yang
                                            dipunyai pondok pesantren ini sehingga bisa menjadi penunjang dari perkembangan
                                            pondok pesantren Miftahul falah ini
                                            Jadi pondok pesantren ini seperti yang sebelumnya disebutkan didirikan oleh kyai
                                            haji Ahmad Syafi'i tujuannya agar adanya perkembangan pendidikan agama Islam
                                            untuk masyarakat yang ada di sekitar Gedebage Rancabolang kemudian di tahun 1990
                                            pondok pesantren ini yaitu pondok pesantren Miftahul falah membuka sebuah
                                            yayasan yang tujuannya adalah sebagai wadah untuk lembaga formal ataupun non
                                            formal di pondok pesantren ini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="details order-2 order-lg-1">
                                        <h3>Visi</h3>
                                        <p class="text-dark" style="text-align:justify;">Sebaik-baiknya manusia adalah yang
                                            bermanfaat bagi manusia lainnya
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="details order-2 order-lg-1">
                                        <h3>Misi</h3>
                                        <p class="text-dark" style="text-align:justify;">
                                        <ol>
                                            <li>Mencetak santri rajin beribadah dan berakhlak mulia.</li>
                                            <li>Mencetak santri gemar membaca dan produktif.</li>
                                            <li>Mencetak santri hidup mandiri dan sederhana.</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="details order-2 order-lg-1">
                                        <h3>10 Karakter Santri Pesantren Miftahul Falah</h3>
                                        <p class="text-dark" style="text-align:justify;">
                                        <ol>
                                            <li>Salimul Aqidah (Beraqidah yang bersih)</li>
                                            <li>Shahihul Ibadah (Beribadah dengan benar)</li>
                                            <li>Mutsaqoful Fikri (Berwawasan Luas)</li>
                                            <li>Qowiyul Jismi (Mempunyai fisik yang kuat)</li>
                                            <li>Matinul Khuluq (Berakhlak tinggi)</li>
                                            <li>Mujahidu Linafsi (Bersemangat juang tinggi)</li>
                                            <li>Nafi'un Liqoirihi (Bermanfaat bagi orang lain)</li>
                                            <li>Qodirun 'Alal Kasbi (Mandiri)</li>
                                            <li>Haritsun 'Ala Waqtihi (Disiplin waktu)</li>
                                            <li>Munadzomun Fi Su'unihi (Menata urusannya)</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Departments Section -->

        <section id="services" class="services ">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pendidikan PONPES Miftahul Falah</h2>
                    <p>Pendidikan yang disediakan oleh PONPES Miftahul Falah</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-mortarboard" style="color: #ff689b;"></i></div>
                                <h4 class="title"><a href="{{ route('mi') }}">Madrasah Ibtidaiyah</a></h4>
                                <p class="description">Madrasah Ibtidaiyah memiliki visi membentuk pribadi siswa MI
                                    Miftahul
                                    Falah yang berakhlak mulia, kreatif dan berprestasi.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bi bi-mortarboard" style="color: #e9a906;"></i></div>
                                <h4 class="title"><a href="{{ route('mts') }}">Madrasah Tsanawiyah</a></h4>
                                <p class="description">Madrasah Tsanawiyah memiliki visi membentuk pribadi siswa MTs.
                                    Miftahul
                                    Falah Kota Bandung yang berakhlak mulia, berwawasan luas dan berprestasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-mortarboard"style="color: #3fcdc7;"></i></i>
                            </div>
                            <h4 class="title"><a href="{{ route('ma') }}">Madrasah Aliyah</a></h4>
                            <p class="description">MA. Miftahul Falah didirikan thaun 2014 atas prakarsa KH. Drs. Ahmad
                                Djahid dan KH. Agus Ahmad Syakur, LC, MH. Kurikulum sekolah ini mengintegrasikan kurikulum
                                kementrian Agama dan Kurikulum Pesantren, yang mana ajaran dan nilai-nilai Islam melekat
                                dalam semua mata pelajaran dan semua kegiatan sekolah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Hidroponik Section ======= -->
        <section class="hidroponik">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-5 ">
                        <h4>#EXPLORE</h4>
                        <h3 class="fw-bold">HIDROPONIK UNGGUL BUATAN PONPES MIFTAHUL FALAH</h3>
                        <h5>Mifafarm merupakan kebun Hidroponik Miftahul Falah yang berlokasi di Pondok Pesantren Miftahul
                            Falah Jl. Gedebage Selatan No.115, Rancabolang, Kec. Rancasari, Kota Bandung, Jawa Barat 40296
                        </h5>
                        <div class="text-center">
                            <a href="{{ route('hidroponik') }}" class="btn">BELI SEKARANG</a>
                        </div>
                    </div>
                    <div class="col-7 ">
                        <img src="assets/img/sayur1.jpeg">
                    </div>
                </div>
            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Berita dan Informasi</h2>
                    <p>Informasi & Berita Terbaru PONPES Miftahul Falah</p>
                </div>

                <div class="row">
                    @foreach ($blog as $item)
                        <div class="col-sm-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ asset('upload/thumbnail/' . $item->foto) }}"
                                        alt="{{ $item->judul }}" class=" img-fluid" style="">
                                </div>

                                <div class="meta">
                                    <span
                                        class="post-date">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</span>
                                </div>

                                <h3 class="post-title" style="word-wrap: break-word;">{{ Str::limit($item->judul, 50) }}
                                </h3>
                                <p style="word-wrap: break-word;"> {!! strip_tags(Str::limit($item->deskripsi, 150)) !!}</p>

                                <a href="{{ route('slug', ['slug' => $item->slug]) }}"
                                    class="readmore stretched-link fixed-bottom">
                                    <div class=""><span>Read More</span><i class="bi bi-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Silahkan hubungi kami</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch mt-3">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Gedebage Selatan No.115, Rancabolang, Kec. Rancasari, Kota Bandung, Jawa Barat 40296
                                </p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>ponpesmifa.bdg@gmail.com</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p><a href="https://api.whatsapp.com/send/?phone=6287720036339&text=Assalamualaikum.+Saya+ingin+tahu+lebih+tentang+Pondok+Pesantren+Miftahul+Falah+&app_absent=0"
                                        class="text-black">087720036339</a>
                                </p>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4420253251965!2d107.6834124145591!3d-6.957070594973759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c28de0e8a8eb%3A0x740126b1aa5580c0!2sYayasan%20Pondok%20Pesantren%20Miftahul%20Falah!5e0!3m2!1sid!2sid!4v1653589909015!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-xl-6 mt-3">
                        @if (session('success'))
                            {{-- <div class="sent-message">{{ session('success') }}</div> --}}
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                            </div>
                        @endif

                        <form action="{{ route('pesan') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama Lengkap"required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">NO HP</label>
                                    <input type="number" class="form-control" name="nohp" id="nohp"
                                        placeholder="cth: 082123xxxxxx" required>
                                </div>
                            </div>

                            <div class="form-group mt-4 mb-4">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subjek" required>
                            </div>

                            <div class="form-group mt-4 mb-4">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" placeholder="Pesan" required></textarea>
                            </div>

                            <div class="text-center mt-2">
                                <button type="submit" class="btn text-white rounded-pill mx-5"
                                    style="background:#6c7ba1;">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
