<div class="form-group{{ $errors->has('id_pelanggan') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Pelanggan:</label>
	{{Form::select('id_pelanggan', [''=>'']+App\Pelanggan::pluck('nama','id_pelanggan')->all(),null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Pelanggan Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('id_pelanggan'))
	<span class="help-block">
		<strong>{{ $errors->first('id_pelanggan') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('nama_proyek') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nama Proyek:</label>
	{{Form::text('nama_proyek',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nama Proyek  Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('nama_proyek'))
	<span class="help-block">
		<strong>{{ $errors->first('nama_proyek') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('spk') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">SPK :</label>
	{{Form::text('spk',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'SPK  Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('spk'))
	<span class="help-block">
		<strong>{{ $errors->first('spk') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Tanggal Mulai Proyek :</label>
	{{Form::text('tgl_mulai',null, ['class' => 'form-control datepicker'
	])}}
	@if($errors->has('tgl_mulai'))
	<span class="help-block">
		<strong>{{ $errors->first('tgl_mulai') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('tgl_selesai') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Tanggal Selesai Proyek :</label>
	{{Form::text('tgl_selesai',null, ['class' => 'form-control datepicker'])}}
	@if($errors->has('tgl_selesai'))
	<span class="help-block">
		<strong>{{ $errors->first('tgl_selesai') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('nilai_proyek') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Nilai Proyek:</label>
	{{Form::number('nilai_proyek',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Nilai Proyek Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	
	])}}
	@if($errors->has('nilai_proyek'))
	<span class="help-block">
		<strong>{{ $errors->first('nilai_proyek') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Tahun:</label>
	{{Form::number('tahun',null, ['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Tahun Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('tahun'))
	<span class="help-block">
		<strong>{{ $errors->first('tahun') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('id_grup') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Grup:</label>
	{{Form::select('id_grup', [''=>'']+App\Group::pluck('nama_grup','id_grup')->all(),null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Pelanggan Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('id_grup'))
	<span class="help-block">
		<strong>{{ $errors->first('id_grup') }}</strong>
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
<div class="form-group{{ $errors->has('status_proyek') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Status Proyek:</label>
	{{Form::select('status_proyek', [''=>'','selesai'=>'Selesai','jalan'=>'Jalan','pending'=>'Pending'],null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Status Proyek Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('status_proyek'))
	<span class="help-block">
		<strong>{{ $errors->first('status_proyek') }}</strong>
	</span>
	@endif
</div>
<div class="form-group{{ $errors->has('status_pembayaran') ? ' has-error' : '' }}">
	<label for="recipient-name" class="control-label">Status Pembayaran:</label>
	{{Form::select('status_pembayaran', [''=>'','1'=>'Lunas','2'=>'Belum Lunas'],null,
	['class' => 'form-control',
	'data-parsley-required' => 'true',
	'data-parsley-required-message' => 'Status Pembayaran Harus di isi',
	'data-parsley-trigger'          => 'change focusout'
	])}}
	@if($errors->has('status_pembayaran'))
	<span class="help-block">
		<strong>{{ $errors->first('status_pembayaran') }}</strong>
	</span>
	@endif
</div>