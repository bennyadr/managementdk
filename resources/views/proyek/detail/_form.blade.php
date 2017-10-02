
<div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Deskripsi:</label>
	{{Form::text('deskripsi',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Deskripsi  Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('deskripsi'))
	<span class="help-block">
		<strong>{{ $errors->first('deskripsi') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('id_vendor') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Vendor:</label>
	{{Form::select('id_vendor', [''=>'']+App\Vendor::pluck('nama_vendor','id_vendor')->all(),null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Vendor Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('id_vendor'))
	<span class="help-block">
		<strong>{{ $errors->first('id_vendor') }}</strong>
	</span>
	@endif
</div>

<div class="form-group{{ $errors->has('tgl') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Tanggal :</label>
	{{Form::text('tgl',null, ['class' => 'form-control datepicker'
	
	])}}
	@if($errors->has('tgl'))
	<span class="help-block">
		<strong>{{ $errors->first('tgl') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('nilai') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nilai (Rp.) :</label>
	{{Form::number('nilai',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nilai Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	
	])}}
	@if($errors->has('nilai'))
	<span class="help-block">
		<strong>{{ $errors->first('nilai') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
	<label for="message-text" class="control-label">keterangan:</label>
	{{Form::textarea('keterangan',null,['class' => 'form-control','rows'=>'2','cols'=>'10','data-parsley-required' => 'true','data-parsley-required-message' => 'keterangan Harus di Isi'])}}
	@if($errors->has('keterangan'))
	<span class="help-block">
		<strong>{{ $errors->first('keterangan') }}</strong>
	</span>
	@endif
</div>
@if(isset($id))

<div class="form-group{{ $errors->has('id_proyek') ? ' has-error' : '' }}">
	{{Form::hidden('id_proyek',$id)}}

</div>
@endif
@if(isset($nilaiSebelum))

<div class="form-group{{ $errors->has('nilaiSebelum') ? ' has-error' : '' }}">
	{{Form::hidden('nilaiSebelum',$nilaiSebelum)}}

</div>
@endif

