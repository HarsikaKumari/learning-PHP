<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
        <label name= "username"> username: </label>
        <input type = "text" name = "username"> <br>
        <label name= "age"> age: </label>
        <input type = "TEXT" name = "age"> <br>
        <input type="submit" name="login" value="login"> 
    </form>
</body>
</html>

<?php
if(isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    // filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "Hello {$username} <br>";
    echo "your age is {$age} <br>";
}
?>
