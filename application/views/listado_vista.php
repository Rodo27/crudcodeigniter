<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <script type="text/javascript">

    let base_url = "<?php echo base_url(); ?>"

    function selecciona_perfil(id){

      $.ajax({
          url: base_url+"busca_perfil",
          type: 'POST',
          dataType: 'json',
          async : true,
          data:{
            'id' : id,  
          },
          success: function(resp) {
            
            document.getElementById("identificador").value = resp[0].codigo;
            document.getElementById("id").value = resp[0].id_perfil;
            document.getElementById("descripcion").value = resp[0].per_nombre;
                        
          },
          error: function(request,err){
              console.log("error")
              console.log(err)
              console.log("Request: "+JSON.stringify(request));
          }
      });

      $('#modal_form').modal('show');

    }


    function borra_perfil(id){

      swal({
        title: "¿Desea Borrar Este Perfil?",
        text: "Una vez eliminado no podra recuperar los datos",
        icon: "warning",
        buttons: ["Cancelar", "OK"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
          url: base_url+"borra_perfil",
          type: 'POST',
          dataType: 'json',
          async : true,
          data:{
            'id' : id, 
          },
          success: function(resp) {
            
            if(resp){
                    
              swal("Borrado Exitoso", "", "success")
                .then((value) => {
                  window.location = base_url+'listado/index';
                });
            
            }else{
              swal("Error al eliminar", "Intente más tarde", "info");
            }
            
          },
          error: function(request,err){
              console.log("error")
              console.log(err)
              console.log("Request: "+JSON.stringify(request));
          }
        });
        }
      });

    }


    function guarda_perfil(){

      let id = document.getElementById("id").value;
      let identificador =  document.getElementById("identificador").value;
      let description = document.getElementById("descripcion").value;

      if( (identificador === null || identificador === '') || (description === null || description === '') ){
          
        swal("Los campos son obligatorios", "Ingrese los datos faltantes", "info");
        
      }else{

        $.ajax({
          url: base_url+"actualiza_perfil",
          type: 'POST',
          dataType: 'json',
          async : true,
          data:{
            'id' : id,
            'identificador' : identificador.toUpperCase(),
            'descripcion' : description  
          },
          success: function(resp) {
            
            if(resp){
              swal("Actualización Exitosa", "", "success")
                .then((value) => {
                  window.location = base_url+'listado/index';
                });
              
            }else{
              swal("Actualización No Exitosa", "Intente nuevamente", "info");
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
  <body>
  <?php
  $this->load->view('header');
  ?> 
  <div class="container">
    </center>
        <h3>PERFILES</h3>
        <br/>
        
        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
         
            <tr>
              <th class="bg-primary  col-sm-1">ID</th>
              <th class="bg-primary">PERFIL</th>
              <th class="bg-primary col-sm-2">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            foreach ($listado as $perfil) {
              echo '
              <tr> 
                 <td>'.$perfil['id_perfil'].'</td>
                 <td>'.$perfil['per_nombre'].'</td>
                 <td >
                 <button class="btn btn-warning" onclick="selecciona_perfil('.$perfil['id_perfil'].')"><i class="glyphicon glyphicon-pencil"></i></button>
                  <button class="btn btn-danger" onclick="borra_perfil('.$perfil['id_perfil'].')"><i class="glyphicon glyphicon-remove"></i></button>
                  </td>
              </tr> ';
            }  
          ?>                
          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>PERFIL</th>
            </tr>
          </tfoot>
        </table>
      </div>

  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">IDENTIFICADOR</label>
              <div class="col-md-9">
                <input name="id" id="identificador" placeholder="identificador" class="form-control" type="text">
                <input name="id" id="id" disabled hidden>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">PERFIL</label>
              <div class="col-md-9">
                <input name="descripcion" id="descripcion" placeholder="descripcion" class="form-control" type="text" >
              </div>
            </div>
         </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="guarda_perfil()" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  <!-- inicia ventana de alerta -->
  <div class="modal fade" id="alerta" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <h4 class="modal-title">Alerta</h4>
          </div>
          <div class="modal-body form">
            <h3 class="mensaje"></h3>
           </div>
           <div class="modal-footer">
            <!-- class="btn btn-danger" boton rojo -->
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.reload();">OK</button>
          </div>
        </div>
      </div>
    </div>
    <!-- termina ventana de alerta -->

  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>
  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable(); //buscador y botones de navegacion de la tabla
  } );
  </script>
  </body>
</html>
