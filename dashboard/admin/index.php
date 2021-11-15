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

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <?php include 'estadisticas.php'; ?>
                </div>
            </main>

        </div>

        <?php include('footer.php'); ?>
    </div>


    <script src="../../js/bootstrap.bundle.js"></script>
</body>
</html>
