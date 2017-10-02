<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8"/>
		<title>Aplikasi Pengolahan Data Proyek,hosting dan Dokumentasi Server	</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<link rel="stylesheet" href="{{ asset("/css/styles.css") }}" />
		<link rel="stylesheet" href="{{ asset("/css/dataTables.bootstrap.css") }}" />
		<link rel="stylesheet" href="{{ asset("/css/dataTables.responsive.css") }}" />
		<link rel="stylesheet" href="{{asset("css/bootstrap-datepicker.min.css")}}">
		<link rel="stylesheet" href="{{ asset("/css/parsley.css") }}" />
		<link rel="stylesheet" href="{{asset("css/sweetalert.css")}}">
		<link rel="stylesheet" href="{{asset("css/select2.min.css")}}">
		<link rel="stylesheet" href="{{asset("css/dropzone.min.css")}}">
		<link rel="stylesheet" href="{{asset("css/upload.css")}}">

		<script src="{{ asset("/js/frontend.js") }}" type="text/javascript"></script>
		
		<script src="{{asset('js/highcharts.js')}}"></script>
		<script src="{{asset('js/exporting.js')}}"></script>
		<script src="{{asset('js/dark-unika.js')}}"></script>
		
		
	</head>
	<body>
		@yield('body')
		
		<script src="{{asset('js/parsley.config.js')}}"></script>
		<script src="{{asset('js/parsley.min.js')}}"></script>
		<script src="{{asset('js/jQuery.dataTables.min.js')}}"></script>
		<script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
		<script src="{{asset('js/dataTables.responsive.js')}}"></script>
		<script src="{{asset('js/sweetalert.min.js')}}"></script>
		<script src="{{asset('js/select2.full.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
		@include('sweet::alert')
		@yield('script')
		
		
	</body>

</html>