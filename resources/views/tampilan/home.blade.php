@extends('layout.dashboard')

@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-danger">SELAMAT DATANG DI DASHBOARD ADMIN MIFTAHUL FALAH</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <p class="text-danger"> Selamat datang di Dashboard admin Miftahul Falah, ini adalah halaman
                        utama
                        setelah anda telah
                        login. Silahkan download file ini sebagai panduan anda dalam menggunakan fitur Dashboard. Jika anda
                        menemukan kesalahan pada sistem kami beri tahu kami melalui <a href="" target="_blank"
                            class="fw-bold">email kami</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Total artikel</div>
                            <div class="row">
                                <div class="col-sm-1 ms-1">
                                    <h4 class="ms-2"><i class="bi bi-journal"></i></h4>
                                </div>
                                <div class="col">
                                    <div class="h5 ms-2 mb-0 font-weight-bold text-gray-800">{{ $artikel }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Total foto</div>
                            <div class="row">
                                <div class="col-sm-1 ms-1">
                                    <h4><i class="bi bi-image"></i></h4>
                                </div>
                                <div class="col">
                                    <div class="h5 ms-2 mb-0 font-weight-bold text-gray-800">{{ $foto }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Total video</div>
                            <div class="row">
                                <div class="col-sm-1">
                                    <h4><i class="bi bi-person-video"></i></h4>
                                </div>
                                <div class="col">
                                    <div class="h5 ms-2 mb-0 font-weight-bold text-gray-800">{{ $video }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 ">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary mt-2 text-uppercase">Data informasi santri</h6>
                        </div>
                        <div class="col text-end"><button type="button" href="#"
                                class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#informasi">
                                <span class="icon text-white-50">
                                    <i class="bi bi-plus-square-fill"></i>
                                </span>
                                <span class="text">Input data informasi Santri</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <div class="row h5 mt-3">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show pt-3" role="alert">
                                {{ session('success') }}
                                <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                            </div>
                        @endif
                        <div class="col text-center">
                            <i class="bi bi-people h4 me-2"></i>{{ $mi->total }}<p>Santri MI</p>
                        </div>
                        <div class="col text-center"><i class="bi bi-people h4 me-2"></i>{{ $mts->total }}<p>Santri MTs
                            </p>
                        </div>
                        <div class="col text-center"><i class="bi bi-people h4 me-2"></i>{{ $ma->total }}<p>Santri MA</p>
                        </div>
                        <div class="col text-center"><i class="bi bi-award h4 me-2"></i>{{ $prestasi->total }}<p>Prestasi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="informasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Input Data Santri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('santri') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <div class="col-sm-2 mt-2"><label for="jumlah">Jumlah:</label></div>
                            <div class="col">
                                <input type="number" name="jumlah" id="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}"
                                    required>
                                @error('jumlah')
                                    <div id="jumlah" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-3"><label for="data">Pilih tipe:</label></div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input type="radio"
                                                    class="form-check-input @error('tipe') is-invalid @enderror"
                                                    id="mi" name="tipe" value="santrimi" required>
                                                <label class="form-check-label" for="mi">Santri MI</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio"
                                                    class="form-check-input @error('tipe') is-invalid @enderror"
                                                    id="mts" name="tipe" value="santrimts" required>
                                                <label class="form-check-label" for="mts">Santri MTs</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input type="radio"
                                                    class="form-check-input @error('tipe') is-invalid @enderror"
                                                    id="ma" name="tipe" value="santrima" required>
                                                <label class="form-check-label" for="ma">Santri MA</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio"
                                                    class="form-check-input @error('tipe') is-invalid @enderror"
                                                    id="prestasi" name="tipe" value="prestasi" required>
                                                <label class="form-check-label" for="prestasi">Prestasi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @error('tipe')
                                <div id="foto" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Foto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#informasi').modal('show');
            });
        </script>
    @endif
@endsection
