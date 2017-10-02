<div class="form-group{{ $errors->has('nama_vendor') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nama Vendor:</label>
	{{Form::text('nama_vendor',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nama Vendor Supplier Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('nama_vendor'))
	<span class="help-block">
		<strong>{{ $errors->first('nama_vendor') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('perwakilan') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nama Perwakilan:</label>
	{{Form::text('perwakilan',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nama Perwakilan Supplier Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('perwakilan'))
	<span class="help-block">
		<strong>{{ $errors->first('perwakilan') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	<label for="message-text" class="control-label">Alamat:</label>
	{{Form::textarea('alamat',null,['class' => 'form-control','rows'=>'2','cols'=>'10','data-parsley-required' => 'true','data-parsley-required-message' => 'Alamat Harus di Isi'])}}
	@if($errors->has('alamat'))
	<span class="help-block">
		<strong>{{ $errors->first('alamat') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">No Handphone:</label>
	{{Form::number('no_hp',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'No Handphone Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('no_hp'))
	<span class="help-block">
		<strong>{{ $errors->first('no_hp') }}</strong>
	</span>
	@endif
</div>
