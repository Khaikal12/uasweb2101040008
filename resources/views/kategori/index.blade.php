@extends('layout.be.template')
@section('title', 'Kategori')
@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Kategori
                </a>
                <div class="card">
                    <div class="card-header">Data Berita</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->Nama }}</td>
                                        <td>{{ $row->Keterangan }}</td>
                                        <td>{{ $row->created_at }} </td>
                                        <td>
                                            <form method="POST" action="{{ route('category.destroy', $row->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                                <a href="{{ route('category.edit', $row->id) }}"
                                                    class="btn btn-warning">Edit</a>
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
    </div>
@endsection
