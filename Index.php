
<?php
include("connection.php");

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>signup form</title>
<link rel = "stylesheet" type="text/css" href="style.css"/>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
      
      <script type="text/javascript">
   
 /*  $(document).ready(function() {
	  $(this).click(function(){
		
     if( $(this).val().length === 0 ) {
	 
	 $(".warning").show();
	 
	  // $(".input").parents('p').show('.warning');
	
	}
		 // if( $(this).val().length === 0 ) { 
		// else {	$(".warning").hide();
		

	//	}
		  

   });
   
     });  */
</script>



<form id ="form1" action="inert_detail.php" method="post">

Name: <input type="text" name="username" class ="input"/> <span class="warning">this is required </span> <br />

Email: <input type="email" name="email" class ="input" /><span class="warning">this is required </span> <br />

Password: <input type="password" name="password" class ="input" /> <span class="warning">this is required </span><br />

Address: <input type="text" name="address" class ="input" /> <span class="warning">this is required </span><br />

Phone: <input type="text" name="phone" class ="input" /> <span class="warning">this is required </span><br />


<input type="submit" value="submit" name="submit" /> <br />



</form>


<a href="function.php"><h3>function page here</h3></a><br/>



</body>
</html>