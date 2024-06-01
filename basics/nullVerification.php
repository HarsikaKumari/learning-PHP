<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="nullVerification.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"> <br>

        <label> Password: </label>
        <input type="Password" name="Password"> <br>
        <button type="submit" value="login" name="login">
            submit</button>
    </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "username is required <br> ";
    } elseif (empty($password)) {
        echo "Password is required <br> ";
    } else {
        echo "Hello {$username}";
    }
}

foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br> ";
}
?>