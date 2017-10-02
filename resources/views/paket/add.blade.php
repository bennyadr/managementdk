@extends('layouts.dash')
@section('page_heading','Tambah Data Paket Hosting')
@section('section')
<div  >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'paket','method' => 'post','data-parsley-validate'=>'parsley'])}}
				@include('paket._form')
			<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('paket')}}" class="btn btn-default">Kembali</a>
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>
	
</div>
</div>
@endsection