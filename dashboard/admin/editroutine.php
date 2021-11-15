<?php
require '../../include/db_conn.php';
page_protect();
 


?>

<!DOCTYPE html>
<html lang="es">
<head>

<title>Club Social Rubgy | Editar Rutina</title>


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
							<li class="breadcrumb-item"><a href="new_entry.php">Rutinas</a></li>
							<li class="breadcrumb-item active">Ver Rutinas</li>
				</ol>

				<legend>RUTINAS</legend>

				<table class="table table-bordered datatable" id="table-1" border=1>
						
						<tr>
							<th>Sl.No</th>
							<th>Nombre de Rutina</th>
							<th>Detalles Rutina</th>
							<th>Eliminar Rutina</th>
						</tr>
				
						<tbody>

						<?php


							$query  = "select * from timetable";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) 
							{
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
								{

								
									
											
											echo "<tr><td>".$sno."</td>";
											echo "<td>" . $row['tname'] . "</td>";
									
											
											$sno++;
											
										echo '<td><a href="editdetailroutine.php?id='.$row['tid'].'"><input type="button" class="btn btn-info" id="boxxe" value="Editar Rutina" ></a></td>';
										// echo '<td><a href="deleteroutine.php?id='.$row['tid'].'"><input type="button" class="a1-btn a1-blue" value="Delete Routine" ></a></td></tr>';
										echo "<td><form action='deleteroutine.php' method='post' onsubmit='return ConfirmDelete()'><input type='hidden' name='name' value='" . $row['tid'] . "'/><input type='submit' value='Eliminar' width='20px' id='boxxe' class='btn btn-danger'/></form></td></tr>";
											
											$uid = 0;
										
									
								}
							}

							?>									
						</tbody>

				</table>
			</div>

			


		</div>
	</div>
   
    </body>
	<?php include('footer.php'); ?>
</html>


										
