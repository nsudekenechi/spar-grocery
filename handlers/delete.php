<?php
require("../includes/db.php");
// Deleting from category
if (isset($_GET["category"])) {
    $id = $_GET["category"];
    $query = "DELETE FROM `category` WHERE id = $id";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "success";
    } else {
        echo "failed";
    }
}

// Deleting all categories
if (isset($_GET["all_categories"])) {
    $query = "DELETE FROM `category`";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "success";
    } else {
        echo "failed";
    }
}

// Deleting from category
if (isset($_GET["brand"])) {
    $id = $_GET["brand"];
    $query = "DELETE FROM `brands` WHERE id = $id";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "success";
    } else {
        echo "failed";
    }
}

// Deleting all categories
if (isset($_GET["all_categories"])) {
    $query = "DELETE FROM `brands`";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "success";
    } else {
        echo "failed";
    }
}