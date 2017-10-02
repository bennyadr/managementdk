@extends('layouts.dash')
@section('page_heading','Tambah Data Pengguna')
@section('section')
<div  >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'register','method' => 'post','data-parsley-validate'=>'parsley'])}}
				@include('pengguna._form')
			<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('pengguna')}}" class="btn btn-default">Kembali</a>
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