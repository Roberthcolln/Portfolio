@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                    <a href="{{ route('form_pertanyaan.create') }}" class="btn btn-dark btn-sm" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
                </div> -->
                <div class="card-body table table-responsive">
                    @if ($message = Session::get('Sukses'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered" id="example2">
                        <thead>
                            <tr>
                                <th><center>No</th>
                                <th><center>Nama</th>
                                <th><center>Email</th>
                                <th><center>Subjek</th>
                                <th><center>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                            <tbody>
                            @foreach ($formPertanyaan as $row)
                            <tr>
                                <td><center>{{ $loop->iteration }}</td>
                                <td><center>{{ $row->nama }}</td>
                                <td><center>{{ $row->email }}</td>
                                <td><center><b>{{ $row->subjek }}</b></td>
                                <td><center>{{ $row->pesan }}</td>
                                <td>
                                    
                                    <form action="{{ route('form_pertanyaan.destroy', $row->id_form_pertanyaan) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-xs btn-flat show_confirm"><i class="fas fa-trash"> Delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection