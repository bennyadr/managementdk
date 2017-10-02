@extends('layouts.dash')
@section('page_heading','Daftar Data Paket Hosting')
@section('section')
<div  >
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('paket/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah Paket</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
        @php($no=1)
          @foreach($data as $g)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$g->nama_paket}}</td>
            <td>
              <a href="{{url('paket/edit')}}/{{$g->id_paket}}" class="btn btn-primary fa fa-pencil" title="edit" style="margin-right:10px;margin-bottom:5px;"></a>
                @if(Auth::user()->role =='pm')
              {{Form::model($g,['route'=>['paket.destroy',$g],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
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