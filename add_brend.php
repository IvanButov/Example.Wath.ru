<?
session_start();
?>
<?
include'pole.php';

include'header.php';
?>
<form method="POST">
<div class="content">

<h1>Выберите действие:</h1>
<a href="add_brend.php" class="a102">Добавление бренда</a>
<a href="delete_brend.php" class="a102">Удаление брендов</a>
<a href="update_brend.php" class="a102">Изменение брендов</a>
<a href="brend.php" class="a102">Cписок брендов</a>

<div class="content555">
<p class="p55">Описание бренда:</p><br/>
<input type="text" name="price" class="text">
<p class="p55">Путь к изображению:</p><br/>
<input type="text" name="img" class="text" size="30">

	<input type="submit" name="dobavlenie" value="Добавить" class="button101">
	
	</div>
<?
$date=$_POST['dobavlenie'];

	$price=$data['price'];
	$img=trim($data['img']);
	$errors=array();

if(isset($date)){
		if($price=='')
		{
			$errors[]='Введите стоимость товара';
		}
		if($img=='')
		{
			$errors[]='Введите адрес картинки';
		}
		
	if(empty($errors)){
	
	
		$sql = mysql_query("INSERT INTO `brend` (`img`, `text`) 
							VALUES ('$img','$price')");
							
							echo "Вы добавили бренд, можете просмотреть его на странице!";
							
	
	
			}
else
	{
	echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
}
	?>
</div>
</form>



<?
include'footer.php';
?>