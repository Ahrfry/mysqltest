<html>
<body>

<?php
mysql_connect("localhost", "root", "123243") or die("connection failed");

 
$sql = "select * from ccmk.Group where id=".$_REQUEST['id']."";
 
$result = mysql_db_query("ccmk", $sql);

if($result){
print ("The data with id = ".$_REQUEST['id']." will be deleted");
print ("<table width=90% align=center border=3>");
print ("<tr><td>Id</td><td>Creator</td><td>startDate</td><td>Name</td><td></tr>");


while($register=mysql_fetch_array($result)){
  $id=$register["id"];
  $creator=$register["creator"];
  $startDate=$register["startDate"];
  $name=$register["name"];
  print ("<tr><td>$id</td><td>$creator</td><td>$startDate</td><td>$name</td></tr>");
}
echo ("</table>");

if($_REQUEST['submit']){
  $sql = "delete * from ccmk.Group where id = ".$_REQUEST['id'];
  $result = mysql_db_query("ccmk", $sql);
  $num_del = mysql_affected_rows();
  if($num_del>0){
    print("<p> Data deleted succesfuly");
    }
}

else{
?>
  <form method="post" action="<?php echo $_SERVER['PATH_INFO']?>">
  <p> Confirm delete data?
  <input type="submit" name="submit" value="OK">
  <input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>">
  </form>
  <?php
  } 
 }
else{
printf("There are no data");
}
mysql_close();
?>
</body>
</html>  
