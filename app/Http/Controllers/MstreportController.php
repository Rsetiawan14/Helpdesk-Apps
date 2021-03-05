<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class MstreportController extends Controller
{
    public function index()
    {
        $data_mstreport = \App\Mstreport::where([
            'status'=>'3',
            'user_id' => auth()->user()->id])->get();
        return view('helpdesk.index',['data_mstreport' => $data_mstreport]);
    }
    public function create(Request $request)
    {
        $mstreport = new \App\Mstreport();
        $mstreport->user_id = $request->user_id;
        $mstreport->nama_req = $request->nama_req;
        $mstreport->tgl_req = $request->tgl_req;
        $mstreport->laporan = $request->laporan;
        $mstreport->catatan_req = $request->catatan_req;
        $mstreport->save();
        return redirect('/helpdeskreq')->with('sukses','Permohonan Berhasil diBuat');
    }
    public function delete($id)
    {
        $data_mstreport = \App\Mstreport::find($id);
        $data_mstreport->delete($data_mstreport);
        return redirect('/helpdeskreq')->with('sukses','Data berhasil dihapus');
    }
}
