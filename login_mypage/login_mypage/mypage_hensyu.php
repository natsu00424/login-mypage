<?php
mb_internal_encoding("utf8");

session_start();
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login">
                <a href="log_out.php">ログアウト</a>
            </div>
        </header>
        <main>
            <div class="box1">
                <form action="mypage_update.php" method="post">
                    <h2>会員情報</h2>
                    <div class="box2">
                        <div class="hello">
                        <?php echo "こんにちは！".$_SESSION['name']."さん"?>
                        </div>
                        <div class="picture">
                            <img src="<?php echo $_SESSION['picture']; ?>">
                        </div>
                        <div class="info">
                            <p>氏名：<input type="text" size="30" class="formbox" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                            <p>メール：<input type="text" size="30" class="formbox" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                            <p>パスワード：<input type="text" size="30" class="formbox" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
                        </div>
                    </div>
                    <textarea rows="5" cols="75" name="comments"><?php echo $_SESSION['comments']; ?>
                    </textarea>
                    <div class="button">
                        <input type="submit"  class="submitbutton" value="この内容に変更する"/>
                    </div>
                </form>   
            </div>
        </main>
        <footer>
            @2018 InterNous..inc. All rights reserved
        </footer>
    </body>
</html>
