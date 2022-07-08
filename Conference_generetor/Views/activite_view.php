<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Modules/acceuil.css">
    <!-- <link rel="stylesheet" href="Style/Base/reset.css"> -->
    <link rel="stylesheet" href="Style/Base/base.css">

    <title>Document</title>
    <!-- <link rel="stylesheet" href="Style/navbar.css"> -->
    
</head>

<body>

    <?php include "header_view.php"?>
    <div class = "content">
        <main>
            <div>
                <h2 style = "color : blue"> Au cours de cette conference on aura :</h2>
                <ul>
                    <?php foreach($data as $data_cont){ ?>
                            
                        <h3>Nom de l'activite : <?= $data_cont["nom_activite"] ?></h3>
                        <ul>
                            <li> date :<?= $data_cont["date"] ?> </li>
                            <li> lieu :<?= $data_cont["lieu"] ?> </li>
                            <li> type :<?= $data_cont["type"] ?> </li>
                        </ul>
                        <p>
                            <?= $data_cont["description"] ?>
                        </p>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>
    <?php include "footer_view.php" ?>
</body>
</html>