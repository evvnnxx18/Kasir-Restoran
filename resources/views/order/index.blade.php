@extends('template.template')

@section('title','Order')

@section('body')
    <style>
    .harga{
        padding-bo: 5px;
    }
  
    </style>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    
                    <h2 class="card-title">Pesanan</h2>

                
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary btn-sm tambah-btn" data-toggle="modal" data-target="#myModal1">+ Tambah pesanan</button>

                    <!-- Modal -->
                    <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Header</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                                <div class="offset-md-1 col-md-10">
                                        <form action="/order/store" name="formOrder" method="post">
                                            @csrf
                                            <div class="form-group">
                                               <label>Costumer</label>
                                               <select name="costumer_id" id="list" onchange="functionku()" class="form-control" required>
                                                <option>Pilih</option>   
                                                @foreach ($costumers as $c)
                                                        <option value="{{ $c->id }}">{{ $c->nama }}</option>
                                                    @endforeach
                                               </select>
                                           </div>
                                           <div class="form-group">
                                                <label>Menu (Harga)</label>
                                                <select class="form-control" name="menu_id" id="menu" onkeyup="sum();" onFocus=”startCalc();” onBlur=”stopCalc();” >
                                                    <option>Pilih</option>
                                                    @foreach($menus as $m)
                                                     <option value="{{ $m->id }}" data-harga="{{ $m->harga }}">{{ $m->nama_menu }} ({{ $m->harga }})</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input class="form-control" type="text" name="harga_menu" id="harga_menu" onkeyup="sum()">
                                            </div>


                                            <div class="form-group">
                                                    <label>Total Menu</label>
                                                    <input class="form-control" type="text" name="total" id="total" onkeyup="sum();" onFocus=”startCalc();” onBlur=”stopCalc();”  required>
                                                </div>

                                            <div class="form-group">
                                                <label>Total Harga</label>
                                                <input type="text" name="total_harga" id="total_harga" onkeysup="sum()" class="form-control" readonly>
                                            </div>    

                                            <div class="form-group">
                                                <label>Pelayan</label>
                                                <select class="form-control" name="user_id" required>
                                                    <option>pilih</option>
                                                    @foreach ($users as $u)
                                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                        </div>
                        <div class="modal-footer">
                         </div>
                    </div>
             </div>

                    </div>
                    </div>
                
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="text-center">
                                <td>ID</td>
                                <td>Customer</td>
                                <td>Menu</td>
                                <td>Total Menu</td>
                                <td>Harga</td>
                                <td>Total Pembayaran</td>
                                <td>Pelayan</td>
                                <td>Action</td>
                            </tr>

                            @foreach ($orders as $key => $o)
                                <tr>
                                    <th class="text-center">{{ $key+1 }}</th>
                                    <td class="text-left">{{ $o->costumer['nama']}}</td>
                                    <td class="text-left">{{ $o->menu['nama_menu'] }}</td>
                                    <td class="text-center">{{ $o->total }}</td>
                                    <td>Rp. {{ $o->menu['harga'] }}</td>
                                    <td>Rp. {{ $o->total*$o->menu['harga'] }}</td>         
                                    <td>{{ $o->user['name'] }}</td>
                                    
                                    <td class="text-center">
                                        <a href="/order/delete/{{ $o->id }}" class="btn btn-danger btn-sm">Batal</a> 	
                                    </td>   
                                </tr>
                            @endforeach

                           

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    
    <script type="text/javascript">

        function functionku(){
          var list = document.getElementById("list");
            document.getElementById("harga_menu").value= list.options[list.selectedIndex].getAttribute('harga_menu');
            document.getElementById("total").value= list.options[list.selectedIndex].getAttribute('menu-total');
        }
      function sum(){
        var text1 = document.getElementById("harga_menu").value;
        var text2 = document.getElementById("total").value;
        var hasil = parseInt(text1)*parseInt(text2);
    
        if(!isNaN(hasil)){
          document.getElementById("total_harga").value=hasil;
        }
      }
        </script>

   
    
@endsection