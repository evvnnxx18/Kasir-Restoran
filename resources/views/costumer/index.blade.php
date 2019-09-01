@extends('template.template')

@section('title','Customers')

@section('body')

<style>
    .tambah-btn{
        margin-bottom: 2%;
    }
    .table{
        width: 85%;
        margin-left: 6%;
        margin-right: 6%;
    }
    .bb{
        padding-left: 15%;
    }
</style>

    <div class="card">
        <div class="card-body">

                <h2 class="card-title">Costumer</h2>

                <div class="col-md-8 search">
                    <div class="input-group input-group-sm">
                        <form action="/costumer/cari" method="get">
                            <input type="text" class="form-control" name="cari" placeholder="Cari .." value="{{ old('cari') }}">
                            
                                <button type="submit" value="CARI" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                   
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary btn-sm tambah-btn" data-toggle="modal" data-target="#myModal"> + Tambah Costumers</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Customers</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <!-- Begin Page Content -->
                     <div class="container-fluid">
                        <form action="/costumer/store" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama Customer</label>
                                <input class="form-control" type="text" name="nama" placeholder="Ex: Made Rahayu" required>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input class="form-control" type="text" name="no_hp" placeholder="Ex:(+62)895xxxxxxxxx">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="alamat" placeholder="Ex:Jalan Bendul Merisi">
                            </div>

                            <div class="form-group bb">
                                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                            </div>

                        </form>
                    
                    </div>
                    <!-- /.container-fluid -->


                </div>
                <div class="modal-footer">
                </div>
                </div>

        </div>
        <!-- End of Page Wrapper -->

            </div>

            <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>Nama Costomer</td>
                            <td>Jenis Kelamin</td>
                            <td>No Telp</td>
                            <td>Alamat</td>
                            <td>Action</td>
                        </tr>
        
                        @foreach ($costumers as $key => $c)
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <td>{{ $c->nama }}</td>
                                <td>
                                    @if ($c->jenis_kelamin == '1')
											{!! $jenis_kelamin = 'Pria' !!}
										@else 
											{!! $jenis_kelamin = 'Wanita' !!}
										@endif
                                </td>
                                <td>{{ $c->no_hp }}</td>   
                                <td>{{ $c->alamat }}</td>
                                <td>
                                        <a href="/costumer/edit/{{$c->id}}" class="btn btn-warning btn-sm">Update</a>
                                        <a href="/costumer/delete/{{$c->id}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>

        </div>
    </div>

@endsection