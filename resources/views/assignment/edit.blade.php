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
                        Detail Persetujuan
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
                        <dt class="col-sm-4">Nama Teknisi</dt>
                        <dd class="col-sm-8">{{$mstreport->nama_tech}}</dd>
                        <dt class="col-sm-4">Tanggal Penyelesaian</dt>
                        <dd class="col-sm-8">{{ date('d-m-Y', strtotime($mstreport->tgl_tech)) }}</dd>
                        <dt class="col-sm-4">Tindak lanjut</dt>
                        <dd class="col-sm-8">{{$mstreport->catatan_tech}}</dd>
                      </dl>
                      <form action="/assignment/{{$mstreport->id}}/update" method="POST">
                        {{csrf_field()}}
                        <!-- radio -->
                      <div class="row">
                        <div class="form-group clearfix">
                            <div class="icheck-success d-inline">
                              <input type="radio" name="status" id="radioSuccess1" value="3">
                              <label for="radioSuccess1">Setuju
                              </label>
                            </div>
                            <div class="icheck-danger d-inline">
                              <input type="radio" name="status" id="radioSuccess2" value="2">
                              <label for="radioSuccess2">Tidak Setuju
                              </label>
                            </div>
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

