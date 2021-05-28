<?php
require __DIR__ . '/../pages/partials/header.php';
$temtems = $temtemsdata->fetchAll();
$image = $temtems[0]->portraitWikiUrl;
$imageData = base64_encode(file_get_contents($image));

?>
<style>
    .only3 {
        width: 100%;
        line-height: 1.2em;
        height: 3.6em;
        background-color: gainsboro;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
    }

    .bar-warning {
        background-color: yellow;
    }

    .bar-success {
        background-color: green;
    }

    .bar-error {
        background-color: red;
    }
</style>
<h1>Temtem List</h1>
<div class="row">


    <?php foreach ($temtems as $temtem) : ?>
        <div class="col-lg-4 col-md-4 text-center">
            <a class="navbar-brand" href=<?php "./index.php?page=temtem&id=" . $temtem->number ?>> <?php $temtem->name ?> </a>
            <div class="card" style="width: 18rem;">
                <?php echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode(file_get_contents($temtem->portraitWikiUrl)) . '" alt="Card image cap">' ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $temtem->name ?></h5>


                    <?php foreach ($temtem->stats as $key => $value) : ?>
                        <?php if($key =="total"){break;}?>
                        <div class="progress">
                            
                            <a><?php echo $key . ':' ?></a> &nbsp;
                            <?php if ($value >= 70) : ?>
                                <div class="progress-bar bar-success" role="progressbar" aria-valuenow=<?php echo $value ?> aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value ?>%">
                                    <span class="sr-only text-secondary"><?php echo $value ?></span>
                                </div>
                            <?php elseif ($value >= 40) : ?>
                                <div class="progress-bar bar-warning" role="progressbar" aria-valuenow=<?php echo $value ?> aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value ?>%">
                                    <span class="sr-only text-secondary"><?php echo $value ?></span>
                                </div>
                            <?php else : ?>
                                <div class="progress-bar bar-error" role="progressbar" aria-valuenow=<?php echo $value ?> aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value ?>%">
                                    <span class="sr-only text-secondary"><?php echo $value ?></span>
                                </div>
                            <?php endif; ?>

                        </div> </br>
                    <?php endforeach; ?>
                    <p class="card-text only3"><?php echo $temtem->gameDescription ?></p>

                    <a href=<?php echo "./index.php?page=temtem&id=" . $temtem->number ?> class="btn btn-primary">read more</a>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
</div>
<?php
require __DIR__ . '/../pages/partials/footer.php';
?>