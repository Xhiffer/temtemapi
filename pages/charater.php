<?php
require __DIR__ . '/../pages/partials/header.php';
$url = 'https://temtem-api.mael.tech/api/temtems'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$image = $characters[0]->portraitWikiUrl;
$imageData = base64_encode(file_get_contents($image));

?>
<div class="container">

    <h1></h1>
    <div class="col-lg-6 col-md-6 text-center">
    <div class="card" style="width: 18rem;">
    <?php echo '<img class="card-img-top" src="data:image/jpeg;base64,'.$imageData.'" alt="Card image cap">';?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $characters[0]->name ?></h5>
    <p class="card-text"><?php echo $characters[0]->gameDescription ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
    </div>
</div>
    <?php
    require __DIR__ . '/../pages/partials/footer.php';
    ?>