
<?php
  include('settings.php');
  mysql_connect("localhost", $db, $pass) or die("connection failed");


 
  $sql = "select * from ccmk.Group where id=".$_REQUEST['id']."";
  
  $result = mysql_db_query("ccmk", $sql);
  
  $groups1 = array();
    while($register = mysql_fetch_array($result)){
      $groups1[] = array(
        'id' => $register['id'],
        'creator' => $register['creator'],
        'startDate' => $register['startDate'],
        'name' => $register['name']
      );
    }


if($_REQUEST['submit']){
  $sql = "delete * from ccmk.Group where id = ".$_REQUEST['id'];
  $result = mysql_db_query("ccmk", $sql);
  $num_del = mysql_affected_rows();
  if($num_del>0){
    }
}

mysql_close();
  echo json_encode($groups1);
?>
