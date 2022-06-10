@extends('layout.homepage')
@section('data')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Pendidikan</h2>
                        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia
                            voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum
                            praesentium. </p>
                    </div>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <div class="container mt-5 mb-5 shadow p-3 bg-body rounded">
            <div class="row">
                <div class="col ">
                    <div class="text-center mb-3 text-decoration-underline">Pendidikan Formal</div>
                    <ol>
                        <li>MI Miftahul Falah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
                            distinctio corrupti asperiores vero
                            animi neque pariatur illo velit molestiae in!</div>
                        <li>MTs Miftahul Falah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
                            distinctio corrupti asperiores vero
                            animi neque pariatur illo velit molestiae in!</div>
                        <li>MA Miftahul Falah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
                            distinctio corrupti asperiores vero
                            animi neque pariatur illo velit molestiae in!</div>
                        <li class="text-decoration-underline fw-bold"><i>Her Anjim</i></li>
                    </ol>
                </div>
                <div class="col ">
                    <div class="text-center mb-3 text-decoration-underline">Pendidikan Non formal</div>
                    <ol>
                        <li>Tahfidzul Qur’an</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
                            distinctio corrupti asperiores vero
                            animi neque pariatur illo velit molestiae in!</div>
                        <li>Madrasah Diniyah</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
                            distinctio corrupti asperiores vero
                            animi neque pariatur illo velit molestiae in!</div>
                        <li>Majelis Taklim</li>
                        <img src="{{ asset('images\profilsekolah\logo.jpg') }}"><br>
                        <div class="text-grey mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
                            distinctio corrupti asperiores vero
                            animi neque pariatur illo velit molestiae in!</div>
                        <li class="text-decoration-underline fw-bold"><i>Her Memegh</i></li>
                    </ol>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
@endsection
