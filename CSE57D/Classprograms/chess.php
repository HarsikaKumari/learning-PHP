<?php
echo '<table style="width: 270px; border-collapse: collapse;">';

$cellSize = 30; // Height and width of each cell

for ($row = 0; $row < 8; $row++) {
    echo '<tr>';
    for ($col = 0; $col < 8; $col++) {
        // Alternate colors for the chessboard pattern
        if (($row + $col) % 2 == 0) {
            echo '<td style="width: '.$cellSize.'px; height: '.$cellSize.'px; background-color: white; border: 1px solid black;"></td>';
        } else {
            echo '<td style="width: '.$cellSize.'px; height: '.$cellSize.'px; background-color: black;"></td>';
        }
    }
    echo '</tr>';
}

echo '</table>';
?>
