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
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="judul" class="form-label">Judul Artikel</label>
                    </div>
                    <div class="col">
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="slug" class="form-label">Slug</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="slug" name="slug" hidden>
                        <input type="text" name="admin" id="admin" value="Admin" hidden>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="foto" class="form-label">Foto Artikel</label>
                    </div>
                    <div class="col">
                        <input type="file" name="pic" id="foto" class="form-control" onchange="previewImg()"
                            required>
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
                        <textarea id="summernote" name="editordata" required></textarea>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Post Artikel</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/admin/dashboard/addartikel/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

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

        // ClassicEditor
        //     .create( document.querySelector( '#editor' ) )
        //     .catch( error => {
        //         console.error( error );
        //     } );

        $('#summernote').summernote({
            placeholder: 'Inputkan artikel',
            tabsize: 2,
            height: 500,
            toolbar: [
                ['style', ['style', 'blockqoute']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
