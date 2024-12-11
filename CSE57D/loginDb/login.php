<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1,
                   shrink-to-fit=no"/>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Login Form</title>
</head>

<body>
    <h1 class="text-danger text-center">
        Login Form
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="" method="post">
                            <div class="form-group">
                                <label for="username">
                                    username
                                </label>
                                <input type="username"
                                       class="form-control username"
                                       placeholder="username" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password
                                </label>
                                <input type="password"
                                       class="form-control password"
                                       placeholder="Password"
                                    required />
                            </div>
                            <button class="btn btn-danger submit">
                                Login
                            </button>
                        </form>
                        <p class="mt-3">
                            Not registered?
                            <a href="registration.php">Create an
                                account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_server["submit"])){
	
}
?>
