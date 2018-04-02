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
	$name=$data['name'];
	$price=$data['price'];
	$img=$data['img'];
	$errors=array();

if(isset($date)){
	
	if($id=='')
		{
			$errors[]='Введите № товара';
		}
		if($name=='')
		{
			$errors[]='Введите название';
		}
		if($price=='')
		{
			$errors[]='Введите цену';
		}
		if($img=='')
		{
			$errors[]='Введите путь картинки';
		}
		
	if(empty($errors)){
	
		$result1 = mysql_num_rows(mysql_query("SELECT * FROM `Casio2` WHERE `id` = '$id';"));
							if($result1==1)
							{
							$sql = mysql_query("UPDATE Casio2 SET title='$name', price='$price', img='$img' WHERE id='$id'");
								echo "Товар отредактирован";
							}	
					else
						{
						 echo "Такого товара не существует";
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
<a href="add_CasioK.php" class="a102">Добавление товара</a>
<a href="delete_CasioK.php" class="a102">Удаление товара</a>
<a href="update_CasioK.php" class="a102">Изменение товара</a>
<a href="Casio-K.php" class="a102">Cписок товаров</a>

<div class="content560">
<p class="p55">№ товара:</p><br/>
<input type="text" name="id" class="input101">
<p class="p55">Новое название:</p><br/>
<input type="text" name="name" class="input101">
<p class="p55">Новая цена:</p><br/>
<input type="text" name="price" class="input101">
<p class="p55">Новый путь к изображению:</p><br/>
<input type="text" name="img" class="input101">
	<input type="submit" name="dobavlenie" value="Редактировать" class="button101">
	
</div>
	
</div>
</form>



<?
include'footer.php';
?>