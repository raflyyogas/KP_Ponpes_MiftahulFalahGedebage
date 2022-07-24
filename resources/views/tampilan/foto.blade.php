@extends('layout.dashboard')

@section('main')
    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800">Foto</h1>

    <p class="mb-4">Jika tidak mengerti dalam pengisian foto. Silahkan download instruksi ini</a>.</p>



    <!-- DataTales Example -->

    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <div class="row">

                <div class="col">

                    <h6 class="m-0 font-weight-bold text-primary">Foto</h6>

                </div>

                <div class="col text-end">

                    <button type="button" href="#" class="btn btn-primary btn-icon-split" data-bs-toggle="modal"
                        data-bs-target="#fotoModal">

                        <span class="icon text-white-50">

                            <i class="bi bi-plus-square-fill"></i>

                        </span>

                        <span class="text">Tambah Foto</span>

                    </button>

                </div>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>Gambar Foto</th>
                            <th>Judul Foto</th>
                            <th>Pendidikan</th>
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
                        @foreach ($foto as $data)
                            <tr>

                                <td><img src="{{ asset('upload/gallery-foto/' . $data->foto) }}"
                                        alt="{{ $data->judul }}" class="rounded-circle-profile" width="300px"></td>

                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>{{ $data->kategori }}</td>

                                <td>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#updatefoto{{ $data->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="{{ route('deletefoto', ['id' => $data->id]) }}"
                                        class="btn btn-danger btn-icon-split">

                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </td>

                            </tr>
                            <form action="{{ route('updatefoto', ['id' => $data->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal fade" id="updatefoto{{ $data->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="UpdateFoto" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Foto</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="judul">Judul Foto</label>
                                                    <input type="text" name="judul" id="judul" class="form-control"
                                                        value="{{ $data->judul }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="link">Pilih Foto</label>
                                                    <input type="file" name="foto" id="foto"
                                                        class="form-control mb-2" onchange="previewImg()">
                                                    <div class="d-flex justify-content-center">
                                                        <img id="preview" style="width: 300px"
                                                            src="{{ asset('upload/gallery-foto/' . $data->foto) }}"
                                                            alt="{{ $data->judul }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label for="Kategori">Pilih pendidikan</label>
                                                        </div>
                                                        <div class="col">
                                                            <select class="form-select" aria-label="Default select example"
                                                                id="kategori" name="kategori" required>
                                                                <option name="kategori" value="Madrasah Ibtidaiyah">
                                                                    Madrasah Ibtidaiyah</option>
                                                                <option name="kategori" value="Madrasah Tsanawiyah">
                                                                    Madrasah Tsanawiyah</option>
                                                                <option name="kategori" value="Madrasah Aliyah">
                                                                    Madrasah
                                                                    Aliyah</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="deskripsi">Deskripsi Foto</label>
                                                    <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required>{{ $data->deskripsi }}</textarea>
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

                    {{ $foto->links() }}

                </div>
            </div>

        </div>

    </div>





    <!-- Modal -->

    <div class="modal fade" id="fotoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Foto</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <form action="{{ route('tambahfoto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul">Judul Foto</label>
                            <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="link">Pilih Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control mb-2"
                                onchange="previewImg()" required>
                            <div class="d-flex justify-content-center">
                                <img id="preview" style="width: 300px">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="Kategori">Pilih pendidikan</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" id="kategori"
                                        name="kategori" required>
                                        <option name="kategori" value="Madrasah Ibtidaiyah">Madrasah Ibtidaiyah</option>
                                        <option name="kategori" value="Madrasah Tsanawiyah">Madrasah Tsanawiyah</option>
                                        <option name="kategori" value="Madrasah Aliyah">Madrasah Aliyah</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi Foto</label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required></textarea>
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
    <script>
        function previewImg() {
            const image = document.querySelector('#foto');
            const preview = document.querySelector('#preview');
            preview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                preview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
