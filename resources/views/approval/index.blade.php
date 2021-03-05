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
            <div class="col-md-8">
                <!-- /.card -->
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">List For Approval</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th>NAMA PEMOHON</th>
                    <th>PERMASALAHAN</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_mstreport as $mstreport)
                <tr>
                    <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="/approval/{{$mstreport->id}}/edit" class="btn btn-info"><i class="far fa-eye"></i></a>
                        </div>
                    </td>
                    <td>{{$mstreport->nama_req}}</td>
                    <td>{{$mstreport->laporan}}</td>
                    <td>{{$mstreport->catatan_req}}</td>
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

