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

if (isset($_POST["edit_product"])) {
    extract($_POST);
    $query = "SELECT * FROM product WHERE name = '$name' AND id!='$id'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        header("Location: ../viewproducts.php?edit=d");
        return;
    }
    if ($_FILES["images"]["name"]) {
        unlink("../assets/images/products/" . $image);
        $extension = pathinfo($_FILES["images"]["name"])["extension"];
        $image = strtolower(str_replace(" ", "", $name)) . ".$extension";
        $targetFolder = "../assets/images/products/" . $image;
        $movedFile = move_uploaded_file($_FILES["images"]["tmp_name"], $targetFolder);
    }

    $query = "UPDATE `product` SET `name`='$name',`category`='$category', `brand`='$brand',`description`='$description',`actual_price`='$actualPrice', `dealer_price`='$dealerPrice',`quantity`='$quantity', `type`='$type', `weight`='$weight', `image`='$image',`manufacturing_date`='$manufacturingDate', `expiry_date`='$expiryDate',`availability`='$availability' WHERE id='$id' ";
    $res = mysqli_query($conn, $query);
    if ($res) {
        header("Location: ../viewproducts.php?edit=s");
    } else {
        header("Location: ../viewproducts.php?edit=f");

    }
}

if (isset($_GET["edit_notified"])) {
    $id = $_GET["edit_notified"];
    $query = "UPDATE product SET `isNotified` = true WHERE id = '$id'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo true;
    } else {
        echo false;
    }
}

if (isset($_GET["edit_notifiedAll"])) {
    $query = "SELECT * FROM product";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
       $day = date_diff(date_create(date("Y-m-d")), date_create($row['expiry_date']))->days;
        if($day <= 3 && !$row['isNotified']){
            $id = $row['id'];
            $query1 = "UPDATE `product` SET  `isNotified`=true WHERE id='$id'";
            $res1 = mysqli_query($conn,$query1);
            if ($res1){
                echo true;
            }else{
                echo false;
            }
        }
    }

}
?>