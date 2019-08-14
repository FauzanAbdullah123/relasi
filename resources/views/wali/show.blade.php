<title>Melihat Data Wali</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Wali</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input class="form-control" type="text" value="{{ $wali->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input class="form-control" type="text" value="{{ $wali->mahasiswa->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('wali') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection