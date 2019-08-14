<title>Tambah Data Makanan</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Makanan</div>

                <div class="card-body">
                    <form action="{{ route('makanan.store') }}" method="post">
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
                            <label for="">Nama Makanan</label>
                            <input class="form-control" type="text" name="nm_makanan">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Makanan</label>
                            <input class="form-control" type="text" name="harga_makanan">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Makanan</label>
                            <input class="form-control" type="text" name="stok_makanan">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('makanan') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection