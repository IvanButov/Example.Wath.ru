<?php
session_start();
?>
 <?
	include'pole.php';
	include'header.php';
	include'connection.php';
	$data= $_POST;
 	$exit=$data['but1'];
	$vxod=$data['vxod'];
	if(isset($vxod))
	{
		$login=$data['login'];
		$password=md5($data['password']);
		$result = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `email` = '$login';"));
		$result1 = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `password` = '$password';"));
		$result2 = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `email` = '$login';"));
		if($result==1)
		{
			if($result1>=1)
			{
				echo '<div style="color: green;">',"Добро пожаловать ".$login.'</div><hr>';
							$result3 = mysql_query("SELECT * FROM `user` WHERE `email` = '$login';");
							//$result_query = mysql_fetch_assoc($result2);
							$_SESSION['logged_user'] = $result;
							echo '<script>location.replace("index.php");</script>';
							break;
			}
		}
		 else if($result2==1)
		{
			if($result1==1)
			{
							echo '<div style="color: green;">',"Добро пожаловать ".$login.'</div><hr>';
							$result3 = mysql_query("SELECT * FROM `user` WHERE `email` = '$login';");
							//$result_query = mysql_fetch_assoc($result2);
							$_SESSION['logged_user'] = $result2;
							echo '<script>location.replace("index.php");</script>';
							
			}
		}
		else
		{
			echo"Введи верно данные!!";
		}
	}
	?>
	<form method="POST">
	<div class="content">
	<pre class="pre1">Авторизация</pre>
	<input type="text" name="login" class="poleVxod3" placeholder="логин:IvanovIvan"><br/>

	<input type="password" name="password" class="poleVxod2" placeholder="пароль:******"><br/>
	<input type="submit" name="vxod" value="Войти" class="buttonVxod1">
	</form>
	</div>
		
	<?
 
 include'footer.php';
 ?>