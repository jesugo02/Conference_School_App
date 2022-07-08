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
</head>
<body>
    <?php include("header_view.php") ?>
    <div class = "content">
    <?php foreach($data as $data_elem) {?>
        
        <div>
            <h1 style = "color : blue;">CANDIDATURE POUR INTERVENANTS ET MODÉRATEURS</h1>
            <p style = "text-align: justify; margin-left: 40px; margin-right : 80px">
            <span style ="margin-left: 50px">Les organisateurs de la Conférence</span>  "<strong><?= $data_elem["sujet_appel"]?> </strong>"
                cherchent des intervenants et/ou modérateurs pour participer aux panels sur la "<strong><?= $data_elem["contenu"]?></strong>" et
d'autres sessions de la conférence. Les frais d’inscription et de voyage des participant sélectionnés seront
couverts par l'organisation; ainsi, les participant joueront un rôle essentiel lors de la conférence, en
apportant une nouvelle perspective au programme.
Cette année, dans le souci de "<strong><?= $data_elem["preoccupation_majeure"]?></strong>" Tous les intervanants désirant participer à ce programme devront envoyer eux-mêmes leur candidature, mais pourront faire appel à d’autres organisations ou ressources si nécessaire. Le candidat devra
compter sur le soutien et la référence d’au moins un professionnel.
            </p>
        </div>
    
    <?php }?>
    </div>
    <?php include "footer_view.php" ?>
</body>
</html>