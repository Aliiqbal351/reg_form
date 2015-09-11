
<?php
//error_reporting(E_ALL);
include("connection.php");
//extract($_REQUEST);


 //echo    $name = $_POST["username"];
//exit;

if (isset($_POST['submit'])){


//echo'dffgs'; exit;



     //print_r($_POST); 
      $name = $_POST["username"];
      $email = $_POST["email"];
       $password = $_POST["password"];
       $address = $_POST["address"];
       $phone = $_POST["phone"];

  if($name != " " && $email != " " && $password != " " && $address !=""  && $phone !="") {

 $sql= "INSERT INTO reg (user_name , user_email , user_pass , user_address , user_phone) VALUES ('$name' ,'$email' , '$password' ,'$address', '$phone')";

//mysqli_query($sql);
mysql_query($sql);
header("Location:detail.php");
}else
{
	echo "data cannot be inserted , please fill all fields";
	
}
}
     //exit;
//echo "data inserted succfuly";
?>