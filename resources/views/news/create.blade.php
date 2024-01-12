@extends('layout.be.template')
@section('title', 'Tambah Berita')
@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Berita</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action=" {{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Isi</label>
                                <input type="text" name="isi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Kategori</label>
                                <select name="kategori" id="" class="form-select">
                                    <option value="" disabled selected>-- Pilih Kategori --</option>
                                    @foreach ($data_category as $row)
                                        <option value="{{ $row->id }}">{{ $row->Nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('news.index') }}" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
