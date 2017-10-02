<div class="form-group{{ $errors->has('nama_pelanggan') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Pelanggan:</label>
	{{Form::text('nama_pelanggan',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nama Pelanggan Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	{{-- {{Form::select('id_pelanggan', [''=>'']+App\Pelanggan::pluck('nama','id_pelanggan')->all(),null,
	['class' => 'form-control select2',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Pelanggan Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}} --}}
	@if($errors->has('nama_pelanggan'))
	<span class="help-block">
		<strong>{{ $errors->first('nama_pelanggan') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('nama_perangkat') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Perangkat:</label>
	{{Form::text('nama_perangkat',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Perangkat Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('nama_perangkat'))
	<span class="help-block">
		<strong>{{ $errors->first('nama_perangkat') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">username:</label>
	{{Form::text('username',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'username Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('username'))
	<span class="help-block">
		<strong>{{ $errors->first('username') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">password:</label>
	{{Form::text('password',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'password Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('password'))
	<span class="help-block">
		<strong>{{ $errors->first('password') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('informasi') ? ' has-error' : '' }}">
	<label for="message-text" class="control-label">Informasi:</label>
	{{Form::textarea('informasi',null,['class' => 'form-control','rows'=>'5','cols'=>'10','data-parsley-required' => 'true','data-parsley-required-message' => 'informasi Harus di Isi'])}}
	@if($errors->has('informasi'))
	<span class="help-block">
		<strong>{{ $errors->first('informasi') }}</strong>
	</span>
	@endif
</div>s