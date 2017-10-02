<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nama usaha:</label>
	{{Form::text('nama',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nama Pelanggan  Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('nama'))
	<span class="help-block">
		<strong>{{ $errors->first('nama') }}</strong>
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
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="recipient-name" class="control-label">Email:</label>
          {{Form::email('email',null,
            ['class' => 'form-control',
             'data-parsley-required' => 'true',
             'data-parsley-required-message' => 'Email Harus di Isi',
             'data-parsley-trigger'          => 'change focusout',
             'data-parsley-type'             => 'email'
            ])}}
          @if($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>


<div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">No Handphone:</label>
	{{Form::number('hp',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'No Handphone Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('hp'))
	<span class="help-block">
		<strong>{{ $errors->first('hp') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">No Telepon:</label>
	{{Form::number('telp',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'No Telepon Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('telp'))
	<span class="help-block">
		<strong>{{ $errors->first('telp') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">No Fax:</label>
	{{Form::number('fax',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'No fax Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('fax'))
	<span class="help-block">
		<strong>{{ $errors->first('fax') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('perwakilan') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nama Perwakilan:</label>
	{{Form::text('perwakilan',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nama Perwakilan  Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('perwakilan'))
	<span class="help-block">
		<strong>{{ $errors->first('perwakilan') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Jabatan:</label>
	{{Form::text('jabatan',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Jabatan Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('jabatan'))
	<span class="help-block">
		<strong>{{ $errors->first('jabatan') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Domain :</label>
	{{Form::text('domain',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'domain Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('domain'))
	<span class="help-block">
		<strong>{{ $errors->first('domain') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('id_paket') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Paket Hosting:</label>
	{{Form::select('id_paket', [''=>'']+App\Paket::pluck('nama_paket','id_paket')->all(),null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Status Hosting Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('id_paket'))
	<span class="help-block">
		<strong>{{ $errors->first('id_paket') }}</strong>
	</span>
	@endif
</div>
@if(!isset($statusHosting))
<div class="form-group{{ $errors->has('status_hosting') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Status Hosting:</label>
	{{Form::select('status_hosting', [''=>'','1'=>'Aktif','0'=>'Tidak Aktif'],null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Status Hosting Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('status_hosting'))
	<span class="help-block">
		<strong>{{ $errors->first('status_hosting') }}</strong>
	</span>
	@endif
</div>
@endif