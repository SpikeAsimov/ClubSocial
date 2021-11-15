
<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Club Social Rubgy | Crear Rutina</title>


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
                          <li class="breadcrumb-item active">Nueva rutina</li>
              </ol>
              <legend>CREAR NUEVA RUTINA</legend>

              <form id="form1" name="form1" method="post" class="row g-3" action="saveroutine.php">
                  <div class="form-group col-12">                             
                              <label for="" class="form-label mt-3">NOMBRE DE RUTINA</label>
                              <input type="text" name="rname" class="form-control" id="" placeholder="" size="30" required>
                  </div>
                  <div class="form-group col-12">

                    <div class="row">
                        <label for="" class="form-label mt-2">DÍA 1:</label>
                        <textarea name="day1" id="textarea" style="resize:none;"></textarea>
                    </div>

                    <div class="row">
                        <label for="" class="form-label mt-2">DÍA 2:</label>
                        <textarea name="day2" id="textarea" style="resize:none;"></textarea>
                    </div>

                    <div class="row">
                        <label for="" class="form-label mt-2">DÍA 3:</label>
                        <textarea name="day3" id="textarea" style="resize:none;"></textarea>
                    </div>

                    <div class="row">                    
                        <label for="" class="form-label mt-2">DÍA 4:</label>
                        <textarea name="day4" id="textarea" style="resize:none;"></textarea>
                    </div>

                    <div class="row">                    
                        <label for="" class="form-label mt-2">DÍA 5:</label>
                        <textarea name="day5" id="textarea" style="resize:none;"></textarea>
                    </div>

                    <div class="row">
                        <label for="" class="form-label mt-2">DÍA 6:</label>
                        <textarea name="day6" id="textarea" style="resize:none;"></textarea>
                    </div>                     
                      
                      
                      
                  </div>

                  <div class="form-group col-12">
                      <input class="btn btn-info " type="submit" name="submit" id="submit" value="Agregar Rutina" >

                      <input class="btn btn-dan" type="reset" name="reset" id="reset" value="Borrar">
                  </div>
                  
                </form>
            </div>
        </div>
      </div>

	
		
		
	
		
		
		
		


<?php include('footer.php'); ?>
    	

    </body>
</html>


				
