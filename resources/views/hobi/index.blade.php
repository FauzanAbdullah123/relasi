<title>Data Hobi</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark">Data Hobi</div>
                <div class="card-body">
                <center>
                    <a href="{{route('hobi.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Hobi</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($hobi as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->hobi }}</center></td>
                            <td><center><a href="{{route('hobi.edit',$data->id)}}"
                                        class="btn btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('hobi.show',$data->id)}}"
                                        class="btn btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('hobi.destroy',$data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">
                                        Hapus Data
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection