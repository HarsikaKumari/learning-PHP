<?php
//php script to set a session variable named "userid" with the value 10020
session_save_path('C:\xampp\htdocs\Anchal\Session');
session_start();
?>
<html>
<body>
<?php
$_SESSION["Userid"]=10020;
echo "Session variable 'userid' has been set with the value 10020";
echo "<br>";
echo "userid:".$_SESSION["Userid"].".<br>";

?>
</body>
</html>