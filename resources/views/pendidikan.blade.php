@extends('layout.homepage')
@section('data')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Pendidikan</h2>
                        <p>
                            Pendidikan di PONPES Miftahul Falah terbagi menjadi dua yaitu : Pendidikan Formal, dan
                            Pendidikan Non Formal. Pendidikan Formal adalah Pendidikan formal adalah jalur pendidikan yang
                            terstruktur dan berjenjang yang terdiri atas pendidikan dasar, pendidikan menengah, dan
                            pendidikan tinggi. Pendidikan nonformal adalah jalur pendidikan di luar pendidikan formal
                            yang dapat dilaksanakan secara terstruktur dan berjenjang. Pendidikan Non Formal adalah
                            Pendidikan nonformal adalah jalur pendidikan di luar pendidikan formal yang dapat dilaksanakan
                            secara terstruktur dan berjenjang. Berikut adalah deskripsi masing masing pendidikan pada PONPES
                            Miftahul Falah :
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <div class="container mt-5 mb-5 shadow p-3 bg-body rounded">
            <div class="row">
                <div class="col ">
                    <div class="text-center mb-5 text-decoration-underline"><h5>Pendidikan Formal</h3></div>
                    <ol>
                        <li class="mb-4">MI Miftahul Falah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3 mt-3" style="text-align: justify">Madrasah Ibtidaiyah adalah jenjang dasar pada pendidikan formal di
                            Indonesia, setara dengan Sekolah Dasar, yang pengelolaannya dilakukan oleh Kementerian Agama.
                        </div>
                        <li class="mb-4">MTs Miftahul Falah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3 mt-3" style="text-align: justify">Madrasah Tsanawiyah adalah jenjang dasar pada pendidikan formal di
                            Indonesia, setara dengan sekolah menengah pertama, yang pengelolaannya dilakukan oleh Departemen
                            Agama. Pendidikan madrasah tsanawiyah ditempuh dalam waktu 3 tahun, mulai dari kelas 7 sampai
                            kelas 9.</div>
                        <li class="mb-4">MA Miftahul Falah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3 mt-3" style="text-align: justify">Madrasah aliyah adalah jenjang pendidikan menengah pada pendidikan
                            formal di Indonesia yang setara dengan sekolah menengah atas. Pengelolaannya dilakukan oleh
                            Kementerian Agama. Jenjang kelas dalam waktuh tempuh madrasah aliyah sama seperti sekolah
                            menengah atas.</div>
                    </ol>
                </div>
                <div class="col ">
                    <div class="text-center mb-5 text-decoration-underline"><h5>Pendidikan Non formal</h5></div>
                    <ol>
                        <li class="mb-4">Tahfidzul Qur’an</li>
                        <img src="{{ asset('images\profilsekolah\Ngaji bersa,a.jpg') }} " style="width: 500px"><br>
                        <div class="text-grey mb-3 mt-3" style="text-align: justify">Tahfidz Al-Quran adalah proses untuk memelihara, menjaga dan
                            melestarikan kemurnian Al-Quran yang diturunkan kepada Rasulullah Shallallahu 'Alaihi Wasallam
                            di luar kepala agar tidak terjadi perubahan dan pemalsuan</div>
                        <li class="mb-4">Madrasah Diniyah</li>
                        <img src="{{ asset('images\profilsekolah\Ngaji santri.jpg') }}" style="width: 500px"><br>
                        <div class="text-grey mb-3 mt-3" style="text-align: justify">Madrasah diniyah adalah lembaga pendidikan yang keseluruhan mata
                            pelajarannya adalah mata pelajaran agama Islam yang memungkinkan peserta didiknya menguasai
                            materi ilmu agama secara baik dikarenakan padat dan lengkapnya materi ilmu agama yang disajikan
                            dalam proses pembelajaran di madrasah diniyah.</div>
                        <li class="mb-4">Majelis Taklim</li>
                        <img src="{{ asset('images\profilsekolah\taklim.webp') }}" style="width: 500px"><br>
                        <div class="text-grey mb-3 mt-3" style="text-align: justify">Majelis Taklim adalah sebuah sebutan untuk lembaga pendidikan non-formal
                            Islam yang memiliki kurikulum sendiri, diselenggarakan secara berkala dan teratur, dan diikuti
                            oleh jamaah yang relatif banyak. Majelis Taklim berasal dari bahasa Arab, yang terdiri atas dua
                            kata, yaitu majelis dan taklim.</div>
                    </ol>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
@endsection
