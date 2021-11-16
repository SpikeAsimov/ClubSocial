<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="es">
<head>

	<title>Club Social Rubgy | Editar Clientes</title>


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
							<li class="breadcrumb-item"><a href="table_view.php">Clientes</a></li>
							<li class="breadcrumb-item active">Detalles de Cliente</li>
					</ol>
			

			<table class="table table-hover table-bordered datatable" id="table-1" border=1>
			<thead>
				<tr><h2>
					<th>Sl.No</th>
					<th>Fecha de Expiración de Membresía</th>
					<th>ID Miembro</th>
					<th>Nombre</th>
					<th>Contacto</th>
					<th>Correo</th>
					<th>Género</th>
					<th>Fecha de Ingreso</th>
					<th>Acción</th></h2>
				</tr>
			</thead>
				<tbody>

						<?php
							$query  = "select * from users ORDER BY joining_date";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        $uid   = $row['userid'];
							        $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
							        $result1 = mysqli_query($con, $query1);
							        if (mysqli_affected_rows($con) == 1) {
							            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
							                
							                echo "<tr><td>".$sno."</td>";

							                echo "<td>" . $row1['expire'] . "</td>";
							                
							                echo "<td>" . $row['userid'] . "</td>";

							                echo "<td>" . $row['username'] . "</td>";

							                echo "<td>" . $row['mobile'] . "</td>";

							                echo "<td>" . $row['email'] . "</td>";

							                echo "<td>" . $row['gender'] . "</td>";

							                echo "<td>" . $row['joining_date'] ."</td>";
							                
							                $sno++;
							       
							                echo "<td><form action='viewall_detail.php' method='post'><input type='hidden' name='name' value='" . $uid . "'/><input type='submit' id='button1' value='Ver Todo ' class='btn btn-info'/></form></td></tr>";
							                $msgid = 0;
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


<script>
	
	function ConfirmDelete(name){
	
    var r = confirm("¿Seguro que desde eliminar este usuario?");
    if (r == true) {
       return true;
    } else {
        return false;
    }
}

</script>
		
			<?php include('footer.php'); ?>

    </body>
</html>


