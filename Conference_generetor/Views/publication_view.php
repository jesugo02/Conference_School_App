<DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="Style/Base/reset.css"> -->
        <link rel="stylesheet" href="Style/Base/base.css">
        <link rel="stylesheet" href="Style/Modules/acceuil.css">
        <title>Publication</title>
    </head>
    <body>
        <?php include("header_view.php") ?>
        <div class = "content">
        <h2 style = "color : blue; "> Les publications liées à cette conférence sont     :</h2>
            <?php foreach($data as $data_elem){ ?>
                <div class = "desc_paragraph">
                    <h3><span style = "font-size : 25px">Titre :</span>  <?= $data_elem["titre"] ?></h3>
                    <p class = "desc_paragraph"> <?= $data_elem["contenu"] ?></p>
                </div>
            <?php } ?>
            <?php include("footer_view.php")?>
        </div>
        
    </body>
</html>