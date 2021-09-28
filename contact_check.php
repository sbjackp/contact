<?php

ini_set('display_errors', "On");

$name=$_POST['name'];
$email=$_POST['email'];
$title=$_POST['title'];
$message=$_POST['message'];

$name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
$email=htmlspecialchars($email,ENT_QUOTES,'UTF-8');
$title=htmlspecialchars($title,ENT_QUOTES,'UTF-8');
$message=htmlspecialchars($message,ENT_QUOTES,'UTF-8');


$error_messages=[];

if($name=='') {
    $error_messages['お名前'] = 'お名前が入力されていません';
}

if($email=='') {
    $error_messages['メールアドレス'] = 'メールアドレスが入力されていません';
}

if($title=='') {
    $error_messages['件名'] = '件名が入力されていません';
}

if($message=='') {
    $error_messages['本文'] = '本文が入力されていません';
}

// var_dump($error_messages);

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
</head>
<body>
    <?php if (count($error_messages)>0) : ?>
        <?php foreach ($error_messages as $key => $error_message) : ?>
            <div><?php echo $key . "：" . $error_message ?></div>
        <?php endforeach; ?>
        <form>
            <input type = "button" onclick = "history.back()" value = "戻る">
        </form>
    <?php else : ?>
        <div>お名前：<?php echo $name ?></div>
        <div>メールアドレス：<?php echo $email ?></div>
        <div>件名：<?php echo $title ?></div>
        <div>本文：<?php echo $message ?></div>
        <form method="post" action="contact_done.php">
            <input type="hidden" name="name" value="<?php $_POST['name'] ?>">
            <input type="hidden" name="email" value="<?php $_POST['email'] ?>">
            <input type="hidden" name="title" value="<?php $_POST['title'] ?>">
            <input type="hidden" name="message" value="<?php $_POST['message'] ?>">
            <br />
            <input type="button" onclick ="history.back()" value ="戻る">
            <input type="submit" value="OK">
        </form>
    <?php endif; ?>
</body>
</html>