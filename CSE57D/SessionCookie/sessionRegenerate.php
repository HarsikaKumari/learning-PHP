<?php
session_save_path('C:\xampp\htdocs\Anchal\Session');
session_start();
//regenerate session id

session_regenerate_id(true);
echo "Session ID has been regenerated";
?>