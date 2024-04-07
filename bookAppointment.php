<?php
session_start();
require "dbh/dbdata.php";
require "includes/header.php";
?>

<section id="banner">
    <?php require "includes/navbar.php"; ?>
    <form onsubmit="return verifyPasswords()" action="dbh/bookAppointment.php" method="POST" class="d-flex justify-content-center align-items-center row g-3 needs-validation px-md-5" novalidate>
    <div class="banner container wrapper-top">
        <div class="row wrapper-top">
            <div class="col-lg-7 col-sm-12 m-auto text-center">
                <h2 data-aos="fade-up" data-aos-delay="50">Book Appointment</h2>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                            <form action="dbh/bookAppointment.php" method="POST" class="d-flex flex-column justify-content-center align-items-center row g-3 needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="name">Patient Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                                </div><br/>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="*****@****.com" name="email" required>
                                </div><br/>
                                <div class="form-group">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="07********" name="phone" required>
                                </div><br/>
                                <div class="form-group">
                                    <label for="test">Test</label>
                                    <select class="form-control" id="test" name="test" required>
                                        <option selected disabled value="">Select Test</option>
                                        <?php
                            
                            // Fetch test names from the database and populate them as options
                            $sqlTests = "SELECT `name` FROM `tb_test`";
                            $resultTests = $conn->query($sqlTests);
                            if ($resultTests->num_rows > 0) {
                                while ($rowTest = $resultTests->fetch_assoc()) {
                                    $testName = $rowTest['name'];
                            ?>
                                    <option value="<?php echo $testName; ?>"><?php echo $testName; ?></option>
                            <?php
                                }
                            }
                            ?>
                                    </select>
                                </div><br/>
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div><br/>
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <select class="form-control" id="time" name="time" required>
                                        <option selected disabled value="">Select Time</option>
                                        <?php
                            for ($hour = 8; $hour <= 16; $hour++) {
                            ?>
                                <option value="<?php echo str_pad($hour, 2, "0", STR_PAD_LEFT) . ':00'; ?>"><?php echo str_pad($hour, 2, "0", STR_PAD_LEFT) . ':00'; ?></option>
                            <?php
                            }
                            ?>
                                    </select>
                                </div><br/>
                                <div class="form-group">
                                    <label for="email">NIC number</label>
                                    <input type="text" class="form-control" id="nic" placeholder="************" name="NIC" required>
                                </div><br/>
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Book Appointment</button>
                            </form>
                            <br />
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        </Form>
</section>

<?php require "includes/footer.php"; ?>
