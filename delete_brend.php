<?
session_start();
?>
<?
include'pole.php';

include'header.php';
?>
<div class="content">
<?
$date=$_POST['dobavlenie'];

	$id=$data['id'];
	$errors=array();

if(isset($date)){
	
	if($id=='')
		{
			$errors[]='Введите № бренда';
		}
		
	if(empty($errors)){
	
		$result1 = mysql_num_rows(mysql_query("SELECT * FROM `brend` WHERE `id` = '$id';"));
							if($result1==1)
							{
							$sql = mysql_query("DELETE FROM `brend` WHERE id=$id");
								echo "Вы удалили товар";
							}	
					else
						{
						 echo "Такого бренда не существует";
						}
					
	
	}
else
	{
	echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
}
	?>
	<form method="POST">


<h1>Выберите действие:</h1>
<a href="add_brend.php" class="a102">Добавление бренда</a>
<a href="delete_brend.php" class="a102">Удаление брендов</a>
<a href="update_brend.php" class="a102">Изменение брендов</a>
<a href="brend.php" class="a102">Cписок брендов</a>

<div class="content556">
<p class="p55">№ бренда:</p><br/>
<input type="text" name="id" class="input101">

	<input type="submit" name="dobavlenie" value="Удалить" class="button101">
	
</div>
</div>
</form>



<?
include'footer.php';
?>