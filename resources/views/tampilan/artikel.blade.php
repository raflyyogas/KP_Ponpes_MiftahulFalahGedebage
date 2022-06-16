@extends('layout.dashboard')
@section('main')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Artikel</h1>
    <p class="mb-4">Jika tidak mengerti dalam pengisian artikel. Silahkan download artikel ini</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
        </div>
        <div class="card-body">

            @if (session('success'))
                {{-- <div class="sent-message">{{ session('success') }}</div> --}}
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Artikel</th>
                            <th>Gambar Artikel</th>
                            <th>Judul artikel</th>
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
                                <td style="max-width:20px">{{ $item->id }}</td>
                                <td style="max-width:200px">
                                    <img src="{{ asset('upload/thumbnail/' . $item->foto) }}" alt=""
                                        class="rounded-circle-profile" width="70%">
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td style="max-width:400px"> {!! Str::limit($item->deskripsi, 250) !!}</td>
                                <td>
                                    <a href="{{ route('editartikel', ['id' => $item->id]) }}"
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
            </div>
        </div>
    </div>
@endsection
