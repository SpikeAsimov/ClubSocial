
<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <title>ConfiguroWeb | Registros por Mes</title>

    
			
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/dashboard.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Arroyo Walter">

</head>
    <body onload="showMember();">

		<?php include('elements/navbar.php'); ?>

		<div class="container-fluid">
			<div class="row">
				<?php include 'nav_.php'; ?>

				<div class="col-10 p-3">
					<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="revenue_month.php">Vistas</a></li>
								<li class="breadcrumb-item active">Registros por Mes</li>
					</ol>

					<legend>TOTAL DE REGISTROS</legend>

					<form class="row">

					<div class="col-6 p-3">
						<?php
						// set start and end year range
						$yearArray = range(2000, date('Y'));
						?>
						<!-- displaying the dropdown list -->
						<select class="form-select" name="year" id="syear">
							<option value="0">Selecciona el año</option>
							<?php
							foreach ($yearArray as $year) {
								// if you want to select a particular year
								$selected = ($year == date('Y')) ? 'selected' : '';
								echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
							}
							?>
						</select>
					</div>
					<div class="col-6 p-3">
						<?php
						// set the month array
						$formattedMonthArray = array(
											"01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril",
											"05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto",
											"09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre",
										);

						?>
						<!-- displaying the dropdown list -->
						<select class="form-select" name="month" id="smonth">
							<option value="0">Selecciona Mes</option>
							<?php

							foreach ($formattedMonthArray as $month) {
								// if you want to select a particular month
								$mm=implode(array_keys($formattedMonthArray,$month));
								$selected = ($mm == date('m')) ? 'selected' : '';
								// if you want to add extra 0 before the month uncomment the line below
								//$month = str_pad($month, 2, "0", STR_PAD_LEFT);
								echo '<option '.$selected.' value="'.$mm.'">'.$month.'</option>';
							}
							?>
						</select>
					</div>
						
						
						<input type="button" class="btn btn-info m-4" style="margin-bottom:5px;" name="search" onclick="showMember();" value="Buscar">

					</form>

					<table class="table table-hover table-bordered datatable"  id="memmonth"border=2 style="font-size:15px;">
						
					</table>

				</div>
			</div>
		</div>
   
		


<script>

  function showMember(){
  	var year=document.getElementById("syear");
  	var month=document.getElementById("smonth");
  	var iyear=year.selectedIndex;
  	var imonth=month.selectedIndex;
  	var mnumber=month.options[imonth].value;
  	var ynumber=year.options[iyear].value;
  	if(mnumber=="0" || ynumber=="0"){
      document.getElementById("memmonth").innerHTML="";
      return;
  	}
  	else{
  		if(window.XMLHttpRequest){
  			xmlhttp=new XMLHttpRequest();
  		}
  		xmlhttp.onreadystatechange=function(){
  			if(this.readyState==4 && this.status ==200){
  				document.getElementById("memmonth").innerHTML=this.responseText;
  			}
  		};
  		xmlhttp.open("GET","income_month.php?mm="+mnumber+"&yy="+ynumber+"&flag=0",true);
  		xmlhttp.send();
  	}

  }

</script>

		<?php include('footer.php'); ?>
    	
    	</div>

    </body>
</html>
