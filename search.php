
 <?php

   include('connection.php');
   
   
   
   
   
/*if (!isset($_POST['search'])){
	 //header("Location:detail.php");
}
	 $search_sql="SELECT * FROM reg WHERE user_name LIKE '%".$_POST['search']."%'";

     $search_query=mysql_query($search_sql);
    if(mysql_num_rows($search_query)!=0){
     $search_rs=  mysql_fetch_array($search_query);
	}  */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>signup form</title>
<link rel = "stylesheet" type="text/css" href="style.css"/>
</head>


<body>
<h2>search results</h2>


<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Phone</th></tr>



 <?php
/*if(mysql_num_rows($search_query)!=0){
	do{ ?>
    <p><?php echo $search_rs['user_name']; ?></p>
    
    <?php } while($search_rs=mysql_fetch_assoc($search_query));

} else{
	
	echo "no result found";
}
  */
  
  if(isset($_GET['submit']))
  {
	  
	  $name = $_GET['search'];
	  
	   
	  //if($name!='true'){
		  
	//	  echo'please enter keyword to search';
	//  }
		  //exit;
		  
		  
	 $query = "SELECT * FROM reg where user_name = '$name' OR user_email='$name' OR id ='$name' ";
	 $result = mysql_query($query);
	  
	 
	 
	 
	 //$r=mysql_fetch_array($result);
	
	  while($r=mysql_fetch_assoc($result))
	  {
		  
		 // if($r!=""){ echo 'record not found'; exit;} 
		 ?>
       
		 <tr>
         <td><?php echo $r['id'];?></td>
         <td><?php echo $r['user_name'];?></td>
          <td><?php echo $r['user_email'];?></td>
         <td><?php echo $r['user_pass'];?></td>
          <td><?php echo $r['user_address'];?></td> 
           <td><?php echo $r['user_phone'];?></td>
    </tr>
		 <?php }
	}
  
  
  
  ?>
  </table>
  
 <a href="detail.php" style="text-decoration:none;"><h2>Back to detail page</h2> </a>

</body>
</html>














