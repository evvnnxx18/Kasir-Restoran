<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;
class MenuController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        // $menus = DB::table('menus')->get();
        $menus = Menu::all();
        return view('menu.index',['menus' => $menus]);

        // return view('menu.index', compact('menus','data'=>$id) );
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        Menu::create([
            'nama_menu' => $request->input('menu'),
            'harga' => $request->input('harga')     
        ]);


        return back();

        // $this->session->flashdata('success', 'Menu berhasil dibuat');
    }

    public function edit(menu $id)
    {
        $data = Menu::all();
        return view('menu.edit',['data'=>$id]);
    }

    public function update(Request $request, menu $id)
    {
    	$id->update($request->only('nama_menu', 'harga','update_at'));
    	return redirect()->route('menu');
    }


    public function delete($id)
    {
        DB::table('menus')->delete($id);
        return back();
    }

}
