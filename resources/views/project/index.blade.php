@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('project.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus">Tambah</i></a>
                </div>
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered" id="example3">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">project</th>
                                <th>Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Url</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama_project }}</td>
                                    <td>{{ $row->info_project }}</td>
                                    <td>{!! Str::limit($row->keterangan_project, 200, '...') !!}</td>
                                    <td>
                                    <a href="{{ $row->url_project }}" class="btn btn-success btn-sm" target= "_blank" style="display: inline-block"><i class="fa fa-globe"></i></a>
                                    </td>
                                    <td><img src="{{ asset('file/project/'.$row->gambar_project) }}" alt="{{ $row->nama_project }}" style="width: 50px; height: 50px;"></td>
                                    <td>
                                        <a href="{{ route('project.edit', $row->id_project) }}" class="btn btn-primary btn-xs" style="display: inline-block"><i class="fas fa-edit">Edit</i></a>
                                        <form action="{{ route('project.destroy', $row->id_project) }}" method="POST" style="display: inline-block">
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