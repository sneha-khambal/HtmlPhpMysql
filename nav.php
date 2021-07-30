 <?php
 $inserted = false;
 if(isset($_POST['name'])){
 $server = "localhost";
 $username = "root";
 $passward = "";

 $con = mysqli_connect($server,$username,$passward);

 if(!$con){
     die("connection dosen't established" . mysqli_connect_error());
 }
 else{
     echo "connection established";
 }
$name=$_POST['name'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$other=$_POST['other'];

 if(isset($_POST['name']) && isset($_POST['age'])&&isset($_POST['gender'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['other'])){

}

 $sql = "INSERT INTO `trip`.`trip_01` (`name`, `age`, `gender`, `phone`, `email`, `other`, `time`) VALUES
 ( '$name', '$age', '$gender', '$phone', '$email', '$other', CURRENT_TIMESTAMP);";

 if($con->query($sql)== true){
     echo "succesfully inserted";
     $inserted = true;
 }else{
     echo " <br> database is  $sql  <br>   $con->error";
 }
$con->close();

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" index.css">
    <title>php project</title>
    
</head>
<body>
 
  
    <div class="formDetail">
  <span>trip to goa</span>
   <p>fill your details</p>
   <?php
   if($inserted == true){
       echo" <p  class=''successMsg' >you have succesfully filled the form</p>";
   }
   ?>

   <form action="nav.php" method="post">
   <input type="text" name="name" id="name" class="input" placeholder="enter your name">
   <input type="number" name="age" id="age"class="input" placeholder="enter your age">
   <input type="text" name="gender" id="gender"class="input" placeholder="enter yourgender">
   <input type="number" name="phone" id="phone" class="input" placeholder="enter yourphone">
   <input type="email" name="email" id="email" class="input" placeholder="enter your email">
   <textarea name="other" id="other" cols="30" rows="10" class="input" placeholder="enter your name"></textarea>
  <button class="btn">submit</button>
   </form>



</div>

</body>
</html>