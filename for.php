<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         for( $i = 1; $i <= 10; $i ++){
         echo $i . '<br>';
         }
         ?>
     </p>    
     <p>
         <?php
         $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
 
         // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
         foreach ($personal_data as $key => $value) {
             echo "{$key}は{$value}です。<br>";
         }
 
         // 連想配列$personal_dataの値を1つずつ順番に出力する
         foreach ($personal_data as $value) {
             echo $value . '<br>';
         }
         ?>
     </p>
 </body>
 
 </html>