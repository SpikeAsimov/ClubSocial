<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Club Social Rubgy | Panel de Control </title>


    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/dashboard.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Arroyo Walter">


</head>
<body>
    <?php include 'elements/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include 'nav_.php';?>

			<div class="col-10 p-3">
				<?php include 'estadisticas.php'; ?>
			</div>           

        </div>

        <?php include('footer.php'); ?>
    </div>


    <script src="../../js/bootstrap.bundle.js"></script>
</body>
</html>
