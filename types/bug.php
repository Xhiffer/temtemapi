<?php
require __DIR__ . '/../pages/partials/header.php';
?>

<style>


    .color-type {
        color: #737373;
    }

    .madiv1 {
        background-color: #f0f0f0 ;
        text-align: left;
    }

    * {
        box-sizing: border-box;
    }

    html {
        color: #404040;
        font-family: "Fira Sans","Trebuchet MS",Ubuntu,Helvetica,Arial,sans-serif;
        line-height: 1.5;
    }

    div {
        display: block;

    }

    .stats {
        text-align: center;
    }

    .stat-item {
        display: inline-block;
        margin: 0 1rem 1rem;
        font-size: .875rem;
    }

    .stat-count {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .grid-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin: 0 -1rem;
        margin-top: 30px;
    }
 
    .span-md-12 {
        width: 100%;
        text-align: left;
    }

    .grid-col {
        margin-bottom: 1rem;
        padding: 0 1rem;
    }

    .span-md-6 {
        width: 50%;
    }

    .icon-string {
        padding-left: .5rem;
        vertical-align: middle;
    }

    .icon-16 {
        width: 30px;
        height: 30px;
    }

    .type-fx-list {
        margin-left: 2.6rem;
    }

    p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    }

    h1, h2, h3, h4, p, dl, pre {
    margin: 0 0 1rem;
    padding: 0;
    }

    .type-icon {
    display: inline-block;
    width: 66px;
    margin-bottom: 4px;
    background: #dbdbdb;
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

    a {
        text-decoration: none;
    }

    .type-grass {
        background-color: #7c5;
    }

    .type-fairy {
        background-color: #e9e;
    }

    .type-poison {
        background-color: #a59;
    }

    .type-ground {
        background-color: #db5;
    }

    .type-rock {
        background-color: #ba6;
    }

    .type-ghost {
        background-color: #66b;
    }

    .type-steel {
        background-color: #aab;
    }

    .type-psychic {
        background-color: #f59;
    }

    .type-dark {
        background-color: #754;
    }

    .type-fire {
        background-color: #f42;
    }

    .type-fighting {
        background-color: #b54;
    }

    .type-flying {
        background-color: #89f;
    }

</style>

<h1>Bug <span class="color-type">(type)<span></h1>

<div class="madiv1">
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio rem hic reiciendis nobis dolor ullam at explicabo, optio laudantium mollitia in deleniti voluptatibus, minus fugiat quaerat numquam fugit sint sapiente!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio at nam et, sit tempora suscipit eos possimus modi? Odio id repudiandae necessitatibus a commodi sunt quidem porro excepturi corrupti voluptates.
    </p>
</div>

<div class="stats">
    <div class="stat-item">
        <span class="stat-count">90</span>
        <br>
        Bug type Pokémon
    </div>
    <div class="stat-item">
        <span class="stat-count">19</span>
        <br>
        Single type Pokémon
    </div>
    <div class="stat-item">
        <span class="stat-count">71</span>
        <br>
        Dual type Pokémon
    </div>
    <div class="stat-item">
        <span class="stat-count">32</span>
        <br>
        Bug-type moves
    </div>
</div>


<div class="grid-row">
    <div class="grid-col span-md-12 span-lg-6">
        <div class="grid-row">
            <div class="grid-col span-md-6 span-lg-12">
                <h2>Attack <i>pros & cons</i></h2>
                <p>
                    <img class="img-fixed icon-16" src="../img/valide.png" alt="Tick">
                    <span class="icon-string"><em>Bug </em>moves are super-effective against :</span>
                </p>
                <p class="type-fx-list">
                    <a class="type-icon type-grass" href="">Grass</a>
                    <a class="type-icon type-psychic" href="">Psychic</a>
                    <a class="type-icon type-dark" href="">Dark</a>
                </p>
                <p>
                    <img class="img-fixed icon-16" src="../img/incorrect.png" alt="Cross">
                    <span class="icon-string">
                        <em>Bug </em>moves are not very effective against :
                    </span>
                </p>
                <p class="type-fx-list">
                    <a class="type-icon type-fire" href="">Fire</a>
                    <a class="type-icon type-fighting" href="">Fighting</a>
                    <a class="type-icon type-poison" href="poison.php">Poison</a>
                    <a class="type-icon type-flying" href="">Flying</a>
                    <a class="type-icon type-ghost" href="">Ghost</a>
                    <a class="type-icon type-steel" href="">Steel</a>
                    <a class="type-icon type-fairy" href="">Fairy</a>
                </p>
            </div>
            <div class="grid-col span-md-6 span-lg-12">
                <h2>Defense <i>pros & cons</i></h2>
                <p>
                    <img class="img-fixed icon-16" src="../img/valide.png" alt="Tick">
                    <span class="icon-string">These types are not very effective against <em>Bug </em>Pokémon :</span>
                </p>
                <p class="type-fx-list">
                    <a class="type-icon type-grass" href="">Grass</a>
                    <a class="type-icon type-fighting" href="">Fighting</a>
                    <a class="type-icon type-ground" href="">Ground</a>
                </p>
                <p>
                    <img class="img-fixed icon-16" src="../img/incorrect.png" alt="Tick">
                    <span class="icon-string">These types are super-effective against <em>Bug </em>Pokémon :</span>
                </p>
                <p class="type-fx-list">
                    <a class="type-icon type-fire" href="">Fire</a>
                    <a class="type-icon type-flying" href="">Flying</a>
                    <a class="type-icon type-rock" href="">Rock</a>
                </p>
            </div>

        </div>
    </div>
</div>


<?php
require __DIR__ . '/../pages/partials/footer.php';
?>