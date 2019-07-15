@extends('templates.default')

@section('content')

@if($message = Session::get('create'))
  <div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
  <strong>{{$message}}</strong>
  </div>
@endif

@if($message = Session::get('update'))
  <div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
  <strong>{{$message}}</strong>
  </div>
@endif

@if($message = Session::get('delete'))
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
  <strong>{{$message}}</strong>
  </div>
@endif

<div class="page-title">
        <div class="title_left">
          <h3>Tabel Berita</h3>
        </div>
      </div>


<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_content">
      <table id="datatable" class="table table-striped table-bordered">
      <a href="{{ route ('admin.berita.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th class="col-md-2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $berita)
            <tr>    
              <td>{{$berita->id}}</td>
              <td>
                {{-- {{$berita->gambar}} --}}
                <center>
                    <img src="{{ asset('images/' . $berita->gambar)}}" class="img-circle profile_img" style="width:50px; height:50px;">
                </center>
              </td>
              <td>{{$berita->judul}}</td>
              <td>{{$berita->isi_berita}}</td>
              <td>
                    <a href="{{ route ('admin.berita.edit', $berita->id)}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                    <a href="{{ route ('admin.berita.delete', $berita)}}" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
              </td>
            </tr>
          @endforeach
          {{-- <tr>
            <td>1</td>
            <td>
              <center>
                  <img src="{{ asset('assets/images/img6.png')}}" class="img-circle profile_img" style="width:50px; height:50px;">
              </center>
            </td>
            <td>Tiga Siswa SMK N 1 Slawi Menjadi Duta Lingkungan Hidup Kabupaten Tegal Tahun 2018</td>
            <td>Bapak Kepala Sekolah SMK N 1 Slawi Drs. Sufian, M. Eng menyerahkan piala yang didapat oleh siswa pada acara pemilihan duta lingkungan hidup Kabupaten Tegal yang diselenggarakan oleh Dinas Lingkungan Hidup (DLH) Kabupaten Tegal pada tanggal 11 November 2018 di Pendopo Amangkurat, Kompleks Setda Kabupaten Tegal di Lapangan upacara SMK N 1 Slawi pada hari senin (19/11).</td>
            <td>
                  <a href="{{ route ('admin.berita.edit')}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                  <a href="{{ route ('admin.berita.create')}}" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>
  </div>
</div>    
@endsection
