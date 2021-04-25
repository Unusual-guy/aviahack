<?php
require "db.php";
?>
<?php
$data = $_POST;
if(isset($data['do_login'])){
	$errors=array();
	$id=$data['id'];
	R::exec('INSERT INTO `task`(`task`) VALUES (?)',array($data['problem']));
	//R::exec('UPDATE `task` SET `type`='?' WHERE id='5' ',array($data['type']));
	
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
	
	
	<?php if(isset($_SESSION['logged_user']) ): ?>

	<a class="btn btn-outline-primary" href="/logout.php">Выйти</a>
	<?php endif; ?>
	
  </header>
<form action="client.php" method="POST">
  <strong>Запрос</strong><br>
<input type="problem" name="problem" class="problem" value="<?php echo @$data['problem']; ?>">

<button type="submit" name="do_login">отправить запрос</button>
<br><br>
<strong>ответ</strong>
<article><?php $findMess = R::find('mes','idcl=2'); for($i =0; $i<=count($findMess); $i++){echo $findMess[$i]['mes']; ?> <br><?php } ?> </article>
<style>
input.problem {
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


	