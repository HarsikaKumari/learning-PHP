<html>
<body>
<table border=1 cellpadding=3 cellspacing=0>
<?php
	for($n=1;$n<=10;$n++){
		echo "<tr>";
			for($m=1;$m<=10;$m++){
				echo "<td> $n*$m=".$n*$m."</td>";
			}
			echo "</tr>";
	}		
?>
</table>
</body>
</html>