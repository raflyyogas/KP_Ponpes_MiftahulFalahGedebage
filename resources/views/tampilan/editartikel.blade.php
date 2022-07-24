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
            <form action="{{ route('updateartikel', ['id' => $artikel->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="judul" class="form-label">Judul Artikel</label>
                    </div>
                    <div class="col">
                        <input type="text" name="judul" id="judul" class="form-control"
                            value="{{ $artikel->judul }}" required>
                    </div>
                </div>
                <div class="row mb-3" hidden>
                    <div class="col-md-2">
                        <label for="slug" class="form-label">Slug</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="slug" name="slug">
                        <input type="text" name="admin" id="admin" value="Admin">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="Kategori">Kategori</label>
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" id="kategori" name="kategori"
                            required>
                            <option name="kategori" value="Madrasah Ibtidaiyah">Madrasah Ibtidaiyah</option>
                            <option name="kategori" value="Madrasah Tsanawiyah">Madrasah Tsanawiyah</option>
                            <option name="kategori" value="Madrasah Aliyah">Madrasah Aliyah</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="foto" class="form-label">Foto Artikel</label>
                    </div>
                    <div class="col">
                        <input type="file" name="pic" id="foto" class="form-control" onchange="previewImg()">
                        <div class="d-flex justify-content-center mt-2">
                            <img id="preview" style="max-width:50%"
                                src="{{ asset('upload/thumbnail/' . $artikel->foto) }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="editor">Isi Artikel</label>
                    </div>
                    <div class="col">
                        <textarea id="summernote" name="editordata">{{ $artikel->deskripsi }}</textarea>
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

        $('#summernote').summernote({
            // disableDragAndDrop: true,
            placeholder: 'Inputkan artikel',
            tabsize: 2,
            height: 500,
            minHeight: null,
            maxHeight: null,
            focus: true,
            blockquoteBreakingLevel: 2,
            codeviewFilter: false,
            codeviewIframeFilter: true,
            toolbar: [
                ['style', ['style', 'blockqoute']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    </script>
@endsection
