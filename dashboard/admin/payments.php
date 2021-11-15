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
							<li class="breadcrumb-item"><a href="payments.php">Pagos</a></li>
							<li class="breadcrumb-item active">Gestión de Pagos</li>
					</ol>

					<legend>PAGOS</legend>
		
						<table class="table table-hover table-bordered datatable" id="table-1" border=1>
							<thead>
								<tr>
									<th scope="col">Nro.</th>
									<th scope="col">Fecha de Expiración</th>
									<th scope="col">Nombre</th>
									<th scope="col">ID de Miembro</th>
									<th scope="col">Teléfono</th>
									<th scope="col">Correo</th>
									<th scope="col">Género</th>
									<th scope="col">Acción</th>
								</tr>
							</thead>

								<tbody>

								<?php


									$query  = "select * from enrolls_to where renewal='yes' ORDER BY expire";
									//echo $query;
									$result = mysqli_query($con, $query);
									$sno    = 1;

									if (mysqli_affected_rows($con) != 0) {
										while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

											$uid   = $row['uid'];
											$planid=$row['pid'];
											$query1  = "select * from users WHERE userid='$uid'";
											$result1 = mysqli_query($con, $query1);
											if (mysqli_affected_rows($con) == 1) {
												while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
													
													echo "<tr><td>".$sno."</td>";
													echo "<td>" . $row['expire'] . "</td>";
													echo "<td>" . $row1['username'] . "</td>";
													echo "<td>" . $row1['userid'] . "</td>";
													echo "<td>" . $row1['mobile'] . "</td>";
													echo "<td>" . $row1['email'] . "</td>";
													echo "<td>" . $row1['gender'] . "</td>";
													
													$sno++;
													
													echo "<td><form action='make_payments.php' method='post'><input type='hidden' name='userID' value='" . $uid . "'/>
													<input type='hidden' name='planID' value='" . $planid . "'/><input type='submit' value='Agregar Pago ' class='btn btn-info'/></form></td></tr>";
													
													$uid = 0;
												}
											}
										}
									}

									?>									
								</tbody>

						</table>


				</div>
			</div>
		</div>

  


		<?php include('footer.php'); ?>
    

    </body>
</html>


