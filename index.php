<?php
$testo = "“War has changed.
It's no longer about nations, ideologies, or ethnicity. It's an endless series of proxy battles, fought by mercenaries and machines.
War--and it's consumption of life--has become a well-oiled machine.
War has changed.
ID-tagged soldiers carry ID-tagged weapons, use ID-tagged gear. Nanomachines inside their bodies enhance and regulate their abilities.
Genetic control, information control, emotion control, battlefield control…everything is monitored and kept under control.
War…has changed.
The age of deterrence has become the age of control, all in the name of averting catastrophe from weapons of mass destruction, and he who controls the battlefield, controls history.
War…has changed.
When the battlefield is under total control, war becomes routine.”";

$toCensure = $_GET["toCensure"];

$censure = '****';

$testo = str_ireplace($toCensure, $censure, $testo)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php echo $testo; ?>
    </p>
    <br>
    <p>
        <?php echo 'La lunghezza del testo è di ' . strlen($testo) . ' caratteri' ?>
    </p>
    <form action="./index.php" method="GET">
        <label for="to-censure">Inserisci una parola da censurare</label>
        <input type="text" name="toCensure" id="to-censure">
        <button type="submit">Invia</button>
    </form>

</body>

</html>