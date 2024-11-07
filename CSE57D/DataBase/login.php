<?php
include "config.php";

if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql="INSERT INTO user(username,email,password,gender)VALUES('$username','$email','$password','$gender')";
$result=$conn->query($sql);
if($result==True){
	echo "Data Inserted";
}
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="register.php" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div  class="form-outline mb-4">
				   <label class="form-label" >Email address</label>
                    <input type="email" class="form-control form-control-lg" />                  
                  </div>

                  <div class="form-outline mb-4">
				   <label class="form-label">Password</label>
				  <input type="password" name="password" class="form-control form-control-lg" />                  
                  </div>

                  <div class="pt-1 mb-4 ">
                    <button  class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>

                
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" 
				  onMouseOver="this.style.color='red'" 
				  onMouseOut="this.style.color='blue'"
                      style="color: #393f81;">Register here</a></p>
                 
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>