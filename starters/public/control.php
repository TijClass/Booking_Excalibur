<?php include('conection.php'); ?>
<?php
if(isset($_POST['submit']) && isset($_FILES['IMG']) ){
    $IMG =  $_FILES['IMG']['name'];
    $IMG_size =  $_FILES['IMG']['size'];
    $tmp_name =  $_FILES['IMG']['tmp_name'];
    $error =  $_FILES['IMG']['error'];
    
    $TITLE =  $_POST['TITLE'];
    $PAY =  $_POST['PAY'];
    $AREA =  $_POST['AREA'];
    $PRICE =  $_POST['PRICE'];
    $ROOMS =  $_POST['ROOMS'];

    $sql = "INSERT INTO `homes` (`IMG`,`TITLE`,`PAY`,`AREA`,`PRICE`,`ROOMS`)
    VALUES ('$IMG','$TITLE','$PAY','$AREA' ,'$PRICE', '$ROOMS')  ";

if(mysqli_query($con, $sql)){

    header('Location: index.php');
} else{
    echo "err";
}
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>

	</div>

<div class="font-sans">
<a class="nav-link" href="index.php">HOME</a>

    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
              
                <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                    
                    <div>
    
                        <input type="file"  name="IMG" type="text"  class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
        
                    <div class="mt-7">                
                        <input type="text"  name="TITLE" placeholder="TITLE" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>

                    <div class="mt-7">                
                        <input type="text"  name="PAY" placeholder="PAY" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>

                    <div class="mt-7">                
                        <input type="text"  name="AREA" placeholder="AREA" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>
                    <div class="mt-7">                
                        <input type="text"  name="PRICE" placeholder="PRICE" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>
                    <div class="mt-7">                
                        <input type="text"  name="ROOMS" placeholder="ROOMS" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>

               
        
                    <div class="mt-7">
                        <div class="flex justify-center items-center ">
                        <input name="submit" type="submit" class="mt-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" value="send">    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>