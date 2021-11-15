
<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="es">
<head>


	<title>Club Social Rubgy | Ver Plan</title>
	
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
							<li class="breadcrumb-item"><a href="view_plan.php">Planes</a></li>
							<li class="breadcrumb-item active">Ver Planes</li>
					</ol>
					<legend>ADMINISTRAR PLAN</legend>

					
				<table class="table table-bordered datatable" id="table-1" border=1>

					<thead>
						<tr>
							<th>Nro.</th>
							<th>ID de Plan</th>
							<th>Nombre del Plan</th>
							<th>Detalles de Plan</th>
							<th>Meses</th>
							<th>Costo</th>
							<th>Acción</th>
						</tr>
					</thead>		
						<tbody>
							<?php


							$query  = "select * from plan where active='yes' ORDER BY amount DESC";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$msgid = $row['pid'];
									
									
									echo "<tr><td>" . $sno . "</td>";
									echo "<td>" . $row['pid'] . "</td>";
									echo "<td>" . $row['planName'] . "</td>";
									echo "<td width='380'>" . $row['description'] . "</td>";
									echo "<td>" . $row['validity'] . "</td>";
									echo "<td>$" . $row['amount'] . "</td>";
									
									$sno++;
									
									echo '<td><a href=edit_plan.php?id="'.$row['pid'].'"><input type="button" class="btn btn-warning btn-sm" id="boxxe" style="width:100%" value="Editar Plan" ></a><form action="del_plan.php" method="post" onSubmit="return ConfirmDelete();"><input type="hidden" name="name" value="' . $msgid .'"/><input type="submit" id="button1" value="Eliminar Plan" class="btn btn-danger btn-sm"/></form></td></tr>';
									
									$msgid = 0;
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



				
