<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Modules/acceuil.css">
    <link rel="stylesheet" href="Style/Base/reset.css">
    <link rel="stylesheet" href="Style/Base/base.css">
    <title>Document</title>
</head>
<body>
    <?php include("header_view.php") ?>
    <div class = "content">
        </div class = "body_center">
            <div class = "banner">
                <div class = "top-left">
                    <h1 style="float: right; margin-top: 45px;"><?= $data["nom_conf"] ?></h1>
                </div>
                
                <img src="img/banner.jpg" alt="banner conference" class = "img_center">
                <div class = "bottom-right">
                    <h1><?= $data["lieu"] ?></h1>
                </div>
            </div> 
            <div class = "pad">
                <h3 class = "title-header">
                    Description : 
                </h3>
                <p class = "desc_paragraph">
                    <?= $data["description"] ?>   
                </p>
            </div>
            
            <div class = "pad">
                <h1 class = "title-header" >Organisateurs</h1>
                <p class = "desc_paragraph">
                    <?= $data["organisateurs"] ?>
                </p>    
            </div>
            
        <div>
   </div>
    <?php include("footer_view.php") ?>

</body>
</html>