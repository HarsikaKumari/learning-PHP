<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>HTML Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vph;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 500px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: blue;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h2>Registration Form</h2>
        <form method='POST'>
            <label for="first">First Name:</label>
            <input type="text" id="first" name="firstname" value="<?php ?>" required class ="<?php echo (!empty($username_err)) ? 'has error' : ''; ?>"/>

            <label for="last">Last Name:</label>
            <input type="text" id="last" name="lastname" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"
                   pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{3,}$"
                   title="Password must contain at least one number,
                           one alphabet, one symbol, and be at
                           least 3 characters long" required />

            <label for="repassword">Confirm Password:</label>
            <input type="password" id="repassword" name="confirm" required />
			
            <button type="submit" class="mb-2" name="submit">
                Submit
            </button>
		
		    <button type="reset">
                Reset
            </button>
			<p> Already have an account? <a href='login.php'> Login now </a> </p>
        </form>
    </div>
</body>

</html>

<?php
Require_once "config.php";

if(isset($_POST['submit'])) {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	if(trim($_POST["password"]) === trim($_POST["confirm"])){
		$password = trim($_POST["password"]);
		
		$sql = "INSERT INTO user(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";

		$result = mysqli_query($conn, $sql);
		if($result){
			echo "Value Inserted Sucessfully!";
		} else {
			echo "Error: " . mysqli_error ;
		}
	
		mysqli_close($conn);
	} else {
		echo "Password does not matches";
	}
}
?>