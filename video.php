<? 
if(isset($_POST["send"])){
$name=$_POST["name"];
$email=$_POST["email"];
$messages1=$_POST["messages"];
$number=$_POST["number"];
if(!empty($name) && !empty($email) && !empty($number) && !empty($messages1)){
	$subject="Тема сообщения";
	$to="felix.pogosyan.2001@mail.ru";
	$message=$_POST["messages"];
	mail($to,$subject,$message,$headers);
		header("Location:studyphp.php");
		exit();
	}
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
<script>
 setInterval( function() {
             document.getElementById("a1").style.color = '#d900d3';
                  
                  }, 500);
 setInterval( function() {
document.getElementById("a1").style.color = 'black';
}, 1000);
/*----------------------------------------------------*/
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
setTimeout(function(){window.location="video.php";},0600);
}
	</script>
<style>
#unit{
	animation-name:unitas;
	animation-duration:3s;
	animation-iteration-count:infinite;
}
@keyframes unitas{
	0%{
		transform:rotateX(0deg);
	}
	100%{
		transform:rotateX(360deg);
		color:#aaff00;
	}
}
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
	background: black;
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
</head>
<body style = "background:#434040" onload="test()">
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
<h3  class="text-center" id="unit" style = "font-family:Solitaz-Regular;color:white;">Раздел видео-курсов </h3>
<br/>
<div class="container-fluid text-center" id="tran">
<a href="video.php" style="text-decoration: none;font-family: Solitz;transform: scale(1.5);border-radius:3px;position:relative;bottom:13px" id="a1">Программирование </a>
<a href="#" style="text-decoration: none;font-family: Solitz;transform: scale(1.5);border-radius:3px;position:relative;bottom:13px;" id="a2"> Веб-дизайн </a>
<a href="#" style="text-decoration: none;font-family: Solitz;transform: scale(1.5);border-radius:3px;position:relative;bottom:13px;" id="a3"> Английский язык </a>
</div>
<br/>
<div class="col-md-1">
	<p> </p>
</div>
<div class ="container-fluid">
<div class = "col-md-3 text-center">
<div class ="panel panel-default">
<div class ="panel-heading">
<h4 style="font-family: Solitaz"> Веб-программирование </h4>
</div>
<div class="panel-body" style="text-align: left">
<p>Веб-программирование — раздел программирования, ориентированный на разработку веб-приложений (программ, обеспечивающих функционирование динамических сайтов.Такие сайты как facebook,vk были созданы с помощью веб-программирования. Веб-программирование включает в себя такие языки как PHP-это серверный язык,Javascipt-скриптовый язык,HTML-язык разметки,СSS-язык,который делает сайт красивее(добавляет стиь). Если вы хотите стать веб-программистом,то начните наш курс.  </p>
<img src="http://grozny-inform.ru/LoadedImages/2016/11/21/webprogramming_w1200_h800.jpg" width="135px" height="145px" style="position:relative;left:57px" />
</div>
<div class="panel-footer">
	<form action="web.php" method="post">
<button class ="btn btn-warning">Перейти</button>
</form>
</div>
	</div>
</div>
<div class ="col-md-1">
	<p> </p>
</div>
<div class = "col-md-3 text-center" >
<div class ="panel panel-default">
<div class ="panel-heading">
<h3 style="font-family: Solitaz"> Разработка игр </h3>
</div>
<div class="panel-body" style="text-align:left">
<p>Если вы хотите научиться самостоятельно делать игры,то вам подходит сфера программирования-разработка игр.Для того чтобы стать программистом игр,вам потребуется выучить такие языки как C#,C++,Java и т.п.Язык Java предназначен для создание мобильных приложений.C#  — объектно-ориентированный язык программирования. Разработан  компанией Microsoft как язык разработки приложений для платформы Microsoft .Этот язык используется для игр более высокого уровня. И мы предлагаем наш полноценный курс по разработке игр.</p>
<img src ="http://axyosgames.com/wp-content/uploads/2016/09/3d-gaming.png" style="margin-bottom:17px;position:relative;left:59px"/>
</div>
<div class="panel-footer">
<button class ="btn btn-warning">Перейти</button>
</div>
	</div>
</div>
	<div class ="col-md-1">
	<p> </p>
</div>
<div class = "col-md-3 text-center">
<div class ="panel panel-default" >
<div class ="panel-heading">
<h3 style="font-family: Solitaz"> Python разработчик </h3>
</div>
<div class="panel-body" style="text-align:left">
<p>Python-высокоуровневый язык программирования общего назначения, ориентированный на повышение производительности разработчика и читаемости кода. Синтаксис ядра Python минималистичен. В то же время стандартная библиотека включает большой объём полезных функций.В этом курсе по программированию на языке Python вы познакомитесь с базовыми понятиями программирования. </p>
<img src ="image/python.png" width="135px" height="145px" style="margin-bottom:57px;position:relative;left:50px" />
</div>
<div class="panel-footer">
<button class ="btn btn-warning">Перейти</button>
</div>
	</div>
</div>
<div class ="col-md-1">
	<p> </p>
</div>
</div>
<br/>
<div class="col-md-9">
	<p> </p>
</div>
<button  data-toggle="collapse" data-target="#contact" style="width:280;border-top-right-radius: 18px;position: relative;top:20px;z-index:2;background:#8000ff;color:white;border:2px solid #8000ff"><span class="glyphicon glyphicon-folder-open"> Отправить нам сообщение</span> </button>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
	<p> </p>
</div>
<div class="collapse" id="contact">
	<div class="col-md-3" style="background: white;position: relative;top:10px;overflow:hidden;z-index:1;padding-top: 10px;width:278px">
		<p> Отправьте это сообщение в этой форме,мы получим его на email и ответим </p>
		<br/>
		<form action="" method="post">
		<textarea cols="32" name="messages" class="el1" rows="5" required> </textarea>
		<br/>
		<br/>
	 	<input placeholder="Введите имя" name="name" id="el2" required class="form-control"/>
	 	<br/>
	 	<input placeholder="Ваш номер" name="number" id="el3" required class="form-control"/>
	 	<br/>
	 	<input placeholder="Ваш email" name="email" id="el4" required class="form-control"/>
	 	<br/>
	 	<input type="submit" class="btn btn-warning" required name="send" value="Отправить сообщение" />
	 	</form>
	 </br>
	 </div>
	</div>
</div>
</div>
</body>
<footer class ="container-fluid" style = "background:url('image/papapa.jpg');color:white;margin-top:10px">
<p style = "text-align: right;position:relative;top:40px;"> Все права защищены &copy </p>
<a href = "https://vk.com/feed" ><img src = "https://pbs.twimg.com/profile_images/884348453744201728/Yn5UDIeY_400x400.jpg " style = "width:35px;height: 35px;border-radius:17px" /></a>
<a href = "https://ru-ru.facebook.com/" ><img src = "http://blog.addthiscdn.com/wp-content/uploads/2015/11/logo-facebook.png" style = "width:45px;height: 45px;border-radius:17px" /></a>
<a href = "https://instagram.com/" ><img src = "image/instagram.png" style = "width:37px;height: 37px;border-radius:17px" /></a>
<a href = "https://twitter.com/?lang=ru" ><img src = "image/Twitter.png" style = "width:39px;height: 39px;border-radius:17px" /></a>
</body>
<!-- jQuery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>