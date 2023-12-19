<!-- 
問題1：phpのコードの書き方を３つ



問題2：<body>～</body>の間に、

htmlでpタグを使って「この文章はHTMLで出力しています。」と書き、
phpでpタグを使って、「この文章はphpで出力しています。」と書き、
ブラウザに両方が表示されるようにせよ。


正解1：
・PHPタグ（<?php ～ ?>）の中にコードを書く
・文末にセミコロンをつける
・出力は「echo '  ';」

正解2：
------------------------------------------------------------
<p>この文章はHTMLで出力しています。</p>
<p>
   <?php 
      echo 'この文章はPHPで出力しています。';  //データ型が文字列型なので、'　　　'で囲む
   ?>
</p>
------------------------------------------------------------
-->


<!-- 正解（全部合わせたやつ）
    <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>この文章はHTMLで出力しています。</p>
    <p>
        <?php 
        echo 'この文章はPHPで出力しています。';  //データ型が文字列型なので、'　　　'で囲む
        ?>
    </p>
</body>

</html> 
-->