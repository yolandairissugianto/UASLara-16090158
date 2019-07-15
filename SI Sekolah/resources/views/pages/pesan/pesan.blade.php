@extends('templates.default')

@section('content')

<div class="page-title">
  <div class="title_left">
    <h3>Kritik dan Saran</h3>
  </div>
</div>


<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_content">
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi Pesan</th>
            <th class="col-md-2">Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Vesta Henin</td>
            <td>vestah@gmail.com</td>
            <td>Sekolahnya bagus, hanya saja lahan parkir kurang memadai</td>
            <td>
            <a  class="btn btn-primary btn-round btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i>  Info</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
      
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detail Pesan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-user">Nama</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="nama-user" name="nama-user" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Email</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Isi Pesan</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="isi_pesan" required="required" name="isi_pesan" class="form-control col-md-7 col-xs-12"></textarea>
          </div>
        </div>
      </div>
      </form>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="{{route('admin.pesan')}}" class="btn btn-round btn-danger" data-dismiss="modal">Batal</a>
      </div>
      
    </div>
  </div>
</div>
@endsection
