
<?php
include("connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
function myFunction($name , $year){  //functions syntax
	
	
	echo "his name is $name ali and he born in $year.<br/>";
	
	}

myFunction("waqar" , "1994");
myFunction("waqas" , "1994");
myFunction("umair" , "1994");
myFunction("sultan" , "1994");
myFunction("muhabat", "1994" );
myFunction("anwaar" , "1994");

function sum( $a , $b){
	
	$z = $a + $b;
	return $z;
	
}

echo "2 + 3 = ".sum(2 , 3)."<br/>";
echo "4+ 12 = ".sum(4 , 12)."<br/>";
echo "12 + 321 = ".sum(12 , 321);


?>

</body>
</html>