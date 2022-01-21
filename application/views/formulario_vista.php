<!DOCTYPE html>
<html>
<head>
	<title>Plantilla</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <title></title>
    <script type="text/javascript">
    	
      let base_url = "<?php echo base_url(); ?>"
      
      function guardaPerfil(){

        // Get data from form

        let identificador = document.getElementById("identificador").value;
        let description = document.getElementById("descripcion").value;

        if((identificador === null || identificador === '') || (description === null || description === '')){
          
          swal("Los campos son obligatorios", "Ingrese los datos faltantes", "info");
        
        }else{
          
          $.ajax({
            url:  base_url+"registrar", 
            type: 'POST',
            dataType: 'json',
            async : true,
            data:{
              'identificador' : identificador.toUpperCase(),  
              'description': description               
            },
            success: function(resp) {

              if(resp){
                
                swal("Registro Exitoso", "", "success")
                .then((value) => {
                  window.location = base_url+'listado/index';
                });
               
              }else{
                swal("Registro no exisoto", "Intente nuevamente", "info");
              }

            },
            error: function(request,err){
                console.log("error")
                console.log(err)
                console.log("Request: "+JSON.stringify(request));
            }
          });
          
        }
        
	    }
    </script>
</head>
<body>
 <?php
 $this->load->view('header');
  ?> 

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <h3 class="modal-title">Formulario de registro de perfiles</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">IDENTIFICADOR</label>
              <div class="col-md-9">
                <input name="id" id="identificador" placeholder="identificador" class="form-control" type="text" 
                  value="">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">PERFIL</label>
              <div class="col-md-9">
                <input name="descripcion" id="descripcion" placeholder="descripcion" class="form-control" type="text" 
                value="">
              </div>
            </div>
	       </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="guardaPerfil()" class="btn btn-primary" >GUARDAR</button>
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button> -->
          </div>
    </div><!-- /.modal-content -->
  </div>

<!-- mensaje de alerta -->
<div class="modal fade" id="alerta" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
		        <h4 class="modal-title">Alerta</h4>
		    </div>
		    <div class="modal-body form">
		       <h3 class="mensaje"></h3>
		    </div>
		    <div class="modal-footer">
		    <!-- class="btn btn-danger" boton rojo -->
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
          </div>
        </div>
   </div>
</div>
<!-- termina mensaje de alerta -->
 
 <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
 <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
 
</body>
</html>