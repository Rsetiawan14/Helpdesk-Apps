<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public function generateInvoice($id)
{
    //GET DATA BERDASARKAN ID
    $data_mstreport = \App\Mstreport::with([])->find($id);
    //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    $pdf = PDF::loadView('invoice.print', compact('data_mstreport'))->setPaper('a4', 'landscape');
    return $pdf->stream();
}
}
