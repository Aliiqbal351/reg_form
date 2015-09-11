




<?php
include("connection.php");  


if (isset($_GET['del']))
{

 $id = $_GET['del'];

 $sql = "DELETE FROM reg where id ='$id'"; // echo $sql = "DELETE FROM reg where id ='$id'";  for checking in db in sql
 mysql_query($sql);
}
 //header("Location:detail.php");
?>

<!-- the upper code for delete    -->


<?php





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 thansitional//EN" "http://www.w3.org/th/xhtml1/DTD/xhtml1-thansitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>detailed page</title>
<link rel = "stylesheet" type="text/css" href="style.css"/>
</head>

<body>


<form action="search.php" method="get"> 
<input type="text" name="search"  placeholder="enter name or email or id" style = "width:250px; height:30px; font-size:20px;" />

<input type="submit" value="search" name="submit" style="height:30px; width:60px;"/>
</form>

<table border="1px">

<thead><h1>Detail of signed up users</h1>
</thead>
<tr>
<th>id</th><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Phone</th><th>Action</th>
</tr>


<?php
$page ='';

if(isset($_GET['page'])){
 $page = $_GET['page']; 
}

if($page=="" || $page=="1")
{
	$page1 = 0;
	}
else
{
	$page1 =($page*5)-5;
	}

 $select_user="SELECT * FROM reg LIMIT $page1,5 ";

$result=mysql_query($select_user);

while($r=mysql_fetch_array($result)){

?>

<tr>

<td><?php echo $r['id'];?></td> 
 <td><?php echo $r['user_name'];?></td>
  <td><?php echo $r['user_email'];?></td>
   <td><?php echo $r['user_pass'];?></td>
    <td><?php echo $r['user_address'];?></td> 
    <td><?php echo $r['user_phone'];?></td>
    <td><a href="edit.php?edit=<?php echo $r['id'];?>"> Edit</a>  <a href="detail.php?del=<?php echo $r['id'];?> "> Delete</a></td>
</tr>


<?php }

// for conting rows

 

$result1=mysql_query("SELECT * FROM reg  ");
$cou = mysql_num_rows($result1);
$a = $cou/5;
$a = ceil($a);
//echo "$a"; num of reords 

for($b=1; $b<=$a; $b++)
{

  ?> <a href="detail.php?page= <?php echo $b;?> " style="text-decoration:none;" > <?php echo $b." "  ?> </a> <?php
	
}

?>






</table>
<a href="index.php"><h2>Add New </h2></a>



</body>
</html>