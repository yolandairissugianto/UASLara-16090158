@extends('templates.default')

@section('content')
<div class="">
    <div class="page-title">            
        <div class="title_left">
            <h3>Form Tambah User</h3>
        </div>
    </div>
<div class="clearfix"></div>
  

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data User</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-user">Nama User<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="nama-user" name="nama-user" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
              </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a href="{{route('admin.user')}}" class="btn btn-round btn-danger">Batal</a>
                  {{-- <button type="submit" class="btn btn-round btn-danger">Cancel</button> --}}
                  <button id="send" type="submit" class="btn btn-round btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsectionx