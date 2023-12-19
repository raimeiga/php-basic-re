<!-- 問題：<body>～</body>の間に、
htmlでpタグを使って「この文章はHTMLで出力しています。」と書き、
phpでpタグを使って、「この文章はphpで出力しています。」と書き、
ブラウザに両方が表示されるようにせよ。
-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>この文章はhtmlで出力してます</p>
    <p>
        <?php
        echo 'この文章はphpで出力してます';
        ?>
    </p>
</body>

</html>


<!-- 正解　URLは、http://localhost/php-basic-re/index.php
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