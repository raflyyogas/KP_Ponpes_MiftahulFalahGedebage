@extends('layout.dashboard')

@section('main')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Informasi kontak kami</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi data pesan</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    @endif

                    @if ($kontak->count() > 0)
                        <thead>
                            <tr>
                                <th>Tanggal Pengirim</th>
                                <th>Nama Pengirim</th>
                                <th>Subjek</th>
                                <th>No HP</th>
                                <th>Status</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($kontak as $item)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('j-F-Y') }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>0{{ $item->nohp }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td><a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#lihatpesan{{ $item->id }}">
                                            Lihat pesan <i class="bi bi-eye"></i>
                                        </a></td>
                                    <th>
                                        <a href="{{ route('delkon', ['id' => $item->id]) }}"
                                            class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                        </a>
                                    </th>
                                </tr>

                                <div class="modal fade" id="lihatpesan{{ $item->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="UpdateFoto" aria-hidden="true">
                                    <form action="{{ route('simpanpesan', ['id' => $item->id]) }}" method="post">
                                        @csrf
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Data pesan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="namapengirim" class="form-label">Nama pengirim:
                                                        </label>
                                                        <input type="text" class="form-control" id="namapengirim"
                                                            value="{{ $item->nama }}"disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="isipesan" class="form-label">Isi pesan:
                                                        </label>
                                                        <textarea class="form-control" id="isipesan" rows="7" disabled>{{ $item->message }}</textarea>
                                                    </div>
                                                    <div class="mb-3 text-center">
                                                        <a target="_blank"href="https://wa.me/62{{ $item->nohp }}?text=Hallo Bpk/Ibu {{ $item->nama }}..."
                                                            class="btn btn-primary"> Bales pesan </a>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="isipesan" class="form-label">Status</label>
                                                        <select class="form-select @error('status') is-invalid @enderror"
                                                            aria-label="Default select example" id="status"
                                                            name="status">
                                                            <option name="status" value="Sedang diproses">Sedang diproses
                                                            </option>
                                                            <option name="status" value="Proses selesai">Proses selesai
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
