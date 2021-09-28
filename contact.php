<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
    <style>
        .main {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="containar">
            <h1>お問い合わせ</h1>
            <form method="post" action="contact_check.php">
                お名前
                <br>
                <input type="text" class="form" name="name" value="">
                <br>
                メールアドレス
                <br>
                <input type="email" class="form" name="email" value="">
                <br>
                件名
                <br>
                <input type="text" class="form" name="title" value="">
                <br>
                メッセージ
                <br>
                <textarea name="message" class="form" rows="5" value=""></textarea>
                <br>
                <button type="submit">決定</button>
            </form>
        </div>
    </div>
</body>
</html>