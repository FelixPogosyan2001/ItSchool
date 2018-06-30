<? 
if(isset($_POST["send"])){
$name=$_POST["name"];
$email=$_POST["email"];
$messages1=$_POST["messages"];
$number=$_POST["number"];
if(!empty($name) && !empty($email) && !empty($number) && !empty($messages1)){
	$subject="Тема сообщения";
	$message=$_POST["messages"];
	mail("felix.pogosoyan.2001@mail.ru",$subject,$message,$headers);
		header("Location:studyphp.php");
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
<style>
#frame{
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

</style>
</head>
<body style = "background: url('image/papapa.jpg');">
<nav class = "navbar navbar-default" style = "background: url('image/bodyphoto.jpg');border:none">
	<div class = "navbar-header">
     <button type = "button" class = "navbar-toggle" data-toggle = "collapse" style="background:silver" data-target = "#rescos">
      <span class = "icon-bar" style = "background:white"> </span>
      <span class = "icon-bar" style = "background: white;"> </span>
      <span class = "icon-bar" style = "background: white"> </span>
     </button>
     <a href = "home.php" class = "navbar-brand" id="it" style = "color:white;margin-bottom:3px"> <img src="image/itSchool.png" style="height:25px"/> </a>
	</div>
	<div class = "collapse navbar-collapse" id ="rescos">
      <ul  class = "nav navbar-nav" style = "margin-left:35px;position:relative;top:10px;font-family:Solitaz">
       <li style="margin-left:20px;" id="a1" ><a href= "home.php" id="home" style ="color:white;margin:none;font-family:Solitaz">Главная </a></li> 
       <li style="margin-left:20px" id="a1"><a href ="video.php" id="video" style ="color:white;"> Видео-уроки </a></li>
       <li style="margin-left:20px;" id="a2"> <a href = "" id="books" style ="color:white">Книги </a></li>
       <li style="margin-left:20px;" id="a3"> <a href= "" id="name" style ="color:white">Школьникам </a></li>
       <li style="margin-left:20px;" id="a1"><a href ="" id = "student" style ="color:white"> Студентам </a></li>
        <li style="margin-left:20px;" id="a1"><a href ="main.php" id = "student" style ="color:white">Личный кабинет</a></li>
       <li style="margin-left:40px;color:#9900cc;opacity:0;"><pre>                </pre></li>
       <li style="position: relative;left:60px"><a href ="logout.php" name="exit" style ="color:white"><i class="material-icons" style="margin-bottom:15px">&#xe879;</i> </a></li>
      </ul>
	</div>
</nav>
<h3  class="text-center" style = "border-bottom:2px solid #555;font-family:Solitaz-Regular;">Раздел видео-курсов </h3>
<div class="container-fluid text-center" id="tran">
<a href="video.html" style="text-decoration: none;font-family: Solitz;transform: scale(1.5);background:white;border-radius:3px;position:relative;bottom:13px" id="a1">Программирование </a>
<a href="#" style="text-decoration: none;font-family: Solitz;transform: scale(1.5);background:white;border-radius:3px;position:relative;bottom:13px;" id="a2"> Веб-дизайн </a>
<a href="#" style="text-decoration: none;font-family: Solitz;transform: scale(1.5);background:white;border-radius:3px;position:relative;bottom:13px;" id="a3"> Английский язык </a>
</div>
<br/>
<div class="col-md-1">
	<p> </p>
</div>
<div class ="container-fluid">
<div class = "col-md-3 text-center" >
<div class ="panel panel-default">
<div class ="panel-heading">
<h4 style="font-family: Solitaz"> Веб-программирование </h4>
</div>
<div class="panel-body">
<p>Веб-программирование — раздел программирования, ориентированный на разработку веб-приложений (программ, обеспечивающих функционирование динамических сайтов.Такие сайты как facebook,vk были созданы с помощью веб-программирования. Веб-программирование включает в себя такие языки как PHP-это серверный язык,Javascipt-скриптовый язык,HTML-язык разметки,СSS-язык,который делает сайт красивее(добавляет стиь). Если вы хотите стать веб-программистом,то начните наш курс.  </p>
<img src="http://grozny-inform.ru/LoadedImages/2016/11/21/webprogramming_w1200_h800.jpg" width="135px" height="145px" />
</div>
<div class="panel-footer">
	<form action="web.html" method="post">
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
<div class="panel-body">
<p>Если вы хотите научиться самостоятельно делать игры,то вам подходит сфера программирования-разработка игр.Для того чтобы стать программистом игр,вам потребуется выучить такие языки как C#,C++,Java и т.п.Язык Java предназначен для создание мобильных приложений.C#  — объектно-ориентированный язык программирования. Разработан  компанией Microsoft как язык разработки приложений для платформы Microsoft .Этот язык используется для игр более высокого уровня. И мы предлагаем наш полноценный курс по разработке игр.</p>
<img src ="http://axyosgames.com/wp-content/uploads/2016/09/3d-gaming.png"/>
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
<div class="panel-body">
<p>Python-высокоуровневый язык программирования общего назначения, ориентированный на повышение производительности разработчика и читаемости кода. Синтаксис ядра Python минималистичен. В то же время стандартная библиотека включает большой объём полезных функций.В этом курсе по программированию на языке Python вы познакомитесь с базовыми понятиями программирования. </p>
<img src ="image/python.png" width="135px" height="145px" />
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
<button class="btn btn-danger" data-toggle="collapse" data-target="#contact" style="width:280;border-top-right-radius: 18px;position: relative;top:10px"><span class="glyphicon glyphicon-folder-open"> Отправить нам сообщение</span> </button>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
	<p> </p>
</div>
<div class="collapse" id="contact">
	<div class="col-md-3" style="background: white;border:2px solid tomato;position: relative;top:10px;">
		<p> Отправьте это сообщение в этой форме,мы получим его на email и ответим </p>
		<br/>
		<form action="" method="post">
		<textarea cols="40" name="messages" rows="5" required> </textarea>
		<br/>
		<br/>
	 	<input placeholder="Введите имя" name="name" required class="form-control"/>
	 	<br/>
	 	<input placeholder="Ваш номер" name="number" required class="form-control"/>
	 	<br/>
	 	<input placeholder="Ваш email" name="email" required class="form-control"/>
	 	<br/>
	 	<input type="submit" class="btn btn-success" required name="send" value="Отправить сообщение" />
	 	</form>
	 </br>
	 </div>
	</div>
</div>
</div>
</body>
<footer class ="container-fluid" style = "background:url('image/papapa.jpg');color:white;margin-top:460px">
<p style = "text-align: right;position:relative;top:40px"> Все права защищены &copy </p>
<a href = "https://vk.com/feed" ><img src = "https://pbs.twimg.com/profile_images/884348453744201728/Yn5UDIeY_400x400.jpg " style = "width:35px;height: 35px;border-radius:17px" /></a>
<a href = "https://ru-ru.facebook.com/" ><img src = "http://blog.addthiscdn.com/wp-content/uploads/2015/11/logo-facebook.png" style = "width:45px;height: 45px;border-radius:17px" /></a>
</footer>
</html>