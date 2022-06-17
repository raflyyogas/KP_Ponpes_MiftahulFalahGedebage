@extends('layout.dashboard')
@section('main')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Informasi kontak kami</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi kontak kami</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    @if (session('success'))
                        {{-- <div class="sent-message">{{ session('success') }}</div> --}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    @endif
                    @if ($kontak->count() > 0)
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Penanya</th>
                                <th>No HP</th>
                                <th>Subjek</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontak as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nohp }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->message }}</td>
                                    <th><a href="{{ route('delkon', ['id' => $item->id]) }}"
                                            class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                        </a></th>
                                </tr>
                            @endforeach
                        </tbody>
                    @else
                        Tidak ada pesan
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
