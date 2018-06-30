<?php
require "BD.php";
$cal=mysqli_query($connection,"SELECT `login` FROM `user`");
$arr=mysqli_fetch_assoc($cal);
unset($arr);
header("Location:index.php");
?>