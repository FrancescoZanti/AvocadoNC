<?php

// Questa pagina permette di consultare le non conformità inserite

?>

<!DOCTYPE html>
<html lang="en">
    <!-- Header -->
    <?php include "../app/config/app-config.php";?>
    <?php include "../view/template-parts/header.php";?>
    <!-- Fine Header -->
    <body class="sb-nav-fixed">


        <!-- Navbar-->
        <?php include "../view/template-parts/navbar.php";?>
        <!-- Navbar fine -->

        <div id="layoutSidenav">

        <!-- Barra Laterale -->
            <?php include "../view/template-parts/sidebar.php";?>
        <!-- Fine Barra Laterale -->    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <!--<h1 class="mt-4">Dashboard</h1>-->
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Inserire lista nc --> 
                        <?php include "../view/template-parts/lista-nc.php";?>
                        <!-- Fine lista nc -->
                    </div>
                </main>
                <!-- Footer -->
                <?php include "../view/template-parts/footer.php" ?>
                <!-- Fine Footer -->
    </body>
</html>
