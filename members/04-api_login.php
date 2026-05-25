<?php
  $dsn="mysql:host=localhost;charset=utf8;dbname=school";
  $pdo=new PDO($dsn,'root','');
  //建立連線 $pdo 下面會用$result使用連線 $pdo->

  $sql="select count(*) from `members` where `account`='{$_POST['account']}' AND `password`='{$_POST['password']}'";
  //選擇 全部的記數 從`members`資料表 當`account`欄位 = 傳回來的['account']內容
  $result= $pdo->query($sql)->fetchColumn();
  //資料庫回傳的結果$result=透過連線物件$pdo->執行 查詢query這個動作 ($sql)裡面的指令 執行 fetch擷取整橫列的資料
// 看到 fetch() ➜ 它是陣列 ➜ 判斷式打 $result[0]。
// 看到 fetchColumn() ➜ 它是純數字 ➜ 判斷式打 $result。
  // if($result==1){
  //   echo "登入成功";
  // }else{
  //   echo "登入失敗";
  // }
//登入成功||失敗是測試用，實際上應該是跳轉畫面||錯誤訊息

?>
<pre>
  <?=print_r($result);?>
</pre>