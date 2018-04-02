<?
session_start();
include'pole.php'; 
include'connection.php';
include'header.php';
$data= $_POST;
?>
<div class="content">
<?
if(isset($data['reg']))
{
	$mail=trim($data['login']);
	$phone=($data['phone']);
	$name=trim($data['name']);
	$parol=trim($data['parol']);
	$parol2=trim($data['parol2']);
	$pass=md5($_POST['parol']);
	$pass2=md5($_POST['parol2']);
		$errors=array();
		if($mail=='')
		{
			$errors[]='Введите Email';
		}
		if($phone=='')
		{
			$errors[]='Введите телефон';
		}
		if($name=='')
		{
			$errors[]='Введите логин';
		}
		if(($data['parol2']==''))
		{
			$errors[]='Введите пароль';
		}
		if(($data['parol']==''))
		{
			$errors[]='Введите пароль';
		}
		if(strlen($name)<5)
		{
			$errors[]='Введенный логин слишко короткий';
		}
		if(strlen($name)>15)
		{
			$errors[]='Введенный логин слишко длинный';
		}
		if(strlen($parol)<5)
		{
			$errors[]='Введенный пароль слишко короткий';
		}
		if(strlen($parol)>15)
		{
			$errors[]='Введенный пароль слишко длинный';
		}
		if(strlen($parol2)<5)
		{
			$errors[]='Введенный пароль слишко короткий';
		}
		if(strlen($parol2)>15)
		{
			$errors[]='Введенный пароль слишко длинный';
		}
		if(preg_match('/^[A-Za-zd_]/',$phone))
		{
			$errors[]='Номер не может содержать букв';
		}
		if(strlen($phone)>13)
		{
			$errors[]='Вы ввели неправильный номер';
		}
		if(strlen($phone)<9)
		{
			$errors[]='Вы ввели неправильный номер';
		}
		if(preg_match('/^[А-Яа-я]/',$name))
		{
			$errors[]='Логин должен состоять из Латинских символов';
		}
		if(preg_match('/^[А-Яа-я]/',$parol))
		{
			$errors[]='Пароль должен состоять из Латинских символов';
		}
		if(preg_match('/^[А-Яа-я]/',$parol2))
		{
			$errors[]='Пароль должен состоять из Латинских символов';
		}
		if($parol!==$parol2)
		{
			$errors[]='Пароли не совпадают!';
		}
		
		
				if(empty($errors))
				{
						
				if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
					
					
						$result = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `email` = '$mail';"));
						if($result==0)
						{
							
							$result1 = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `phone` = '$phone';"));
							if($result1==0)
							{
								
							$result2 = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `login` = '$name';"));
							if($result2==0)
							{
							$date=date("l dS of F Y h:I:s A");
							$sql = mysql_query("INSERT INTO `user` (`email`, `password`,`phone`,`login`,`date`) 
							VALUES ('$mail','$pass','$phone','$name','$date')");
							echo '<div style="color: green;">',"Добро пожаловать ".$mail.'</div><hr>';
							$result3 = mysql_query("SELECT * FROM `user` WHERE `email` = '$mail';");
							//$result_query = mysql_fetch_assoc($result2);
							$_SESSION['logged_user'] = $result3;
							echo '<script>location.replace("index.php");</script>';
							exit;
							}
							else
							{
								echo '<div style="color: red;">',"Логин уже занят",'</div><hr>';
							}
							}
							else
							{
								echo '<div style="color: red;">',"Номер уже зарегистрирован",'</div><hr>'; 
							}
						}
						else
						{
						echo '<div style="color: red;">',"E-mail уже зарегистрирован",'</div><hr>'; 
						}
				}
				else
					{
					echo "Mail введен неверный";
					}
					}
				else
				{
					echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
				}
				
}
?>
<form method="POST">
<h1 class="pre1">Регистрация</h1>
<input type="text" name="login" placeholder="Эл.почта: Ivanov@mail.ru" class="poleVxod3">
<input type="text" name="name" class="poleVxod3" placeholder="Логин: IvanIvanov">
<input type="int" name="phone" class="poleVxod3" placeholder="Телефон:8-9**-***-**-**">
<input type="password" name="parol" class="poleVxod3" placeholder="Пароль:5-15 символов">
<input type="password" name="parol2" class="poleVxod3" placeholder="Пароль: *********">
<p> <input type="submit" name="reg" value="Регистрация" class="buttonVxod2" ></p>
</form>

</div>
<?
include'footer.php';
?>