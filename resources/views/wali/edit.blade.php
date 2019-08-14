<title>Edit Data Wali</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Wali</div>

                <div class="card-body">
                    <form action="{{ route('wali.update',$wali->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input class="form-control" type="text" name="nama" value="{{ $wali->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <select name="id_mahasiswa" class="form-control">
                                @foreach($mhs as $data)
                                    <option value="{{ $data->id }}"{{ $wali->mahasiswa->id == $data->id ? 'selected="selected"' : ''}}>{{ $data->nama }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Edit Data
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