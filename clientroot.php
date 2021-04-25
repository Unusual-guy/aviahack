<?php
require "db.php";
?>
<?php
$dat = $_POST;
if(isset($dat['do_login'])){
	R::exec('INSERT INTO `mes`(`idcl`,`mes`) VALUES ("2",?)',array($dat['problem']));
}
if(isset($dat['do_clear'])){
	R::exec('UPDATE `task` SET `state`="0"');
}

for($i =1; $i<=5; $i++){
	if(isset($dat[$i])){
	R::exec('UPDATE `res` SET `active`="0" WHERE `id`=?',array($i));
	}
}
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
	
    <h4 href="/" class="my-1 mr-md-auto font-weight-normal mt-1">Авиахак</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="index.php">Главная</a>
      <a class="p-2 text-dark" href="#">Контакты</a>
      <a class="p-2 text-dark" href="#">Тех.поддержка</a>
    </nav>
	<?php if(isset($_SESSION['logged_user']) ): ?>

	<a class="btn btn-outline-primary" href="/logout.php">Выйти</a>
	<?php endif; ?>
	
  </header>
<form action="clientroot.php" method="POST">
 <strong>Ответ</strong><br>
<input type="problem" name="problem" class="problem" value="<?php echo @$dat['problem']; ?>">
<button type="submit" name="do_login">отправить запрос</button>
 <br> <strong>Запросы</strong><br>
 <article><?php $findTask = R::find('task'); for($i =1; $i<=count($findTask); $i++){if ($findTask[$i]['state']){echo $findTask[$i]['task'];?>} <br><?php } ?></article><?php } ?> 

<br>
<button type="submit" name="do_clear">очистить запрос</button>
<br><strong>Ресурсы</strong>
<article><?php $findMess = R::find('res'); for($i =1; $i<=count($findMess); $i++){echo $findMess[$i]['res']; ?></article>
                <p><input type="active"   name="active"/><?php if($findMess[$i]['active']){ echo on; } ?> </p>
				<article><?php echo $findMess[$i]['sec'];  ?></article> <button type="submit" name=<?php echo $i ?>>изменить активность</button>
            <br><br> <br><?php } ?> 
<style



input.problem {
background-image: url("https://hyperhost.ua/info/storage/uploads/2018/10/Google-min.png");
    width:  1000px;
    height: 100px;
    padding: 5px 10px 5px 10px;
    border:1px solid #999;
    font-size:16px;
    font-family: Tahoma;
}
</style>

</form>
<body>

</html>