<?php
$filePath = '../js/languages.json';
$languages = json_decode(file_get_contents($filePath), true);

if(isset($_POST['language'])){
    $langKey = $_POST['language'];

    foreach($languages[$langKey] as $WordKey=>$WordValue){
        
        $languages[$langKey][$WordKey] = $_POST[$WordKey];
    }

    file_put_contents($filePath, json_encode($languages, JSON_PRETTY_PRINT));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CM PAGE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="body">

    <div class="sidenav">
        <ul class="list-group list-group-flush">
            <li class="menu-item list-group-item active" data-target="navegation-sec">NAVEGACIÓN</li>
            <li class="menu-item list-group-item" data-target="home-sec">INICIO</li>
            <li class="menu-item list-group-item" data-target="latest-sec">LO ÚLTIMO</li>
            <li class="menu-item list-group-item" data-target="reels-sec">REELS</li>
            <li class="menu-item list-group-item" data-target="contact-sec">CONTÁCTANOS</li>
        </ul>
    </div>

    <div class="content p-3">
        <form method="post" action="admin.php">
            <?php
                require_once('idioma.php');
                require_once('navegacion.php');
                require_once('inicio.php');
                require_once('ultimo.php');
                require_once('reels.php');
                require_once('contacto.php');
            ?>

            <div class="guardar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <button class="btn btn-primary">GUARDAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script>var languages=<?=json_encode($languages);?>;</script>
</body>

</html>
