<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Club Social Rubgy | Nuevo Usuario</title>


    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/dashboard.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Arroyo Walter">

</head>
      <body>

      <?php include('elements/navbar.php'); ?>

      <div class="container-fluid">
          <div class="row">
              <?php include 'nav_.php'; ?>

                  <div class="col-10 p-3">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="new_entry.php">Usuarios</a></li>
                          <li class="breadcrumb-item active">Nuevo Usuario</li>
                      </ol>

                      <form class="row g-3" action="new_submit.php" method="post" name="form1">
                          <legend>REGISTRAR NUEVO USUARIO</legend>
                          <div class="form-group col-12">
                              <h5 for="" class="form-label mt-0">ID MEMBRESIA</h5>
                              <input type="text" readonly class="form-control-plaintext" name="m_id" id="staticEmail" value="<?php echo time(); ?>" required>

                              <label for="" class="form-label mt-3">NOMBRE Y APELLIDO</label>
                              <input type="text" name="u_name" class="form-control" id="" placeholder="" required>
                          </div>

                          <div class="form-group col-4">
                              <label for="" class="form-label mt-3">DIRECCIÓN</label>
                              <input type="text" name="street_name" class="form-control" id="" placeholder="" required>

                              <label for="" class="form-label mt-3">DEPARTAMENTO</label>
                              <input type="text" name="state" class="form-control" id="" size="30" placeholder="" required value="La Rioja">


                          </div>

                          <div class="form-group col-4">
                              <label for="" class="form-label mt-3">FECHA DE NACIMIENTO</label>
                              <input type="date" class="form-select" name="dob" required size="30">

                              <label for="" class="form-label mt-3">CIUDAD</label>
                              <input type="text" name="city" class="form-control" id="" placeholder="" required value="La Rioja">

                          </div>

                          <div class="form-group col-4">
                              <label for="" class="form-label mt-3">GENERO</label>
                              <select name="gender" class="form-select" required>
                                  <option value="">--Seleccionar--</option>
                                  <option value="Hombre">Hombre</option>
                                  <option value="Mujer">Mujer</option>
                             </select>

                              <label for="" class="form-label mt-3">CODIGO POSTAL</label>
                              <input type="number" name="zipcode" class="form-control" id="" maxlength="6" required value="5300">

                          </div>

                          <div class="form-group col-6">
                              <label for="" class="form-label mt-3">TELEFONO</label>
                              <input type="number" name="mobile" class="form-control" maxlength="10" size="30" required>
                          </div>

                          <div class="form-group col-6">
                              <label for="" class="form-label mt-3">CORREO ELECTRÓNICO</label>
                              <input type="email" class="form-control" id="" name="email" size="30" aria-describedby="emailHelp" placeholder="">
                          </div>


                          <div class="form-group col-3">
                              <label for="" class="form-label mt-3">FECHA DE INGRESO</label>
                              <input type="date" class="form-select" name="jdate" required size="30">
                          </div>

                          <div class="form-group col-3">
                              <label for="" class="form-label mt-3">PLAN</label>
                                  <select name="plan" id="boxx" class="form-select" required onchange="myplandetail(this.value)">
                                          <option value="">-- Seleccionar --</option>
                                          <?php
                                          $query="select * from plan where active='yes'";
                                          $result=mysqli_query($con,$query);
                                          if(mysqli_affected_rows($con)!=0){
                                              while($row=mysqli_fetch_row($result)){
                                                  echo "<option value=".$row[0].">".$row[1]."</option>";
                                              }
                                          }

                                          ?>

                                    </select>
                          </div>

                          <div class="form-group col-6" id="plandetls">

                          </div>

                          <div class="form-group col-12 p-5 pull-right">
                              <input class="btn btn-outline-success m-3" type="submit" name="submit" id="submit" value="Registrar" >
                              <input class="btn btn-outline-danger m-3" type="reset" name="reset" id="reset" value="Borrar">

                          </div>




                      </form>
                  </div>
          </div>
      </div>

        
        <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>
        
        
			<?php include('footer.php'); ?>
    	</div>




      </body>
</html>

