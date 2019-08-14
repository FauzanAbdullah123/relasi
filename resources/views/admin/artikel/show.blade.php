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
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Artikel</div>

                <div class="card-body">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" type="text" name="judul" value="{{ $artikel->judul }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Konten</label>
                            <textarea id="editor1" name="konten" class="form-control" cols="30" rows="10" disabled>{{ $artikel->konten }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            @if (isset($artikel) && $artikel->foto)
                            <p>
                                <img src="{{ asset('/assets/img/artikel/'. $artikel->foto.'') }}" alt="Foto" width="200px" height="200px" style="border-radius: 6%">
                            </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control"
                             disabled value="{{ $artikel->kategori->nama_kategori }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tag</label>
                            <select name="tag[]" id="s2_demo3" class="form-control multiple" multiple disabled>
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
                            <a href="{{ url('admin/artikel') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection