<DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- <link rel="stylesheet" href="Style/Base/reset.css"> -->
         <link rel="stylesheet" href="Style/Modules/acceuil.css">
         <link rel="stylesheet" href="Style/Base/base.css">

         <title>Inscription</title>
    </head>
    <body>
        <?php include("header_view.php") ?>
        <div class = "content">
            <form action="index.php?action=inscription_view" method="post">
                <div>
                    <label for="lastname">Nom</label><br>
                    <input id = "" name = "lastname" type="text"><br>
                    <span> <?php echo $lastname_Err;?></span><br>
                </div>

                <div>
                    <label for="firstname">Prénoms</label><br>
                    <input id = "firstname" name = "firstname" type="text"><br>
                    <span> <?php echo $firstname_Err;?></span><br>
                </div>

                <div>
                    <label for="email">Email</label><br>
                    <input  id = "email" name = "email" type="email"><br>
                    <span> <?php echo $email_Err;?></span><br>
                </div>

                <input type="submit" value="Demander Inscription"><br>
            </form>
        </div>
        
        <?php include("footer_view.php") ?>
    </body>
</html>