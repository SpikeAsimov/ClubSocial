<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Club Social Rugby | Nuevo Plan</title>
	
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
							<li class="breadcrumb-item"><a href="new_entry.php">Planes</a></li>
							<li class="breadcrumb-item active">Nuevo Plan</li>
					</ol>

					<form action="submit_plan_new.php" name="form1" method="post" class="row g-3">
						<legend>REGISTRAR NUEVO PLAN</legend>
						<div class="form-group col-12 align-items-center">
							<h5 class="form-label mt-0">PLAN ID</h5>
							<?php
											function getRandomWord($len = 6)
											{
												$word = array_merge(range('A', 'Z'));
												shuffle($word);
												return substr(implode($word), 0, $len);
											}

										?>
							<input type="text" class="form-control-plaintext" name="planid" readonly value="<?php echo getRandomWord(); ?>">

							<label for="" class="form-label mt-3">NOMBRE DEL PLAN</label>
                            <input type="text" name="planname" class="form-control" id="" placeholder="Ingrese el nombre del plan" size="40" required>

							<label for="" class="form-label mt-3">DESCRICIÓN DEL PLAN</label>
                            <input type="text" class="form-control" name="desc" id="planDesc" placeholder="Ingrese la descripción del plan" size="40" required>

						</div>

							
						<div class="col-12">
								<label for="" class="form-label mt-3">VALIDEZ DEL PLAN</label>
								<input type="number" name="planval" class="form-control" id="" placeholder="Ingrese el tiempo de validez en meses" size="40" required>
								<small id="validezHelp" class="form-text text-muted">Ingrese el tiempo en cantidad de Meses.</small>							
						</div>

						<div class="form-group">																						
								<label for="" class="form-label mt-3">PRECIO DEL PLAN</label>
								<input type="text" name="amount" class="form-control" id="" placeholder="Ingrese monto del plan"  required>							
						</div>

						<div class="form-group">
							<input class="btn btn-outline-success" type="submit" name="submit" id="submit" value="Crear Plan" >
							<input class="btn btn-outline-danger" type="reset" name="reset" id="reset" value="Borrar">

						</div>
					</form>
			

				</div>
			</div>
			

  		
		

			<?php include('footer.php'); ?>
		</div>

    </body>
</html>


