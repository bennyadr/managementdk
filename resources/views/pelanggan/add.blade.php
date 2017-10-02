@extends('layouts.dash')
@section('page_heading','Tambah Data Pelanggan')
@section('section')
<div  >
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
		<div class="box-body" style="margin-bottom: 300px;">
			{{Form::open(['url'=>'pelanggan','method' => 'post','data-parsley-validate'=>'parsley','class'=>'form-margin'])}}
				@include('pelanggan._form')
			<div class="form-group">
					<input type="submit" class="btn btn-success" value="Simpan">
			<a href="{{url('pelanggan')}}" class="btn btn-default">Kembali</a>
			</div>
		
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>

	
</div>

@endsection


