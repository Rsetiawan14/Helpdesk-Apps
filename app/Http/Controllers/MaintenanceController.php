<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $data_mstreport = \App\Mstreport::where('status','1')->get();
        return view('maintenance.index',['data_mstreport' => $data_mstreport]);
    }
    public function edit($id)
    {
        $mstreport = \App\Mstreport::find($id);
        return view('maintenance/edit',['mstreport' => $mstreport]);
    } 
    public function update(Request $request,$id)
    {
        $mstreport = \App\Mstreport::find($id);
        $mstreport ->nama_tech=$request->nama_tech;
        $mstreport ->catatan_tech=$request->catatan_tech;
        $mstreport ->tgl_tech=$request->tgl_tech;
        $mstreport ->status=$request->status;
        $mstreport->save();
        return redirect('/maintenance');
    }  
}
