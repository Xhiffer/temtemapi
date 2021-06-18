<?php
require __DIR__ . '/../pages/partials/header.php';
$temtem = $temtemsdata->insertOne($_GET['id']);
/*$image = $temtem->portraitWikiUrl;
$imageData = base64_encode(file_get_contents($image));*/

?>
<div class="container">

    <h1 class=" text-center"><?php echo $temtem->name ?></h1>
    <hr />
    <div class="row">
        <div class="col-lg-4 col-md-4 text-center">
            <div class="card" style="width: 18rem;">
                <?php /*echo '<img class="card-img-top" src="data:image/jpeg;base64,' . $imageData . '" alt="Card image cap">'; */ ?>
                <div class="card-body">

                    <p class="card-text"><?php echo $temtem->gameDescription ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 text-center">
            <h1>Tempedia Data</h1>
            <table class="data-table table">

                <tbody>
                    <tr>
                        <td><a>Type</a></td>
                        <td><a>Peck</a></td>
                    </tr>
                    <tr>
                        <td><a>traits</a></td>
                        <td><a><?php echo $temtem->traits[0] . ' ';
                                echo $temtem->traits[1]  ?></a></td>
                    </tr>
                    <tr>
                        <td><a>height</a></td>
                        <td><a><?php echo $temtem->details->height->cm ?>cm
                                (<?php echo $temtem->details->height->inches; ?>")</a></td>
                    </tr>
                    <tr>
                        <td><a>weight</a></td>
                        <td><a><?php echo $temtem->details->weight->kg ?>kg
                                (<?php echo $temtem->details->weight->lbs; ?>lbs)</a></td>
                    </tr>
                    <tr>
                        <td><a>location</a></td>
                        <td><a><?php echo "blabla" ?></a></td>
                    </tr>
                    <tr>
                        <td><a>sell price</a></td>
                        <td><a><?php echo "blabla" ?></a></td>
                    </tr>
                    <tr>
                        <td><a>tvYields</a></td>
                        <td>
                            <a>
                                <?php foreach ($temtem->tvYields as $key => $value) {
                                    if ($value > 0) {
                                        echo "$key=$value, ";
                                    }
                                } ?>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-4 text-center">
            <div class="row">
                <h1>tvYields</h1>
                <div class="col-lg-4 col-md-4 text-center"></div>
                <div class="col-lg-4 col-md-4 text-center">
                    <table class="data-table table table-dark">
                        <tbody>

                            <?php
                            foreach ($temtem->tvYields as $key => $value) {
                                echo "<tr><td><a>$key=$value</a></td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <h1>Breeding</h1>
                <table class="data-table table">
                    <tbody>
                        <tr>
                            <td><a>gender</a></td>
                            <td><a><?php
                                    echo $temtem->genderRatio->male . ' ' . key($temtem->genderRatio) . ', ' .
                                        next($temtem->genderRatio) . ' ' . key($temtem->genderRatio)
                                    ?>

                                </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <h1>Base stats</h1>
        </div>
        <div class="col-lg-4 col-md-4 ">
            <h1>Type defenses</h1>
        </div>
    </div>
    <div class="row">
        <h1>Evolution Chart</h1>
        <?php
        if ($temtems[113]->evolution->evolves == true) {
            foreach ($temtems[113]->evolution->evolutionTree as $value) {
                var_dump($value);
            }
        } else {
            echo '<p>This temtems can\'t evolve </p>';
        }
        ?>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 ">
            <h1>Moves learned by</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 ">
            <h1> sprites</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 ">
            <h1>Where to find </h1>
        </div>
    </div>
</div>
<?php
require __DIR__ . '/../pages/partials/footer.php';
?>