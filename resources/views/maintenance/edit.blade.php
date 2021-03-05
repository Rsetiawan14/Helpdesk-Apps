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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="far fa-edit"></i>
                        Detail Permohonan
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <dl class="row">
                        <dt class="col-sm-4">Nama Pemohon</dt>
                        <dd class="col-sm-8">{{$mstreport->nama_req}}</dd>
                        <dt class="col-sm-4">Tanggal Permohonan</dt>
                        <dd class="col-sm-8">{{ date('d-m-Y', strtotime($mstreport->tgl_req)) }}</dd>
                        <dt class="col-sm-4">Jenis Laporan</dt>
                        <dd class="col-sm-8">{{$mstreport->laporan}}</dd>
                        <dt class="col-sm-4">Keterangan</dt>
                        <dd class="col-sm-8">{{$mstreport->catatan_req}}</dd>
                      </dl>
                      <form action="/maintenance/{{$mstreport->id}}/update" method="POST">
                        {{csrf_field()}}
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <label>Tanggal Permohonan:</label>
                            <!-- /.input group -->
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input name="tgl_tech" type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_tech">Nama Tech</label>
                            <input name="nama_tech"type="text" class="form-control" id="nama_tech" value="{{auth()->user()->name}}">
                        </div> 
                        <div class="form-group">
                            <label for="catatan_tech">Catatan</label>
                            <input name="catatan_tech"type="text" class="form-control" id="catatan_tech">
                        </div>
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                              <input name="status" type="checkbox" id="checkboxPrimary1" checked="" value="2">
                              <label for="checkboxPrimary1">Anda Yakin?
                              </label>
                            </div>
                        </div>
                      <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-sign-in-alt"></i> Submit</button>
                      </form>
                    </div>
                    <!-- /.card-body -->
                </div> 
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    
@endsection

