

<?php


mysql_connect("localhost", "root", "123243") or die("connection failed");


$sql = "select * from ccmk.Group order by id asc";


$result = mysql_db_query("ccmk", $sql);
if($result){
  print ("<b>Select what you wish to delete<p></b>");
  print ("<table width=80% align=center border=3>");
  print ("<tr><td>Id</td><td>Creator</td><td>startDate</td><td>Name</td></tr>");
 
 while ($register=mysql_fetch_array($result)){
    $id= "$register[id]";
    $creator="$register[creator]";
    $startDate="$register[startDate]";
    $name="$register[name]";

   print ("<tr><td><align=center><a href=\"deldata1.php?id=$id&creator=$creator&startDate=$startDate&name=$name\">$id</a></td><td>$creator</td><td>$startDate</td><td>$name</td></tr>");
  }

print ("</table>");

}

else{
  printf("There are no data");
}

mysql_free_result($result);

?>

