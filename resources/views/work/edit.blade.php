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
                <form action="{{ route('work.update', $work->id_work) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="">Nama work <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan Judul work disini...." name="nama_work" value="{{ $work->nama_work }}">
                    </div>
                    
                    <div class="form-group mb-2">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan_work" id="editor" cols="30" rows="10" class="form-control">{{ $work->keterangan_work }}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Masuk <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan Tanggal...." name="tanggal_masuk_work" value="{{ $work->tanggal_masuk_work }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Tanggal Keluar <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan Tanggal...." name="tanggal_keluar_work" value="{{ $work->tanggal_keluar_work }}">
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