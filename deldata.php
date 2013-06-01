

<?php

mysql_connect("localhost", "root", "123243") or die("connection failed");

/*Making  a sql call to select all data in ccmk.Group in order*/
$sql = "select * from ccmk.Group order by id asc";


$result = mysql_db_query("ccmk", $sql);

  print ("<b>Select what you wish to delete<p></b>");
  print ("<table width=80% align=center border=3>");
  print ("<tr> <td></td><td>Id</td><td>Creator</td><td>startDate</td><td>Name</td></tr>")
  while ($register=mysql_fetch_array($result)){
    $id=$register["id"];
    $creator=$register["creator"];
    $startDate=$register["startDate"];
    $name=$register["name"];
    print ("<tr><td><align=center><a href=\ "deldata1.php?id=$id&creator=$creator&startDate=$startDate&name=$name\">$id</a></td><td>$creator</td><td>$startDate</td><td>$name</td></tr>");
  }
print ("</table>");



mysql_free_result($result);
include ("menu.inc");
?>

