<?php
require "db.php";
?>





<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=google">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="X-UA-Compatible" content="ie=yandex">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<title>Авиахакатон</title>
</head>
<body>
	<header class="d-flex flex-column flex-md-row align-items-center p-3px-md-4 mb-3 border-bottom shadow-sm">
	
	<a class="navbar-brand" href="/en/">
            <img src="/img/1.jpg" width="60" height="60" class="d-inline-block align-top">
   
          </a>
	
    <h1 href="/" class="my-1 mr-md-auto font-weight-normal mt-1">Авиахакатон</h1>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Главная</a>
      <a class="p-2 text-dark" href="#">Контакты</a>
      <a class="p-2 text-dark" href="#">Обратная связь</a>
    </nav>
	<?php if(isset($_SESSION['logged_user']) ): ?>

	<a class="btn btn-outline-primary" href="/logout.php">Выйти</a>
<?php else : ?>

	<a class="btn btn-outline-primary" href="/login.php">Войти</a>
<?php endif; ?>
	
  </header>
  
<body>
    <style>
    header{
     


    }
    html{
     background-image: url("https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2018-12/ZURR5474.jpg?itok=SUNcgrY8");
     background-repeat:no-repeat;

    background-attachment:fixed;

    background-position:center;
    }
    
    input.problem {
    width:  1000px;
    height: 100px;
    padding: 5px 10px 5px 10px;
    border:1px solid #999;
    font-size:16px;
    font-family: Tahoma;
}
</style>

    
    
</html>
	
  