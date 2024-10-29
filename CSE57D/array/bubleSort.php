<?php
// Sample array to be sorted
$array = [64, 25, 12, 22, 11];

// Bubble sort algorithm implementation
function bubbleSort(&$arr)
{
    $n = count($arr); // Get the length of the array

    // Loop through each element of the array
    for ($i = 0; $i < $n - 1; $i++) {
        // Last i elements are already sorted, so inner loop can go up to $n - $i - 1
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Compare adjacent elements
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap if elements are in the wrong order
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Call the function and pass the array to sort it
bubbleSort($array);

// Display the sorted array
echo "Sorted array: ";
foreach ($array as $value) {
    echo $value . " ";
}
