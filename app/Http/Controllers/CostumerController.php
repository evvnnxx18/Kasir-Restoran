<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Costumer;

class CostumerController extends Controller
{
    public function index()
    {
        $costumers = Costumer::all();
        return view('costumer.index', ['costumers' => $costumers]);
    }

    public function create()
    {
        return view('costumer.index');
    }

    public function store(Request $request)
    {
        // $request->validate(array(
        //     'nama' => 'required|max:255',
        //     'jenis_kelamin' => 'required|numeric',
        //     'no_hp' => 'required',
        //     'alamat' => 'required|max:255'
        // ));

        // DB::table('costumers')->insert([
        //     'nama'->$request->input('nama'),
        //     'jenis_kelamin'->$request->input('jenis_kelamin'),
        //     'no_hp'->$request->input('no_hp'),
        //     'alamat'->$request->input('alamat')
        // ]);

        Costumer::create([
            'nama'=>$request->input('nama'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'no_hp'=>$request->input('no_hp'),
            'alamat'=>$request->input('alamat')
        ]);

        return back();
    }

    public function edit(costumer $id)
    {
        $data = Costumer::all();
        return view('costumer.edit',['data'=>$id]);
    }

    public function update(Request $request, costumer $id)
    {
        // $id->update($request->only('nama','jenis_kelamin','no_hp','alamat','update_at'));
        // return redirect()->route('costumer');

        $id->update($request->only('nama', 'jenis_kelamin','no_hp','alamat','update_at'));
    	return redirect()->route('costumer');
    }
   
    public function delete($id)
    {
        DB::table('costumers')->delete($id);
        // Costumers::where('id',$id)->delete();
        return back();
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $costumers = DB::table('costumers')->where('nama','like',"%".$cari."%")->paginate();
        return view('costumer.index',['costumers' => $costumers]);
    }


}
