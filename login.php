<?php
require "db.php";

$data = $_POST;
if(isset($data['do_login'])){
	$errors=array();
	$user=R::findOne('lk','login = ?',array($data['login']));
	$password=R::findOne('lk','password = ?',array($data['password']));
	if($user){
		if($password){
			$_SESSION['logged_user']=$user;
			//$rootlaw=R::exec('SELECT id FROM `lk` WHERE login= 'makar'');
			if($user['id']==1){
			header('Location: /clientroot.php');}
			else {
			header('Location: /client.php');}	
			
		}else{
			$errors[]='Пароль не верен';
		}
		
	}else {
		$errors[]='Пользователь не найден';
	}
	
	
	if(!empty($errors)){
		echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
		
	}
}

?>

<form action="login.php" method="POST">
<div class="all">
<p> 
	<p><strong class="text">Логин</strong>:</p>
	<input class="input" type="text" name="login" value="<?php echo @$data['login']; ?>">
</p>

<p> 
	<p><strong class="text">Пароль</strong>:</p>
	<input class="input" type="password" name="password" value="<?php echo @$data['password']; ?>">
</p>


<p>
	<button type="submit" name="do_login">Войти</button>
</p>
</div>
    <style>
    .all{
        width:200px;
        heigh:400px;
        border: 3px solid rgba(50,50,255,1);
        top: 10px;
top: 2em;
top: 50%;
top: auto;
top: inherit;
top: initial;

    }
    html{
     background-image: url("https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2018-12/ZURR5474.jpg?itok=SUNcgrY8");
     background-repeat:no-repeat;

    background-attachment:fixed;

    background-position:center;
      
    }
    .text{
        color:black;
	text-align:center;
	opacity:1;
	width:150px;
	margin-left:30px;
	font-size:25px;	

	margin-right:20px;

	transition:2s all;
        
    }
    .all{
        color:#DFDDDE;
	text-align:center;
	background-color:#96B4E1;

	border:2px solid #A8C2E1;
	width:200px;
	margin-left:40px;
	font-size:35px;
		margin-left:630px;

	margin-right:20px;
        
    }
    input.problem {
    width:  1000px;
    height: 100px;
    padding: 5px 10px 5px 10px;
    border:1px solid #999;
    font-size:16px;
    font-family: Tahoma;
}

.input{
    font-size: 16px;
  padding: 10px;
  display: block;
  width: 200px;
  border: none;
  border-bottom: 1px solid #ccc;
}
}
</style>
</form>
