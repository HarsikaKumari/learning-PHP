<html>
<body>
<table cellspacing = '0' border = '1'>
<?php
	for($row = 0; $row <= 7; $row++) {
		echo "<tr]]]]]
		for($col = 0; $col <= 7; $col++) {
			$total =  $row + $col;
			if($total %2 == 0) {
				echo "<td bgcolor=black height = 30px width = 30px > </td>";
			} else {
				echo "<td bgcolor=white height = 30px width = 30px > </td>";
			}
		} 
		echo "</tr>";
	}
?>
</table>
</body>
</html>
