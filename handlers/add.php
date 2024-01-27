<?php
require_once("../includes/db.php");
// Adding category
if (isset($_POST["create_category"])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    extract($POST);
    $query = "SELECT * FROM category WHERE name = '$name'";
    $res = mysqli_query($conn, $query);
    if (!mysqli_num_rows($res) > 0) {
        $query = "INSERT INTO category (name) VALUES('$name')";
        $res = mysqli_query($conn, $query);
        if ($res) {
            header("Location: ../addcategory.php?add=s");
        } else {
            header("Location: ../addcategory.php?add=f");
        }
    } else {
        header("Location: ../addcategory.php?add=d");
    }

}

// Adding brand
if (isset($_POST["create_brand"])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    extract($POST);
    $query = "SELECT * FROM brands WHERE name = '$name'";
    $res = mysqli_query($conn, $query);
    if (!mysqli_num_rows($res) > 0) {
        $query = "INSERT INTO brands (name) VALUES('$name')";
        $res = mysqli_query($conn, $query);
        if ($res) {
            header("Location: ../addbrand.php?add=s");
        } else {
            header("Location: ../addbrand.php?add=f");
        }
    } else {
        header("Location: ../addbrand.php?add=d");
    }

}

?>