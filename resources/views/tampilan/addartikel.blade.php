@extends('layout.dashboard')
@section('main')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Artikel</h1>
    <p class="mb-4">Jika tidak mengerti dalam pengisian artikel. Silahkan download file ini</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="judul" class="form-label">Judul Artikel</label>
                    </div>
                    <div class="col">
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="foto" class="form-label">Foto Artikel</label>
                    </div>
                    <div class="col">
                        <input type="file" name="foto" id="foto" class="form-control" onchange="previewImg()">
                        <div class="d-flex justify-content-center mt-2">
                            <img id="preview" style="max-width:50%">
                        </div>
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="editor">Isi Artikel</label>
                    </div>
                    <div class="col">
                        <textarea id="editor" rows="5"></textarea>
                    </div>
                </div>
            </form>
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
        
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
@endsection
