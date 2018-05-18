<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="shortcut icon" href="favicon.ico">-->

    <title>Conferencias</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
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
                    <p><a class="btn btn-primary btn-lg" href="index.php?page=speaker">Ver conferencistas</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <p><a class="btn btn-primary btn-lg" href="index.php?page=conference">Ver conferencias</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php

        $root = dirname(__FILE__).'/';

        switch ($_GET['page']){
            case 'conference':
                require_once $root."Views/conferenceForm.php";
                break;
            case 'speaker':
                require_once $root."Views/speakerForm.php";
                break;
            default: break;
        }
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/general.js"></script>
</body>
</html>
