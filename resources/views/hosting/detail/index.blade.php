@extends('layouts.dash')
@section('page_heading','Daftar Detail hosting')
@section('section')
<div class="col-xs-12">
  <div class="row">
    @foreach($data as $d)
    <div class="box">
      <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{url('/hosting')}}">hosting</a></li>
        <li class="breadcrumb-item active">{{$d->nama_hosting}}</li>
      </ol>
      <div class="box-header">
        <div class="pull-left" style="margin-bottom: 30px;" >
          <h3>Domain : {{$d->domain}}</h3>
          @if($d->status_hosting==1)
          <h3> <span  class="label label-success">Aktif</span></h3>
          @else($d->status_hosting)
          <h3><span  class="label label-danger">Tidak Aktif</span></h3>
          @endif
          
        </div>
        
        <div class="pull-right" style="margin-bottom: 30px;" >
        <a href="{{url('hosting/detail/')}}/{{$d->id_pelanggan_hosting}}/add" class="btn btn-default"><span class="fa fa-print"></span>
        Cetak Data</a>
          <a href="{{url('hosting/detail/')}}/{{$d->id_pelanggan_hosting}}/add" class="btn btn-primary"><span class="fa fa-plus"></span>
        Tambah Detail hosting</a>
      </div>
      
    </div>
    <!-- /.box-header -->
  </div>
</div>
<br>
<div class="row">
  <div class="box-body">
    
    <div class="col-xs-6">
      <div class="panel panel-default height">
        <div class="panel-heading">Detail Pelanggan</div>
        <div class="panel-body">
          <strong>{{$d->nama}}</strong><br>
          {{$d->alamat}}<br>
        </div>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="panel panel-default height">
        <div class="panel-heading">Informasi Kontak</div>
        <div class="panel-body">
          <strong>Perwakilan :</strong> {{$d->perwakilan}}<br>
          <strong>No Hp:</strong> {{$d->hp}}<br>
          <strong>No Telepon:</strong>{{$d->telp}}<br>
          <strong>No Fax:</strong>{{$d->fax}}<br>
        </div>
      </div>
    </div>
    
  </div>
</div>
<div class="row">
  <table class="table table-stripped">
    <thead>
      <tr>
        <th>No</th>
        <th>Awal Daftar</th>
        <th>Tanggal Selesai</th>
        <th>Sisa</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($d->details as $det)
      <tr>
        <td></td>
        <td>{{$det->awal_daftar}}</td>
        <td>{{$det->tgl_selesai}}</td>
        <td>{{$det->format_rupiah_nilai}}</td>
        <td></td>
        <td>
          <a href="{{url('hosting/detail')}}/{{$det->id_detail_hosting}}/edit" class="btn btn-warning btn-small fa fa-pencil" ></a>
          {{Form::model($det,['route'=>['hosting.detail.destroy',$det],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
          <button class="fa fa-trash btn btn-danger"></button>
          {{Form::close()}}
          
        </td>
      </tr>
      @endforeach
    </tbody>
    
  </table>
</div>
</div>
</div>
<!-- /.box-body -->
</div>
@endforeach
@endsection
@section('script')
<script>
$('.table').dataTable();
</script>
@endsection