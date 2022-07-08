<?php
    require_once("Models/activite.php");
    require_once("Models/conference.php");
    
    class Activity_controller{
        static public function create_activity_controller(){
            $data = Conference::getAllConference();
            
            $error_name_conf= "";
            $error_type_act= "";
            $error_date_act= "";
            $error_desc_act= "";
            $error_name_act= "";
            
            $error_u = "";

            $check_connection = User_controller::checkLog();

            if ($_POST) {

                $conference_id = $_POST['id_selected'];
		        $nom_activite = $_POST ['nom_activite'];
		        $description_activite = $_POST ['content_activite'];
                $date = $_POST["date_activite"];
                $type_activite =  $_POST["type_activite"];
                
                
                if (empty($conference_id) || $conference_id == "empty") {
                    $error_name_conf = "*You must have selected a conference !";
                }else if(empty($nom_activite)){
                    $error_name_act   = "You must have mentionned an activity name !";
                }else if(empty($type_activite)){
                    $error_type_act = "*Mention type";
                }else if(empty($date)){
                    $error_date_act = "*Must mention date";
                }else if(empty($description_activite)){
                    $error_desc_act = "*You must have mentionned an activity description !";
                }else{
                    if($check_connection != false)
                        ( new Activite(null, $nom_activite, $description_activite, $date, $type_activite) )->createActivite($conference_id);
                    else
                        $error_u = "*You must connect";   
                }
            }
            require_once "Views/create_activity.php";
        }
    }
?> 