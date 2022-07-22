<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Sender</title>
</head>
<body>
    <p>Mail Sender is created by Zordon1337 but <b>it's using the <a href="https://github.com/PHPMailer/PHPMailer">PHPmailer Library</b></a></p>
    <form action="send.php" method="POST">
        <p> </p>
        <h3>Enter target mail</h3>
        <input type="email" name="mail" />
        <h3>Subject</h3>
        <input type="email" name="Subject" />
        <h3>Mail Body</h3>
        <textarea name="Mbody" cols="40" rows="5"></textarea>
        <p></p>
        <input type="submit" value="Send Mail" />
    </form>
</body>
</html>