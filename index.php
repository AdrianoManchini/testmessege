<?php
    if (!empty($_POST)) {
        require_once 'Telegram.php';

        Telegram::sendMessage($_POST['message']);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Telegram</title>
    <meta name="description" content="Send telegram message">
    <meta name="author" content="Vilan">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1 style="text-align: center; margin: 40px;">Send your message to Telegram VilanTestBot</h1>

    <form action="" method="post">

        <div style="width: 320px; margin: 30px auto 10px;">
            <textarea name="message" rows="5" placeholder="Enter you message here..." style="width: 100%;"></textarea>
        </div>

        <div style="width: 320px; margin: 0 auto; text-align: center;">
            <input type="submit" value="Send message">
        </div>

    </form>

</body>
</html>