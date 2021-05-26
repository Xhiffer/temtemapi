<!-- $temtems[$i]->techniques[$j]['name'] -->
<?php
require __DIR__ . '/../pages/partials/header.php';
$url = 'https://temtem-api.mael.tech/api/temtems'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$temtems = json_decode($data); // decode the JSON feed
// echo '<pre>'; print_r($temtems);echo '</pre>';
// die();;
// echo '<pre>'; print_r($tech); echo '</pre>';
for ($i=0; $i < sizeof($temtems); $i++) {
    $tech = $temtems[$i];
    $techName =  $tech->techniques;
    echo '<h1>' . $tech->name . '</h1>' . '<br><hr>';
    for ($j=0; $j < sizeof($techName); $j++) {
        echo $techName[$j]->name. '<br>';
    }
    echo '<hr><hr>';
}

?>


<link rel="stylesheet" href="../css/type.css"></style>
<div class="tabset-moves-game sv-tabs-wrapper">
    <div class="sv-tabs-tab-list">
        <a class="sv-tabs-tab active" href="#tab-moves-17">Let's Go Pikachu/Let's Go Eevee</a>
        <a class="sv-tabs-tab" href="#tab-moves-16">Ultra Sun/Ultra Moon</a>
    </div>
    <div class="sv-tabs-panel-list">
        <div class="sv-tabs-panel active" id="tab-moves-17">
            <div class="grid-row">
                <div class="grid-col span-lg-6">
                    <h3>Moves learnt by level up</h3>
                    <p class="text-small"><em>Beedrill</em> learns the following moves in Pokémon Let's Go Pikachu &amp;
                        Let's Go Eevee at the levels specified.</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="int" data-sort-dir="asc">
                                        <div class="sortwrap">Lv.</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-num">1</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/peck"
                                            title="View details for Peck">Peck</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">35</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">1</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/twineedle"
                                            title="View details for Twineedle">Twineedle</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">25</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">13</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/rage"
                                            title="View details for Rage">Rage</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">20</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">16</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/fury-attack"
                                            title="View details for Fury Attack">Fury Attack</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">15</td>
                                    <td class="cell-num">85</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">19</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/focus-energy"
                                            title="View details for Focus Energy">Focus Energy</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">22</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/poison-jab"
                                            title="View details for Poison Jab">Poison Jab</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">25</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/agility"
                                            title="View details for Agility">Agility</a></td>
                                    <td class="cell-icon"><a class="type-icon type-psychic"
                                            href="/type/psychic">Psychic</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">28</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/pin-missile"
                                            title="View details for Pin Missile">Pin Missile</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">25</td>
                                    <td class="cell-num">95</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">31</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/outrage"
                                            title="View details for Outrage">Outrage</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dragon"
                                            href="/type/dragon">Dragon</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">120</td>
                                    <td class="cell-num">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>Moves learnt on evolution</h3>
                    <p class="text-small"><em>Beedrill</em> learns the following moves when it evolves in Pokémon Let's
                        Go Pikachu &amp; Let's Go Eevee (regardless of level).</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="string" data-sort-dir="asc">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/twineedle"
                                            title="View details for Twineedle">Twineedle</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">25</td>
                                    <td class="cell-num">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="grid-col span-lg-6">
                    <h3>Moves learnt by TM</h3>
                    <p class="text-small"><em>Beedrill</em> is compatible with these Technical Machines in Pokémon Let's
                        Go Pikachu &amp; Let's Go Eevee:</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="int" data-sort-dir="asc">
                                        <div class="sortwrap">TM</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm01" title="TM01">01</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/headbutt"
                                            title="View details for Headbutt">Headbutt</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">70</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm05" title="TM05">05</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/rest"
                                            title="View details for Rest">Rest</a></td>
                                    <td class="cell-icon"><a class="type-icon type-psychic"
                                            href="/type/psychic">Psychic</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm07" title="TM07">07</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/protect"
                                            title="View details for Protect">Protect</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm08" title="TM08">08</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/substitute"
                                            title="View details for Substitute">Substitute</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm09" title="TM09">09</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/reflect"
                                            title="View details for Reflect">Reflect</a></td>
                                    <td class="cell-icon"><a class="type-icon type-psychic"
                                            href="/type/psychic">Psychic</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm12" title="TM12">12</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/facade"
                                            title="View details for Facade">Facade</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">70</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm13" title="TM13">13</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/brick-break"
                                            title="View details for Brick Break">Brick Break</a></td>
                                    <td class="cell-icon"><a class="type-icon type-fighting"
                                            href="/type/fighting">Fighting</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">75</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm18" title="TM18">18</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/u-turn"
                                            title="View details for U-turn">U-turn</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">70</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm24" title="TM24">24</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/x-scissor"
                                            title="View details for X-Scissor">X-Scissor</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm26" title="TM26">26</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/poison-jab"
                                            title="View details for Poison Jab">Poison Jab</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm27" title="TM27">27</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/toxic"
                                            title="View details for Toxic">Toxic</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">90</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm39" title="TM39">39</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/outrage"
                                            title="View details for Outrage">Outrage</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dragon"
                                            href="/type/dragon">Dragon</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">120</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm45" title="TM45">45</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/solar-beam"
                                            title="View details for Solar Beam">Solar Beam</a></td>
                                    <td class="cell-icon"><a class="type-icon type-grass" href="/type/grass">Grass</a>
                                    </td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">120</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm48" title="TM48">48</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/hyper-beam"
                                            title="View details for Hyper Beam">Hyper Beam</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">150</td>
                                    <td class="cell-num">90</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm50" title="TM50">50</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/roost"
                                            title="View details for Roost">Roost</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm52" title="TM52">52</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/sludge-bomb"
                                            title="View details for Sludge Bomb">Sludge Bomb</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">90</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm53" title="TM53">53</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/mega-drain"
                                            title="View details for Mega Drain">Mega Drain</a></td>
                                    <td class="cell-icon"><a class="type-icon type-grass" href="/type/grass">Grass</a>
                                    </td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">40</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm58" title="TM58">58</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/drill-run"
                                            title="View details for Drill Run">Drill Run</a></td>
                                    <td class="cell-icon"><a class="type-icon type-ground"
                                            href="/type/ground">Ground</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">95</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="sv-tabs-panel" id="tab-moves-16">
            <div class="grid-row">
                <div class="grid-col span-lg-6">
                    <h3>Moves learnt by level up</h3>
                    <p class="text-small"><em>Beedrill</em> learns the following moves in Pokémon Ultra Sun &amp; Ultra
                        Moon at the levels specified.</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="int" data-sort-dir="asc">
                                        <div class="sortwrap">Lv.</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-num">1</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/fury-attack"
                                            title="View details for Fury Attack">Fury Attack</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">15</td>
                                    <td class="cell-num">85</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">1</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/twineedle"
                                            title="View details for Twineedle">Twineedle</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">25</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">11</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/fury-attack"
                                            title="View details for Fury Attack">Fury Attack</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">15</td>
                                    <td class="cell-num">85</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">14</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/rage"
                                            title="View details for Rage">Rage</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">20</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">17</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/pursuit"
                                            title="View details for Pursuit">Pursuit</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">40</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">20</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/focus-energy"
                                            title="View details for Focus Energy">Focus Energy</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">23</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/venoshock"
                                            title="View details for Venoshock">Venoshock</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">65</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">26</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/assurance"
                                            title="View details for Assurance">Assurance</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">29</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/toxic-spikes"
                                            title="View details for Toxic Spikes">Toxic Spikes</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">32</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/pin-missile"
                                            title="View details for Pin Missile">Pin Missile</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">25</td>
                                    <td class="cell-num">95</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">35</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/poison-jab"
                                            title="View details for Poison Jab">Poison Jab</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">38</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/agility"
                                            title="View details for Agility">Agility</a></td>
                                    <td class="cell-icon"><a class="type-icon type-psychic"
                                            href="/type/psychic">Psychic</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">41</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/endeavor"
                                            title="View details for Endeavor">Endeavor</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num">44</td>
                                    <td class="cell-name"><a class="ent-name" href="/move/fell-stinger"
                                            title="View details for Fell Stinger">Fell Stinger</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">50</td>
                                    <td class="cell-num">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>Moves learnt on evolution</h3>
                    <p class="text-small"><em>Beedrill</em> learns the following moves when it evolves in Pokémon Ultra
                        Sun &amp; Ultra Moon (regardless of level).</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="string" data-sort-dir="asc">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/twineedle"
                                            title="View details for Twineedle">Twineedle</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">25</td>
                                    <td class="cell-num">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>Egg moves</h3>
                    <p><em>Beedrill</em> does not learn any moves by breeding in Pokémon Ultra Sun &amp; Ultra Moon.</p>
                    <h3>Move Tutor moves</h3>
                    <p class="text-small"><em>Beedrill</em> can be taught these attacks in Pokémon Ultra Sun &amp; Ultra
                        Moon from move tutors (<a href="/mechanics/move-tutors#tutor-usum">details</a>):</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="string" data-sort-dir="asc">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/bug-bite"
                                            title="View details for Bug Bite">Bug Bite</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/defog"
                                            title="View details for Defog">Defog</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/drill-run"
                                            title="View details for Drill Run">Drill Run</a></td>
                                    <td class="cell-icon"><a class="type-icon type-ground"
                                            href="/type/ground">Ground</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">95</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/electroweb"
                                            title="View details for Electroweb">Electroweb</a></td>
                                    <td class="cell-icon"><a class="type-icon type-electric"
                                            href="/type/electric">Electric</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">55</td>
                                    <td class="cell-num">95</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/endeavor"
                                            title="View details for Endeavor">Endeavor</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/giga-drain"
                                            title="View details for Giga Drain">Giga Drain</a></td>
                                    <td class="cell-icon"><a class="type-icon type-grass" href="/type/grass">Grass</a>
                                    </td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">75</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/knock-off"
                                            title="View details for Knock Off">Knock Off</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">65</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/laser-focus"
                                            title="View details for Laser Focus">Laser Focus</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/snore"
                                            title="View details for Snore">Snore</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">50</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/tailwind"
                                            title="View details for Tailwind">Tailwind</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/throat-chop"
                                            title="View details for Throat Chop">Throat Chop</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3>Pre-evolution moves</h3>
                    <p class="text-small">These moves can only be learned in Pokémon Ultra Sun &amp; Ultra Moon by a
                        previous evolution of <em>Beedrill</em>. Check the respective Pokédex for the exact details.</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="string" data-sort-dir="asc">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                    <th>
                                        <div class="sortwrap">Method</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/bug-bite"
                                            title="View details for Bug Bite">Bug Bite</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                    <td class="text-small">Level up</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/harden"
                                            title="View details for Harden">Harden</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                    <td class="text-small">Level up</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/harden"
                                            title="View details for Harden">Harden</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                    <td class="text-small">Evolution</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/iron-defense"
                                            title="View details for Iron Defense">Iron Defense</a></td>
                                    <td class="cell-icon"><a class="type-icon type-steel" href="/type/steel">Steel</a>
                                    </td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                    <td class="text-small">Move tutor</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/poison-sting"
                                            title="View details for Poison Sting">Poison Sting</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">15</td>
                                    <td class="cell-num">100</td>
                                    <td class="text-small">Level up</td>
                                </tr>
                                <tr>
                                    <td class="cell-name"><a class="ent-name" href="/move/string-shot"
                                            title="View details for String Shot">String Shot</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">95</td>
                                    <td class="text-small">Level up</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="grid-col span-lg-6">
                    <h3>Moves learnt by TM</h3>
                    <p class="text-small"><em>Beedrill</em> is compatible with these Technical Machines in Pokémon Ultra
                        Sun &amp; Ultra Moon:</p>
                    <div class="resp-scroll">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th class="sorting sorting-asc" data-sort="int" data-sort-dir="asc">
                                        <div class="sortwrap">TM</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Move</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Type</div>
                                    </th>
                                    <th class="sorting" data-sort="string">
                                        <div class="sortwrap">Cat.</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Power</div>
                                    </th>
                                    <th class="sorting" data-sort="int" data-blanks="1">
                                        <div class="sortwrap">Acc.</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm06" title="TM06">06</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/toxic"
                                            title="View details for Toxic">Toxic</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">90</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm09" title="TM09">09</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/venoshock"
                                            title="View details for Venoshock">Venoshock</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">65</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm10" title="TM10">10</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/hidden-power"
                                            title="View details for Hidden Power">Hidden Power</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm11" title="TM11">11</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/sunny-day"
                                            title="View details for Sunny Day">Sunny Day</a></td>
                                    <td class="cell-icon"><a class="type-icon type-fire" href="/type/fire">Fire</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm15" title="TM15">15</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/hyper-beam"
                                            title="View details for Hyper Beam">Hyper Beam</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">150</td>
                                    <td class="cell-num">90</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm17" title="TM17">17</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/protect"
                                            title="View details for Protect">Protect</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm19" title="TM19">19</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/roost"
                                            title="View details for Roost">Roost</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm21" title="TM21">21</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/frustration"
                                            title="View details for Frustration">Frustration</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm22" title="TM22">22</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/solar-beam"
                                            title="View details for Solar Beam">Solar Beam</a></td>
                                    <td class="cell-icon"><a class="type-icon type-grass" href="/type/grass">Grass</a>
                                    </td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">120</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm27" title="TM27">27</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/return"
                                            title="View details for Return">Return</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm31" title="TM31">31</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/brick-break"
                                            title="View details for Brick Break">Brick Break</a></td>
                                    <td class="cell-icon"><a class="type-icon type-fighting"
                                            href="/type/fighting">Fighting</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">75</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm32" title="TM32">32</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/double-team"
                                            title="View details for Double Team">Double Team</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm36" title="TM36">36</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/sludge-bomb"
                                            title="View details for Sludge Bomb">Sludge Bomb</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">90</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm40" title="TM40">40</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/aerial-ace"
                                            title="View details for Aerial Ace">Aerial Ace</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num num-infinity" data-sort-value="101">∞</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm42" title="TM42">42</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/facade"
                                            title="View details for Facade">Facade</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">70</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm44" title="TM44">44</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/rest"
                                            title="View details for Rest">Rest</a></td>
                                    <td class="cell-icon"><a class="type-icon type-psychic"
                                            href="/type/psychic">Psychic</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm45" title="TM45">45</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/attract"
                                            title="View details for Attract">Attract</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm46" title="TM46">46</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/thief"
                                            title="View details for Thief">Thief</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm48" title="TM48">48</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/round"
                                            title="View details for Round">Round</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm54" title="TM54">54</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/false-swipe"
                                            title="View details for False Swipe">False Swipe</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">40</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm59" title="TM59">59</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/brutal-swing"
                                            title="View details for Brutal Swing">Brutal Swing</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">60</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm62" title="TM62">62</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/acrobatics"
                                            title="View details for Acrobatics">Acrobatics</a></td>
                                    <td class="cell-icon"><a class="type-icon type-flying"
                                            href="/type/flying">Flying</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">55</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm66" title="TM66">66</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/payback"
                                            title="View details for Payback">Payback</a></td>
                                    <td class="cell-icon"><a class="type-icon type-dark" href="/type/dark">Dark</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">50</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm68" title="TM68">68</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/giga-impact"
                                            title="View details for Giga Impact">Giga Impact</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">150</td>
                                    <td class="cell-num">90</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm75" title="TM75">75</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/swords-dance"
                                            title="View details for Swords Dance">Swords Dance</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm81" title="TM81">81</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/x-scissor"
                                            title="View details for X-Scissor">X-Scissor</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm83" title="TM83">83</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/infestation"
                                            title="View details for Infestation">Infestation</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="special"
                                        data-filter-value="special"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-special.png" width="30"
                                            height="20" alt="Special" title="Special" loading="lazy"></td>
                                    <td class="cell-num">20</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm84" title="TM84">84</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/poison-jab"
                                            title="View details for Poison Jab">Poison Jab</a></td>
                                    <td class="cell-icon"><a class="type-icon type-poison"
                                            href="/type/poison">Poison</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">80</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm87" title="TM87">87</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/swagger"
                                            title="View details for Swagger">Swagger</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">85</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm88" title="TM88">88</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/sleep-talk"
                                            title="View details for Sleep Talk">Sleep Talk</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm89" title="TM89">89</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/u-turn"
                                            title="View details for U-turn">U-turn</a></td>
                                    <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                                    <td class="cell-icon text-center" data-sort-value="physical"
                                        data-filter-value="physical"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-physical.png" width="30"
                                            height="20" alt="Physical" title="Physical" loading="lazy"></td>
                                    <td class="cell-num">70</td>
                                    <td class="cell-num">100</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm90" title="TM90">90</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/substitute"
                                            title="View details for Substitute">Substitute</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                                <tr>
                                    <td class="cell-num"><a href="/item/tm100" title="TM100">100</a></td>
                                    <td class="cell-name"><a class="ent-name" href="/move/confide"
                                            title="View details for Confide">Confide</a></td>
                                    <td class="cell-icon"><a class="type-icon type-normal"
                                            href="/type/normal">Normal</a></td>
                                    <td class="cell-icon text-center" data-sort-value="status"
                                        data-filter-value="status"><img class="img-fixed"
                                            src="https://img.pokemondb.net/images/icons/move-status.png" width="30"
                                            height="20" alt="Status" title="Status" loading="lazy"></td>
                                    <td class="cell-num">—</td>
                                    <td class="cell-num">—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h3>Transfer-only moves</h3>
            <p class="text-small"><em>Beedrill</em> can only learn these moves in previous generations. It must be
                taught the moves in the appropriate game and then transferred to Pokémon Ultra Sun &amp; Ultra
                Moon.<br><em class="text-muted">Note: Generation 1 and 2 refer to the 3DS Virtual Console titles, not
                    the physical cartridges.</em></p>
            <div class="resp-scroll">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th class="sorting sorting-asc" data-sort="string" data-sort-dir="asc">
                                <div class="sortwrap">Move</div>
                            </th>
                            <th class="sorting" data-sort="string">
                                <div class="sortwrap">Type</div>
                            </th>
                            <th class="sorting" data-sort="string">
                                <div class="sortwrap">Cat.</div>
                            </th>
                            <th class="sorting" data-sort="int" data-blanks="1">
                                <div class="sortwrap">Power</div>
                            </th>
                            <th class="sorting" data-sort="int" data-blanks="1">
                                <div class="sortwrap">Acc.</div>
                            </th>
                            <th>
                                <div class="sortwrap">Method</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/air-cutter"
                                    title="View details for Air Cutter">Air Cutter</a></td>
                            <td class="cell-icon"><a class="type-icon type-flying" href="/type/flying">Flying</a></td>
                            <td class="cell-icon text-center" data-sort-value="special" data-filter-value="special"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-special.png"
                                    width="30" height="20" alt="Special" title="Special" loading="lazy"></td>
                            <td class="cell-num">60</td>
                            <td class="cell-num">95</td>
                            <td class="text-small">Generation 4 — Move tutor</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/bide"
                                    title="View details for Bide">Bide</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">—</td>
                            <td class="text-small">Generation 1 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/captivate"
                                    title="View details for Captivate">Captivate</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 4 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/curse"
                                    title="View details for Curse">Curse</a></td>
                            <td class="cell-icon"><a class="type-icon type-ghost" href="/type/ghost">Ghost</a></td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">—</td>
                            <td class="text-small">Generation 2 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/cut"
                                    title="View details for Cut">Cut</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">50</td>
                            <td class="cell-num">95</td>
                            <td class="text-small">Generation 6 — HM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/double-edge"
                                    title="View details for Double-Edge">Double-Edge</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">120</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 3 — Move tutor</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/endure"
                                    title="View details for Endure">Endure</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">—</td>
                            <td class="text-small">Generation 4 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/flash"
                                    title="View details for Flash">Flash</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 6 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/fury-cutter"
                                    title="View details for Fury Cutter">Fury Cutter</a></td>
                            <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">40</td>
                            <td class="cell-num">95</td>
                            <td class="text-small">Generation 4 — Move tutor</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/mega-drain"
                                    title="View details for Mega Drain">Mega Drain</a></td>
                            <td class="cell-icon"><a class="type-icon type-grass" href="/type/grass">Grass</a></td>
                            <td class="cell-icon text-center" data-sort-value="special" data-filter-value="special"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-special.png"
                                    width="30" height="20" alt="Special" title="Special" loading="lazy"></td>
                            <td class="cell-num">40</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 1 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/mimic"
                                    title="View details for Mimic">Mimic</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">—</td>
                            <td class="text-small">Generation 3 — Move tutor</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/natural-gift"
                                    title="View details for Natural Gift">Natural Gift</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 4 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/ominous-wind"
                                    title="View details for Ominous Wind">Ominous Wind</a></td>
                            <td class="cell-icon"><a class="type-icon type-ghost" href="/type/ghost">Ghost</a></td>
                            <td class="cell-icon text-center" data-sort-value="special" data-filter-value="special"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-special.png"
                                    width="30" height="20" alt="Special" title="Special" loading="lazy"></td>
                            <td class="cell-num">60</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 4 — Move tutor</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/reflect"
                                    title="View details for Reflect">Reflect</a></td>
                            <td class="cell-icon"><a class="type-icon type-psychic" href="/type/psychic">Psychic</a>
                            </td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">—</td>
                            <td class="text-small">Generation 1 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/rock-smash"
                                    title="View details for Rock Smash">Rock Smash</a></td>
                            <td class="cell-icon"><a class="type-icon type-fighting" href="/type/fighting">Fighting</a>
                            </td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">40</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 6 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/secret-power"
                                    title="View details for Secret Power">Secret Power</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">70</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 6 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/silver-wind"
                                    title="View details for Silver Wind">Silver Wind</a></td>
                            <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                            <td class="cell-icon text-center" data-sort-value="special" data-filter-value="special"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-special.png"
                                    width="30" height="20" alt="Special" title="Special" loading="lazy"></td>
                            <td class="cell-num">60</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 4 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/skull-bash"
                                    title="View details for Skull Bash">Skull Bash</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">130</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 1 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/struggle-bug"
                                    title="View details for Struggle Bug">Struggle Bug</a></td>
                            <td class="cell-icon"><a class="type-icon type-bug" href="/type/bug">Bug</a></td>
                            <td class="cell-icon text-center" data-sort-value="special" data-filter-value="special"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-special.png"
                                    width="30" height="20" alt="Special" title="Special" loading="lazy"></td>
                            <td class="cell-num">50</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 6 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/sweet-scent"
                                    title="View details for Sweet Scent">Sweet Scent</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="status" data-filter-value="status"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-status.png"
                                    width="30" height="20" alt="Status" title="Status" loading="lazy"></td>
                            <td class="cell-num">—</td>
                            <td class="cell-num">100</td>
                            <td class="text-small">Generation 2 — TM</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/swift"
                                    title="View details for Swift">Swift</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="special" data-filter-value="special"><img
                                    class="img-fixed" src="https://img.pokemondb.net/images/icons/move-special.png"
                                    width="30" height="20" alt="Special" title="Special" loading="lazy"></td>
                            <td class="cell-num">60</td>
                            <td class="cell-num num-infinity" data-sort-value="101">∞</td>
                            <td class="text-small">Generation 4 — Move tutor</td>
                        </tr>
                        <tr>
                            <td class="cell-name"><a class="ent-name" href="/move/take-down"
                                    title="View details for Take Down">Take Down</a></td>
                            <td class="cell-icon"><a class="type-icon type-normal" href="/type/normal">Normal</a></td>
                            <td class="cell-icon text-center" data-sort-value="physical" data-filter-value="physical">
                                <img class="img-fixed" src="https://img.pokemondb.net/images/icons/move-physical.png"
                                    width="30" height="20" alt="Physical" title="Physical" loading="lazy"></td>
                            <td class="cell-num">90</td>
                            <td class="cell-num">85</td>
                            <td class="text-small">Generation 1 — TM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require __DIR__ . '/../pages/partials/footer.php';
?>