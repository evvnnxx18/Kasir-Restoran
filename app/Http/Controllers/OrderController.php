<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use App\Costumers;
use App\Costumer;

use App\Order;
use App\Menu;
use App\User;
use App\Transaction;
use session;

class OrderController extends Controller
{
  //  public function __construct(){
  //    $this->middleware('auth');
  //  }

    public function index(){
        $costumers = Costumer::all();
        $menus = Menu::all();
        $users = User::all();
        $orders = Order::all();
        return view('order.index',compact('menus','orders','costumers','users'));
    }

    public function store(Request $request)
    {

      // $nama_menu = Menu::where('id',$request->input('menu_id'))->first()->nama_menu;
      $harga_menu = Menu::Where('id',$request->input('menu_id'))->first()->harga;


       // store in the database
       $order = new Order;

       $order->costumer_id = $request->costumer_id;
       $order->menu_id = $request->menu_id;
       $order->harga_menu = $harga_menu;
       $order->total = $request->total;
       $order->total_harga = (int)$request->total*(int)$harga_menu;
       $order->user_id = $request->user_id;

       $order->save();

       $transaction = new Transaction;
       $order_id = $order->id;

       $transaction->order_id = $order_id;
       $transaction->total_bayar = (int)$request->total*(int)$harga_menu;
       $transaction->bayar = '0';
       $transaction->kembalian = '0';
       $transaction->status = '0';

       $transaction->save();

      // Order::create([
      //     'costumer_id' => $request->input('costumer_id'),
      //     'menu_id'     =>$request->input('menu_id'),
      //     'harga_menu'  =>$request->input('harga_menu'),
      //     'total'       =>$request->input('total'),
      //     'total_harga' =>(int)$request->input('total')*(int)$harga_menu,
      //     'user_id'     =>$request->input('user_id')
      // ]);
    
      // $id = Order::Where('id',$request->input('order_id'))->first()->id;

      // Transaction::create([
      //   'order_id'=>$id,
      //   'total_bayar'=>(int)$request->input('total')*(int)$harga_menu,
      //   'bayar' => '0',
      //   'kembalian' => '0',
      //   'status' =>'0',
      // ]);

        return redirect()->route('order');
    }

    public function delete($id)
    {
        DB::table('orders')->delete($id);
        return back();
    }

    public function cari(Request $request){
      $cari = $request->cari;

      $orders = DB::table('costumers')->where('nama','like',"%".$cari."%")->paginate();
      return view('order.index',['orders' => $orders]);
  }

    
}
