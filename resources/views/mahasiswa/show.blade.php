<title>Melihat Data Mahasiswa</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Mahasiswa</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input class="form-control" type="text" value="{{ $mhs->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">NIM Mahasiswa</label>
                        <input class="form-control" type="text" value="{{ $mhs->nim }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input class="form-control" type="text" value="{{ $mhs->dosen->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('mahasiswa') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection