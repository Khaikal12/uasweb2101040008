@extends('layout.be.template')
@section('title', 'Berita')
@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Berita
                </a>
                <div class="card">
                    <div class="card-header">Data Berita</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Kategori</th>
                                    <th>Image</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->judul }}</td>
                                        <td>{{ $row->isi }} </td>
                                        <td>{{ $row->category?->Nama }}</td>
                                        <td>
                                            <img src="/images/{{ $row->image }}" width="100px" alt="">
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('news.destroy', $row->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                                <a href="{{ route('news.edit', $row->id) }}"
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
