<?php
require __DIR__ . '/../pages/partials/header.php';
$url = 'https://temtem-api.mael.tech/api/temtems'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$image = $characters[0]->portraitWikiUrl;
$imageData = base64_encode(file_get_contents($image));

?>
<div class="container">
  <h1>character</h1>
</div>
    <?php
    require __DIR__ . '/../pages/partials/footer.php';
    ?>