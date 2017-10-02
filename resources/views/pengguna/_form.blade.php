{{ csrf_field() }}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class=" control-label">Name</label>
    
   {{Form::text('name',null, ['class' => 'form-control',
    'data-parsley-required' => 'true',
    'data-parsley-required-message' => 'Nama Pelanggan  Harus di isi',
    'data-parsley-trigger'          => 'change focusout'
    ])}}
    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
    
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class=" control-label">E-Mail </label>
    
   {{Form::email('email',null,
            ['class' => 'form-control',
             'data-parsley-required' => 'true',
             'data-parsley-required-message' => 'Email Harus di Isi',
             'data-parsley-trigger'          => 'change focusout',
             'data-parsley-type'             => 'email'
            ])}}
    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
    
</div>
@if(!isset($edit))
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class=" control-label">Password</label>
    
    <input id="password" type="password" class="form-control" name="password" required>
    @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
    
</div>
<div class="form-group">
    <label for="password-confirm" class=" control-label">Confirm Password</label>
    
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    
</div>
@endif
<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    <label for="role" class=" control-label">Role :</label>
    
 {{Form::select('role', [''=>'Pilih Role','pm'=>'Proyek Manager','administrasi'=>'Administrasi'],null,
    ['class' => 'form-control',
    'data-parsley-required' => 'true',
    'data-parsley-required-message' => 'Status Hosting Harus di isi',
    'data-parsley-trigger'          => 'change focusout'
    ])}}
    @if ($errors->has('role'))
    <span class="help-block">
        <strong>{{ $errors->first('role') }}</strong>
    </span>
    @endif
</div>