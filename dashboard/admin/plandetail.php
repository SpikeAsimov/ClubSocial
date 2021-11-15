<?php
require '../../include/db_conn.php';
$pid=$_GET['q'];
$query="select * from plan where pid='".$pid."'";
$res=mysqli_query($con,$query);
if($res){
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	// echo "<tr><td>".$row['amount']."</td></tr>";

	echo "
        
	        <div class=\"form-group \">
              <fieldset>
                <label class=\"form-label mt-4\" for=\"readOnlyInput\">Monto:</label>
                <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" value='$".$row['amount']."' readonly=\"\">
              </fieldset>
            </div>
            <div class=\"form-group \">
              <fieldset>
                <label class=\"form-label mt-4\" for=\"readOnlyInput\">Validez:</label>
                <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" value='".$row['validity']." Mes/es' readonly=\"\">
              </fieldset>
            </div>
        
            
	";

}

?>