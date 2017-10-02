@extends('layouts.dash')
@section('page_heading','Daftar Data pelanggan Digital Kreasi')
@section('section')
<div  >
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('pelanggan/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah pelanggan</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama pelanggan</th>
            <th>Hp</th>
            <th>Perwakilan</th>
            <th>Jabatan</th>

            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
        @php($no=1)
          @foreach($data as $g)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->hp}}</td>
            <td>{{$g->perwakilan}}</td>
            <td>{{$g->jabatan}}</td>
            <td>
            
              <a href="{{url('pelanggan/show/')}}/{{$g->id_pelanggan}}" class="btn btn-info fa fa-eye" style="margin-bottom: 10px;"></a>
                @if(Auth::user()->role =='pm')
              {{Form::model($g,['route'=>['pelanggan.destroy',$g],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
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