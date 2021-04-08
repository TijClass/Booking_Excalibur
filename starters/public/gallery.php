<?php
    include "./conection.php";
    $query_gallery1= "SELECT * FROM gallery limit 3";
    $query_gallery2= "SELECT * FROM gallery limit 3 offset 3";
    $query_gallery3= "SELECT * FROM gallery limit 2 offset 6";
    $query_gallery4= "SELECT * FROM gallery limit 2 offset 8";
    $result_gallery1=mysqli_query($connect,$query_gallery1);
    if(!$result_gallery1){
        return ("error, query is:".$result_gallery1.mysqli_connect_error());
    }
    $result_gallery2=mysqli_query($connect,$query_gallery2);
    if(!$result_gallery2){
        return ("error, query is:".$result_gallery2.mysqli_connect_error());
    }
    $result_gallery3=mysqli_query($connect,$query_gallery3);
    if(!$result_gallery3){
        return ("error, query is:".$result_gallery3.mysqli_connect_error());
    }
    $result_gallery4=mysqli_query($connect,$query_gallery4);
    if(!$result_gallery4){
        return ("error, query is:".$result_gallery4.mysqli_connect_error());
    }
    $connect->close();
?>







