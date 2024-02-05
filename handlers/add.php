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

// Adding product
if (isset($_POST["add_product"])) {
    extract($_POST);
    extract($_FILES);
    $query = "SELECT * FROM product WHERE name = '$name'";
    $res = mysqli_query($conn,$query);
    if(mysqli_num_rows($res) > 0){
        header("Location: ../viewproducts.php?edit=d");
        return;
    }
    $extension = pathinfo($_FILES["images"]["name"])["extension"];
    $imageName = strtolower(str_replace(" ", "", $name)) . ".$extension";
    $targetFolder = "../assets/images/products/" .$imageName ;
    $movedFile = move_uploaded_file($_FILES["images"]["tmp_name"], $targetFolder);
    // $publishDate = date
    if ($movedFile) {
        $query = "INSERT INTO `product`(`name`, `category`,`brand`, `description`, `actual_price`, `dealer_price`, `quantity`, `type`, `weight`, `image`, `manufacturing_date`, `expiry_date`, `availability`) VALUES ('$name', '$category', '$brand','$description','$actualPrice','$dealerPrice','$quantity','$type','$weight','$imageName','$manufacturingDate','$expiryDate','$availability')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location: ../addproducts.php?add=s");
        } else {
            header("Location: ../addproducts.php?add=f");
        }
    } else {
        header("Location: ../addproducts.php?add=if");
    }

}


?>