<?php include('conection.php'); ?>
<?php
if(isset($_POST['submit'])){
    $email =  $_POST['email'];

    $sql = "INSERT INTO `subscriber table` (`Email`)
    VALUES ('$email')  ";

if(mysqli_query($con, $sql)){

    header('Location: mailer.php');
} else{
    echo "err";
}
}
?>
<?php
$sql = "SELECT * FROM `subscriber table`"; 
$result = mysqli_query($con,$sql);
?>

<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
    <div class="mt-7">                
        <input type="text"  name="email" placeholder="ROOMS" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">      
        <input name="submit" type="submit" class="mt-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" value="send">    
                     
    </div>
</form>
<?php  while($row = mysqli_fetch_assoc($result)): ?>

<footer class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <p class="ml-1 text-sm">
                        <?php echo $row['Email']; ?>

                        </p>
               
                  
                    
                </footer>
<?php endwhile; ?>
