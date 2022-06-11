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
                        <textarea id="summernote" name="editordata"></textarea>
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

        // ClassicEditor
        //     .create( document.querySelector( '#editor' ) )
        //     .catch( error => {
        //         console.error( error );
        //     } );

        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 500,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
{{-- 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>without bootstrap</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <textarea id="summernote"></textarea>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 500,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
</body>

</html> --}}
