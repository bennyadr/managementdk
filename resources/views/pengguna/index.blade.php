@extends('layouts.dash')
@section('page_heading','Daftar Data Pengguna')
@section('section')
<div  >
  <div class="col-lg-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-server fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge" style="font-size:30px;">{{$data->count()}}</div>
            <div><h3>Jumlah Data Pengguna</h3></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('pengguna/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah Data Pengguna</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
          @php($no=1)
          @foreach($data as $g)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$g->name}}</td>
            <td>{{$g->email}}</td>
            <td>
              @if($g->role=="pm")
              <span class="label label-primary">
                Proyek Manager
              </span>
              @else
              <span class="label label-warning">
                Administrasi
               </span>
              @endif
            </td>
            
            <td>
              <a href="{{url('pengguna/edit')}}/{{$g->id}}" class="btn btn-primary fa fa-pencil" title="edit" style="margin-right:10px;margin-bottom:5px;"></a>
              @if(Auth::user()->role =='pm')
              {{Form::model($g,['route'=>['pengguna.destroy',$g],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
                 <button class="fa fa-trash btn btn-danger"></button>
              {{Form::close()}}
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
        
      </table>
      
    </div>
    <!-- /.box-body -->
  </div>
  
</div>
</div>
@endsection
@section('script')
<script>
$('.table').dataTable();
</script>
@endsection