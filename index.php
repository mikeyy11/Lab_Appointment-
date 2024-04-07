<?php
session_start();
require "includes/header.php";
include('dbh/dbdata.php');
?>


    <section id="banner">

    <?php
require "includes/navbar.php";

?>

        <!-- Banner Section -->
        <div class="banner container wrapper-top">
            <div class="row wrapper-top">
                <div class="col-lg-7 col-sm-12 m-auto text-center">
                    <h2 data-aos="fade-up" data-aos-delay="50">Welcome to Binzo labs</h2>
                </div>
            </div>

            <div class="row wrapper-bottom">
                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-5 m-auto text-center">
                    <p>In our lab , we're dedicated to providing accurate diagnostics and analysis, ensuring your health needs are met with precision and care
                    </p>
                </div>
            </div>

        </div>


    </section>

   


 




    <!-- Specilist -->
    <section id="secilist" class="wrapper-top wrapper-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center m-auto">
                    <h3 data-aos="fade-up" data-aos-delay="100">Test</h3>
                </div>
            </div>

            <div class="mt-5 specilist_items d-flex justify-content-center gap-4">


                <?php
                    $sql = "SELECT `name`  FROM `tb_test` ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $testName = $row['name'];
                            ?>

<div data-aos="fade-up" data-aos-delay="700" class="text-center p-5 specilist_item">
                <img src="images/emergency/medicine.png" alt="">
                    <h4 class="mt-4"><?= $testName ?></h4>
                </div>

                            <?php
                        }
                    }
                    ?>
            </div>

        </div>
    </section>


   


    <?php
require "includes/footer.php";

?>

  