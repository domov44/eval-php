<?php
require_once 'class/Convert.php';

$convert = new Convert();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Convertir un fichier CSV en JSON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main>
        <section>
            <form action="telechargement.php" name="form" method="post" enctype="multipart/form-data">
                <input type="file" name="file" required />
                <input type="submit" name="submit" value="Convertir en json" />
            </form>
        </section>
        <section>
            <form action="telechargementxml.php" name="form" method="post" enctype="multipart/form-data">
                <input type="file" name="filexml" required />
                <input type="submit" name="submit" value="Convertir en json" />
            </form>
        </section>
    </main>
</body>

</html>