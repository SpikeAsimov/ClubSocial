<?php
require '../../include/db_conn.php';
page_protect();
 


?>

<!DOCTYPE html>
<html lang="en">
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
							<li class="breadcrumb-item"><a href="view_plan.php">Rutinas</a></li>
							<li class="breadcrumb-item active">Ver Rutinas</li>
					</ol>
					<legend>RUTINAS</legend>

					<table class="table table-bordered datatable" id="table-1" border=1>
			
							<tr>
								<th>Nro.</th>
								<th>Nombre de Rutina</th>
								<th>Detalles de Rutina</th>
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
												
											echo '<td><a href="viewdetailroutine.php?id='.$row['tid'].'"><input type="button" class="btn btn-info" value="Ver Detalles" ></a></td></tr>';
												
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


										
