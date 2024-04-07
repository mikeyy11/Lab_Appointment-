<?php
session_start();
require "includes/header.php";

?>


    <section id="banner">
    <?php
require "includes/navbar.php";

?>
    <div class="banner container wrapper-top">
        <div class="row wrapper-top">
            <div class="col-lg-7 col-sm-12 m-auto text-center">
                <h2 data-aos="fade-up" data-aos-delay="50">To Login</h2>
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
                    <form action="dbh/userlogin.php" method="POST" class="d-flex flex-column justify-content-center align-items-center row g-3 needs-validation " novalidate>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Registered Email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Valid Password" name="password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <br/>
                   <h3> <p class="text-center">Already have an account? <a href="register.php">Register</a></p></h3>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require "includes/footer.php";

?>

