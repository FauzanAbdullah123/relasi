<title>Melihat Data Biodata</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Biodata</div>

                <div class="card-body">
                        <div class="form-group">
                            <label for=""><b> Nama :</b></label>
                            <input class="form-control" type="text" name="nama" value="{{ $bio->nama }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Alamat :</b> </label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" disabled>{{ $bio->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Tanggal Lahir :</b> </label>
                            <input class="form-control" type="date" name="tgl_lahir" value="{{ $bio->tgl_lahir }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Foto :</b> </label>
                            @if (isset($bio) && $bio->foto)
                            <p>
                                <img src="{{ asset('/assets/img/biodata/'. $bio->foto.'') }}" alt="Foto" width="100%" height="100%" style="border-radius: 3%">
                            </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <a href="{{ url('biodata') }}" class="btn btn-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection