
<?php 

require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/db/productions.php";

?>

<!-- $avatar = new Production("Avatar", "english - EN", "8.5");
var_dump($avatar);

$titanic = new Production("Titanic", "english - EN", "8");
var_dump($titanic); -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php foreach ($productions as $production) : ?>
        <ul>
            <li>
                <b>Titolo:</b>
                <?= $production->title ?>
            </li>
            <li>
                <b>Lingua:</b>
                <?= $production->language ?>
            </li>
            <li>
                <b>Voto:</b>
                <?= $production->vote ?>
            </li>
            <li>
                <b>Genere:</b>
                <?= $production->genre->name ?>
            </li>
            <li>
                <b>Descrizione:</b>
                <?= $production->genre->description ?>
            </li>
            <?php if ($production instanceof Movie): ?>
                <li>
                    <b>Profitti:</b>
                    <?= $production->profits ?>
                </li>
                <li>
                    <b>Durata:</b>
                    <?= $production->duration ?>
                </li>
            <?php elseif ($production instanceof TvSerie): ?>
                <li>
                    <b>Stagioni:</b>
                    <?= $production->seasons ?>
                </li>
                <li>
                    <b>Episodi/Stagione:</b>
                    <?= $production->episodes ?>
                </li>
            <?php endif; ?>
        </ul>
        <hr>
    <?php endforeach; ?>
</body>
</html>