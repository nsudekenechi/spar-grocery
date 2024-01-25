<?php
$conn = mysqli_connect("localhost", "root", "", "spar_grocery");
if (!$conn) {
    die();
}

//  echo password_hash("kenechi", PASSWORD_DEFAULT);