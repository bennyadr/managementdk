@extends('layouts.dash')
@section('page_heading','Detail Pelanggan')
@section('section')
<style>
    .text-padding{
        padding-left: 30px;
    }
</style>
<div id="contentwrapper" class="contentwrapper">
  
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">
       <h3><span class="fa fa-building"></span> {{$pelanggan->nama}}</h3>
          
        </div>
        <div class="panel-body">
          <div class="col-xs-12">
            <table>
              <tr>
                <th><i class="fa fa-user"></i> Perwakilan</th>
                <th> : </th>
                <th  class="text-padding">{{$pelanggan->perwakilan}}</th>
              </tr>
              <tr>
                <th><i class="fa fa-group"></i> Jabatan</th>
                <th> : </th>
                <th class="text-padding" >{{$pelanggan->jabatan}}</th>
              </tr>
              <tr>
                <th><i class="fa fa-map-marker"></i> Alamat</th>
                <th> : </th>
                <th  class="text-padding">{{$pelanggan->alamat}}</th>
              </tr>
              <tr>
                <th><i class="fa fa-building"></i> Kota</th>
                <th> :</th>
                <th  class="text-padding">{{$pelanggan->lokasi}} </th>
              </tr>
              <tr>
                <th><i class="fa fa-phone"></i> HP</th>
                <th> : </th>
                <th  class="text-padding">{{$pelanggan->hp}}</th>
              </tr>
              <tr>
                <th><i class="fa fa-phone"></i> Telepon</th>
                <th> : </th>
                <th  class="text-padding">{{$pelanggan->telp}}</th>
              </tr>
              <tr>
                <th><i class="fa fa-fax"></i> Fax</th>
                <th> : </th>
                <th  class="text-padding">{{$pelanggan->fax}}</th>
              </tr>
              <tr>
                <th><i class="fa fa-calendar"></i> Tahun Daftar</th>
                <th> : </th>
                <th  class="text-padding">{{$pelanggan->tahun}}</th>
              </tr>
            </table>
          </div>

          
        </div>
      </div>
    </div>
    
    
  </div>
  <a href="{{url('pelanggan')}}" class="btn btn-default">Kembali</a>
  @if(Auth::user()->role =='pm')
  <a href="{{url('pelanggan/edit')}}/{{$pelanggan->id_pelanggan}}" class="btn btn-primary" title="edit"><span class="fa fa-pencil"></span> Edit </a>
   @endif
  
  @endsection