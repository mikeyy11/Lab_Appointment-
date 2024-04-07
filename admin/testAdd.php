<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Test Add";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>
<h1 class="h1">Add Test</h1>
<div class="menuBox">
    <form action="dbh/testCreate.php" class="row" method="post" >
        <div class="form-content col-6">
            <label for="tital">Test Name</label>
            <input type="text" placeholder="Enter Menu Name" name="name">
        </div>
        <div class="form-content col-6">
            <label for="tital">Test Price</label>
            <input type="number" placeholder="Enter menu price" name="price">
        </div>

        <button type="submit" class="btnSubmitMenu btn btn-warning" name="submit">Add</button>
    </form>
</div>
<?php include_once("includes/footer.php"); ?>