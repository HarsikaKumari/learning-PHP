<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <div class="container mt-2">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mx-1 mx-md-4 mt-4">Sign up</p>
				<p class="text-center">Please fill this form to create an account.</p>
				
                <form class="mx-1 mx-md-4" action="login.php" method="POST">
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">					                    
                      <label class="form-label" >Username</label>
					   <input type="text"name="username" class="form-control" value="<?php echo $username?>" />
                    </div>
                  </div>
				  
                  <div class="d-flex flex-row align-items-center mb-4">                  
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">                      
                      <label class="form-label" >Your Email</label>
					  <input type="email" name="email" class="form-control" />					  
                    </div>
                  </div>
				  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">					                     
                      <label class="form-label"> Password</label>
					  <input type="password" name="password" class="form-control" />					  
                    </div>
                  </div>
				  
                  <div class="d-flex flex-row align-items-center mb-4">               
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">					                  
                      <label class="form-label" >Confirm password</label>
					  <input type="password" id="form3Example4cd" class="form-control" />					  
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 ">
                    <button  type="button" name="submit" class="btn btn-primary btn-lg me-3">Register</button>
                    <button  type="button" name="submit" class="btn btn-primary btn-lg ">Submit</button>
                  </div>
				  <p class="gap-2">Already have an account?<a href="login.php">SignIn</a></p>
                </form>
              </div>
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
require_once "config.php";

if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

if(empty(trim ($_POST["confirm_password"]))){
	$confirm_password_err="Please Confirm Password";
}else{
	$confirm_password=trim($_POST["confirm_password"]);
	if(empty($password_err)&&($password !=$confirm_password)){
		$confirm_password_err="Password doesn't match!!";
	}
}

$sql="INSERT INTO login(username,email,password)VALUES('$username','$email','$password')";
$result=$conn->query($sql);
if($result==True){
	echo "<div class='alert alert-info role='alert''>Data Inserted</div>";
}
}
?>