@extends('templates.default')

@section('content')
<div class="">
    <div class="page-title">            
        <div class="title_left">
            <h3>Form Tambah Siswa</h3>
        </div>
    </div>
<div class="clearfix"></div>
  

<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Siswa</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              
            <form id="demo-form2" action="{{route('admin.update.siswa',$data->id)}}" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                {{method_field('PATCH')}}
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12 custom-file">
                  <input type="hidden" name="old_gambar" value="{{$data->gambar}}">
                    <input type="file" id="gambar" name="gambar" class="form-control custom-file-input col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis" >NIS<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nis" name="nis" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{$data->nis}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-siswa">Nama Siswa<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nama-guru" name="nama" required="required" autocomplete="off" class="form-control col-md-7 col-xs-12" value="{{$data->nama}}" onkeypress="return lettersOnly(event)">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="jk">
                      <option>Pilih</option>
                      <option value="laki_laki" @if ($data->jk == 'laki_laki'){{"selected"}}@endif>Laki - Laki</option>
                      <option value="perempuan" @if ($data->jk == 'perempuan'){{"selected"}}@endif>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kelas">Kelas<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kelas" name="kelas" required="required" autocomplete="off" class="form-control col-md-7 col-xs-12" value="{{$data->kelas}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="textarea" id="alamat" name="alamat" required="required" autocomplete="off" class="form-control col-md-7 col-xs-12" value="{{$data->alamat}}">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="{{route('admin.siswa')}}" class="btn btn-round btn-danger">Batal</a>
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

    <script>
      function lettersOnly(evt) {
        var charCode = (evt.which) ? evt.which : window.event.keyCode;
  
        if (charCode <= 13) {
            return true;
        }
        else {
            var keyChar = String.fromCharCode(charCode);
            var re = /^[a-zA-Z ]+$/
            return re.test(keyChar);
        }
      }
     </script>
@endsection