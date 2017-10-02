@extends('layouts.dash')
@section('page_heading','Detail Proyek')
@section('section')
<div class="col-xs-12">
  <div class="row">
    @foreach($data as $d)
    <div class="box">
      <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{url('/proyek')}}">Proyek</a></li>
        <li class="breadcrumb-item active">{{$d->nama_proyek}}</li>
      </ol>
      <div class="box-header">
        <div class="col-xs-12">
          <div class="row">
            <div class="pull-right" style="margin-bottom: 30px;" >
             <a href="{{url('proyek/detail/')}}/{{$d->id_proyek}}/upload" class="btn btn-success"><i class="fa fa-upload"></i> Upload File</a>
              <a href="{{url('proyek/detail/')}}/{{$d->id_proyek}}/add" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Detail Proyek</a>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    
                    <div class="col-xs-9">
                      <div class="huge">{{$d->format_rupiah_nilai}}</div>
                      <div>Nilai Proyek</div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-green">
                <div class="panel-heading">
                  <div class="row">
                    
                    <div class="col-xs-9">
                      <div class="huge">{{$d->nilai_operasional}}</div>
                      <div>Nilai Operasional</div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-yellow">
                <div class="panel-heading">
                  <div class="row">
                    
                    <div class="col-xs-9">
                      <div class="huge">{{$d->format_rupiah_profit}}</div>
                      <div>Nilai Profit</div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
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
            <strong>{{$d->client->nama}}</strong><br>
            {{$d->client->alamat}}<br>
            <strong>{{strtoupper($d->client->lokasi)}}</strong><br>
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="panel panel-default height">
          <div class="panel-heading">Informasi Kontak</div>
          <div class="panel-body">
            <strong>Perwakilan :</strong> {{$d->client->perwakilan}}<br>
            <strong>No Hp:</strong> {{$d->client->hp}}<br>
            <strong>No Telepon:</strong>{{$d->client->telp}}<br>
            <strong>No Fax:</strong>{{$d->client->fax}}<br>
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
          <th>Deskripsi</th>
          <th>Tanggal</th>
          <th>Nilai</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($d->details as $det)
        <tr>
          <td></td>
          <td>{{$det->deskripsi}}</td>
          <td>{{$det->tgl}}</td>
          <td>{{$det->format_rupiah_nilai}}</td>
          <td>
            <a href="{{url('proyek/detail')}}/{{$det->id_detail_proyek}}/edit" class="btn btn-warning btn-small fa fa-pencil" ></a>
             @if(Auth::user()->role =='pm')
            {{Form::model($det,['route'=>['proyek.detail.destroy',$det],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("Yakin Hapus?")'])}}
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