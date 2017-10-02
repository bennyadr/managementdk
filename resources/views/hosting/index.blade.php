@extends('layouts.dash')
@section('page_heading','Daftar Data Pelanggan hosting')
@section('section')
<div  >
 <div class="col-lg-12">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge" style="font-size:30px;">{{$data->count()}}</div>
            <div><h3>Jumlah Pelanggan Hosting</h3></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">.
      
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('hosting/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah Data Pelanggan hosting</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Domain</th>
            <th>Perwakilan</th>
            <th>Status Hosting</th>
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
          @php($no=1)
          @foreach($data as $g)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->domain}}</td>
            <td>{{$g->perwakilan}}</td>
            <td>
              {{Form::model($g,['route'=>['hosting.changeStatus',$g],'method'=>'put','class'=>'form-inline','onsubmit'=>'return confirm("Ganti Status?")'])}}
              @if($g->status_hosting==1)
              <button  class="label label-success">Aktif</button>
              @else($g->status_hosting)
              <button  class="label label-danger">Tidak Aktif</button>
              @endif
            {{Form::close()}}</td>
            <td>
              <a href="{{url('hosting/detail')}}/{{$g->id_pelanggan_hosting}}" class="btn btn-info fa fa-eye"></a>
              <a href="{{url('hosting/edit')}}/{{$g->id_pelanggan_hosting}}" class="btn btn-primary fa fa-pencil" title="edit" style="margin-right:10px;margin-bottom:5px;"></a>
                @if(Auth::user()->role =='pm')
              {{Form::model($g,['route'=>['hosting.destroy',$g],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
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