@extends('layouts.dash')
@section('page_heading','Tambah Data Group')
@section('section')
<div  >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::open(['url'=>'group','method' => 'post','data-parsley-validate'=>'parsley'])}}
				@include('group._form')
			<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('group')}}" class="btn btn-default">Kembali</a>
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>
	
</div>
</div>
@endsection