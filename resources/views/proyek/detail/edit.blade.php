@extends('layouts.dash')
@section('page_heading','Edit proyek')
@section('section')
<div  >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
				{{Form::model($data,['route'=>['proyek.detail.update',$data],'method'=>'put','files'=>true,'data-parsley-validate'=>"parsley"])}}
					     @include('proyek.detail._form')
					  <p class="stdformbutton">
                        <button class="btn btn-info radius2">Simpan</button>
                        <button class="btn btn-default" onclick="window.history.back(-1)">Kembali</button>
                    </p>
				{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>
	
</div>
</div>
@endsection
@section('script')
<script>
	$('.datepicker').datepicker({
		autoclose:true,
		format:'yyyy-mm-dd'
	});
		$(".select2").select2();
</script>
@endsection