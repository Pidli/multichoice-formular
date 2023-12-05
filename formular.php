<?php
//vytahnul jsme si nejake barva z databaze
//moje tabulka barva ma 3 sloupecky (primarni klic, nazev a kategorie)
//ne vsechny sloupecky vyuzijme ve formulari
$poleBarev = array(
    [
        "primarniKlic" => 77,
        "nazev" => "Červená",
        "kategorie" => "standart"
    ],
    [
        "primarniKlic" => 32,
        "nazev" => "Modrá",
        "kategorie" => "standart"
    ],
    [
        "primarniKlic" => 5,
        "nazev" => "Zelená",
        "kategorie" => "standart"
    ],
    [
        "primarniKlic" => 20,
        "nazev" => "Rúžová",
        "kategorie" => "premium"
    ],
    [
        "primarniKlic" => 17,
        "nazev" => "Černa",
        "kategorie" => "standart"
    ],
    [
        "primarniKlic" => 90,
        "nazev" => "Fialová",
        "kategorie" => "premium"
    ],
    [
        "primarniKlic" => 72,
        "nazev" => "Oranžová",
        "kategorie" => "premium"
    ]
);

//zpracovani formulare
if(array_key_exists("anketa-submit", $_POST)) {
    $jmeno = $_POST["jmeno"];
    $poleZvolenychBarev = $_POST["barvy"];

    var_dump($jmeno);
    var_dump($poleZvolenychBarev);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    <h1>Formular</h1>



    <form action="" method="post">
        <label for="">Vase jmeno:</label>
        <input type="text" name="jmeno" id="">
        <br>
        <p>Vyberte barvy, ktere se vám líbí</p>
        <?php
        //zde cklyem vypisuju label a input pro kazdou barvu
        //for a id me nezajima, ale vytvoril jsem si id v kombinaci slova input s indexem
        //dulezite je hlavne aby name byl ve tvaru name='kocka[]'
        //dulezite je dat kazdemu checkboxu value
        //uzivatel muze zaskrnout kolik barve bude chtit
        foreach ($poleBarev AS $index => $barva) {
            echo "<label for='input-$index'>{$barva["nazev"]}</label>";
            echo "<input type='checkbox' name='barvy[]' id='input-$index' value='{$barva["primarniKlic"]}'>";
            echo "<br>";
        }
        ?>
        <input type="submit" name="anketa-submit" value="Odeslat">
    </form>
</body>
</html>
