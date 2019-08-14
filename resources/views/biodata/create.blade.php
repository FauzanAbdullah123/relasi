<title>Tambah Data Biodata</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Data Biodata</div>

                <div class="card-body">
                    <form action="{{ route('biodata.store') }}" method="post" ENCTYPE="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input class="form-control" type="text" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input class="form-control" type="file" name="foto" required>
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>
                            <a href="{{ url('biodata') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection