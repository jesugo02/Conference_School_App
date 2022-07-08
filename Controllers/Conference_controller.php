<?php
require_once("Models/conference.php");
require_once("Controllers/User_controller.php");
require_once("Models/publication.php");
require_once("Models/activite.php");
require_once("Models/appel_candidature.php");

class Conference_controller{

    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        $check_connection = User_controller::checkLog();

        $active_voir_plus = false;

        require_once("Views/acceuil.php");
    }

    static function acceuil_Controller_Conf($id){
        
        $data_conference = Conference::getConference($id);
        $data = Conference::getAllConference();
        $data_publication = Publication::getPublication($id, 1);
        $data_activite = Activite::getActivite($id, 1);
        $data_appel = Appel::getAppel($id, 1);
        
        // var_dump($data_appel);
        $check_connection = User_controller::checkLog();

        $active_voir_plus = true;
        
        require_once("Views/acceuil.php");
    }

    static function create_Controller(){
        $error_name_conf= "";
        $error_desc_conf= "";
        $error_date_conf= "";
        $error_org_conf= "";
        $error_lieu_conf= "";
        $error_u = "";
        
        $check_connection = User_controller::checkLog();
        
        $data = Conference::getAllConference();

        
        if ($_POST) {
            
            $conference_name = $_POST['nom_conference'];
            $conference_desc = $_POST['desc_conference'];
            $date_conference = $_POST['date_conference'];
            $organisateur = $_POST["organisateur_conference"];
            $lieu = $_POST["lieu_conference"];

            if (empty($conference_name)) {
                $error_name_conf = "*You must have mentionned a conference name !";
            }else if(empty($organisateur)){
                $error_org_conf = "*You must mention organisateur";
            }else if(empty($lieu)){
                $error_lieu_conf = "*Must mention lieu";
            }else if(empty($date_conference)){
                $error_date_conf = "*You must have mentionned the conference d-day !";
            }else if(empty($conference_desc)){
                $error_desc_conf   = "*You must have mentionned the conference description !";
            }else{
                if($check_connection != false)
                    ( new Conference(null, $conference_name, $conference_desc, $date_conference, $organisateur, $lieu) )->createConference($check_connection);
                else
                    $error_u = "*You must connect";           
            }
            
        }

        require_once("Views/create_conference.php");
    }

    static function destruct_Controller($id = null){
        $data = Conference::getAllConference();
        $check_connection = User_controller::checkLog();
        $error = "";
         
            if($id){
                if ($check_connection==false){
                    $error = "Vous n'etes pas connecte";
                }else{
                    $conf_to_delete = Conference::getConference($id);
                    $conf_to_delete->deleteConference();
                    $data = Conference::getAllConference();
                }
            }

        require_once("Views/supprimer.php");
    }

    static function generation_Conference($id){
        $file = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Conference_generetor'.DIRECTORY_SEPARATOR.'env';

        $data = 'USER_HOST = "localhost"'.PHP_EOL.'USER_DBNAME = "Conference"'.PHP_EOL.'USER_USERNAME = "agent"'.PHP_EOL.'USER_PWD = "agent"'.PHP_EOL.'CONFERENCE_TEST = '.$id;

        echo $file."\n";
        echo $data."\n";

        $myfile =fopen($file, "w");


        fwrite($myfile, $data);

        // Enter the name of directory
        $pathdir = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Conference_generetor';

        // var_dump($pathdir);
        
        // Enter the name to creating zipped directory
        $zipcreated = 'NewConference'.$id.'.zip';
        var_dump($zipcreated);
        
        // Create new zip class

        $zip = new ZipArchive;
        var_dump($zip);
        
        if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
            
            // Store the path into the variable
            $dir = opendir($pathdir);
            
            while($file = readdir($dir)) {
                if(is_file($pathdir.$file)) {
                    $zip -> addFile($pathdir.$file, $file);
                }
            }
            $zip ->close();
        }


        // header("Location: index.php");
    }
}