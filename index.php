<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>会員登録画面</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/form.js"></script>
</head>

<body>
    <div class="wrapper">
    <div class="main">
        <div class="left">
            <img class="top" src="img/ai_home.jpg" alt="">
        </div>
        <div class="right">
            <div class="form" style="display: none;">
            <br>
            <h1>Logo</h1>
                <h2>Lumina Mind</h2>
                <p class="text-main">ルミナマインドで、あなたを解き放とう</p><br>
                <form action ="write.php" class="form-horizontal" style="margin:30px 0;" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">ユーザー名</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" id="name" class="form-control" placeholder="数字,大文字を入れてください">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-6">
                        <input type="text" name="email" id="email" class="form-control" placeholder="aaaa@gmail.com">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="rule">利用規約</label>
                    <div class="col-sm-6">
                    <label class="checkbox-inline">
                    <input type="checkbox" name="checkbox1" value="check1">利用規約に同意する
                    </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <input type="submit" value="送信" class="btn btn-primary">
                        <input type="reset" value="リセット" class="btn btn-default btn_clear">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <footer><small>LuminaMind</small></footer>
    </div>

    <script>
        $(".form").slideDown(500);
    
    </script>
</body>

</html>