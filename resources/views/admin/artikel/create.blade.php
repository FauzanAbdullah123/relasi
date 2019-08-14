<title>Tambah Data Artikel</title>
@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="/backend/assets/vendor/select2/select2.min.css">
@endsection


@section('js')
<script src="/backend/assets/vendor/select2/select2.min.js"></script>
<script src="/backend/assets/js/components/select2-init.js"></script>
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'editor1' );
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Data Artikel</div>

                <div class="card-body">
                    <form action="{{ route('artikel.store') }}" method="post" ENCTYPE="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" type="text" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="">Konten</label>
                            <textarea id="editor1" name="konten" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input class="form-control" type="file" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="kategori_id" class="form-control">
                                @foreach($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tag</label>
                            <select name="tag_id[]" id="s2_demo3" class="form-control multiple" multiple>
                                @foreach($tag as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->nama_tag }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>
                            <a href="{{ url('admin/artikel') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection