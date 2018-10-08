<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacts</title>
	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		include '../imports/menu.php'
	?>
	<div class="container">
		<button type="button" id="btn-add" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#myModal">
		  <i class="glyphicon glyphicon-plus"></i>
		</button>

		<section class="row">
			<div class="list-contacts">
				<?php
					userList();
				?>
			</div>
		</section>
	</div>


	<!-- Add Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Agregar Contacto</h4>
	      </div>
	      <div class="modal-body">
	        <form role="form" method="POST" action="../config/add_user.php">
	        <div class="form-group">
                <input type="text" class="form-control" id="userlogin" name="userlogin" placeholder="User Login">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
              </div>
              <button type="submit" class="btn btn-primary pull-right">Guardar Usuario</button>
            </form>
	      </div>
	      <div class="modal-footer">
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Delete Modal -->
	<div class="modal fade" id="modalDeleteContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Borrar Usuario?</h4>
          </div>
          <div id="modalExcluirUsuario2" class="modal-body">
            Esto borrara toda la informacion del Usuario...


            <input type="hidden" id="idContact"/>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary default" data-dismiss="modal" onclick="deleteUser()">Borrar</button>
          </div>
        </div>
      </div>
    </div>
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function deleteContactModal(e){
			$("#idContact").val(e.id);
		}

		function deleteUser(){
			$.post(
				"../config/delete_user.php",
				{idContact: $("#idContact").val()},
				function(response){
					window.location.href='../agenda/user.php';
				});
		}
	</script>
</body>
</html>
