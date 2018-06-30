<?
require("BD.php");
if(isset($_POST["reg"])){
$email=$_POST["email"];
$password=$_POST["password"];
$name=$_POST["name"];
$sex=$_POST["radio"];
$number=$_POST["number"];
$country=$_POST["country"];
$surname=$_POST["surname"];
$nice = mysqli_query($connection,"INSERT INTO `user` (`login`,`password`,`sex`,`name`,`surname`,`number`,`country`) VALUES ('$email','$password','$sex','$name','$surname','$number','$country')");
if($nice==0){
	echo "No";
}
else{
	require("index.php");
	echo "<h2 style='margin-top:260px;' class='text-center'>You are registration</h2>";
}
}
?>