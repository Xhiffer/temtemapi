<!-- ici le début du thème -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mon Blog</title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/type.css">

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="./index.php">Mon Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <select name="TEMTEM" id="temtem">
                        <?php
                            for ($i=0; $i < sizeof($temtems); $i++) {
                                $tech = $temtems[$i];
                                echo '<option value='.$tech->name. 'href= ./index.php?page=temtem&id='.$tech->number.'
                                >'.$tech->name.'</option>';
                            }
                            echo '<br>';
                        ?>

                    </select>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php?page=movesLearned">Moves</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page content-->
    <div class="container">
        <div class="text-center mt-5">
            <?php
            spl_autoload_register(function ($className) {
                $path = str_replace('\\', '/', $className);
                require_once __DIR__ . '/../src/' . $path . '.php';
            });
            ?>