<title>Tambah Data Minuman</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Minuman</div>

                <div class="card-body">
                    <form action="{{ route('minuman.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Supplier</label>
                            <select name="id_supplier" class="form-control">
                                @foreach($supplier as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Minuman</label>
                            <input class="form-control" type="text" name="nm_minuman">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Minuman</label>
                            <input class="form-control" type="text" name="harga_minuman">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Minuman</label>
                            <input class="form-control" type="text" name="stok_minuman">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('minuman') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection