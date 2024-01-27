<link rel="stylesheet" href="./assets/libs/sweetalert2/sweetalert2.min.css">

<script src="./assets/libs/sweetalert2/sweetalert2.min.js"></script>

<?php

switch (isset($_GET["auth"])) {
    case "failed":
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Incorrect Username or Password',
                text: 'Please Enter your correct details',
            })
        </script>
        <?php
        break;

}
if (isset($_GET["add"])) {
    switch ($_GET["add"]) {
        case "s":
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Added Successfully',
                    text: 'Item was Added',
                })
            </script>
            <?php
            break;
        case "f":
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Edit Failed',
                    text: 'Item failed to create',
                })
            </script>
            <?php
            break;
        case "d":
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Edit Failed',
                    text: 'Item already exists',
                })
            </script>
            <?php
            break;


    }
}

if (isset($_GET["edit"])) {
    switch ($_GET["edit"]) {
        case "s":
            ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Edited Successfully',
                    text: 'Item was edited',
                })
            </script>
            <?php
            break;
        case "f":
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Edit Failed',
                    text: 'Item failed to create',
                })
            </script>
            <?php
            break;
        case "d":
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Edit Failed',
                    text: 'Item already exists',
                })
            </script>
            <?php
            break;


    }
}

