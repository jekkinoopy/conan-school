<?php
  $dsn="mysql:host=localhost;charset=utf8;dbname=school";
  $pdo=new PDO($dsn,'root','');
  
  $sql="select count(*) from `members` where `account`
  "
  // 痾為什麼沒有註解
?>