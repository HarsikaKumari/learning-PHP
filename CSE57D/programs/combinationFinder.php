<!-- <!DOCTYPE html>
<html>

<head>
    <title>Find One Combination</title>
</head>

<body>
    <form method="post" action="">
        Enter the value of n: <input type="number" name="n" min="0" max="36" required>
        <input type="submit" value="Find Combination">
    </form>

    <?php
    // $n = $_POST['n'];

    // function findCombination($n)
    // {
    //     for ($a = 0; $a <= 9; $a++) {
    //         for ($b = 0; $b <= 9; $b++) {
    //             for ($c = 0; $c <= 9; $c++) {
    //                 $d = $n - ($a + $b + $c);
    //                 if ($d >= 0 && $d <= 9) {
    //                     return [$a, $b, $c, $d];
    //                 }
    //             }
    //         }
    //     }
    //     return null; // Return null if no combination is found
    // }

    // $result = findCombination($n);
    // if ($result) {
    //     echo "One combination is: " . implode(", ", $result);
    // } else {
    //     echo "No valid combination found.";
    // }
    // 
    ?>
</body>

</html> -->

<!DOCTYPE html>
<html>

<head>
    <title>Find One Combination</title>
</head>

<body>
    <form method="post" action="">
        Enter the value of n: <input type="number" name="n" min="0" max="36" required>
        <input type="submit" value="Find Combination">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['n'];

        // Try to find values of a, b, c, d
        $a = min(9, $n); // Start with the maximum possible value for a
        $b = min(9, $n - $a); // Calculate b based on the remaining value after a
        $c = min(9, $n - $a - $b); // Calculate c based on the remaining value after a and b
        $d = $n - $a - $b - $c; // The remaining value is assigned to d

        if ($d >= 0 && $d <= 9) {
            echo "One combination is: $a, $b, $c, $d";
        } else {
            echo "No valid combination found.";
        }
    }
    ?>
</body>

</html>