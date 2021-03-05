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
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif


        <div class="row">
            <div class="col-md-8">
                <!-- /.card -->
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">List Trouble</h3>

          <div class="card-tools">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                <i class="fas fa-plus"></i>  Buat Permohonan
                </button>
              <!-- /.modal -->
              <div class="modal fade" id="modal-info" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-info">
                    <div class="modal-header">
                      <h4 class="modal-title">Form Permohonan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="/helpdeskreq/create" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="user_id" value={{auth()->user()->id}}>
                            <label for="nama_req">Nama Pemohon:</label>
                            <input name="nama_req" type="text" class="form-control" id="name_req" placeholder="Nama Pemohon" value={{auth()->user()->name}} readonly>
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Tanggal Permohonan:</label>
                                    <!-- /.input group -->
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input name="tgl_req" type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="laporan">Jenis laporan:</label>
                                  <select name="laporan" class="form-control" id="laporan">
                                      <option value="Backup">Backup</option>
                                      <option value="Perbaikan">Perbaikan</option>
                                      <option value="Instalasi">Instalasi</option>
                                      <option value="Email">Email</option>
                                      <option value="Pemeliharaan Aplikasi">Pemeliharaan Aplikasi</option>
                                      <option value="Pemeliharaan Infrastruktur">Pemeliharaan Infrastruktur</option>
                                      <option value="Permintaan Data">Permintaan Data</option>
                                      <option value="Recovery(Pemulihan)">Recovery (Pemulihan)</option>
                                      <option value="Penambahan Fasilitas">Penambahan Fasilitas</option>
                                      <option value="Dll">Lainnya</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="catatan_req">Keterangan</label>
                                  <input name="catatan_req"type="text" class="form-control" id="catatan_req" aria-describedby="">
                              </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th>TANGGAL</th>
                <th>NAMA PEMOHON</th>
                <th>JENIS LAPORAN</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_mstreport as $mstreport)
              <tr>
                  <td>{{$mstreport->tgl_req}}
                  <td>{{$mstreport->nama_req}}</td>
                  <td>{{$mstreport->laporan}}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="/helpdeskreq/{{$mstreport->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="{{ route('invoice.print', $mstreport->id) }}" class="btn btn-info"><i class="fas fa-download"></i></a>
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

