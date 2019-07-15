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
          <h3>Tabel Siswa</h3>
        </div>
      </div>


<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
            <a href="{{ route ('admin.siswa.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th class="col-md-2">Action</th>
                </tr>
              </thead>
    
              <tbody>
                <?php $no = 1 ?>
                @foreach ($data as $data)
                <tr>
                <td>{{$no}}</td>
                  <td>
                      <img src="{{ asset('upload/siswa/'.$data->gambar)}}" style="width:50px; height:50px;" class="img-circle profile_img">
                  </td>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jk}}</td>
                    <td>{{$data->kelas}}</td>
                    <td>{{$data->alamat}}</td>
                  <td>
                    <a href="{{ route ('admin.siswa.edit', $data->id)}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                    <a href="{{ route ('admin.destroy.siswa', $data->id)}}" onclick="return confirm('Anda yakin akan menghapus ?')" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>    
@endsection
