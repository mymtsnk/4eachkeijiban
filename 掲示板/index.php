<!doctype html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>4eachblog　掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php 
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt=$pdo->query("select*from 4each_keijiban");



?>

<header>
　
    <img src="4eachblog_logo.jpg">
    <div class="menu">
        <ul>
            <a href="#">トップ</a>
            <a href="#">プロフィール</a>
            <a href="#">4eachについて</a>
            <a href="#">登録フォーム</a>
            <a href="#">問い合わせ</a>
            <a href="#">その他</a>
    </div>
</header>

<main>
    <div class="left-block">
        <h1>プログラミングに役立つ掲示板</h1>

        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>

            <div class="parts">
            <rabel>ハンドルネーム</rabel><br>
            <input type="text" name="handlename" class="handlename" size="35"><br>
            </div>

            <div class="parts">
            <rabel>タイトル</rabel><br>
            <input type="text" name="title" class="title" size="35"><br>
            </div>

            <div class="parts">
            <rabel>コメント</rabel><br>
            <textarea name="comments" class="comments" cols="45" rows="9">
            </textarea>
            </div>

            <div class="parts">
            <input type="submit" value="送信する" class="button">
            </div>
        </form>
        <div class="kiji">
        <?php 
        
        while($row=$stmt->fetch()){
            echo "<div class='article'>";
            echo "<h2>".$row['title']."</h2>";
            
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
        </div>

    </div>
    
    </div>

    <div class="right-block">
        <div class="contents">
            <h2>人気の記事</h2>
            <a href="#">PHPオススメ本</a>
            <a href="#">PHP MyAdminの使い方</a>
            <a href="#">今人気のエディタTop5</a>
            <a href="#">HTMLの基礎</a>
        </div>

        <div class="contents">
            <h2>オススメリンク</h2>
            <a href="#">インターノウス株式会社</a>
            <a href="#">XAMPPのダウンロード</a>
            <a href="#">Eclipsのダウンロード</a>
            <a href="#">Braketsのダウンロード</a>
        </div>

        <div class="contents">
            <h2>カテゴリ</h2>
            <a href="#">HTML</a>
            <a href="#">PHP</a>
            <a href="#">MySQL</a>
            <a href="#">JavaScript</a>
        </div>
    </div>

</main>

<footer>
copyright©internous ｜4each blog the which provides A to Z about programing.
</footer>


</body>
</html>