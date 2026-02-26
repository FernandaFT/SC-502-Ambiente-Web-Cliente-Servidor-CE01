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
                                        Registro de Ejercicios <i class="mdi mdi-login mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Agrega tus tipos de ejercicios.</p>
                                    <a href="ejercicio.php"
                                        class="btn btn-gradient-danger btn-rounded btn-fw">
                                        Registrar Ejercicio
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
                                        Consulta de Ejercicios <i class="mdi mdi-table-account mdi-24px float-end"></i>
                                    </h4>
                                    <p class="mb-5">Visualiza todos los ejercicios registrados con su información completa.</p>
                                    <a href="ejercicio-consulta.php"
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