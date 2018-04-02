<? 
$header=include'header.php';
echo $header;
?>
<div class="content">
<?
include'menu.php';

?>
<table class="table2">
<? 
$connection=include'connection.php';
$i=1; 
$result=mysql_query("SELECT * from Apple");
while ($table = mysql_fetch_array($result)) { 
$i++; 
if($i % 3 > 1) 
{ 
?> 
<tr> 
</tr> 
<? }?> 
<td><a href="#"><img src="<? echo $table['img']; ?>"><br><p class="p3"><?echo $table['title']; ?></p></br><br><p class="p4"><?echo $table['price']; ?></p></br></a></td>
<? } ?> 
</table>
</div>
<?
$footer= include'footer.php';
echo $footer;
?>