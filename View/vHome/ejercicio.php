<?php
$mensaje = "";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE01/View/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE01/Model/HomeModel.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE01/Controller/HomeController.php";
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

                    <div class="row justify-content-center">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="card-title text-center text-white">Registro Ejercicio</h4>

                                    <?php if (!empty($mensaje)) { ?>
                                        <div class="alert alert-danger mt-3"><?php echo $mensaje; ?></div>
                                    <?php } ?>

                                    <form class="forms-sample" action="" method="POST" id="formRegistroEjercicio">

                                        <div class="form-group">
                                            <label>Identificación</label>
                                            <input type="text" class="form-control" id="Identificacion" name="Identificacion" placeholder="Identificación">
                                        </div>

                                        <div class="form-group">
                                            <label>Monto</label>
                                            <input type="number" class="form-control" id="Monto" name="Monto"
                                                step="0.01" min="0" placeholder="Monto">
                                        </div>

                                        <div class="form-group">
                                            <label>Tipo de Ejercicio</label>
                                            <select id="TipoEjercicio" name="TipoEjercicio" class="form-control" required>
                                                <option value="">Seleccione un tipo de ejercicio</option>

                                                <?php if ($tiposEjercicio && $tiposEjercicio->num_rows > 0) { ?>
                                                    <?php while ($row = $tiposEjercicio->fetch_assoc()) { ?>
                                                        <option value="<?php echo htmlspecialchars($row["TipoEjercicio"]); ?>">
                                                            <?php echo htmlspecialchars($row["DescripcionTipoEjercicio"]); ?>
                                                        </option>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <option value="">No hay tipos de ejercicio registrados</option>
                                                <?php } ?>

                                            </select>
                                        </div>

                                        <button type="submit" id="btnRegistrarEjercicio"
                                            name="btnRegistrarEjercicio"
                                            class="btn btn-gradient-danger btn-rounded btn-fw me-2">
                                            Procesar
                                        </button>
                                    </form>
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
        <script src="../assets/funciones/ejercicio.js"></script>
</body>

</html>