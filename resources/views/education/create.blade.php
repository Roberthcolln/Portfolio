@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group mb-2">
                        <label for="">Nama Education <abbr title="" style="color: black">*</abbr></label>
                        <input type="text" class="form-control" placeholder="Masukkan Judul Education disini...." name="nama_education" value="{{ old('nama_education') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori Education </label>
                        <select name="id_kategori_education" id="dropdown5" class="form-control">
                            <option value=""></option>
                            @foreach ($kategori_education as $row)
                            <option value="{{ $row->id_kategori_education }}">{{ $row->nama_kategori_education }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan_education" id="editor" cols="30" rows="10" class="form-control">{{ old('keterangan_education') }}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Masuk <abbr title="" style="color: black">*</abbr></label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal ...." name="tanggal_masuk_education" value="{{ old('tanggal_masuk_education') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Keluar <abbr title="" style="color: black">*</abbr></label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal ...." name="tanggal_keluar_education" value="{{ old('tanggal_keluar_education') }}">
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.getElementById('inputImg').addEventListener('change', function() {
        // Get the file input value and create a URL for the selected image
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').setAttribute('src', e.target.result);
                document.getElementById('previewImg').classList.add("d-block");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>

<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection