<?php
include "./conection.php";

if(isset($_POST)){
    $name = $_POST['nom_complet'];
    $email = $_POST['email'];
    $group = $_POST['genre'];



    if($name != ""  && $email != ""&& $group != ""  ){
        $sql = "INSERT INTO contact_agents (`nom_complet`,`email`,`genre`) VALUES ('".$name."','".$email."','".$group."')";
        if (mysqli_query($connect, $sql)) {
            echo mysqli_insert_id($connect);
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }

        mysqli_close($connect);
    }
}
