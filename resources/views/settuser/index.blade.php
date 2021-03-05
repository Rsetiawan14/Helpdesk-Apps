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
                <div class="card card-outline card-success">
                    <div class="card-header">
                      <h3 class="card-title">List Akun</h3>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                        <i class="fas fa-plus"></i>  Buat Permohonan
                        </button>
                      </div>
                      <!-- /.card-tools -->
                        <!-- /.modal -->
                        <div class="modal fade" id="modal-success" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content bg-info">
                                <div class="modal-header">
                                <h4 class="modal-title">Form Permohonan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/settuser/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="NIK">NIK</label>
                                            <input name="NIK" type="number" class="form-control" id="NIK">
                                          </div>
                                          <div class="form-group">
                                              <label for="nama">Nama Lengkap</label>
                                              <input name="nama" type="text" class="form-control" id="nama">
                                          </div>
                                          <div class="form-group">
                                              <label for="divisi">Divisi</label>
                                              <input name="divisi" type="text" class="form-control" id="divisi">
                                          </div>
                                          <div class="form-group">
                                              <label for="bagian">Bagian</label>
                                              <input name="bagian" type="text" class="form-control" id="bagian">
                                          </div>
                                          <div class="form-group">
                                              <label for="email">Email</label>
                                              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                              placeholder="email">
                                          </div>
                                          <div class="form-group">
                                              <label for="role">Role user</label>
                                              <select name="role" class="form-control" id="role">
                                                  <option value="Super Admin">Super Admin</option>
                                                  <option value="IT">TI</option>
                                                  <option value="Karyawan">Karyawan</option>
                                              </select>
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
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>DIVISI</th>
                                    <th>BAGIAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_employee as $employee)
                                <tr>
                                    <td>{{$employee->NIK}}</td>
                                    <td>{{$employee->nama}}</td>
                                    <td>{{$employee->divisi}}</td>
                                    <td>{{$employee->bagian}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection