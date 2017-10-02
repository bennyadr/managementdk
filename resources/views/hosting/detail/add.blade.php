@extends('layouts.dash')
@section('page_heading','Tambah Data Detail Proyek '. $data->domain)
@section('section')
<div  >

	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{url('/hosting')}}">hosting</a></li>
        <li class="breadcrumb-item"><a href="{{url('/hosting/detail/')}}/{{$id}}">{{$data->domain}}</a></li>
         <li class="breadcrumb-item active">Tambah Detail hosting {{$data->domain}}</li>
      </ol>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'hosting/detail','method' => 'post','data-parsley-validate'=>'parsley'])}}
				@include('hosting.detail._form',['id'=>$id])
			<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('hosting/detail')}}/{{$id}}" class="btn btn-default">Kembali</a>
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>
	
</div>
</div>
@endsection
@section('script')
<script>
	$('.datepicker').datepicker({
		autoclose:true,
		format:'yyyy-mm-dd',
		orientation:'auto'
	});
</script>
@endsection