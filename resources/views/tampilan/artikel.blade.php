@extends('layout.dashboard')

@section('main')
    <!-- Page Heading -->

    <h1 class="mb-2 text-gray-800">Artikel</h1>

    <p class="mb-4">Jika tidak mengerti dalam pengisian artikel. Silahkan download artikel ini</a>.</p>



    <!-- DataTales Example -->

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <div class="row">
                <div class="col-8 ms-3 d-flex align-items-end">
                    <h4 class="m-0 font-weight-bold text-primary align-text-bottom">Artikel</h4>
                </div>
                <div class="col text-end">
                    <div class="searching">
                        <form action="/admin/dashboard/artikel">
                            <input type="text" placeholder="Cari artikel" name="search" value="{{ request('search') }}">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">

            @if (session('success'))
                {{-- <div class="sent-message">{{ session('success') }}</div> --}}
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul artikel</th>
                            <th>Gambar Artikel</th>
                            <th>Kategori Artikel</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}

                    <tbody>
                        @foreach ($artikel as $item)
                            <tr>
                                <td style="max-width:500px">{{ $item->judul }}</td>
                                <td style="max-width:400px">
                                    <img src="{{ asset('upload/thumbnail/' . $item->foto) }}" alt=""
                                        class="rounded-circle-profile" width="70%">
                                </td>
                                <td> {{ $item->kategori }}</td>
                                <td style="max-width:400px"> {!! strip_tags(Str::limit($item->deskripsi, 150)) !!}</td>
                                <td>
                                    <a href="{{ route('editartikel', ['slug' => $item->slug]) }}"
                                        class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                    <a href="{{ route('delartikel', ['id' => $item->id]) }}"
                                        class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <div class="d-flex justify-content-center">
                    {{ $artikel->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
