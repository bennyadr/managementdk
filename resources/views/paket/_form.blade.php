		<div class="form-group{{ $errors->has('nama_paket') ? ' has-error' : '' }}">
				<label for="message-text" class="control-label">Nama Paket Hosting:</label>
				{{Form::text('nama_paket',null, ['class' => 'form-control',
				'data-parsley-required' => 'true',
				'data-parsley-required-message' => 'Nama Paket Harus di isi',
				'data-parsley-trigger'          => 'change focusout'
				])}}
				@if($errors->has('nama_paket'))
				<span class="help-block">
					<strong>{{ $errors->first('nama_paket') }}</strong>
				</span>
				@endif
			</div>