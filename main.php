<?php
require "BD.php";
session_start();
$total1=$_SESSION['total'];
$name1=$_SESSION['name'];
$login1=$_SESSION["login"];
if(isset($_POST["save"])){
	$ok=mysqli_query($connection," UPDATE `user` SET `total`='$total1' WHERE `login`='$login1' ");
	$result = mysqli_query($connection,"SELECT * FROM `user` WHERE `login`='$login1'");
	$array=mysqli_fetch_assoc($result);
	$_SESSION["totals"]=$array["total"];
}
?>
<html>
<head>
	<meta charset ="utf-8">
	<title> ItSchool </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel = "stylesheet" type = "text/css" href = "css.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
#user{
  width:307px;
  height:615px;
  display:none;
  position:absolute;
  z-index:3;
  left:149px;
  background:url('image/fon.jpg');
  animation-name:ok;
  animation-duration:1s;
  animation-timing-function:ease;
}
@keyframes ok{
  0%{
    display: none;
  transform: translate(270px);
  }
  100%{
    display:block;
    transform: translate(0px);
  }
}
@keyframes well{
  0%{
    display: none;
  transform: translate(0px);
  }
  100%{
    display:block;
    transform: translate(270px);
  }
}
body{
  z-index:1;
}
</style>
<script type="text/javascript">
function easy(){
	$("#itul").css("display","block");
	$("#itul").css("margin-top",250+"px");
	$("#itul").css("font-size",20+"px");
	$("#itul").css("position","relative");
	$("#itul").css("right",70+"px");
	$("#itul").css("top",-100+"px");
	var a=$("#rescos").html();
	$("#user").css("display","block");
    $("#user").html(a);
    var b= $("#navb2").html();
    var g=$("#navb").replaceWith(b);

}
function result(){
$("#user").animate({'left':'400px'});
$("#navb3").remove();
$(".navbar-header").append("<button type ='button' class ='navbar-toggle' id='navb' onclick='easy()'  style='background:silver'><span class = 'icon-bar' style ='background:white'> </span><span class = 'icon-bar' style ='background: white;'> </span><span class = 'icon-bar' style ='background: white'> </span></button>");
setTimeout(function(){window.location="main.php";},0600);
}
	</script>
</head>
<body style = "background:url('image/fon.jpg')">
<nav class = "navbar navbar-default" style = "background:url('image/fon.jpg');border:none">
	<div class = "navbar-header" >
     <button type = "button" class = "navbar-toggle" id="navb" onclick="easy()"  style="background:silver">
      <span class = "icon-bar" style = "background:white"> </span>
      <span class = "icon-bar" style = "background: white;"> </span>
      <span class = "icon-bar" style = "background: white"> </span>
     </button>
     <a href = "home.php" class = "navbar-brand" id="it" style = "color:white;margin-bottom:3px"> <img src="image/itSchool.png" style="height:25px"/> </a>
	</div>
	<div class = "collapse navbar-collapse" id ="rescos">
      <ul  class = "nav navbar-nav" id="itul" style = "margin-left:65px;position:relative;top:10px;font-family:Solitaz">
       <li style="margin-left:20px;" id="a1" ><a href= "home.php" id="home" style ="color:white;margin:none;font-family:Solitaz">Главная </a></li> 
       <li style="margin-left:20px" id="a1"><a href ="video.php" id="video" style ="color:white;"> Видео-уроки </a></li>
       <li style="margin-left:20px;" id="a2" class="dropdown"> 
       	<a href = "books.php" id="books" data-toggle="dropdown" style ="color:white" >Книги<i class="caret"></i> </a>
       		<ol class="dropdown-menu" style="background:url('image/fon.jpg')">
       			<li ><a href="books.php" style="text-decoration: none;color:white;font-family:Stolz">Программирование </a></li>
       			<li ><a href="books.php" style="text-decoration: none;color:white;font-family:Stolz">Дизайн </a></li>
       			<li ><a href="books.php" style="text-decoration: none;color:white;font-family:Stolz">Английский язык </a></li>
       		</ol>
       </li>
       <li style="margin-left:20px;" id="a3"> <a href= ""  style ="color:white">Школьникам </a></li>
       <li style="margin-left:20px;" id="a1"><a href ="" id = "student" style ="color:white"> Студентам </a></li>
        <li style="margin-left:20px;" id="a1"><a href ="main.php" id = "student" style ="color:white">Личный кабинет</a></li>
       <li style="margin-left:40px;color:#9900cc;opacity:0;"><pre>                </pre></li>
       <li style="position: relative;left:60px"><a href ="logout.php" name="exit" style ="color:white"><i class="material-icons" style="margin-bottom:15px">&#xe879;</i> </a></li>
      </ul>
	</div>
	<div id="user"> </div>
	<div style="display:none;" id="navb2"><button onclick="result()" id="navb3" style="position: relative;left:190px;top:5px;background:none;border:none;border-radius:30px"><span class="glyphicon glyphicon-chevron-right" style="font-size:35px;display:block;color:white"></span></button></div>
</nav>
<div class="row">
	<div class="col-lg-2" style="background:url('image/fon.jpg')">
	</div>
<div class="col-lg-8" style="background: white;">
	<center><h2>Личный кабинет </h2></center>
	<div class="col-lg-3" >
	</div>
<div class="col-lg-3" style="border:2px solid silver;background: #5b5bff;position:relative;left:50px;width:270px">
	<img src="http://s1.iconbird.com/ico/2013/9/450/w256h2561380453931User256x25632.png" style="width:150px;height:200px;z-index:1;position:relative;left:40px"/>
	<h3 style="color:black;position:relative;left:19px;font-family:Stolzl-li"><?=$_SESSION["name"]." ".$_SESSION["surname"]?></h3>
</div>
<div class="col-lg-4" style="color:white;position: relative;left:55px;top:30px;z-index: 2">
<p  style="font-family:Comic Sans MS;font-size:30px;color:red">Результаты: </p>
<h4 style="color:#00e600;opacity:0.9">Веб-программирование </h4>
<ul style="color:#00e600;opacity:0.9">
	<li>HTML:<?=$_SESSION["totals"]?> баллов</li>
	<li>CSS</li>
	<li>Javascript</li>
</ul>
	</div>
	<img src="image/far.png" style="width:300px;height: 250px;position: relative;left:30px;bottom: 150px;z-index:1;"/>
</div>
</div>
</body>
<footer class ="container-fluid" style = "color:white;margin-top:15px;background:url('image/fon.jpg')">
<p style = "text-align: right;position:relative;top:40px;"> Все права защищены &copy </p>
<a href = "https://vk.com/feed" ><img src = "https://pbs.twimg.com/profile_images/884348453744201728/Yn5UDIeY_400x400.jpg " style = "width:35px;height: 35px;border-radius:17px" /></a>
<a href = "https://ru-ru.facebook.com/" ><img src = "http://blog.addthiscdn.com/wp-content/uploads/2015/11/logo-facebook.png" style = "width:45px;height: 45px;border-radius:17px" /></a>
<a href = "https://www.instagram.com/?hl=ru" ><img src = "image/instagram.png" style = "width:37px;height: 37px;border-radius:17px" /></a>
<a href = "https://twitter.com/?lang=ru" ><img src = "image/Twitter.png" style = "width:39px;height: 39px;border-radius:17px" /></a>
<!-- jQuery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>