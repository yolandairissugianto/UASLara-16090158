@extends('templates.default')

@section('content')

<div class="page-title">
        <div class="title_left">
          <h3>Tabel User</h3>
        </div>
      </div>


<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
            <a href="{{ route ('admin.user.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th class="col-md-2">Action</th>
                </tr>
              </thead>
    
    
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Yolanda Iris Sugianto</td>
                  <td>yolanda</td>
                  <td>
                        <a href="{{ route ('admin.user.edit')}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                        <a href="" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>    
@endsection
