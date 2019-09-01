@extends('template.template')

@section('title','Edit')
    
@section('body')
    
    <style>
        .card{
            width: 40%;
            margin-left: 30%;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Costumer</h4>
            
             <div class="col-md-10">
                    <form action="{{route('updateCostumer', $data->id)}}" method="post" class="form-group">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                    <label>Nama Costumer</label>
                                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}" placeholder="Ex: Made Rahayu" required>
                            </div>
                
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" required>
                                        <option value="1">Pria</option>
                                        <option value="2">Wanita</option>
                                    </select>
                                </div>
                
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input class="form-control" type="text" value="{{ $data->no_hp }}" name="no_hp" required>
                                </div>
                
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" type="text" value="{{ $data->alamat }}" name="alamat" required>
                                </div>
                
                                <div class="form-group bb">
                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                </div>                
                    </form>

             </div>
             
        </div>
    </div>

@endsection