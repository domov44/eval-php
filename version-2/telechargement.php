<?php
require_once 'class/Convert.php';
require_once 'class/Choice.php';

$convert = new Convert();
$choice = new Choice();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileType = $_POST['fileType'];

    if ($fileType === 'csv') {
        $file = $_FILES['file']['tmp_name'];
        $jsonEncode = $convert->convertCsvToJson($file);
        $newFile = str_replace(".csv", "", $_FILES['file']['name']) . ".json";
    } elseif ($fileType === 'xml') {
        $file = $_FILES['file']['tmp_name'];
        $jsonEncode = $convert->convertXmlToJson($file);
        $newFile = str_replace(".xml", "", $_FILES['file']['name']) . ".json";
    }

    if (file_put_contents("uploads/" . $newFile, $jsonEncode)) {
        echo "<h1>Votre fichier JSON est prêt</h1> 
        <a href='uploads/$newFile' download>Télécharger</a>
        <a href='/eval-php/version-2/index.php'>Convertir un autre fichier</a>";
        exit;
    } else {
        echo "<h1>Il y a eu un problème...</h1>";
    }
} else {
    echo "<h1>Accès non autorisé</h1>";
}
?>

