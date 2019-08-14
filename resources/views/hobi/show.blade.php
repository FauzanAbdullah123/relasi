<title>Melihat Data Hobi</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Hobi</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Hobi</label>
                        <input class="form-control" type="text" name="nama" value="{{ $hobi->hobi }}" disabled>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('hobi') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection