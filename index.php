<?php
$testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
// METODO 1
$testo_diviso = explode(" ", $testo);
$parola = $_GET["parola"];
$testo_finale = str_replace($parola, "***", $testo);
// METODO 2
// var_dump($testo_diviso);
// $chiave = array_search($parola, $testo_diviso);
// var_dump($chiave);
// $sostituzione = array($chiave => "***");
// $testo_censurato = array_replace($testo_diviso, $sostituzione);
// var_dump($testo_censurato);
// $testo_finale = implode(" ", $testo_censurato);
// var_dump($testo_finale);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Badword</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1> <?php echo $testo_finale ?></h1>
        </div>
    </body>
</html>
