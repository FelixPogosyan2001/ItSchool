<?php
session_start();
$total=0;
$_SESSION["total"]=$total;
if(isset($_POST["test1"])){ 
  if($_POST["one"]==3 && $_POST["two"]==1 && $_POST["three"]==1 && $_POST["for"]==3 && $_POST["five"]==1 ){
  $_SESSION["total"]=$_SESSION["total"]+5;
  }
  elseif($_POST["one"]!=3 && $_POST["two"]!=1 && $_POST["three"]!=1 && $_POST["for"]==3 && $_POST["five"]==1 || $_POST["one"]==3 && $_POST["two"]==1 && $_POST["three"]==1 && $_POST["for"]!=3 && $_POST["five"]!=1 ){
    $_SESSION["total"]=$_SESSION["total"]+2;
  }
   elseif($_POST["one"]==3 && $_POST["two"]==1 && $_POST["three"]==1 && $_POST["for"]!=3 && $_POST["five"]!=1 || $_POST["one"]!=3 && $_POST["two"]!=1 && $_POST["three"]==1 && $_POST["for"]==3 && $_POST["five"]==1 ){
    $_SESSION["total"]=$_SESSION["total"]+3;
  }
  elseif($_POST["one"]==3 && $_POST["two"]==1 && $_POST["three"]==1 && $_POST["for"]==3 && $_POST["five"]!=1 || $_POST["one"]!=3 && $_POST["two"]==1 && $_POST["three"]==1 && $_POST["for"]==3 && $_POST["five"]==1 ){
    $_SESSION["total"]=$_SESSION["total"]+4;
  }
  elseif($_POST["one"]!=3 && $_POST["two"]!=1 && $_POST["three"]!=1 && $_POST["for"]!=3 && $_POST["five"]==1 || $_POST["one"]==3 && $_POST["two"]!=1 && $_POST["three"]!=1 && $_POST["for"]!=3 && $_POST["five"]!=1 ){
    $_SESSION["total"]=$_SESSION["total"]+1;
  }
  elseif($_POST["one"]==3 && $_POST["two"]!=1 && $_POST["three"]!=1 && $_POST["for"]!=3 && $_POST["five"]==1 || $_POST["one"]!=3 && $_POST["two"]!=1 && $_POST["three"]==1 && $_POST["for"]==3 && $_POST["five"]!=1 ){
    $_SESSION["total"]=$_SESSION["total"]+2;
  }
 elseif($_POST["one"]!=3 && $_POST["two"]!=1 && $_POST["three"]!=1 && $_POST["for"]!=1 && $_POST["five"]!=1 ){
  $_SESSION["total"]=$total+0;
  }
  elseif($_POST["one"]!=3 && $_POST["two"]==1 && $_POST["three"]==1 && $_POST["for"]!=3 && $_POST["five"]=!1 || $_POST["one"]!=3 && $_POST["two"]!=1 && $_POST["three"]!=1 && $_POST["for"]==3 && $_POST["five"]==1){
      $_SESSION["total"]=$total+2;
  }
  elseif($_POST["one"]!=3 && $_POST["two"]==1 && $_POST["three"]=!1 && $_POST["for"]!=3 && $_POST["five"]=!1 || $_POST["one"]==3 && $_POST["two"]==1 && $_POST["three"]!=1 && $_POST["for"]!=3 && $_POST["five"]!=1){
    $_SESSION["total"]=$total+1;
  }
   elseif($_POST["one"]!=3 && $_POST["two"]==1 && $_POST["three"]!=1 && $_POST["for"]!=3 && $_POST["five"]==1){
    $_SESSION["total"]=$total+2;
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
<!-- jQuery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
<script>
 $(document).ready(function(){
  var a=Number($("#one").html());
  if(a!=3){
$("#one").css("background","#ff4d4d");
$("#one1").css("background","#ff4d4d");
$("#one11").css("background","#ff4d4d");
  }
  else{
    $("#one").css("background","lightgreen");
$("#one1").css("background","lightgreen");
$("#one11").css("background","lightgreen");
  }
   var b=Number($("#two").html());
  if(b!=1){
$("#two").css("background","#ff4d4d");
$("#two2").css("background","#ff4d4d");
$("#two22").css("background","#ff4d4d");
  }
  else{
    $("#two").css("background","lightgreen");
$("#two2").css("background","lightgreen");
$("#two22").css("background","lightgreen");
  }
    var c=Number($("#three").html());
  if(c!=1){
$("#three").css("background","#ff4d4d");
$("#three3").css("background","#ff4d4d");
$("#three33").css("background","#ff4d4d");
  }
  else{
    $("#three").css("background","lightgreen");
$("#three3").css("background","lightgreen");
$("#three33").css("background","lightgreen");
  }
      var d=Number($("#for").html());
  if(d!=3){
$("#for").css("background"," #ff4d4d");
$("#for4").css("background","#ff4d4d");
$("#for44").css("background","#ff4d4d");
  }
  else{
    $("#for").css("background","lightgreen");
$("#for4").css("background","lightgreen");
$("#for44").css("background","lightgreen");
  }
      var f=Number($("#five").html());
  if(f!=1){
$("#five").css("background"," #ff4d4d");
$("#five5").css("background","#ff4d4d");
$("#five55").css("background","#ff4d4d");
  }
  else{
    $("#five").css("background","lightgreen");
$("#five5").css("background","lightgreen");
$("#five55").css("background","lightgreen");
  }
 }); 
 /*-----------------------------------------------*/
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
<body style = "background-image: linear-gradient( 135deg, #EEAD92 10%, #6018DC 100%);;" onload="start()">
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
<div class="container-fluid">
<div class="table-responsive">
<table border="none" class="table table-bordered">
<thead>
   <tr  style = "background-image: linear-gradient( 135deg, #FFD26F 10%, #3677FF 100%);">
    <th>Номер</th>
    <th>Ответ</th>
    <th >Правильный ответ</th>
   </tr>
</thead>
<tbody>
   <tr>
    <td id="one11">1</td>
    <td id="one"><?=$_POST["one"]?></td>
    <td id="one1">3</td>
  </tr>
  <tr>
    <td id="two22">2</td>
    <td id="two"><?=$_POST["two"]?></td>
    <td id="two2">1</td>
  </tr>
  <tr>
    <td id="three33">3</td>
    <td id="three"><?=$_POST["three"]?></td>
    <td id="three3">1</td>
  </tr>
  <tr>
    <td id="for44">4</td>
    <td id="for"><?=$_POST["for"]?></td>
    <td id="for4">3</td>
  </tr>
  <tr>
    <td id="five55">5</td>
    <td id="five"><?=$_POST["five"]?></td>
    <td id="five5">1</td>
  </tr>
</tbody>
 </table>
</div>
</div>
<div class="col-lg-2" style="position:relative;bottom:20px;">
  <form action="main.php" method="post">
  <button  style="background:url('image/fon.jpg');color:white;width:100px;height:40px;border:2px solid #6600cc" name="save">Сохранить</button>
</form>
</div>
</body>
<footer class ="container-fluid" style = "background:url('image/papapa.jpg');color:white;margin-top:195px">
<p style = "text-align: right;position:relative;top:40px"> Все права защищены &copy </p>
<a href = "https://vk.com/feed" ><img src = "https://pbs.twimg.com/profile_images/884348453744201728/Yn5UDIeY_400x400.jpg " style = "width:35px;height: 35px;border-radius:17px" /></a>
<a href = "https://ru-ru.facebook.com/" ><img src = "http://blog.addthiscdn.com/wp-content/uploads/2015/11/logo-facebook.png" style = "width:45px;height: 45px;border-radius:17px" /></a>
<a href = "https://www.instagram.com/?hl=ru" ><img src = "image/instagram.png" style = "width:37px;height: 37px;border-radius:17px" /></a>
<a href = "https://twitter.com/?lang=ru" ><img src = "image/Twitter.png" style = "width:39px;height: 39px;border-radius:17px" /></a>
</footer>
</body>
</html>