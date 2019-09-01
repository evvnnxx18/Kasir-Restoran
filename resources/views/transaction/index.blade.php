@extends('template.template')

@section('title', 'Transaksi')

@section('body')

<style>
.table{
    margin-left: 9%;
    width: 85%;
}
</style>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Transaksi</h5>

            <a class="btn btn-success btn-sm" href="/transaksi/export_excel" target="_blank" role="button">Export Excel</a>

            <table class="table table-bordered">
                    <thead>
                        <th style="width: 45px">Id</th>
                        <th>Order ID</th>
                        <th>Total Payment</th>
                        <th>Payment</th>
                        <th>Return Payment</th>
                        <th>Status</th>
                        <th style="width: 100px">Action</th>
                    </thead>

                    <tbody>
                            
                        @foreach ($transactions as $t)
                            <tr class="text-center">
                                <th>{{ $t->id }}</th>
                                <td>{{ $t->order_id }}</td>
                                <td>Rp. {{ $t->total_bayar }}</td>
                                <td>Rp. {{ $t->bayar }}</td>
                                <td>Rp. {{ $t->kembalian }}</td>
                                <td>
                                    @if ($t->status == 0)
                                        <p class="text-warning">Belum Bayar</p>
                                    @else
                                        <span class="text-success">Bayar</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($t->status == 0)
                                        {{-- <a href="{{ route('EditTransaksi', $t->id) }}" class="text-success">Bayar Disini</a> --}}
                                        {{-- <button class="btn btn-warning btn-sm" href="{{ route('EditTransaksi', $t->id) }}">Bayar Disini</button> --}}
                                        <a href="/transaksi/edit/{{ $t->id }}"><button class="btn btn-warning btn-sm">Bayar Disini</button></a>
                                   
                                        @else
                                    <span class="text-success">Done</a>
                                    @endif
                                </td>
                            </tr>
                            {{-- {!! Form::close() !!} --}}
                        @endforeach

                    </tbody>
                </table>

        </div>
    </div>
@endsection