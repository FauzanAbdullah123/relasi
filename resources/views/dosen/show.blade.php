<title>Melihat Data Dosen</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Dosen</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input class="form-control" type="text" name="nama" value="{{ $dosen->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Induk Dosen Pembimbing</label>
                        <input class="form-control" type="text" name="nipd" value="{{ $dosen->nipd }}" disabled>
                    </div> 
                    <div class="form-group">
                        <a href="{{ url('dosen') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection