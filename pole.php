<?
session_start();
?>
<?
?>
<?if(isset($_SESSION['logged_user'])):?>
<form method="POST" class="form1">
<input type="submit" value="Выход" name="but1" class="button101">

</form>
<?
else :?>
<form method="POST" class="form1">
 <a href="registr.php" value="Вход" class="button255">Вход</a>
 <a href="registration.php"  value="Регистрация" class="button255">Регистрация</a>
 </form>
 <?
 endif;
 ?>
 <?
 include'connection.php';
	$data= $_POST;
 	$exit=$data['but1'];
	$lk=$data['but2'];
	
 if(isset($exit))
 {
		unset($_SESSION['logged_user']);
		echo '<script>location.replace("index.php");</script>';
 }
 if(isset($lk))
 {
	 echo '<script>location.replace("index.php");</script>';
 }
 ?>