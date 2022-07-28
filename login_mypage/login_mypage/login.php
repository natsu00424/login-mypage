<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン機能</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login">
                <a href="login.php">ログイン</a>
            </div>
        </header>

        <main>
            <form action="mypage.php" method="post">
                <div class="form_contents">
                    <div class="mail">
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="50" value="<?php echo $_COOKIE['mail']; ?>" name="mail">
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" value="<?php echo $_COOKIE['password']; ?>" size="50" name="password">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="login_keep" value="login_keep"
                        <?php
                        if(isset($_SESSION["login_keep"])){
                            echo "checked='checked'";
                        }
                        ?>>ログイン状態を保持する
                    </div>
                    <div class="toroku">
                        <input type="submit" class="submitbutton" size="35" value="ログイン">
                    </div>
                </div>
            </form>

            <footer>
            @2018 InterNous.inc. All rights reserved
            </footer>
        </main>

    </body>

</html>