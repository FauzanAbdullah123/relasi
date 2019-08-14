<title>Edit Data Minuman</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Minuman</div>

                <div class="card-body">
                    <form action="{{ route('minuman.update',$minuman->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Supplier</label>
                            <select name="id_supplier" class="form-control">
                                @foreach($supplier as $data)
                                    <option value="{{ $data->id }}"{{ $minuman->supplier->id == $data->id ? 'selected="selected"' : ''}}>{{ $data->nm_supplier }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Minuman</label>
                            <input class="form-control" type="text" name="nm_minuman" value="{{ $minuman->nm_minuman }}">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Minuman</label>
                            <input class="form-control" type="text" name="harga_minuman" value="{{ $minuman->harga_minuman }}">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Minuman</label>
                            <input class="form-control" type="text" name="stok_minuman" value="{{ $minuman->stok_minuman }}">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Edit Data
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