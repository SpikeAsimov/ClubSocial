<header class="navbar navbar-dark sticky-top bg-dark p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 " href="index.php">
        <img src="https://www.arroyowalter.site/SistemaClubSocial/images/Logo.png" alt="" width="68" height="55" />
        <strong>Club Social Rugby</strong>
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
        <div class="nav-item">
            <strong class="px-3">Bienvenid@ <?php echo $_SESSION['full_name']; ?></strong>
        </div>

        <div class="nav-item ">
            <a class="nav-link px-4" href="logout.php">
                Cerrar Sesión
            </a>
        </div>
    </div>
</header>
