<?php
session_start();
require_once("db.php");
if (!$_SESSION["store_keeper"]) {
    header("Location: ./index.php");
} else {
    $storekeeper = $_SESSION["store_keeper"];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Spar Grocery Store Management System – </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="">
    <meta name="keywords" content="grocery, management system">

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Choices JS -->
    <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="./assets/js/main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="./assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="./assets/css/styles.min.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="./assets/css/icons.css" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="./assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="./assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="./assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="./assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="./assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- Jsvector Css -->
    <link rel="stylesheet" href="./assets/libs/jsvectormap/css/jsvectormap.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css">

    <!-- Grid Css -->
    <!-- <link rel="stylesheet" href="./assets/libs/gridjs/theme/mermaid.min.css"> -->
    <!-- Prism CSS -->
    <link rel="stylesheet" href="./assets/libs/prismjs/themes/prism-coy.min.css">


    <!-- Choices Css -->
    <link rel="stylesheet" href="./assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="./assets/libs/quill/quill.snow.css">
    <link rel="stylesheet" href="./assets/libs/quill/quill.bubble.css">



</head>

<body>
    <?php
    require_once("./includes/alert.php");
    $query = "SELECT * FROM product";
    $res = mysqli_query($conn, $query);
    $isExpired = false;
    while($row = mysqli_fetch_assoc($res)){
        $day = date_diff(date_create(date("Y-m-d")), date_create($row['expiry_date']))->days;
            if ($day <= 3 && !$row['isNotified']) {
                $isExpired = true;
            }
    }
    ?>



    <!-- Loader -->
    <div id="loader">
        <img src="./assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">



                    <!-- Start::header-element -->
                    <div class="main-header-center  d-none d-lg-block header-link">


                        <div id="headersearch" class="header-search">
                            <div class="p-3">
                                <div class="">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                    <div class="ps-0">
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>People<span></span></a>
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>Pages<span></span></a>
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>Articles<span></span></a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-3 fs-13">Apps and pages</p>
                                    <ul class="ps-0">
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="full-calendar.html"><i
                                                    class="fe fe-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Calendar</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="mail.html"><i
                                                    class="fe fe-mail me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Mail</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="buttons.html"><i
                                                    class="fe fe-globe me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Buttons</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                    <ul class="ps-0 list-unstyled mb-0">
                                        <li class="p-1 align-items-center text-muted mb-1 search-app">
                                            <a href="javascript:void(0)"
                                                class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                        <li class="p-1 align-items-center text-muted mb-0 pb-0 search-app">
                                            <a href="javascript:void(0)"
                                                class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-3 border-top px-0">
                                <div class="text-center">
                                    <a href="javascript:void(0)"
                                        class="text-primary text-decoration-underline fs-15">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-lg-none d-block">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                            data-bs-target="#searchModal">
                            <i class="fe fe-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->







                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown"
                            aria-expanded="false">
                            <i class="fe fe-bell header-link-icon"></i>
                           <?php
                                if($isExpired){
                                    ?>
                                     <span class="w-9 h-9 p-0 bg-success rounded-pill header-icon-badge pulse pulse-success"
                                id="notification-icon-badge"></span>           
                                    <?php
                                }
                           ?>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                    <!-- <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span> -->
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <?php
                                 $query = "SELECT * FROM product";
                                 $res = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $day = date_diff(date_create(date("Y-m-d")), date_create($row['expiry_date']))->days;
                                    if ($day <= 3 && !$row['isNotified']) {
                                        $msg = $day > 0 ? $row['name'] . " will expire in $day days" : $row['name'] . " have expired";
                                        ?>
             
                                    <li class="dropdown-item">
                                    <a href="productDetails.php?id=<?=$row['id'];?>">
                                            <div class="d-flex align-items-start">
                                                <div class="pe-2">
                                                    <?php
                                                        if($day > 1){
                                                            ?>
                                                                <span class="avatar avatar-md bg-warning avatar-rounded"><i
                                                            class="fe fe-bell fs-18"></i></span>
                                                            <?php
                                                        }else{
                                                            ?>
                                                                  <span class="avatar avatar-md bg-danger avatar-rounded"><i
                                                            class="fe fe-bell fs-18"></i></span>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>  
                                                <div class="flex-grow-1 d-flex align-items-center my-auto">
                                                    <div>
                                                        <p class="mb-0 fw-semibold"><a >Expiry
                                                                Status</a></p>
                                                        <span class="text-muted fw-normal fs-12 header-notification-text">
                                                    <?=$msg;?>
                                                        </span>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"  data-id="<?=$row['id'];?>"><i
                                                                class="ti ti-x fs-16"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>

                                        </li>
                                        <?php
                                    }

                                }

                                if(!$isExpired){
                                    ?>
                                    <div class="p-5 empty-item1 ">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                                    <?php
                                }else{
                                    ?>
                                <div class="p-3 empty-header-item1 border-top text-center">
                                <a class="removeAll">Remove All </a>
                            </div>
                                    <?php
                                }
                                ?>


                            </ul>
                    
                           
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->




                    <!-- End::header-element -->

                    




                </div>

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="dashboard.php" class="header-logo">
                    Spar Grocery Stores
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="dashboard.php" class="side-menu__item">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">Category</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="addcategory.php" class="side-menu__item">Add Category</a>
                                </li>
                                <li class="slide">
                                    <a href="viewcategory.php" class="side-menu__item">View Category</a>
                                </li>

                            </ul>
                        </li>


                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">Brand</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="addbrand.php" class="side-menu__item">Add Brand</a>
                                </li>
                                <li class="slide">
                                    <a href="viewbrand.php" class="side-menu__item">View Brand</a>
                                </li>

                            </ul>
                        </li>

                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">Products</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">

                                <li class="slide">
                                    <a href="addproducts.php" class="side-menu__item">Add Products</a>
                                </li>
                                <li class="slide">
                                    <a href="viewproducts.php" class="side-menu__item">View Products</a>
                                </li>

                            </ul>
                        </li>


                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <!-- <li class="slide__category"><span class="category-name">Ui Kit</span></li> -->
                        <!-- End::slide__category -->


                    </ul>

                    </ul>

                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <script>
            const lists =document.querySelectorAll(".dropdown-item");
            const removeAll =document.querySelector(".removeAll");

            function noNotifications(){
                if(document.querySelectorAll("li.dropdown-item").length == 0){
                            document.querySelector("#header-notification-scroll").innerHTML = `<div class="p-5 empty-item1 ">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>`
                            document.querySelector("#notification-icon-badge").style.display = "none";

                    }

            }
            lists.forEach(list=>{
                let close =  list.querySelector(".dropdown-item-close1")
          close.onclick = async ()=>{
           
                        let req =await fetch(`./handlers/edit.php?edit_notified=${close.dataset.id}`);
                        let res =await req.text();
                       if(res){
                        list.remove();
                        noNotifications();

                    }
                }
            })
            removeAll.onclick = async()=>{
             
                let req =await fetch("./handlers/edit.php?edit_notifiedAll");
                let res = await req.text();
                if(res){
                    lists.forEach(list=>{
                        list.remove();
                    })
                    noNotifications();

              
                }
            }
        </script>