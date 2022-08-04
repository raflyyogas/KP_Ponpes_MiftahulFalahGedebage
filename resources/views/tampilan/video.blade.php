@extends('layout.dashboard')

@section('main')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Video</h1>
    <p class="mb-4">Jika tidak mengerti dalam pengisian video. Silahkan download instruksi ini</a>.</p>

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Video</h6>
                </div>

                <div class="col text-end">
                    <button type="button" href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal"
                        data-bs-target="#videoModal">
                        <span class="icon text-white-50">
                            <i class="bi bi-plus-square-fill"></i>
                        </span>
                        <span class="text">Tambah Video</span>
                    </button>
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar Video</th>
                            <th>Judul Video</th>
                            <th>Pendidikan</th>
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
                        @foreach ($video as $data)
                            <tr>
                                <td>
                                    <iframe width="280" height="158"
                                        src="https://www.youtube.com/embed/{{ substr($data->link, -11) }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->kategori }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#updatefoto{{ $data->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="{{ route('delvid', ['id' => $data->id]) }}"
                                        class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <form action="{{ route('editvid', ['id' => $data->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal fade" id="updatefoto{{ $data->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="UpdateFoto" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Video</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="judul">Judul Video</label>
                                                    <input type="text" name="judul" id="judul"
                                                        class="form-control @error('judul') is-invalid @enderror"
                                                        value="{{ $data->judul }}" required>

                                                    @error('judul')
                                                        <div id="judul" class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="link">Link Video</label>
                                                    <div class="mb-2 d-flex">
                                                        <input type="text" name="link" id="link"
                                                            class="form-control me-2 @error('link') is-invalid @enderror"
                                                            value="{{ $data->link }}" required>

                                                        @error('link')
                                                            <div id="link" class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <button type="button" class="btn btn-success"
                                                            onclick="prevVideo()">Generate</button>
                                                    </div>
                                                    <iframe width="280" height="158" id="previewVideo"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="Kategori">Pilih pendidikan</label>
                                                        </div>
                                                        <div class="col">
                                                            <select
                                                                class="form-select @error('kategori') is-invalid @enderror"
                                                                aria-label="Default select example" id="kategori"
                                                                name="kategori" required>
                                                                <option name="kategori" value="Madrasah Ibtidaiyah">Madrasah
                                                                    Ibtidaiyah</option>
                                                                <option name="kategori" value="Madrasah Tsanawiyah">Madrasah
                                                                    Tsanawiyah</option>
                                                                <option name="kategori" value="Madrasah Aliyah">Madrasah
                                                                    Aliyah</option>
                                                            </select>
                                                            @error('kategori')
                                                                <div id="judul" class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $video->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('tambahvideo') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul">Judul Video</label>
                            <input type="text" name="judul" id="judul"
                                class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}"
                                required>
                            @error('judul')
                                <div id="judul" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="link">Link Video</label>
                            <div class="mb-2 d-flex">
                                <input type="text" name="link" id="link"
                                    class="form-control me-2 @error('link') is-invalid @enderror"
                                    value="{{ old('link') }}" required>
                                @error('link')
                                    <div id="link" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button type="button" class="btn btn-success" onclick="prevVideo()">Generate</button>
                            </div>
                            <iframe width="280" height="158" id="previewVideo" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="Kategori">Pilih pendidikan</label>
                                </div>
                                <div class="col">
                                    <select class="form-select @error('kategori') is-invalid @enderror"
                                        aria-label="Default select example" id="kategori" name="kategori" required>
                                        <option name="kategori" value="Madrasah Ibtidaiyah">Madrasah Ibtidaiyah</option>
                                        <option name="kategori" value="Madrasah Tsanawiyah">Madrasah Tsanawiyah</option>
                                        <option name="kategori" value="Madrasah Aliyah">Madrasah Aliyah</option>
                                    </select>
                                    @error('kategori')
                                        <div id="kategori" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
        $("iframe#previewVideo").hide();

        function prevVideo() {
            var x = document.getElementById("link").value;
            var last3 = x.slice(-11);
            $("iframe#previewVideo").show();
            document.getElementById("previewVideo").src = "https://www.youtube.com/embed/" + last3;
        }
    </script>
    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#videoModal').modal('show');
            });
        </script>
    @endif
@endsection
