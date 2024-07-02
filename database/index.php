<?php
include("database.php");

// $username = 'shetal';
// $passward = 'howareyou';

// $hash = password_hash($passward, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users(name, password) VALUES ('$username', '$hash')";
// try {
//     mysqli_query($conn, $sql);
//     echo "User registered";
// } catch (mysqli_sql_exception) {
//     echo "User not registered";
// }

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0 ) {
    while($row = mysqli_fetch_assoc($result)) {

        // foreach($row as $key => $value) {
        //     echo "{$key} => {$value}" . "<br>";
        // }
        echo $row["id"]. "<br>";
        echo $row["name"]. "<br>";
        echo $row["reg_date"]. "<br>";
    };
} else {
    echo "User not found";
}

mysqli_close($conn);

?>
