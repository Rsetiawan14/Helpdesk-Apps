<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function index()
    {
        $data_mstreport = \App\Mstreport::where('status','2')->get();
        return view('assignment.index',['data_mstreport' => $data_mstreport]);
    }
    public function edit($id)
    {
        $mstreport = \App\Mstreport::find($id);
        return view('assignment/edit',['mstreport' => $mstreport]);
    } 
    public function update(Request $request,$id)
    {
        $mstreport = \App\Mstreport::find($id);
        $mstreport ->status=$request->status;
        $mstreport->save();
        return redirect('/assignment');
    }
}
