<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
    <style>

    </style>
</head>
<body>

<?php


try {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $title=$_POST['title'];
    $message=$_POST['message'];

    $name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
    $email=htmlspecialchars($email,ENT_QUOTES,'UTF-8');
    $title=htmlspecialchars($title,ENT_QUOTES,'UTF-8');
    $message=htmlspecialchars($message,ENT_QUOTES,'UTF-8');

    $dsn = 'mysql:dbname=github;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'root';
    $dbh = new PDO($dsn, $user ,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'INSERT INTO contact (name,email,title,message) VALUES (?,?,?,?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $name;
    $data[] = $email;
    $data[] = $title;
    $data[] = $message;
    $stmt->execute($data);
    
    $dbh = null;
    
    echo 'メッセージを送信しました。 <br />';
    
}
catch (Exception $e)
{
    // print $e->getMessage ();
    print 'ただいま障害により大変ご迷惑をお掛けしております。 ';
    exit();
}


    
?>
    
<a href="contact.php">戻る</a>

</body>
</html>