<?php
require '../../include/db_conn.php';
page_protect();

if (isset($_POST['name'])) {
    $memid = $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Club Social Rugby | Editar Datos de Socio</title>

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
							<li class="breadcrumb-item"><a href="edit_member.php">Socios</a></li>
							<li class="breadcrumb-item active">Editar Socio</li>
					</ol>

					<legend>EDITAR DATOS DEL SOCIO</legend>

					<?php
	    
				    $query  = "SELECT * FROM users u 
				    		   INNER JOIN address a ON u.userid=a.id
				    		   INNER JOIN  health_status h ON u.userid=h.uid
				    		   WHERE userid='$memid'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;
				    
				    $name="";
				    $gender="";

				    if (mysqli_affected_rows($con) == 1) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				    
				            $name    = $row['username'];
				            $gender =$row['gender'];
				            $mobile = $row['mobile'];
				            $email   = $row['email'];
				            $dob	 = $row['dob'];         
				            $jdate    = $row['joining_date'];
				          	$streetname=$row['streetName'];
				          	$state=$row['state'];
				          	$city=$row['city'];  
				          	$zipcode=$row['zipcode'];
				            $calorie=$row['calorie'];
				            $height=$row['height'];
				            $weight=$row['weight'];
				            $fat=$row['fat'];
				            $remarks=$row['remarks'];				            
				        }
				    }
				    else{
				    	 echo "<html><head><script>alert('Cambio Insatisfactorio');</script></head></html>";
				    	 echo mysqli_error($con);
				    }


				?>
				
				<form id="form1" name="form1" method="post" class="row g-3" action="edit_mem_submit.php">
					<div class="form-group col-12">						
						<label for="" class="form-label mt-3">ID de Usuario:</label>
						<input id="boxxe" class="form-control" type="text" name="uid" readonly required value=<?php echo $memid?>>
					</div>
					<div class="form-group col-6">
						<label for="" class="form-label mt-3">Nombre y Apellido:</label>
						<input id="boxxe" class="form-control" type="text" name="uname" value='<?php echo $name?>'>
					</div>
					<div class="form-group col-6">
						<label for="" class="form-label mt-3">Genero:</label>
						<select id="boxxe" class="form-select" name="gender" id="gender" required>
							<option <?php if($gender == 'Hombre'){echo("selected");}?> value="Hombre">Hombre</option>
							<option <?php if($gender == 'Mujer'){echo("selected");}?> value="Mujer">Mujer</option>
						</select>
					</div>
					<table class="table" width="100%" border="0" align="center">
					<tr>
					<td height="35"><table width="100%" border="0" align="center">
						<tr>
						<td height="35">ID de Usuario:</td>
						<td height="35"><input id="boxxe" type="text" name="uid" readonly required value=<?php echo $memid?>></td>
						</tr>
						<tr>
						<td height="35">Nombre:</td>
						<td height="35"><input id="boxxe" type="text" name="uname" value='<?php echo $name?>'></td>
						</tr>
						<tr>
						<td height="35">Género:</td>
						<td height="35"><select id="boxxe" name="gender" id="gender" required>

									<option <?php if($gender == 'Hombre'){echo("selected");}?> value="Hombre">Hombre</option>
									<option <?php if($gender == 'Mujer'){echo("selected");}?> value="Mujer">Mujer</option>
									</select></td><br>
						</tr>
						<tr>
						<td height="35">Móvil:</td>
						<td height="35"><input id="boxxe" type="number" name="phone" maxlength="10" value=<?php echo $mobile?>></td>
						</tr>
						<tr>
						<td height="35">Correo:</td>
						<td height="35"><input id="boxxe" type="email" name="email" required value=<?php echo $email?>></td>
						</tr>
						<tr>
						<td height="35">Fecha de Nacimiento:</td>
						<td height="35"><input type="date" id="boxxe" name="dob" value=<?php echo $dob?>></td>
						</tr>
						<tr>
						<td height="35">Fecha de Ingreso:</td>
						<td height="35"><input type="date" id="boxxe" name="jdate" value=<?php echo $jdate?>></td>
						</tr>

						<tr>
						<td height="35">Dirección:</td>
						<td height="35"><input type="text" id="boxxe" name="stname" value='<?php echo $streetname?>'></td>
						</tr>

						<tr>
						<td height="35">Departamento:</td>
						<td height="35"><input type="text" id="boxxe" name="state" value='<?php echo $state?>'></td>
						</tr>
						<tr>
						<td height="35">Ciudad:</td>
						<td height="35"><input type="text" id="boxxe" name="city" value='<?php echo $city?>'></td>
						</tr>
						<tr>
						<td height="35">Código Postal:</td>
						<td height="35"><input type="text" id="boxxe" name="zipcode" value='<?php echo $zipcode?>'></td>
						</tr>
						<tr>
						<td height="35">Calorias:</td>
						<td height="35"><input type="text" id="boxxe" name="calorie" value=<?php echo $calorie?>></td>
						</tr>
						<tr>
						<td height="35">Altura:</td>
						<td height="35"><input type="text" id="boxxe" name="height" value=<?php echo $height?>></td>
						</tr>
						<tr>
						<td height="35">Peso:</td>
						<td height="35"><input type="text" id="boxxe" name="weight" value=<?php echo $weight?>></td>
						</tr>
						<tr>
						<td height="35">Grasa:</td>
						<td height="35"><input type="text" id="boxxe" name="fat" value=<?php echo $fat?>></td>
						</tr>
						<tr>
						<td height="35">Observaciones:</td>
						<td height="35"><textarea style="resize:none; margin: 0px; width: 230px; height: 53px;" name="remarks" id="boxxe" ><?php echo $remarks?></textarea></td>
						</tr>
						
						
						
						<br>
						
						<tr>
						<tr>
						<td height="35">&nbsp;</td>
						<td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Actualizar" >
							<input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Borrar"></td>
						</tr>
					</table></td>
					</tr>
					</table>
				</form>


				</div>
			</div>
		</div>

			

    </div>
    </div>   
			
			
			
			
					

			<?php include('footer.php'); ?>
    	</div>

  
</body>
</html>	

<?php
} else {
    
}
?>
