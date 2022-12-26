<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP Test</title>
</head>

<body>
    <div class="container">
        <div class="card card-body my-3">
            <form id="formNum" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="numeroIngresado" class="form-label">Ingrese número para calcular números primos:</label>
                    <p class="fw-lighter">Límite 4 caracteres</p>
                    <input type="text" class="form-control" id="numeroIngresado" maxlength="4" autofocus required>
                    <div class="invalid-feedback">
                        Debe ingresar un número.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="button" id="btnLimpiar" class="btn btn-warning">Limpiar</button>
            </form>

            <br>

            <div class="mb-3">
                <label for="bodyCard" class="form-label">Resultado: </label>
                <div class="card card-body" id="bodyCard">

                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap CSS 5.2.3 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Jquery 3.6.3-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <?php
    //Extracción de Timestamp para refrescar JS evadiendo cache
    $fecha = new DateTime();
    $version = $fecha->getTimestamp();
    ?>

    <!-- JS de función principal -->
    <script src="<?= APP_URL ?>assets/js/main.js?v=<?= $version ?>"></script>
    <script>
        //Almacenamiento de URL Base para utilización en llamadas Ajax
        BASE_URL = '<?= base_url() ?>';
    </script>
</body>

</html>