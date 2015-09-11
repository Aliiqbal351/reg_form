
<?php
   
     include("connection.php");
	 error_reporting(E_ALL);
	 if(isset($_GET['edit']))
	 {
		 
	   $id = $_GET['edit'];
		  $select_user = "SELECT * FROM reg where id ='$id' ";
		 $result = mysql_query($select_user);
		
		 
		 $r = mysql_fetch_array($result);
		
		
		 }

       if (isset($_POST['update']))
	   { 
	   
	    $id = $_POST["id"];
	    $name = $_POST["username"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $address = $_POST["address"];
       $phone = $_POST["phone"];
	$updated = "UPDATE reg set user_name ='$name' , user_email='$email' , user_pass='$password' , user_address='$address' , user_phone='$phone'  where id = '$id'  ";
		  
		   $result = mysql_query($updated);
		   mysql_fetch_array($result);
		   header('Location:detail.php');
		   
		   }

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="edit.php" method="post">
<input type="hidden" name="id"   value = "<?php echo $r['0'];?>"  />   
Name: <input type="text" name="username"  value = "<?php echo $r['1'];?>"   /> <br />
Email: <input type="email" name="email"   value = "<?php echo $r['2'];?>"  /> <br />
Password: <input type="password" name="password"    value = "<?php echo $r['3'];?>" /> <br />
Address: <input type="text" name="address"   value = "<?php echo $r['4'];?>"  /> <br />
Phone: <input type="text" name="phone"   value = "<?php echo $r['5'];?>"  /> <br />


<input type="submit" value="Update" name=" update"  /> <br />

</form>

</body>
</html>