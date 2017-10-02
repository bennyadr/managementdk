@extends('layouts.dash')
@section('page_heading','Tambah Data Proyek')
@section('section')

<style>
	.form-margin{
			margin-bottom: 100px;
	}
</style>
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'proyek','method' => 'post','data-parsley-validate'=>'parsley','class'=>'form-margin'])}}
				@include('proyek._form')
			<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('proyek')}}" class="btn btn-default">Kembali</a>
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>
	
</div>

@endsection
@section('script')
<script>
	$('.datepicker').datepicker({
		autoclose:true,
		format:'yyyy-mm-dd'
	});
		$(".select2").select2();
</script>
@endsection
