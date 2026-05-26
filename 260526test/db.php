<?php

    function all($table){
        //連線資料庫
        $dsn="mysql:host=localhost;dbname=school_test260526;charset=utf8";
        $pdo=new PDO($dsn,'root','');

        $rows=$pdo->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);
        //fetchAll全部撈取 把這段指令查詢出來的所有橫列結果全部打包外帶
    
        return $rows;
        //return發射按鈕 切斷並結束現在這個函式
        //發射函式裡面撈出來的資料，「外帶」出來給外面的人使用。
        
    }

?>