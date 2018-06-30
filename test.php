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
setTimeout(function(){window.location="test.php";},0600);
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
	<body style = "background-image: linear-gradient( 135deg, #EE9AE5 10%, #5961F9 100%);" onload="test()">
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
  <div class="col-lg-1">
  </div>
<div style="background:#fff;position:relative;bottom:17px;left:10px" class="col-lg-9">
<center><h2>Test</h2></center>
<form action="answers.php" method="post">
<div class="col-md-4">
<h4>1)Какой вариант написан с ошибкой?</h4>
<input type="radio" value="1" id="one" required name="one" /><span>1)&lt;ol type="A"&gt;</span><br/>
<input type="radio" value="2" id="one" name="one" /><span>2)&lt;ol type="I"&gt;</span><br/>
<input type="radio" value="3" id="one" name="one" /><span>3)&lt;ol type="m"&gt;</span>
</div>
<div class="col-md-4">
<h4>2)Какая ошибка в следующем коде:&lt;a href="page.html">Страница 1?</h4>
<input type="radio" value="1" required  name="two" /><span>1)&lt;/a&gt; отсутствует</span><br/>
<input type="radio" value="2"  name="two" /><span>2)атрибута href не существует</span><br/>
<input type="radio" value="3"  name="two" /><span>3)Все верно</span>
</div>
<div class="col-md-4">
<h4>3)Какой код не выдает ошибку?</h4>
<input type="radio" value="1" name="three" required /><span>1)&lt;p&gt;&lt;a href="https://www.google.ru/"&gt;Next&lt;a/&gt;&lt;/p&gt; </span><br/>
<input type="radio" value="2" name="three"" /><span>2)&lt;p/&gt;&lt;a hreef="https://www.google.ru/"&gt;Next&lt;a&gt;&lt;/p&gt;</span><br/>
<input type="radio" value="3" name="three" /><span>3)&lt;p&gt;&lt;a href="https://www.google.ru/"a/&gt;Next&lt;a/&gt;&lt;/p&gt;</span>
</div>
<div class="col-md-4">
<h4>4)Почему в начале документа нужно прописывать &lt;DOCTYPY! html&gt;?</h4>
<input type="radio" value="1" name="for" required /><span>1) Чтобы браузер «путался» и понимал, согласно какому стандарту отображать веб-страницу и необходимо в первой строке кода задавать &lt;DOCTYPE&gt;</span><br/>
<input type="radio" value="2" name="for"" /><span>2)Указывает элемент верхнего уровня в документе</span><br/>
<input type="radio" value="3" name="for" /><span>3) Это необходимо, чтобы браузер понимал, как следует интерпретировать текущую веб-страницу, поскольку HTML существует в нескольких версиях, кроме того, имеется XHTML</span>
</div>
<div class="col-md-4">
<h4>5)Какую роль выполняет тег &lt;h1&gt;?</h4>
<input type="radio" value="1" name="five" required /><span>1)Cодержит все видимое содержимое HTML страницы</span><br/>
<input type="radio" value="2" name="five" /><span>2)Позволяет "разметить" вложенный в него текст как заголовок</span><br/>
<input type="radio" value="3" name="five" /><span>3) позволяет "разметить" вложенный в него текст как абзац.</span>
</div>
<button name="test1" class="btn btn-success" style="margin-left:100px;margin-top:200px">Проверить </button>
  </div>
  <div class="col-lg-1">
  </div>
</form>
</div>
</body>
<footer class ="container-fluid" style = "background:url('image/papapa.jpg');color:white;">
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