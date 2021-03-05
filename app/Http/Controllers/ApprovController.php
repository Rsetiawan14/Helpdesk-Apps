<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovController extends Controller
{
    public function index()
    {
        $data_mstreport = \App\Mstreport::where('status','0')->get();
        return view('approval.index',['data_mstreport' => $data_mstreport]);
    }
    public function edit($id)
    {
        $mstreport = \App\Mstreport::find($id);
        return view('approval/edit',['mstreport' => $mstreport]);
    } 
    public function update(Request $request,$id)
    {
        $mstreport = \App\Mstreport::find($id);
        $mstreport ->status=$request->status;
        $mstreport->save();
        return redirect('/approval');
    }
}
