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
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('partner.update', $partner->id_partner) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="">Nama Partner <abbr title="" style="color: black">*</abbr></label>
                        <input required type="text" class="form-control" placeholder="Masukkan nama partner disini...." name="nama_partner" value="{{ $partner->nama_partner }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori Partner </label>
                        <select name="id_kategori_partner" id="dropdown5" class="form-control">
                            <option value="{{ $partner->id_kategori_partner }}"></option>
                            @foreach ($kategori_partner as $row)
                            <option value="{{ $row->id_kategori_partner }}">{{ $row->nama_kategori_partner }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">URL</label>
                        <textarea name="url_partner" id="editor" cols="30" rows="10" class="form-control">{!! $partner->url_partner !!}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Logo Partner</label>
                        <input type="file" class="form-control" name="gambar_partner" placeholder="" accept="image/*" id="preview_gambar" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Preview Foto</label>
                        <img src="{{ asset('file/partner/'.$partner->gambar_partner) }}" alt="" style="width: 200px;" id="gambar_nodin">
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

        filebrowserUploadMethod: 'form'
    });
</script>
@endsection