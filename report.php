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
                <h2 data-aos="fade-up" data-aos-delay="50">Reports</h2>
            </div>
        </div>

        <?php

        include_once "dbh/dbdata.php";

        // Retrieve the userID of the logged-in user based on their email
        $email = $_SESSION['email'];
        $userQuery = "SELECT `userID` FROM `tb_user` WHERE `email` = '$email'";
        $userResult = $conn->query($userQuery);

        if ($userResult->num_rows > 0) {
            $userData = $userResult->fetch_assoc();
            $userID = $userData['userID'];

            // Query reports for the user
            $reportQuery = "SELECT `test`, `date`, `time`, `Report` FROM `tb_appointment` WHERE `userID` = '$userID'";
            $reportResult = $conn->query($reportQuery);

            if ($reportResult->num_rows > 0) {
        ?>
                <div class="d-flex flex-column justify-content-center gap-3 mt-3 pb-5" class="d-flex flex-column gap-3">
                    <?php
                    // Loop through the reports and display them
                    while ($row = $reportResult->fetch_assoc()) {
                        $name = $row['test'];
                        $date = $row['date'];
                        $time = date("g:i A", strtotime($row['time']));
                        $link = $row['Report'];
                        ?>

                        <div class="d-flex flex-row justify-content-between align-items-center p-2 px-auto mx-auto" style="background-color:#cccadf; width:600px; border-radius:15px;">
                            <div>
                                <p class="mt-2 fs-5 fw-semibold"><?= $name ?></p>
                                <p class="mt-2 fs-6"><?= $date ?></p>
                                <p class="mt-2 fs-6"><?= $time ?></p>
                            </div>
                            <a href="../binzomed/admin/dbh/<?= $link ?>" class="btn btn-primary" download>Download Report</a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
        <?php
            } else {
                echo '
        <div class="text-center heading-section ftco-animatev py-5 my-5">
            <h2 class="mb-4">Reports not Available</h2>
        </div>';
                $_SESSION['error'] = "No reports found for the logged-in user.";
            }
        } else {
            $_SESSION['error'] = "User not found.";
        }
        ?>



    </div>
</section>




<?php
require "includes/footer.php";

?>
