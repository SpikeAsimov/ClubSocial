<link rel="stylesheet" href="../../css/sidebars.css">

<script src="../../js/sidebars.js"></script>

<div class="flex-shrink-0 p-3 bg-white col-2" style="max-width: 280px;">
    <a href="index.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24"></svg>
        <span class="fs-5 fw-semibold">Panel de Control</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button href="" class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Inicio
            </button>
            <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="new_entry.php" class="link-dark rounded">Nuevo Registro</a></li>
                    <li><a href="payments.php" class="link-dark rounded">Pagos</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Clientes
            </button>
            <div class="collapse show" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="view_mem.php" class="link-dark rounded">Editar Clientes</a></li>
                    <li><a href="table_view.php" class="link-dark rounded">Ver Clientes</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                Planes de Suscripción
            </button>
            <div class="collapse show" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="new_plan.php" class="link-dark rounded">Nuevo Plan</a></li>
                    <li><a href="view_plan.php" class="link-dark rounded">Editar Detalles de Suscripción</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Rutinas de Entrenamiento
            </button>
            <div class="collapse show" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="addroutine.php" class="link-dark rounded">Agregar Rutina</a></li>
                    <li><a href="editroutine.php" class="link-dark rounded">Editar Rutina</a></li>
                    <li><a href="viewroutine.php" class="link-dark rounded">Ver Rutina</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Vistas Generales
            </button>
            <div class="collapse show" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="over_members_month.php" class="link-dark rounded">Clientes del Mes</a></li>
                    <li><a href="over_members_year.php" class="link-dark rounded">Clientes por Año</a></li>
                    <li><a href="revenue_month.php" class="link-dark rounded">Registro por Mes</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button type="button" class="btn btn-info btn-sm"><a href="more-userprofile.php" class="text-decoration-none text-white">Configuración del sistema</a></button>

        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
            <a href="logout.php" class=""><button class="btn btn-danger btn-sm">Cerrar Sesión</button></a>
        </li>

    </ul>



</div>