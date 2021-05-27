<?php
require __DIR__ . '/../pages/partials/header.php';
$temtems = $temtemsdata->fetchAll();
$image = $temtems[0]->portraitWikiUrl;
$imageData = base64_encode(file_get_contents($image));

?>
<h1>Temtem List</h1>
<div class="row">


    <?php foreach ($temtems as $temtem) : ?>
        <div class="col-lg-4 col-md-4 text-center">
            <a class="navbar-brand" href=  <?php "./index.php?page=temtem&id=".$temtem->number ?>> <?php $temtem->name ?> </a>
            <div class="card" style="width: 18rem;">
            <?php echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode(file_get_contents($temtem->portraitWikiUrl)) . '" alt="Card image cap">' ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $temtem->name ?></h5>
                    <p class="card-text"><?php echo $temtem->gameDescription ?></p>
                    <a href=  <?php "./index.php?page=temtem&id=".$temtem->number ?> class="btn btn-primary">read more</a>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
</div>
<?php
require __DIR__ . '/../pages/partials/footer.php';
?>