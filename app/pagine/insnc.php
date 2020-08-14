<?php

// Questa pagina permette di inserire una nuova non Conformità

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
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example 
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Footer -->
                <?php include "../view/template-parts/footer.php" ?>
                <!-- Fine Footer -->
    </body>
</html>
