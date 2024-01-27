<?php
require_once("../includes/db.php");
if (isset($_POST["edit_category"])) {
    extract($_POST);
    // Checking if new item already exists in DB
    $query = "SELECT * FROM category WHERE name='$name' AND id!='$id'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        header("Location: ../viewcategory.php?edit=d");
    } else {
        $query = "UPDATE category SET name='$name' WHERE id='$id'";
        $res = mysqli_query($conn, $query);
        if ($res) {
            header("Location: ../viewcategory.php?edit=s");
        } else {
            header("Location: ../viewcategory.php?edit=f");
        }
    }

}

if (isset($_POST["edit_brand"])) {
    extract($_POST);
    // Checking if new item already exists in DB
    $query = "SELECT * FROM brands WHERE name='$name' AND id!='$id'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        header("Location: ../viewbrand.php?edit=d");
    } else {
        $query = "UPDATE brands SET name='$name' WHERE id='$id'";
        $res = mysqli_query($conn, $query);
        if ($res) {
            header("Location: ../viewbrand.php?edit=s");
        } else {
            header("Location: ../viewbrand.php?edit=f");
        }
    }

}
?>