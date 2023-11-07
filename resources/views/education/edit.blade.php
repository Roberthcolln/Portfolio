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
                <form action="{{ route('education.update', $education->id_education) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="">Nama education <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan Judul education disini...." name="nama_education" value="{{ $education->nama_education }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori Education </label>
                        <select name="id_kategori_education" id="dropdown5" class="form-control">
                            <option value="{{ $education->id_kategori_education }}"></option>
                            @foreach ($kategori_education as $row)
                            <option value="{{ $row->id_kategori_education }}">{{ $row->nama_kategori_education }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan_education" id="editor" cols="30" rows="10" class="form-control">{{ $education->keterangan_education }}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Masuk <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan Tanggal...." name="tanggal_masuk_education" value="{{ $education->tanggal_masuk_education }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Keluar <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan Tanggal...." name="tanggal_keluar_education" value="{{ $education->tanggal_keluar_education }}">
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
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{route('image.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection