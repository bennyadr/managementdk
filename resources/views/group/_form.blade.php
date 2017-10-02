		<div class="form-group{{ $errors->has('nama_grup') ? ' has-error' : '' }}">
				<label for="message-text" class="control-label">Nama Grup:</label>
				{{Form::text('nama_grup',null, ['class' => 'form-control',
				'data-parsley-required' => 'true',
				'data-parsley-required-message' => 'Nama Group Harus di isi',
				'data-parsley-trigger'          => 'change focusout'
				])}}
				@if($errors->has('nama_grup'))
				<span class="help-block">
					<strong>{{ $errors->first('nama_grup') }}</strong>
				</span>
				@endif
			</div>