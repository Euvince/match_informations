<?php

include_once "config.php";

$equipe1 = $_POST['equipe1'];
$equipe2 = $_POST['equipe2'];
$date = $_POST['date'];
$prono = $_POST['prono'];
$logo_one = $_FILES['logo_one'];
$logo_two = $_FILES['logo_two'];


if(!empty($equipe1) && !empty($equipe2) && !empty($date) && !empty($prono) && !empty($logo_one) && !empty($logo_two)){

    if(isset($_FILES['logo_one']) && isset($_FILES['logo_two'])){
        $logo_name_one = $_FILES['logo_one']['name'];
        $logo_name_two = $_FILES['logo_two']['name'];
        $tmp_name_one = $_FILES['logo_one']['tmp_name'];
        $tmp_name_two = $_FILES['logo_two']['tmp_name'];

        $logo_one_ext = pathinfo($logo_name_one, PATHINFO_EXTENSION);
        $logo_two_ext = pathinfo($logo_name_two, PATHINFO_EXTENSION);

        $logo_one_ext_lc = strtolower($logo_one_ext);
        $logo_two_ext_lc = strtolower( $logo_two_ext);

        $my_array_for_ext = array("jpg", "jpeg", "png");


        if(in_array($logo_one_ext_lc, $my_array_for_ext) AND in_array($logo_two_ext_lc, $my_array_for_ext)){

            $new_logo_one_name = $equipe1. '.'.$logo_one_ext_lc;
            $new_logo_two_name = $equipe2. '.'.$logo_one_ext_lc;

            $logo_one_upload_path = 'images/'.$new_logo_one_name;
            $logo_two_upload_path = 'images/'.$new_logo_two_name;

            move_uploaded_file($tmp_name_one,$logo_one_upload_path);
            move_uploaded_file($tmp_name_two,$logo_two_upload_path);
        }else{
            // Une erreur
        }

        if(isset($new_logo_one_name) && isset($new_logo_two_name)){

            $sql = "INSERT INTO duels(equipe_1, equipe_2, pronostic_match, date_match, logo_1, logo_2) VALUES(?,?,?,?,?,?)";
            $stmt = $connexion->prepare($sql);
            $stmt->execute([$equipe1, $equipe2, $prono, $date, $new_logo_one_name, $new_logo_two_name]);

            header("Location: Formulaire.php");

        }

    }

} 

?>