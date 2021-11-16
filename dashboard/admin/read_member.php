<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="es">
<head>
	
    <title>Club Social Rugby | Historial del Socio</title>

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
								<li class="breadcrumb-item"><a href="read_member.php">Historial</a></li>
								<li class="breadcrumb-item active">Socio: <?php echo $_POST['name']; ?></li>
					</ol>

					<h3>
						Detalles de :  <?php
						$id     = $_POST['name'];
						$query  = "select * from users WHERE userid='$id'";
						//echo $query;
						$result = mysqli_query($con, $query);

						if (mysqli_affected_rows($con) != 0) {
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								$name = $row['username'];
								$memid=$row['userid'];
								$gender=$row['gender'];
								$mobile=$row['mobile'];
								$email=$row['email'];
								$joinon=$row['joining_date'];
								echo $name;
							}
						}
						?>

					</h3>

						
		<table class="table" border=1>
			<thead>
				<tr class="table-secondary">
					<th scope="col">ID Membresía</th>
					<th scope="col">Nombre</th>
					<th scope="col">Género</th>
				    <th scope="col">Móvil</th>
				    <th scope="col">Correo</th>
					<th scope="col">Ingresó en</th>
				</tr>
			</thead>
				<tbody>
					<?php
					
					        
					     echo "<tr><td>" . $memid . "</td>";
					     
					     echo "<td>" . $name . "</td>";
			     	     
			     	     echo "<td>" . $gender . "</td>";
			
		      	         echo "<td>" . $mobile . "</td>";

		      	         echo "<td>" . $email . "</td>";

					     echo "<td>" . $joinon . "</td></tr>";
					    
					?>								
				</tbody>
		</table>
				<br>
				<br>

				<h3>Historial de Pago de: <?php echo $name;?></h3>

		<table class="table" border=1>
			<thead>
				<tr class="table-secondary">
					<th scope="col">Sl.No</th>
					<th scope="col">Nombre de Plan</th>
					<th scope="col">Descuento de Plan</th>
					<th scope="col">Validez</th>
					<th scope="col">Monto</th>
					<th scope="col">Fecha de Pago</th>
					<th scope="col">Fecha de Expiración</th>
					<th scope="col">Acción</th>
				</tr>
			</thead>
				<tbody>
					<?php
						
						$query1  = "select * from enrolls_to WHERE uid='$memid'";
						//echo $query;
						$result = mysqli_query($con, $query1);
						$sno    = 1;

						if (mysqli_affected_rows($con) != 0) {
						    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						      $pid=$row['pid'];
						      $query2="select * from plan where pid='$pid'";
						      $result2=mysqli_query($con,$query2);
						      if($result2){
						      	$row1=mysqli_fetch_array($result2,MYSQLI_ASSOC);

						        echo "<td>" . $sno . "</td>";

						        echo "<td>" . $row1['planName'] . "</td>";

						        echo "<td width='380'>" . $row1['description'] . "</td>";

						        echo "<td>" . $row1['validity'] . "</td>";

						        echo "<td>" . $row1['amount'] . "</td>";

						        echo "<td>" . $row['paid_date'] . "</td>";

						        echo "<td>" . $row['expire'] . "</td>";
						        
						        $sno++;
						    }
						        
						        echo '<td><a href="gen_invoice.php?id='.$row['uid'].'&pid='.$row['pid'].'&etid='.$row['et_id'].'"><input type="button" class="btn btn-info" value="Memo" ></a></td></tr>';
						        $memid = 0;
						    }
						    
						}

					?>							
				</tbody>
		</table>


				</div>
			</div>
		</div>
				

	


			<?php include('footer.php'); ?>
    	</div>
    </body>
</html>

