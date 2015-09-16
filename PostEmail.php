<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Post Email</title>
</head>
<body>

    <?php
        $myEmailAddress = "zain.hatim@gmail.com";
        $subject = "Questions!";

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];
        $header = "from: $name <$email>";

        mail($myEmailAddress, $subject, $message, $header);

    ?>
    <p>Thanks for Sending.</p>
</body>
</html>
