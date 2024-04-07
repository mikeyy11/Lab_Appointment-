<?php
// Start the session
session_start();
include('dbdata.php');

if (isset($_POST['submit'])) { // Checks if the form's submit button was clicked
    $email = $conn->real_escape_string($_POST['email']);
    // It's crucial to use password hashing for security reasons, therefore
    // passwords should be hashed in the database and verified with password_verify()
    $password = $conn->real_escape_string($_POST['password']);

    if ($email != "" && $password != "") {
        // We'll retrieve the user's hashed password from the database
        // Note: It's safer to retrieve the password and use password_verify() rather than directly comparing
        $sql = "SELECT `email`, `password`, `user_type` FROM `tb_user` WHERE `email`='$email'";
        $results = mysqli_query($conn, $sql);

        if ($results->num_rows > 0) {
            $row = $results->fetch_assoc();
            if (password_verify($password, $row['password'])) { // Verify the hashed password
                // Password is correct, now check user type
                if ($row['user_type'] == "admin") {
                    $_SESSION['admin'] = $email; // Adjust as per your session variable naming convention
                    header("Location: ../admin"); 
                } else {
                    $_SESSION['email'] = $email; 
                    header("Location: ../appoinment.php"); // Redirect to user area
                }
            } else {
                // Password is incorrect
                $_SESSION['status'] = "Incorrect email or password";
                header("Location: ../login.php"); // Redirect back to the login page
            }
        } else {
            // No user found with the entered email
            $_SESSION['status'] = "No account found with that email";
            header("Location: ../login.php");
        }
    } else {
        // Either email or password was empty
        $_SESSION['status'] = "Please enter both email and password";
        header("Location: ../login.php");
    }
}
?>
