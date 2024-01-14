
<!--反復の順番
index.php（php文の書き方）
data.php（データ型と四則演算）　
variable.php（変数）
array.php（配列）
associative-array.php（連想配列）
-->


<!-- 答え合わせをブラウザでやるときのURL↓
http://localhost/php-basic-re/black_board.php 
-->
<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 <body>
<<<<<<< HEAD
   
    <?php
    echo true;
    echo'<br>';
    echo 45 + 18;
    echo'<br>';
    echo 30-12;
    echo'<br>';
    echo 15 * 6;
    echo'<br>';
    echo 30 / 3;
    echo'<br>';
    echo 45 % 8;
    echo'<br>';
    echo 100-99.9;
    echo'<br>';    
    
    echo'今日の天気は'.'晴れ';
    echo'<br>';

    ?>
    <?php
      $name = '侍太郎';
      echo $name;
      echo'<br>';

      $name = '侍花子';
      echo $name;
      echo'<br>';

      $num = 3;
      echo $num - 1.2;
      echo'<br>';

      $my_name = '侍一郎';
      echo"私の名前は{$my_name}です。";
      echo'<br>';
      echo'私の名前は'.$my_name.'です。';
      echo'<br>';
    ?>
    <?php
      $user_names = ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎'];
      print_r($user_names);
      echo'<br>';

      //配列名[取得したい要素のインデックス];
      echo $user_names[3];

      //配列名[更新したい要素のインデックス]=更新する値;
      $user_names[0]='真田安房守';
      print_r($user_names);
      echo'<br>';

      //配列名[更新したい要素のインデックス]=更新する要素;
      $user_names[4]='大山巌';
      print_r($user_names);
      echo'<br>';

      //配列名[末尾の要素のインデックス]＝追加する要素;
      $user_names[5]='侍五郎';
      print_r($user_names);
      echo'<br>';

      $user_names[]='伊藤博文';
      print_r($user_names);
      echo'<br>';    
    ?>
    <?php
      $personal_data = ['name'=>'大久保利通','age'=>42,'gender'=>'男性'];
      print_r($personal_data);
      echo'<br>';

      //連想配列名['取得した値のキー名'];
      echo $personal_data['gender'];

      //連想配列名['更新したい値のキー名']='更新する値';
      $personal_data ['age']=43;
      print_r($personal_data);
      echo'<br>';

      //連想配列名['追加する値のキー名']=追加する値;
      $personal_data['hobby']='謀略';
      print_r($personal_data);
      echo'<br>';

      
    ?>
   
    
   </p>

=======
 <p>この文章はhtmlで書いています。</p>
  
>>>>>>> f79d6e9372c05c672b9f720178e4dbc69380def2
 </body>
 </html>

 