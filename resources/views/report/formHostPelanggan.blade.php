<script>
	$('#jenisLaporan').on('change',function(){
			console.log($(this).val())
		    if( $(this).val()==="tahunan"){
		    $("#tahun").slideDown('fast')
		    $("#status").slideUp('fast')
			    $("#status").val("") 

		    }
		    else if($(this).val()==="status"){
		    $("#tahun").slideUp('fast')

		    $("#status").slideDown('fast')
		     $("#tahun").val("") 

		    }
		    else{
			    $("#tahun").slideUp('fast')
			    $("#status").slideUp('fast')
			    $("#tahun").val("") 
			    $("#status").val("")

		    }
		});
</script>
	