 <!-- Header -->
 <header>
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top py-4">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">Home</a>
                            </li>

                            

                            <?php
                if (isset($_SESSION['email'])) {
                ?>
                      <li class="nav-item">
                                <a href="appoinment.php" class="nav-link active">Appointments</a>
                            </li>
                            <li class="nav-item">
                                <a href="report.php" class="nav-link active">Reports</a>
                            </li>
                <?php
                } 
                ?>
                            <li class="nav-item">
                                <a href="aboutus.php" class="nav-link active">About US</a>
                            </li>
                            <li class="nav-item">
                                <a href="bookAppointment.php" class="nav-link active">Book Appointment</a>
                            </li>
                            

                        </ul>
                       
                        
                        <?php
                if (isset($_SESSION['email'])) {
                ?>
                     <a href="dbh/logout.php" class="main-button">Logout</a>
                <?php
                } else{
                ?>

<div>
                            <a href="login.php" class="main-button">Login</a>
                        </div>

<?php
                } 
                ?>
                    </div>
                </div>
            </nav>
        </header>