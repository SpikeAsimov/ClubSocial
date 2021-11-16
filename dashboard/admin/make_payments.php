<?php
require '../../include/db_conn.php';
page_protect();
if (isset($_POST['userID']) && isset($_POST['planID'])) {
    $uid  = $_POST['userID'];
    $planid=$_POST['planID'];
    $query1 = "select * from users WHERE userid='$uid'";
    
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            
            $name = $row1['username'];
            $query2="select * from plan where pid='$planid'";

            $result2=mysqli_query($con,$query2);
            if($result2){
               $planValue=mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $planName=$planValue['planName'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <title>Club Social Rugby | Registrar Pago</title>

				
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
									<li class="breadcrumb-item"><a href="revenue_month.php">Vistas</a></li>
									<li class="breadcrumb-item active">Registros por Mes</li>
							</ol>			

							<form id="form1" name="form1" method="post" class="row" action="submit_payments.php">
								<legend>REGISTRAR PAGO</legend>
								<div class="form-group col-12">
									<h5 for="" class="form-label mt-0">ID MEMBRESIA</h5>
									<input type="text" class="form-control-plaintext" name="m_id" id="" value="<?php echo $uid; ?>" readonly>

									<label for="" class="form-label mt-3">NOMBRE Y APELLIDO</label>
									<input type="text" name="u_name" class="form-control" id="" value="<?php echo $name; ?>" readonly>

									<label for="" class="form-label mt-3">PLAN ACTUAL</label>
									<input type="text" class="form-control" name="prevPlan" id="boxx" value="<?php echo $planName; ?>" readonly>

									<label for="" class="form-label mt-3">SELECCIONAR NUEVO PLAN</label>									
									<select name="plan" class="form-select" id="boxx" required onchange="myplandetail(this.value)">
													<option value="">-- Seleccionar --</option>
													<?php
							
														$query = "select * from plan where active='yes'";
														
														//echo $query;
														$result = mysqli_query($con, $query);
														
														if (mysqli_affected_rows($con) != 0) {
															while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
																echo "<option value=" . $row['pid'] . ">" . $row['planName'] . "</option>";
																
															}
														}
														
													?>
									</select>

									
									<table class="table table-hover" id="plandetls">
									</table>

									<input class="btn btn-outline-success" type="submit" name="submit" id="submit" value="AGREGAR PAGO" >
									<input class="btn btn-outline-danger" type="reset" name="reset" id="reset" value="Borrar"></td>


								</div>
								
							</form>

					   </div>

			   </div>
		

		<?php include('footer.php'); ?>

		</div>


    </body>
</html>


 <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>

<?php
} else {
    
}
?>
