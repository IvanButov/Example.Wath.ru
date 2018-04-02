<?
  $dblocation = "127.0.0.1";
  $dbname = "Watch";
  $dbuser = "root";
  $dbpasswd = "";
  $dbcnct = @mysql_connect($dblocation, $dbuser, $dbpasswd);
  if (!$dbcnct)
  {
    echo "<p>К сожалению, не доступен сервер MySQL</p>";
    exit();
  }
  if (!@mysql_select_db($dbname,$dbcnct) )
  {
    echo "<p>К сожалению, не доступна база данных</p>";
    exit();
  } 
  ?>