

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Club Social Rubgy</a></li>
    <li class="breadcrumb-item active">Panel de Control</li>
</ol>

<div class="row g-5 p-5">

<div class="col-3">    
    <div class="card text-white bg-success mb-4" style="max-width: 20rem; height: 10rem;">
    <a href="revenue_month" style="text-decoration: none;">
        <div class="card-header"></div>
        <div class="card-body">
            <h4 class="card-title">Dinero recibido este Mes</h4>
            <p class="card-text">
            <?php
                    date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $date  = date('Y-m');
                    $query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

                    //echo $query;
                    $result  = mysqli_query($con, $query);
                    $revenue = 0;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $query1="select * from plan where pid='".$row['pid']."'";
                            $result1=mysqli_query($con,$query1);
                            if($result1){
                                $value=mysqli_fetch_row($result1);
                                $revenue = $value[4] + $revenue;
                            }
                        }
                    }
                    echo "$".$revenue;
            ?>
            </p>           
        </div>
    </a>
    </div>    
</div>

<div class="col-3">
    <div class="card text-white bg-danger mb-3" style="max-width: 20rem; height: 10rem;">
    <a href="table_view.php" style="text-decoration: none;">
        <div class="card-header"></div>
        <div class="card-body">
            <h4 class="card-title">Total de Socios</h4>
            <p class="card-text">
            <?php
                    $query = "select COUNT(*) from users";

                    $result = mysqli_query($con, $query);
                    $i      = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo $row['COUNT(*)'];
                        }
                    }
                    $i = 1;
                    ?>
            </p>
        </div>
    </a>
    </div>
</div>


<div class="col-3">
    <div class="card text-white bg-warning mb-3" style="max-width: 20rem; height: 10rem;">
        <a href="over_members_month.php" style="text-decoration: none;">
            <div class="card-header"></div>
            <div class="card-body">
                <h4 class="card-title">Socios ingresados este mes</h4>
                <p class="card-text">
                    <?php
                    date_default_timezone_set("America/Argentina/Buenos_Aires");
                    $date  = date('Y-m');
                    $query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

                    //echo $query;
                    $result = mysqli_query($con, $query);
                    $i      = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo $row['COUNT(*)'];
                        }
                    }
                    $i = 1;
                    ?>
                </p>
            </div>
        </a>
    </div>
</div>

<div class="col-3">
    <div class="card text-white bg-info mb-3" style="max-width: 20rem; height: 10rem;">
    <a href="view_plan.php" style="text-decoration: none;">
        <div class="card-header"></div>
        <div class="card-body">
            <h4 class="card-title">Planes de Entreno Disponibles</h4>
            <p class="card-text">
                <?php
                    $query = "select COUNT(*) from plan where active='yes'";

                    //echo $query;
                    $result  = mysqli_query($con, $query);
                    $i = 1;
                    if (mysqli_affected_rows($con) != 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo $row['COUNT(*)'];
                        }
                    }
                    $i = 1;
                ?>
            </p>
        </div>
    </a>
    </div>
</div>

    

</div>


