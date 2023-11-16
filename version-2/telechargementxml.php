<?php
$xmlFile = $_FILES['filexml']['tmp_name'];
$xmlBrut = file_get_contents($xmlFile, 'r');
$xmlSpace = explode("\n", $xmlBrut);
$xmlContent = array_map("str_getcsv", $xmlSpace);
$xmlJsonEncode = json_encode($xmlContent, JSON_PRETTY_PRINT);
$newFile = str_replace(".xml", "", $_FILES['filexml']['name']) . ".json";
var_dump($newFile);

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
  if (file_put_contents("uploads/" . $newFile, $xmlJsonEncode)) {
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
