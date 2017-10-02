<div class="form-group{{ $errors->has('awal_daftar') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Awal Daftar :</label>
	{{Form::text('awal_daftar',null, ['class' => 'form-control datepicker'
	
	])}}
	@if($errors->has('awal_daftar'))
	<span class="help-block">
		<strong>{{ $errors->first('awal_daftar') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('tgl_selesai') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Tanggal Selesai  :</label>
	{{Form::text('tgl_selesai',null, ['class' => 'form-control datepicker'
	
	])}}
	@if($errors->has('tgl_selesai'))
	<span class="help-block">
		<strong>{{ $errors->first('tgl_selesai') }}</strong>
	</span>
	@endif
</div>

@if(isset($id))

<div class="form-group{{ $errors->has('id_pelanggan_hosting') ? ' has-error' : '' }}">
	{{Form::hidden('id_pelanggan_hosting',$id)}}

</div>
@endif


