@extends('layout.dashboard')
@section('main')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Foto</h1>
    <p class="mb-4">Jika tidak mengerti dalam pengisian Foto. Silahkan download Foto ini</a>.</p>

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
                        <span class="text">Tambah Video</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Foto</th>
                            <th>Gambar Foto</th>
                            <th>Judul Foto</th>
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
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>
                                <a href="#" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="fotoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul">Judul Video</label>
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="link">Link Video</label>
                            <div class="mb-2 d-flex">
                                <input type="text" name="link" id="link" class="form-control me-2">
                                <button type="button" class="btn btn-success" onclick="prevVideo()">Generate</button>
                            </div>
                            <iframe width="280" height="158" id="previewVideo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi Video</label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
