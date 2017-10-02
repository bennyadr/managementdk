@extends('layouts.dash')
@section('page_heading','Daftar Data Server')
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
            <div><h3>Jumlah Data Server</h3></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('server/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah Data Server</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Perangkat</th>
            <th>Username</th>
            <th>Password</th>
            <th>Informasi</th>

            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
        @php($no=1)
          @foreach($data as $g)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$g->nama_pelanggan}}</td>
            <td>{{$g->nama_perangkat}}</td>
            <td>{{$g->username}}</td>
            <td>{{$g->password}}</td>
            <td>{{$g->informasi}}</td>
            <td>
              <a href="{{url('server/edit')}}/{{$g->id_server}}" class="btn btn-primary fa fa-pencil" title="edit" style="margin-right:10px;margin-bottom:5px;"></a>
              @if(Auth::user()->role =='pm')
              {{Form::model($g,['route'=>['server.destroy',$g],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
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