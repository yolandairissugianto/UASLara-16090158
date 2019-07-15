@extends('templates.default')

@section('content')
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Form Tambah Berita</h3>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">

          <form method="POST" action="{{route('admin.store.berita')}}" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">
            @csrf
            <span class="section">Berita</span>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12 custom-file">
                <input type="file" id="gambar" name="gambar" required="required" class="form-control custom-file-input col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul Berita <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="judul" name="judul" required="required"  autocomplete="off" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Isi Berita <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="isi_berita" required="required" name="isi_berita" autocomplete="off" class="form-control col-md-7 col-xs-12" onkeypress="return lettersOnly(event)"></textarea>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
              <a href="#" class="btn btn-round btn-danger">Batal</a>
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