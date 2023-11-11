<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
  
        <meta charset="utf-8">
        <title>Log In</title>
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">
        <script src="<?php echo base_url('./assets/js/sweetalert2.all.min.js');?>">
        <link rel="shortcut icon" type="image/x-icon"  href="<?php echo base_url('assets/img/favicon.ico')?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-icon.jpg'); ?>">
        <script src="<?php echo base_url('./assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@12"></script>

<style>
    body { height: 110vh; 
    }

    footer {

  color: #949494;
  text-align: right;
  padding: 10px;
 margin-right:20px;
  position: absolute; /* Use absolute positioning */
  bottom: 0; /* Position the footer at the bottom */
  right: 0;
  width: 100%; /* Set the footer width to 100% to extend it across the screen */
  font-weight: bold;
  letter-spacing: 0.5px;
}

    .form-control::placeholder {
    font-weight: bold;
    letter-spacing: 1px;
}

</style>
</head>


<body>
<section class="vh-100" style="background-color: white;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
      <div class="card" style="border-radius: 0.5rem; border: 3px solid black; background-color: #e6e3e3;">

            <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./assets/img/loginlogo.jpg"
                alt="login form" class="img-fluid" style="border-radius: 0rem 0 0 0rem;" />
            </div>

            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                  <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fa-solid fa-trophy fa-2xl"  aria-hidden="true" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0" style="margin-left: 10px;">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
        
                  <form method="post" action="index.php?c=LoginController&m=login">
 
<div class="form-outline mb-4">
    <label class="form-label"  style="font-weight: bold;" for="username"><i class="fas fa-user"></i> Username</label>
    <input type="username" id="username" name="username" placeholder="Username" class="form-control form-control-lg" />
</div>

<div class="form-outline mb-4">
    <label class="form-label"   style="font-weight: bold;" for="password"><i class="fas fa-lock"></i> Password</label>
    <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg" />
</div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="login"  value="login" name="login" />
                  </div>
//                   <script>
//   document.addEventListener("DOMContentLoaded", function() {
//     // Select the login form
//     const loginForm = document.querySelector("form");

//     // Add an event listener to the form's submit button
//     loginForm.addEventListener("submit", async function(event) {
//       event.preventDefault(); // Prevent the default form submission

//       // Get the input values
//       const username = document.getElementById("username").value;
//       const password = document.getElementById("password").value;

//       // Perform login validation here (you can customize this part)

//       // Simulate a successful login (replace with actual validation logic)
//       const isLoginSuccessful = username === "Admin" && password === "123";

//       if (isLoginSuccessful) {
//         // Login success
//         await Swal.fire({
//           icon: "success",
//           title: "Login Successful",
//           text: "You are now logged in.",
//         });
//         // You can redirect the user to the dashboard or another page here
//       } else {
//         // Login failed
//         await Swal.fire({
//           icon: "error",
//           title: "Error",
//           text: "Account  does not exist or is deactivated.",
//         });
//       }
//     });
//   });
// </script>

                        </form>
                        <footer>
    <p>&copy; 2023 Al-Khwarizmi Automated System. All rights reserved.</p>
  </footer>
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
