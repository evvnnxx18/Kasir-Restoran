@extends('template.template')

@section('title','Update | Menu')

@section('body')

    <style>
        .card{
            width: 40%;
            margin-left: 30%;
        }
    </style>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Menu</h4>
               <div class="col-md-10">
                    <form action="{{route('updateMenu', $data->id)}}" method="post" class="form-group">
                            @csrf
                            @method('put')
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <Input class="form-control" type="text" name="nama_menu" value="{{$data->nama_menu}}">
                                </div>
                                
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <Input class="form-control" type="text" name="harga" value="{{$data->harga}}">
                                </div>

                                <button type="submit"  class="btn btn-info btn-sm">Save</button>
                     </form>
               </div>
                
        </div>
    </div>  
@endsection