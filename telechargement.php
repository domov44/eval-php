<?php
$csvFile = $_FILES['file']['tmp_name'];
$csvBrut = file_get_contents($csvFile, 'r');
$csvSpace = explode("\n", $csvBrut);
$csvContent = array_map("str_getcsv", $csvSpace);
$csvJsonEncode = json_encode($csvContent, JSON_PRETTY_PRINT);
$newFile = str_replace(".csv", "", $_FILES['file']['name']) . ".json";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Téléchargez votre fichier json</title>
</head>
<body>
  <?php
  if (file_put_contents("uploads/" . $newFile, $csvJsonEncode)) {
    echo "  <h1>Votre fichier json est prêt</h1> 
    <a href='uploads/$newFile' download>Télécharger</a>";
  }

  else {
    echo "<h1>Il y'a eu un problème...</h1>";
  }
  ?>
  <a href="/eval-php/index.php">Convertir un autre fichier CSV en JSON</a>
</body>
</html>
