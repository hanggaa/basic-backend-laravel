<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $show_inven = \App\inventorie::all();
        return view('crud',['index_inven'=>$show_inven]);
    }

    public function create(Request $request){
        \App\inventorie::create($request->all());
        return redirect('/crud');
    }
    public function edit($id){
        $edit_data = \App\inventorie::find($id);
        return view('edit',['show_edit' => $edit_data]);
    }
    public function update(request $request,$id){
        $edit_data = \App\inventorie::find($id);
        $edit_data->update($request->all());
        return redirect('/crud');
    }
    public function hapus(request $request,$id){
        $hapus_data = \App\inventorie::find($id);
        $hapus_data->delete();
        return redirect('/crud');
    }
}
