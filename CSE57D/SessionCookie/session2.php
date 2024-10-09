<?php
session_start();
?>
<html>
<body>
<?php
echo "Username:".$_SESSION["Username"].".<br>";
echo "Password:".$_SESSION["Password"].".";
?>
</html>
</body>