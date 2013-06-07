

<?php
  include('settings.php');
  mysql_connect("localhost", $db, $pass) or die("connection failed");

  $sql = "select * from ccmk.Group order by id asc";

  $result = mysql_db_query("ccmk", $sql);
 
  $groups = array();
  while($register = mysql_fetch_array($result)){
    $groups[] = array(
      'id' => $register['id'],
      'creator' => $register['creator'],
      'startDate' => $register['startDate'],
      'name' => $register['name']
    );
  }

  //var_dump($groups);
  mysql_free_result($result);

  echo json_encode($groups);
?>

