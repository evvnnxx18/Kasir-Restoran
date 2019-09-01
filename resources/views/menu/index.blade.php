@extends('template.template')

@section('title','Menu')

@section('body')

<style>
    .table{
        width: 85%;
        margin-left: 6%;
        margin-right: 6%;
    }
    
    /* .input-group-btn{
        padding-left: 5px;
    } */
    .bb{
        padding-left: 13%;
    }
</style>

   <div class="card">
       <div class="card-body">
           <h2 class="card-title">Menu Makanan</h2>

           <div class="col-md-8 search">
                <div class="input-group input-group-sm">
                    <form action="/order/cari" method="get">
                        <input type="text" class="form-control" name="cari" placeholder="Cari .." value="{{ old('/cari') }}">
                        
                        <div class="input-group-btn">
                             <button type="submit" value="CARI" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div> 
                    </form>
                </div>
            </div>
            

    <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-sm tambah-btn" data-toggle="modal" data-target="#myModal1"> + Tambah Makanan</button>

    <!-- Modal -->
    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">

                <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Menu</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                        <div class="offset-md-1 col-md-10">
                                <form action="/menu/store" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama menu</label>
                                        <input class="form-control" type="text" name="menu" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" type="text" name="harga" required>
                                    </div>
                                    <div class="form-group bb">
                                        <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                    </div>

                                </form>
                        </div>

                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
     </div>

            <table class="table table-bordered">
                <tbody>
                    <tr class="text-center">
                        <td width="3%">ID</td>
                        <td width="15%" >Menu</td>
                        <td width="8%">Harga</td>
                        <td width="5%">Action</td>
                    </tr> 

                    @foreach ($menus as $key => $m)
                        <tr>
                            <th class="text-center">{{ $key+1 }}</th>
                            <td style="padding-left:2%">{{ $m->nama_menu }}</td>
                            <td>Rp. {{ $m->harga }}</td>
                            <td class="text-center">
                                <a href="/menu/edit/{{ $m->id }}"><button class="btn btn-warning btn-sm">Update</button></a>
                                <a href="/menu/delete/{{ $m->id }}"><button class="btn btn-danger btn-sm">Delete</button></a>
                            </td>    
                        </tr>
                    @endforeach

                </tbody>
            </table>    

       </div>
   </div>     
    
@endsection