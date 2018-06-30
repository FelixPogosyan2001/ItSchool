<?
require("BD.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </script>
	<title>ItSchool</title>
</head>
<body style="background:url('image/index.jpg')">
	<div class="col-md-7">
	</div>
	<div class="col-md-3" style="background:#1f3d7a;box-shadow:0px -8px 2px #1affff;position:relative;top:70px">
		<h3 style="color:white" id="redirect"> <?=$error?></h3>
		<img src="image/user.png" width="65px" height="80px" style="position:relative;top:60px;left:120px" />
	<form action="home.php" method="post">
<input type="text" name="login"  style="margin-top:60px;" placeholder="Имя" class="form-control" id="login" required />
<br/>
<input type="password" class="form-control" style="margin-top:10px" placeholder="Фамилия" name="password" required/>
<button name="button" style="margin-top:4px;margin-left:118px" class="btn btn-warning" value="отправить"> login </button>
</form>
<button style="margin-top:15px;margin-left:110px;" data-toggle="modal" data-target="#registr" class="btn btn-warning"> Sign Up </button>
<div class="modal fade" id="registr">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1><center>Введите ваши данные</center></h1>
<p id="errors"> </p>
<span class="close" data-dismiss="modal">X</span>
</div>
<div class="modal-body">
<form action="registration.php" method="post">
<input type="text" class="form-control" required name="name" placeholder="Name"/>
<br/>
<input type="text" class="form-control" required name="surname" placeholder="Surname"/>
<br/>
<input type="email" class="form-control" required  name="email" placeholder="asasa@mail.ru"/>
<br/>
 <span>Мужской </span><input type="radio" value="Man" name="radio"/>
 <span>Женский </span><input type="radio" value="Woman" name="radio"/>
 <br/>
 <br/>
<input type="password" class="form-control" id="pas1" required name="password" placeholder="password"/>
</br/>
<select class="btn btn-primary" required name="country">
<option>Выберите страну </option>
<option>Russia </option>
<option>England</option>
<option>Germany</option>
</select>
<input type="number" class="form-control" style="margin-top:10px;margin-left:15px" placeholder="+7(xxx)-(xxx)-(xx)-(xx)" name="number"/>
<center><button name="reg" class="btn btn-danger" style="margin-top:16px;">Sign up </button></center>
</form>
	</div>
</div>
</div>
	</div>
</div>
</body>
</html>