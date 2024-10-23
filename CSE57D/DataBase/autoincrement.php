<?php
include "config.php";

$sql="CREATE TABLE register(id int(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON 
UPDATE CURRENT_TIMESTAMP
)";
if($conn->query($sql)===True){
	echo "Table 'users' created successfuly";
}else{
	echo "error";
}
?>