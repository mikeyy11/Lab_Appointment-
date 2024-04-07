<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS file -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <section id="banner">
    <?php
require "includes/navbar.php";

?>
    <div class="banner container wrapper-top">
        <div class="row wrapper-top">
            <div class="col-lg-7 col-sm-12 m-auto text-center">
                <h2 data-aos="fade-up" data-aos-delay="50">For Registration</h2>
            </div>
        </div>

       

    </div>
</section>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"></h3>
                </div>
                <div class="card-body">
                    <form action="dbh/register.php" method="POST" class="d-flex flex-column justify-content-center align-items-center row g-3 needs-validation " novalidate>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@xxx.com" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" placeholder="07xxxxxxxx" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <br/>
                    <p class="text-center">Already have an account? <a href="login.html">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require "includes/footer.php";

?>
