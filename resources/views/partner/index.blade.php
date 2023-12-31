@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                <a href="{{ route('partner.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus">Tambah</i></a>
            </div>
            <div class="card-body table table-responsive">
                @if ($message = Session::get('Sukses'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered" id="example2">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Partner</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">URL</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partner as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama_partner }}</td>
                            <td>
                                {{ $row->nama_kategori_partner}}
                            </td>
                            <td><a href="{{ $row->url_partner }}" class="btn btn-success btn-sm" target="_blank" style="display: inline-block"><i class="fa fa-globe"></i></a></td>
                            <td><img src="{{ asset('file/partner/'.$row->gambar_partner) }}" alt="{{ $row->nama_partner }}" style="width: 100px; height: 100px;"></td>
                            <td>
                                <a href="{{ route('partner.edit', $row->id_partner) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                <form action="{{ route('partner.destroy', $row->id_partner) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash">Delete</i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection