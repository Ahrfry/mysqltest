<html>
<title> PHP ---> MySQL</title>
<body>
<b> Adding data</b>
<form method="POST" action ="adding.php">
<ul>
<li>id <input type="text" name="id" size="10"></li>
<li>creator <input type="text" name="creator" size="12"></li>
<li>startDate <input type="text" name="startDate" size="12"></li>
<li>name <input type="text" name="name" size="12"></li>
</ul>
<p align = "left"><input type="submit" value = "Add new Group">
<input type = "reset" value = "Clear">
<p align ="center">
</p>
<a href ="deldata.php"> Delete Group</a>
<?php
/*
mysql_select_db("ccmk");
$sql = "select * from  ccmk.Group order by name asc";
$nrows = mysql_affected_rows();
$result = mysql_query($sql);
$nrows = mysql_num_rows($result);
$nfields = mysql_num_fields($result);

print ("<table border=2 width=70% align=center bgcolor = \"#fff000\">");
print ("<td> <p align=center> id</td><td> <p align=center> creator </td><td> <p align = center> date</td><td> <p align=center> Name </td><tr>");  
for($line =0; $line < $nrows; $line++){
  for($columns = 0; $columns < $nfields; $columns++){
    $field = mysql_field_name ($result, $columns);
    $content = mysql_result($result, $line,"$field");
    print ("<td>$content</td>");
    
   }
   print("<tr>");
}

print ("</table>");
mysql_free_result($result);
mysql_close();
*/

include ('menu.inc');
?>
</body>
</html>
