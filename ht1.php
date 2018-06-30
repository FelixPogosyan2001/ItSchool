<?php
if(isset($_POST["done"])){
	$src="https://www.youtube.com/embed/LICSA6iJd6w";
	$ask="1)Что такое HTML? 
2) Как вывести на экран строку : 'Hello world';";
 	$question1="1)HTML-это язык разметки,с помощью которой прописывется содержание сайта";
 	$question2="image/code1.jpg";
}
if(isset($_POST["src1"])){
	$src="https://www.youtube.com/embed/LICSA6iJd6w";
	$ask="1)Что такое HTML? 
2) Как вывести на экран строку : 'Hello world';";
 	$question1="1)HTML-это язык разметки,с помощью которой прописывется содержание сайта";
 	$question2="image/code1.jpg";
}
elseif(isset($_POST["src2"])){
	$src="https://www.youtube.com/embed/l8Hx4BFBUY0";
	$ask="1)Назовите основные блочные теги
2)Какой тег нужно использовать для акцентирования текста:'HTML it is easy'";
	$question1="strong;p;pre;strike";
	$question2="image/code2.jpg";
}
elseif(isset($_POST["src3"])){
	$src="https://www.youtube.com/embed/48f_r6CPrVA";
	$ask="1)Какие бывают списки?
2)Составьте пронумерованный список,который будет состоять из 1-HTML,2-CSS,3-PHP,4-JavaScript";
	$question1="1)Списки в HTML подразделяются на маркированные и пронумерованные";
	$question2="image/code3.jpg";
}
elseif(isset($_POST["src4"])){
	$src="https://www.youtube.com/embed/wP-rdXEaVIM";
	$ask="1)Из чего состоит таблица? И для чего они предназначены?
2)Какими тегами создают табличку?";
	$question1="<p>1)Таблица состоит из строк и столбцов ячеек, которые могут содержать текст и рисунки.</p>Обычно таблицы используются для упорядочения и представления данных, однако возможности таблиц этим не ограничиваются.<p>C помощью таблиц удобно верстать макеты страниц, расположив нужным образом фрагменты текста и изображений.</p>";
	$question2="image/Code4.jpg";
}
elseif(isset($_POST["src5"])){
	$src="https://www.youtube.com/embed/ckIrbSyIkCI";
	$ask="Какие существуют атрибуты у тега img?";
	$question1="<code>src='#' width='#' height='#'</code>";
}
elseif(isset($_POST["src6"])){
	$src="https://www.youtube.com/embed/u86Qcu64r-0";
	$ask="1)Какие атрибуты существуют у ссылок в HTML?
2)Как сделать ссылку,которая будет перенаправлять пользователя на страничку google?";
	$question1="1)href='#' target='' type='#'";
	$question2="image/code5.jpg";
}
elseif(isset($_POST["src7"])){
	$src="https://www.youtube.com/embed/GT77G1loHsI";
	$ask="Заданий в этом уроке не будет ";
	$question1="Отсутвует";
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
 /*----------------------------------------------------------------*/
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
setTimeout(function(){window.location="ht1.php";},0600);
}
	</script>
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
<div class="row">
<div class="col-lg-12" style="background:url('image/pad.jpg');height:60px;bottom:29PX;z-index:2">
<h4  class="text-center" id="animate" style = "font-family:Solitaz-Regular;position: relative;top: 14px;">Веб-программирование </h4>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">
	<p> </p>
</div>
<div class="col-lg-6" style="background: white;border:2px solid silver;border-radius:3px;position:relative;bottom:42px;z-index:1">
	<h2> HTML уроки </h2>
	<p> В этом видеокурсе вы научитесь всем основам HTML.Мы научимся уже писать содержание сайтов,что для начала очень круто.</p>
	<h3> Видео-урок: </h3>
<div class="col-lg-12">
	<iframe style="margin-left:5px" id="ifr" width="95%" height="70%" src="<?=$src?>" frameborder="0"></iframe>
</div>
<br/>
<h3> Проверка пройденного материла </h3>
<pre><?=$ask?></pre>
<button class="btn btn-primary" data-toggle="collapse" data-target="#colap">Ответ </button>
<div class="collapse" id="colap">
<pre> <?=$question1?> </pre>
<image src="<?=$question2?>" />
</div>
<h3> Онлайн редактор кода:</h3>
<div class="col-md-12">
<iframe height="400px" width="100%" src="https://repl.it/@Felix2001/DemandingPresentOpentracker?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
</div>
</div>
<div class="col-md-1">
	<p> </p>
</div>
<div class="col-md-2" style="background: white;border:2px solid #555;overflow:auto;border-top-right-radius: 10px;height:300px">
	<h4 style="border-bottom:2px solid tomato"> Раздел видео-курсов </h4>
<ul type="none" style="font-size:120%;position: relative;right:30px">
	<form method="post" >
	<li style="font-size:15px"> <button name="src1" style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px;font-family:Solitaz">Введение в HTML </button> </li>
	<li style="font-size:15px;margin-top:5px;"> <button name="src2"  style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px">Работа с текстом </button> </li>
	<li style="font-size:15px;margin-top:5px;"> <button name="src3" style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px;font-family:Solitaz">Списки</button> </li>
	<li style="font-size:15px;margin-top:5px;"> <button name="src4" style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px;font-family:Solitaz">Таблицы</button> </li>
	<li style="font-size:15px;margin-top:5px;"> <button name="src5" style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px;font-family:Solitaz">Изображения</button> </li>
	<li style="font-size:15px;margin-top:5px;"> <button name="src6" style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px;font-family:Solitaz">Ссылки</button> </li>
	<li style="font-size:15px;margin-top:5px;"> <button name="src7" style="border-radius:4px;background: #8600b3;color:white;font-size:14px;height:35px;width:150px;font-family:Solitaz">Iframe</button> </li>
	</form>
	<form action="test.php" method="post">
	<li style="font-size:15px;margin-top:5px;"> <button id="but">Пройти тест</button></li>
</form>
	</div>
</ul>
	</div>
</div>
</div>
<br/>
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