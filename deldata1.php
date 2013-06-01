<?php
mysql_connect("localhost", "root", "123243") or die("connection failed");

 /*questioning table*/
$sql = "select * from ccmk.Group where id="._$REQUEST['id']."";

$result = mysql_db_query("ccmk", $sql);


print ("The data with id = ".$_REQUEST['id']." will be deleted");
print ("<table width=90% align=center border=3>");
print ("<tr><td>Id</td><td><tr><td>Creator</td><td><tr><td>startDate</td><td><tr><td>Name</td><td>");

/*Loop to interact with html and database*/
while($register=mysql_fetch_array($result)){
  $id=$register["id"];
  $creator=$register["creator"];
  $startDate=$register["startDate"];
  $name=$register["name"];
  print ("<tr><td>$id</td><td>$creator</td><td>$startDate</td><td>$name</td></tr>");
}
echo ("</table>");

/*deleting condition*/
if($_REQUEST['submit']){
  $sql = "delete * from ccmk.Group where id = ".$_REQUEST['id'];
  $result = mysql_db_query("ccmk", $sql);
  $num_del = mysql_affected_rows();
  if(num_del>0){
    print("<p> Data deleted succesfuly");
    }
}

 ?>
  
