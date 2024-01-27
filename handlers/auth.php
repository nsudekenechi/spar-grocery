<?php
require_once("../includes/db.php");
if (isset($_POST["signin"])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    extract($POST);
    // Validating if user exists
    $query = "SELECT * FROM store_keeper WHERE username='$username' OR email='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Validating if password matches with db_password
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["store_keeper"] = $row["id"];
            header("Location: ../dashboard.php");
        }else{
            header("Location: ../index.php?auth=failed");
        }
   
    }else{
        header("Location: ../index.php?auth=failed");
    }
}