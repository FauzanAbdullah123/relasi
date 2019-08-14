<title>Edit Data Artikel</title>
@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="/backend/assets/vendor/select2/select2.min.css">
@endsection


@section('js')
<script src="/backend/assets/vendor/select2/select2.min.js"></script>
<script src="/backend/assets/js/components/select2-init.js"></script>
<script src="/backend/assets/vendor/ckeditor/ckeditor.js">
</script>
<script>
        CKEDITOR.replace( 'editor1' );
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Artikel</div>

                <div class="card-body">
                    <form action="{{ route('artikel.update',$artikel->id) }}" method="post" ENCTYPE="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" type="text" name="judul" value="{{ $artikel->judul }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Konten</label>
                            <textarea id="editor1" name="konten" class="form-control" cols="30" rows="10" required>{{ $artikel->konten }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            @if (isset($artikel) && $artikel->foto)
                            <p>
                                <img src="{{ asset('/assets/img/artikel/'. $artikel->foto.'') }}" alt="Foto" width="100px" height="100px" style="border-radius: 6%">
                            </p>
                            @endif
                            <input class="form-control" type="file" name="foto" value="{{ $artikel->foto }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="kategori_id" class="form-control">
                                @foreach($kategori as $data)
                                    <option value="{{ $data->id }}"{{ $artikel->kategori->id == $data->id ? 'selected="selected"' : ''}}>{{ $data->nama_kategori }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tag</label>
                            <select name="tag_id[]" id="s2_demo3" class="form-control multiple" multiple>
                                @foreach($tag as $data)
                                    <option value="{{ $data->id }}"
                                    {{ (in_array($data->id, $selected)) ?
                                        'selected="selected"' : '' }}>
                                        {{ $data->nama_tag }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Edit Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('admin/artikel') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection