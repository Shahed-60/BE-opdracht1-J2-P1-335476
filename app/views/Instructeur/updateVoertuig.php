<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo $data['title'];
    // var_dump($data['voertuigInfo']);
    ?>
    <?php
    echo $data['voertuigId'];
    ?>
    <form action="" method="post">

        <label for="type">Type:</label><br>
        <input type="text" name="type" id="type" value="<?php echo $data['voertuigInfo'][0]->Type ?>"><br><br>
        <label for="kenteken">Kenteken:</label><br>
        <input type="text" name="kenteken" id="kenteken" value="<?php echo $data['voertuigInfo'][0]->Kenteken ?>"><br><br>
        <label for="brandstof">Brandstof:</label><br>
        <input type="text" name="brandstof" id="brandstof" value="<?php echo $data['voertuigInfo'][0]->Brandstof ?>"><br><br>

        <input type="button" value="Opslaan">

    </form>
</body>

</html>