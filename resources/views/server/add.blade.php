@extends('layouts.dash')
@section('page_heading','Tambah Data Dokumentasi Server')
@section('section')
<div  >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'server','method' => 'post','data-parsley-validate'=>'parsley'])}}
				@include('server._form')
				<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('server')}}" class="btn btn-default">Kembali</a>
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>

	
</div>

@endsection
@section('script')
	<script>
			$(".select2").select2();
			
		</script>
@endsection