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
<a href="add_Asus.php" class="a102">Добавление товара</a>
<a href="delete_Asus.php" class="a102">Удаление товара</a>
<a href="update_Asus.php" class="a102">Изменение товара</a>
<a href="Asus.php" class="a102">Cписок товаров</a>


<div class="content555">
<p class="p55">Наименование часов:</p><br/>
<input type="text" name="name" class="text">
<p class="p55">Стоимость часов:</p><br/>
<input type="text" name="price" class="text">
<p class="p55">Путь к изображению:</p><br/>
<input type="text" name="img" class="text" size="30">

	<input type="submit" name="dobavlenie" value="Добавить" class="button101">
	
	</div>
<?
$date=$_POST['dobavlenie'];

	$name=trim($data['name']);
	$price=$data['price'];
	$img=trim($data['img']);
	$errors=array();

if(isset($date)){
	
	if($name=='')
		{
			$errors[]='Введите название';
		}
		if($price=='')
		{
			$errors[]='Введите стоимость товара';
		}
		if($img=='')
		{
			$errors[]='Введите адрес картинки';
		}
		
	if(empty($errors)){
	
	
		$sql = mysql_query("INSERT INTO `Asus` (`img`, `title`,`price`) 
							VALUES ('$img','$name','$price')");
							
							echo "Вы добавили товар, можете просмотреть его на странице!";
							
	
	
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