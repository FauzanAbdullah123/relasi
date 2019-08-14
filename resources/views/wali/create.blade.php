<title>Tambah Data Wali</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Wali</div>

                <div class="card-body">
                    <form action="{{ route('wali.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <select name="id_mahasiswa" class="form-control">
                                @foreach($mhs as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('wali') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection