@extends('layouts.dash')
@section('page_heading','Daftar Data Vendor')
@section('section')
<div  >
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('vendor/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah Vendor</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Vendor</th>
            <th>Perwakilan</th>
            <th>No Hp</th>
            <th>Aksi</th>
            
          </tr>
        </thead>
        <tbody>
        @php($no=1)
          @foreach($data as $g)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$g->nama_vendor}}</td>
            <td>{{$g->perwakilan}}</td>
            <td>{{$g->no_hp}}</td>
            <td>
              <a href="{{url('vendor/edit')}}/{{$g->id_vendor}}" class="btn btn-primary fa fa-pencil" title="edit" style="margin-right:10px;margin-bottom:5px;"></a>
                @if(Auth::user()->role =='pm')
              {{Form::model($g,['route'=>['vendor.destroy',$g],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
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