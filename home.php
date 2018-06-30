<?php
require "BD.php";
session_start();
if(isset($_POST["button"])){
$password=$_POST["password"];
$login=$_POST["login"];
$_SESSION["login"]=$login;
$count=mysqli_query($connection,"SELECT * FROM `user` WHERE `login`='$login' AND `password`='$password'");
$arr=mysqli_fetch_assoc($count);
$_SESSION["name"]=$arr["name"];
$_SESSION["surname"]=$arr['surname'];
if(mysqli_num_rows($count) == false ){
	header("Location:index.php");
	exit;
}
}
?>
<html>
<head>
	<meta charset ="utf-8">
	<title> ItSchool </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel = "stylesheet" type = "text/css" href = "css.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
#frame{
	border-radius:13px;
	background:none;
	font-family:Solitaz;
	font-size:13px;
	border:2px solid white;
	color:white;
	animation-name:gmail;
	animation-duration:1.2s;
	animation-iteration-count:infinite;
	animation-timing-function:linear;
	animation-direction:alternate;
}
@keyframes gmail{
	0%{
       transform: scale(1.0)
	}
	100%{
		transform:scale(1.1);
	}
}
#user{
	width:307px;
	height:615px;
	display:none;
	position:absolute;
	z-index:2;
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
setTimeout(function(){window.location="home.php";},0600);
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
<div class = "container-fluid">
<div class="row">
<div class = "col-md-4">
<h1 style ="color:white;font-family:Solitaz;font-size:30px"> Бесплатные уроки </h1>
<br/>
<button id="frame" data-toggle="modal" data-target="#winmodal"> Подробнее </button>
</div>
<div class="col-md-8">
<h2 style="color:white;font-family: Solitaz;font-size:24px;margin-bottom:17px">Добро пожаловать <?=$_SESSION["name"]." ".$_SESSION["surname"]?> </h2>
	</div>
</div>
</div>
<div class="modal fade" id="winmodal">
	<div class="modal-dialog">
	<div class="modal-content">
<div class="modal-header">
	<button  data-dismiss="modal" class="close" >x</button>
<h1>ItSchool</h1>
</div>
<div class="modal-body">
<p>Здравствуйте!</p>
<p> На нашем сайте есть вся необходимая информация по программированию и дизайну и также по языкам.И все это доступно бесплатно,чтобы все пользователи могли без траты своих денег смотреть эти курсы,не важно богатый ты или нет,все абсолютно бесплатно,только ради вас.</p>
	</div>
	<div class="modal-footer">
     <button class="btn btn-danger" data-dismiss="modal"> Закрыть </button>
	</div>
	</div>
	</div>
	</div>
<br/>
<div class="col-md-2">
	<p> </p>
</div>
<div class ="container-fluid" style="margin-left:29px">
<div class = "col-lg-2 text-center" style ="color:white;background:url('image/11.jpg') no-repeat;width:200px;position:relative;left:50px;height:230px">
<h3>  0 руб/месяц </h3>
<h4 style="margin-top:30px"> Программирование </h4>
<ul style="position: relative;right: 35px;margin-top:10px">
<li style="text-align: left" type="none"><a href ="" style = "text-decoration:none;color:silver;"> Видео-уроки </a></li>
<li style="text-align: left" type="none"><a href ="" style = "text-decoration:none;color:silver""> Полезные статьи </a></li>
<li style="text-align: left" type="none"><a href ="books.php" style = "text-decoration:none;color:silver"> Книги </a></li>
</ul>
<a href="video.php" style ="color:white"><img src="image/icon.png" style = "font-size:35px;position:relative;right:63px"/></a>
	</div>
<div class ="col-lg-1">
	<p> </p>
</div>
<div class = "col-lg-2 text-center" style ="color:white;background:url('image/22.jpg') no-repeat;width:200px;position:relative;left:50px;height:230px">
<h3>  0 руб/месяц </h3>
<h4 style="margin-top:30px;position: relative;right:33px"> Веб-дизайн </h4>
<ul type="none" style="position: relative;right: 35px;margin-top:10px">
<li style="text-align: left"><a href ="" style = "text-decoration:none;color:silver"> Видеоуроки </a></li>
<li style="text-align: left"><a href ="" style = "text-decoration:none;color:silver""> Полезные статьи </a></li>
<li style="text-align: left;"><a href ="" style = "text-decoration:none;color:silver"> Книги </a></li>
</ul>
<a href="" style ="color:white"><img src="image/icon.png" style = "font-size:35px;position:relative;right:63px"/></a>
	</div>
	<div class ="col-md-1">
	<p> </p>
</div>
<div class = "col-lg-2 text-center" style ="color:white;background:url('image/33.jpg') no-repeat;width:200px;position:relative;left:50px;height:230px">
<h3>  0 руб/месяц </h3>
<h4 style="margin-top:30px;position:relative;right:9px"> Английский язык </h4>
<ul type="none" style="position: relative;right: 35px;margin-top:10px">
<li style="text-align: left"><a href ="" style = "text-decoration:none;color:silver"> Видеоуроки </a></li>
<li style="text-align: left"><a href ="" style = "text-decoration:none;color:silver""> Полезные статьи </a></li>
<li style="text-align: left"><a href ="" style = "text-decoration:none;color:silver"> Книги </a></li>
</ul>
<a href="" style ="color:white"><img src="image/icon.png" style = "font-size:35px;position:relative;right:63px"/></a>
	</div>
</div>
<div class ="col-lg-1">
	<p> </p>
</div>
<br/>
<br>
<br>
<br>
<br>
<footer class ="container-fluid" style = "color:white;margin-top:13px">
<p style = "text-align: right;position:relative;top:40px;"> Все права защищены &copy </p>
<a href = "https://vk.com/feed" ><img src = "https://pbs.twimg.com/profile_images/884348453744201728/Yn5UDIeY_400x400.jpg " style = "width:35px;height: 35px;border-radius:17px" /></a>
<a href = "https://ru-ru.facebook.com/" ><img src = "http://blog.addthiscdn.com/wp-content/uploads/2015/11/logo-facebook.png" style = "width:45px;height: 45px;border-radius:17px" /></a>
<a href = "https://www.instagram.com/?hl=ru" ><img src = "image/instagram.png" style = "width:37px;height: 37px;border-radius:17px" /></a>
<a href = "https://twitter.com/?lang=ru" ><img src = "image/Twitter.png" style = "width:39px;height: 39px;border-radius:17px" /></a>
</body>
</html>