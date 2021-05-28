<?php
require __DIR__ . '/../pages/partials/header.php';

$url = 'https://temtem-api.mael.tech/api/temtems'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$temtem = json_decode($data);
?>

    <style>

        .type-bug {
        background-color: #ab2;
        }

        .type-poison {
            background-color: #a59;
        }

        a {
            text-decoration: none;
        }

        .type-icon {
            display: inline-block;
            width: 66px;
            border-radius: 4px;
            border: 1px solid rgba(0,0,0,0.2);
            color: #fff;
            font-size: .75rem;
            font-weight: normal;
            line-height: 1.5rem;
            text-align: center;
            text-shadow: 1px 1px 2px rgb(0 0 0 / 70%);
            text-transform: uppercase;
            transition: opacity .4s;
        }

    </style>


    <h1></h1>

    <td>
        <a class="type-icon type-bug" href="../types/bug.php">Bug</a>
        <a class="type-icon type-poison" href="../types/poison.php">Poison</a>
    </td>
    <!-- <td>
        <a class="type-icon type-bug" href=  <?php echo "../types/" . $temtem[0]->types . ".php"?>><?php echo $temtem[0]->types ?></a>
        <a class="type-icon type-poison" href="../types/poison.php"><?php echo $temtem[0]->types ?></a>
    </td> -->


