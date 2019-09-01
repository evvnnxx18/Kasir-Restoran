@extends('template.template')

@section('title','Bayar | Transaksi')
    
@section('body')

<style>
    .card{
        width: 40%;
        margin-left: 30%;
    }
</style>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Bayar Transaksi</h4>

            <div class="col-md-10">
                <form action="{{route('UpdateTransaksi', $data->id)}}" method="post" class="form-group">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label>Order ID</label>
                        <input class="form-control" id="list" onchange="functionku()" value="{{ $data->order_id }}" type="text" name="order_id" readonly>
                    </div>

                    <div class="form-group">
                        <label>Total Bayar</label>
                        <input class="form-control" type="text" id="total_bayar" value="{{ $data->total_bayar }}" onkeyup="sum();"  name="total_bayar" readonly>
                    </div>

                    <div class="form-group">
                        <label>Bayar</label>
                        <input class="form-control" type="text" value="{{ $data->bayar }}" id="bayar" onkeyup="sum();" name="bayar">
                    </div>

                    <div class="form-group">
                        <label>Kembalian</label>
                        <input class="form-control" type="text" id="kembalian" onkeyup="sum();" name="kembalian" readonly>
                    </div>

                        <button type="submit" class="btn btn-info btn-sm">Save</button>


                </form>
            </div>

        </div>
    </div>


    <script type="text/javascript">
        function sum(){
            var t1 = document.getElementById("bayar").value;
            var t2 = document.getElementById("total_bayar").value;
            var hasil = parseInt(t1)-parseInt(t2);
        
                if(!isNaN(hasil)){
                document.getElementById("kembalian").value=hasil;
                }
            }
    </script>

@endsection