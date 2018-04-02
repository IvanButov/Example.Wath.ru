<?
session_start();
?>
<? 
include'pole.php';
include'header.php';
?>
<?
$connection=include'connection.php';
echo $connection;
?>
<div class="content">
<table class="table">
<?if(isset($_SESSION['logged_user'])):?>
<h1>Изменение данных магазина:</h1>
<a href="add_brend.php" class="a100">Добавление бренда</a>
<a href="delete_brend.php" class="a100">Удаление бренда</a>
<a href="update_brend.php" class="a100">Изменение бренда</a>	
<?
else :?>
<p>Авторизируйтесь, чтобы получить доступ ко всем ресурсам сайта!!!</p>
 <?
 endif;
 ?>
<caption class="caption">Cамые популярные бренды часов</caption>


<?
$mquery=mysql_query("select * from brend") or die('Ошибка в запросе: ' . mysql_error());
	for ($i=1;$i<=mysql_num_rows($mquery);$i++)
	{
	$table=mysql_fetch_array($mquery);
	echo "<tr><td>
<img src=".$table['img']."></td><td>".$table['text']."</td></tr>";


	}
?>
</table>
</div>
<?
include'footer.php';

?>