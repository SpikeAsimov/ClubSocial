<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="es">
<head>

	<title>Club Social Rubgy | Clientes por Año</title>

			
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
								<li class="breadcrumb-item"><a href="over_members_year.php">Vistas</a></li>
								<li class="breadcrumb-item active">Clientes por año</li>
					</ol>

					<legend>CLIENTES POR AÑO</legend>

					
				<form class="row">
					<div class="col-12 p-3">
						<?php
						// set start and end year range
						$yearArray = range(2000, date('Y'));
						?>
						<!-- displaying the dropdown list -->
						<select class="form-select" name="year" id="syear">
							<option value="0">Select Year</option>
							<?php
							foreach ($yearArray as $year) {
								// if you want to select a particular year
								$selected = ($year == date('Y')) ? 'selected' : '';
								echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
							}
							?>
						</select>
					</div>
					
						<input type="button" class="btn btn-info m-4"  style="margin-bottom:5px;" name="search" onclick="showMember();" value="Buscar">
					

				</form>
				<div class="col-12 p-3">

					<table class="table table-hover table-bordered datatable" id="meyear" border=1>
		
					</table>
					
				</div>			

				</div>
			</div>
		</div>



	


<script>

  function showMember(){
  	var year=document.getElementById("syear");
  	var iyear=year.selectedIndex;
  	var ynumber=year.options[iyear].value;
  	if(ynumber=="0"){
      document.getElementById("meyear").innerHTML="";
      return;
  	}
  	else{
  		if(window.XMLHttpRequest){
  			xmlhttp=new XMLHttpRequest();
  		}
  		xmlhttp.onreadystatechange=function(){
  			if(this.readyState==4 && this.status ==200){
  				document.getElementById("meyear").innerHTML=this.responseText;
  			}
  		};
  		xmlhttp.open("GET","over_month.php?mm=0&flag=1&yy="+ynumber,true);
  		xmlhttp.send();
  	}

  }

</script>

<?php include('footer.php'); ?>


    </body>
</html>
