@extends('layouts.dash')
@section('page_heading','Berkas Proyek '.$proyek -> nama_proyek)
@section('section')
<div class="row">
  
  <div class="col-md-12">
    <ol class="breadcrumb">
      <li class="breadcrumb-item "><a href="{{url('/proyek')}}">Proyek</a></li>
      <li class="breadcrumb-item "><a href="{{url('/proyek/detail/')}}/{{$proyek->id_proyek}}">{{$proyek->nama_proyek}}</a></li>
      <li class="breadcrumb-item ">File {{$proyek->nama_proyek}}</li>
    </ol>
    <div id="gallery-images">
      <ul>
        @foreach($proyek->files as $data)
        <li>
          <h3>{{$data->nama_file}}</h3>
          <img src="{{asset('img')}}/file.png" width="100" height="100">
          <br>
          <a href="{{url('/proyek/file')}}/{{$data->nama_file}}/download" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> Download</a>
          <a href="{{url('/proyek/file')}}/{{$data->id_file_proyek}}/delete" class="btn btn-danger btn-sm  "onclick="return confirm('delete?')"><span class="fa fa-trash" > Delete</span></a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<br>
<form action="{{url('proyek/detail/file/')}}" class="dropzone" id="myDropzoneSk">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$proyek->id_proyek}}">
</form><br>
<a href="{{url('/proyek/detail')}}/{{$proyek->id_proyek}}" class="btn btn-danger">Back</a>
<hr>
@endsection
@section('script')
<script src="{{asset('js/dropzone.min.js')}}"></script>
<script src="{{asset('js/uploadconf.js')}}"></script>
@endsection