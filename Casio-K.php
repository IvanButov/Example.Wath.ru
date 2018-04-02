<?
session_start();
?>
<? 
include'pole.php';
include'header.php';
?>
<div class="content">
<?
include'menu.php';

?>
<?if(isset($_SESSION['logged_user'])):?>
<h1>Изменение данных магазина:</h1>
<a href="add_CasioK.php" class="a100">Добавление товара</a>
<a href="delete_CasioK.php" class="a100">Удаление товара</a>
<a href="update_CasioK.php" class="a100">Изменение товара</a>	
<?
else :?>
<p>Авторизируйтесь чтобы получить доступ ко всем ресурсам сайта!!!</p>
 <?
 endif;
 ?>
<h1>Каталог</h1>
<table class="table2">
<? 
$connection=include'connection.php';
$i=1; 
$result=mysql_query("SELECT * from Casio2");
while ($table = mysql_fetch_array($result)) { 
$i++; 
if($i % 3 > 1) 
{ 
?> 
<tr> 
</tr> 
<? }?> 
<td><a href="#"><img src="<? echo $table['img']; ?>"><br><p class="p3"><?echo $table['title']; ?></p></br><br><p class="p4"><?echo $table['price']; ?></p></br> <br><p class="p4"><?echo $table['id']; ?> номер</p></br></a></td>
<? } ?> 
</table>
</div>
<?
include'footer.php';
?>