<title>Edit Data Biodata</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Biodata</div>

                <div class="card-body">
                    <form action="{{ route('biodata.update',$bio->id) }}" method="post" ENCTYPE="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control" type="text" name="nama" value="{{ $bio->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" required>{{ $bio->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" value="{{ $bio->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            @if (isset($bio) && $bio->foto)
                            <p>
                                <img src="{{ asset('/assets/img/biodata/'. $bio->foto.'') }}" alt="Foto" width="100px" height="100px" style="border-radius: 6%">
                            </p>
                            @endif
                            <input class="form-control" type="file" name="foto" value="{{ $bio->foto }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Edit Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('biodata') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection