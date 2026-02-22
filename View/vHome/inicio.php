<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor-CE01/View/layout.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
MostrarCSS();
?>

<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            <div class="main-panel-body">
                <div class="content-wrapper">
                    <?php
                    MostrarHeader();
                    ?>
                    <div class="row row-altura">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Registro de Vendedores <i class="mdi mdi-login mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Agrega nuevos vendedores al sistema con su cédula, nombre y correo.</p>
                                    <a href="#"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Ir al Registro
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Registro de Vehículos <i class="mdi mdi-tractor mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Agrega vehículos indicando marca, modelo, color, precio y vendedor.</p>
                                    <a href="#"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Ir al Registro
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">
                                        Consulta de Vehículos <i class="mdi mdi-table-account mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Visualiza todos los vehículos registrados con su información completa.</p>
                                    <a href="#"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Ver Consulta
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                MostrarFooter();
                ?>

            </div>
        </div>
    </div>

    <?php
    MostrarJS();
    ?>

</body>
</html>