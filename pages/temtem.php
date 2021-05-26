<?php
require __DIR__ . '/../pages/partials/header.php';
$url = 'https://temtem-api.mael.tech/api/temtems'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$image = $characters[0]->portraitWikiUrl;
$imageData = base64_encode(file_get_contents($image));

?>
<div class="container">

    <h1 class=" text-center"><?php echo $characters[0]->name ?></h1>
    <hr />
    <div class="row">
        <div class="col-lg-4 col-md-4 text-center">
            <div class="card" style="width: 18rem;">
                <?php echo '<img class="card-img-top" src="data:image/jpeg;base64,'.$imageData.'" alt="Card image cap">';?>
                <div class="card-body">

                    <p class="card-text"><?php echo $characters[0]->gameDescription ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 text-center">
            <h1>Tempedia Data</h1>
            <tbody>
                <tr>
                    <td><a>Type</a></td>
                    <td><a>Peck</a></td>
                </tr>
                <tr>
                <td>
                <a>traits</a>
                </td>
                    <td><a>Peck</a></td>
                </tr>
                <tr>
                    <td><a>height</a></td>
                    <td><a>Peck</a></td>
                </tr>
                <tr>
                    <td><a>weight</a></td>
                    <td><a>Peck</a></td>
                </tr>
                <tr>
                    <td><a>location</a></td>
                    <td><a>Peck</a></td>
                </tr>
                <tr>
                    <td><a>sell price</a></td>
                    <td><a>Peck</a></td>
                </tr>
            </tbody>
        </div>
        <div class="col-lg-4 col-md-4 text-center">
            <div class="row">
                <h1>tvYields</h1>
            </div>
            <div class="row">
                <h1>Breeding</h1>
                <tbody>
                <tr>
                    <td><a>gender</a></td>
                    <td><a>Peck</a></td>
                </tr>
            </tbody>
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