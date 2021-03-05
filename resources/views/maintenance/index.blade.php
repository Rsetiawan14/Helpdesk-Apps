@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- /.card -->
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">List Trouble</h3>

          <div class="card-tools">
                
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table">
            <thead>
                <tr>
                    <th>NAMA PEMOHON</th>
                    <th>PERMASALAHAN</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_mstreport as $mstreport)
                <tr>
                    <td>{{$mstreport->nama_req}}</td>
                    <td>{{$mstreport->laporan}}</td>
                    <td>{{$mstreport->catatan_req}}</td>
                    <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="/maintenance/{{$mstreport->id}}/edit" class="btn btn-info"><i class="fas fa-file-medical"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card --> 
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    
@endsection

