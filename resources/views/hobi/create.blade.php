<title>Tambah Data Hobi</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Hobi</div>

                <div class="card-body">
                    <form action="{{ route('hobi.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Masukkan Hobi</label>
                            <input class="form-control" type="text" name="hobi">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('hobi') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection