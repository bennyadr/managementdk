
    //upload Sk
    Dropzone.options.myDropzoneSk = {	//acceptedFiles:'application/pdf,.psd,.doc,.docx',
    									autoProcessQueue: true,
    									success:function(file,response){
    											if(file.status=='success'){
    											var filePath = 	"http://localhost/managementDk/public/files/"+ response.nama_file;
    											var idMateri = response.id;
    											var fileList =("#gallery-images ul");
    											$(fileList).append('<li><h3>'+response.nama_file+'</h3> <img src="http://localhost:8000/img/file.png" alt=""><br><a href="http://localhost:8000/detail/file/'+response.id_file_proyek+'/download" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> Download</a> <a href="http://localhost:8000/proyek/detail/'+response.id_file_proyek+'/delete" class="btn btn-danger btn-sm" onclick="return confirm("delete?")"><span class="fa fa-trash" > Delete</span></a></li>');				
    											}else{

    											}
    										}

    								}