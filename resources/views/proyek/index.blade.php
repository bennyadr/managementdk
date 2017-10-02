@extends('layouts.dash')
@section('page_heading','Daftar Data Proyek')
@section('section')
<div >
  <style>
  .margin-btn{
  margin-bottom: 10px;
  }
  </style>
  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-file-o fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge" style="font-size:30px;">{{$data->count()}}</div>
            <div><h3>Jumlah Proyek</h3></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="box">
      
      <div class="box-header">
        
        <div class="pull-right" style="margin-bottom: 30px;" >
          <a href="{{url('proyek/add')}}" class="btn btn-primary"><span class="fa fa-plus"></span>Tambah Proyek</a>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        
        <div>
          <table class="table table-bordered table-striped"  >
            <thead style="text-align: center">
              <tr>
                <th>Nama Proyek</th>
                <th>Grup</th>
                <th>Pelanggan</th>
                <th>Nilai Proyek</th>
                <th>Keuntungan</th>
                <th>Status Pembayaran</th>
                <th>Status Proyek</th>
                <th>Aksi</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach($data as $p)
              <tr >
                <td>{{$p -> nama_proyek}}</td>
                <td>{{$p->grup->nama_grup}}</td>
                <td>{{$p->client->nama}}</td>
                <td>{{$p->format_rupiah_nilai}}</td>
                <td>{{$p->format_rupiah_profit}}</td>
                <td>
                  @if($p->status_pembayaran==1)
                  <i class="label label-success"> Lunas</i>
                  @else
                  <i class="label label-danger"> Belum Lunas</i>
                  @endif
                </td>
                <td>
                  @if($p->status_proyek=="selesai")
                  <i class="label label-success"> Selesai</i>
                  @elseif($p->status_proyek=="jalan")
                  <i class="label label-info">Jalan</i>
                  @else
                  <i class="label label-danger">Pending</i>
                  @endif
                </td>
                <td>
                  <a class="btn btn-success btn-custom fa fa-eye margin-btn" href="{{url('proyek/detail')}}/{{$p->id_proyek}}" ></a>
                  @if($p->status_proyek =="selesai" && $p->status_pembayaran==2)
                  <form action="{{url('proyek/penagihan')}}" method="post" class="margin-btn">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$p->id_proyek}}">
                    <input type="hidden" name="status" value="{{$p->status_proyek}}">
                    <button class="btn btn-primary fa fa-print btn-custom"></button>
                  </form>
                  @endif
                  <a href="{{url('proyek/edit')}}/{{$p->id_proyek}}" class="btn btn-warning btn-small fa fa-pencil margin-btn" ></a>
                    @if(Auth::user()->role =='pm')
                  {{Form::model($p,['route'=>['proyek.destroy',$p],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
                  <button class="fa fa-trash btn btn-danger"></button>
                  {{Form::close()}}
                  @endif
                  
                </td>
              </tr>
              @endforeach
            </tbody>
            
          </table>
        </div>
        
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  @endsection
  @section('script')
  <script>
  $('.table').dataTable();
  </script>
  @endsection