<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 12:15 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link rel="shortcut icon" href="favicon.ico">-->

    <title>Conferencias</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
</div>

<div class="jumbotron">
    <div class="container">
        <h1>Bienvenido!</h1>

        <p>Escoja una de las siguientes opciones</p>
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-primary btn-lg" href="speakerForm.php">Ver conferencistas</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-primary btn-lg" href="conferenceForm.php">Ver conferencias</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Crear conferencista</h2>
            <form>
                <div class="form-group">
                    <input type="text" id="speaker_name" class="form-control" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <input type="text" id="speaker_last_name" class="form-control" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <input type="text" id="speaker_phone_number" class="form-control" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <input type="text" id="speaker_email" class="form-control" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <input type="text" id="speaker_organization" class="form-control" placeholder="Organización">
                </div>
                <div class="form-group">
                    <textarea rows="4" cols="20" id="speaker_cv_resume" class="form-control" placeholder="CvLAC"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Crear conferencia</button>
            </form>
        </div>
        <div class="col-lg-8">
            <h2>Heading</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>Organización</th>
                    <th>CvLAC</th>
                </tr>
                <tr>
                    <td>Fulano De Tal</td>
                    <td>3333333333</td>
                    <td>alguien@mail.com</td>
                    <td>Compañía misteriosa</td>
                    <td>Profesional en alguna cosa</td>
                </tr>

            </table>
        </div>
    </div>
</div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/general.js"></script>
</body>
</html>

