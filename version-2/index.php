<!DOCTYPE html>
<html lang="en">

<head>
    <title>Convertir un fichier en JSON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main>
        <section>
            <form action="telechargement.php" name="form" method="post" enctype="multipart/form-data">
                <label for="fileType">Choisissez le type de fichier :</label>
                <select name="fileType" id="fileType">
                    <?php
                    require_once 'class/Choice.php';
                    $choice = new Choice();

                    foreach ($choice->getOptions() as $option) {
                        echo "<option value='$option'>$option</option>";
                    }
                    ?>
                </select>
                <input type="file" name="file" required />
                <input type="submit" name="submit" value="Convertir en JSON" />
            </form>
        </section>
    </main>
</body>

</html>
