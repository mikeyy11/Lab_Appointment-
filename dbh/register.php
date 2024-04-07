<?php
// Start the session
session_start();
include('dbdata.php');

if (isset($_POST['submit'])) { // Make sure this matches your form's submit button name attribute (it's case-sensitive and should be 'submit', not 'sumbit').

    // Fetching user inputs
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    // Encrypting the password
    $hashedPassword = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);

    // Ensure no fields are empty
    if ($name != "" && $email != "" && $phone != "" && $_POST['password'] != "") {

        // Check if the email already exists
        $emailCheckQuery = "SELECT `email` FROM `tb_user` WHERE `email`='$email'";
        $emailCheckResults = mysqli_query($conn, $emailCheckQuery);
        if (mysqli_num_rows($emailCheckResults) > 0) {
            // Email already exists
            $_SESSION['status'] = "Email already exists";
            header("Location: ../register.php"); // Adjust the location as necessary
            exit();
        } else {
            // Insert the new user
            $insertQuery = "INSERT INTO tb_user (name, email, phone, password, status, user_type) VALUES ('$name', '$email', '$phone', '$hashedPassword', 'active', 'user')";
            $insertResult = mysqli_query($conn, $insertQuery);

            if (!$insertResult) {
                // Handle insertion error
                die('Could not enter data: ' . mysqli_error($conn));
            } else {
                // Registration successful
                $_SESSION['email'] = $email; // You can adjust this to any data you wish to keep in the session.
                header("Location: ../index.php"); // Redirect to a welcome page or anywhere you'd like
            }
        }
    } else {
        // Fields are empty
        $_SESSION['status'] = "All fields are required.";
        header("Location: ../register.php"); // Adjust the location as necessary
    }
}
?>
