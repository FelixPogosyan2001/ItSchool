
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
setTimeout(function(){window.location="web.php";},0600);
}
	</script>
<style>
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
<h4  class="text-center" id="animate" style = "font-family:Solitaz-Regular;">Веб-программирование </h4>
<p style="border-bottom:2px solid #555;"> </p>
<div class="col-md-1">
	<p> </p>
</div>
<div class ="container-fluid">
<div class = "col-md-3 " >
<div class ="panel panel-default">
<div class ="panel-heading">
<h3 style="font-family: Solitaz;text-align: center"> HTML </h3>
</div>
<div class="panel-body">
<p>HTML-это язык разметки.Большинство веб-страниц содержат описание разметки на языке HTML (или XHTML). Язык HTML интерпретируется браузерами; полученный в результате интерпретации форматированный текст отображается на экране монитора компьютера или мобильного устройства.Он очень простой в понимании и не требует большой затраты времени.Начинайте изучение HTML прямо сейчас. </p>
<div class="text-center">
<img src="image/HTML.png" width="135px" height="145px" style="margin-bottom:85px;position:relative;top:20px"  />
</div>
</div>
<div class="text-center">
<div class="panel-footer">
	<form method="post" action="ht1.php">
<button class ="btn btn-warning" name="done"> Начать курс</button>
</form>
</div>
</div>
	</div>
</div>
<div class ="col-md-1">
	<p> </p>
</div>
<div class = "col-md-3 text-center" >
<div class ="panel panel-default">
<div class ="panel-heading">
<h3 style="font-family: Solitaz"> CSS </h3>
</div>
<div class="panel-body">
<p style="text-align:left">CSS  — формальный язык описания внешнего вида документа, написанного с использованием языка разметки.
Преимущественно используется как средство описания, оформления внешнего вида веб-страниц, написанных с помощью языков разметки HTML.То есть CSS используется создателями веб-страниц для задания цветов, шрифтов, расположения отдельных блоков и других аспектов представления внешнего вида этих веб-страниц. Основной целью разработки CSS являлось разделение описания логической структуры веб-страницы. И мы предлагаем наш полноценный курс по разработке игр.</p>
<img src ="image/CSS.png" width="135px" height="145px" />
</div>
<div class="panel-footer">
<button class ="btn btn-warning"> Начать курс</button>
</div>
	</div>
</div>
	<div class ="col-md-1">
	<p> </p>
</div>
<div class = "col-md-3 text-center">
<div class ="panel panel-default">
<div class ="panel-heading">
<h3 style="font-family: Solitaz"> Javascript </h3>
</div>
<div class="panel-body">
<p style="text-align:left">JavaScript является объектно-ориентированным языком, но используемое в языке прототипирование обуславливает отличия в работе с объектами по сравнению с традиционными класс-ориентированными языками. Кроме того, JavaScript имеет ряд свойств, присущих функциональным языкам — функции как объекты первого класса, объекты как списки — что придаёт языку дополнительную гибкость.Проще говоря,javascript придает функциональность сайта. </p>
<img src ="image/javascript.png" width="145px" height="155px" style="margin-bottom:53px" />
</div>
<div class="panel-footer">
<button class ="btn btn-warning"> Начать курс</button>
</div>
	</div>
</div>
<div class ="col-md-1">
	<p> </p>
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