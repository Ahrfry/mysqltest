// script adding.php
<?php
//if($id){


mysql_connect("localhost", "root", "123243") or die("connection failed");


$sql = "insert into ccmk.Group (creator, startDate, name) values ('" . $_POST['creator'] . "', '" . $_POST['startDate'] . "', '" . $_POST['name'] . "')";

$result = mysql_db_query("ccmk", $sql);
$insertData=mysql_affected_rows();
echo "$insertData data was inserted succesfuly <p>";
echo "Data stored in ccmk.Group";

if($result){
$sql = "select id, creator, startDate, name from ccmk.Group";
$result = mysql_db_query("ccmk", $sql);
if($result){
print ("<table width=\"95%\" align=center border=2>");
print ("<tr><td width=\"50%\" bgcolor = \"FFF00\">id</td><td width=\"50%\" bgcolor = \"FFF00\">Creator</td><td width=\"50%\" bgcolor = \"FFF00\">startDate<td width=\"50%\" bgcolor = \"FFF00\">Name</td></tr>");
/* Loop to go over the data stored*/
while($register=mysql_fetch_array($result)){
  $id=$register["id"];
  $creator=$register["creator"];
  $startDate=$register["startDate"];
  $name=$register["name"];
  print ("<tr><td>$id</td><td>$creator</td><td>$startDate</td><td>$name</td></tr>");
}
echo ("</table>");
}
}
//}
include ('menu.inc');
?>

