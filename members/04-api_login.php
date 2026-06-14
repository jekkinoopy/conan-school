<?php
  $dsn="mysql:host=localhost;charset=utf8;dbname=school";
  $pdo=new PDO($dsn,'root','');
  
  $sql="select count(*) 
        from `members` 
        where `account`
  "
  // 選擇 (所有)的總數 
  // 從`members`這個資料表 
  // 當 `account`這個資料欄位 = '這個文字串{叫做 $_POST 的[陣列裡面'叫這個名字的']}'
?>