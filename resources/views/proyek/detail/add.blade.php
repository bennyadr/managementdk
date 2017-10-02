@extends('layouts.dash')
@section('page_heading','Tambah Data Detail Proyek '. $data->nama_proyek)
@section('section')
<div  >

	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="{{url('/proyek')}}">Proyek</a></li>
        <li class="breadcrumb-item"><a href="{{url('/proyek/detail/')}}/{{$data->id_proyek}}">{{$data->nama_proyek}}</a></li>
         <li class="breadcrumb-item active">Tambah Detail Proyek {{$data->nama_proyek}}</li>
      </ol>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'proyek/detail','method' => 'post','data-parsley-validate'=>'parsley'])}}
				@include('proyek.detail._form',['id'=>$id])
			<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('proyek/detail')}}/{{$id}}" class="btn btn-default">Kembali</a>
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
		$(".select2").select2();
</script>
@endsection