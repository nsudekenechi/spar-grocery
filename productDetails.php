<?php
require_once("./includes/header.php");
$id = $_GET["id"];
$query = "SELECT * FROM product WHERE id = '$id'";
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
} else {
    header("Location: ./viewproducts.php");
}

$dateDiff =  date_diff(date_create(date("Y-m-d")), date_create($row['expiry_date']));
$days = $dateDiff->days;
$months = $dateDiff ->m;
$years = $dateDiff ->y;
$dateMsg = "";
if($days <= 30){
    $dateMsg = $days < 2 ? "$days days": "$days days";
}else if($months <= 12){
    $dateMsg =  $months < 2 ? "$months month": "$months months";
}else{
    $dateMsg = $years < 2 ? "$years year": "$years years";;
}
?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title my-auto">Product Details</h1>
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Ecommerce</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-xxl-4 col-xl-12">
                                <div class="row">
                                    <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-md-5 mb-3">
                                        <div style="height: 400px;">
                                            <img style="width:100%; height: 100%; object-fit:cover;"
                                                src="./assets/images/products/<?= $row['image']; ?>" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-md-5 mb-3">
                                        <div class="card custom-card bg-transparent shadow-none border rounded">
                                            <div class="card-header flex-between justify-content-between">
                                                <div class="card-title">
                                                    <p class="fs-18 fw-semibold mb-0">
                                                        <?= $row['name']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <div class="row mb-4">
                                                        <div class="col-xxl-3 col-xl-12">
                                                            <p class="mb-1 lh-1 fs-11 text-success fw-semibold">Item
                                                                Prices</p>
                                                            <div class="d-flex">
                                                                <h3 class="mb-1 fw-semibold"><span>₦
                                                                        <?= number_format($row['dealer_price'], 2); ?><span
                                                                            class="text-muted text-decoration-line-through ms-1  fs-16 op-6">₦
                                                                            <?= $row['actual_price']; ?>
                                                                        </span>
                                                                    </span></h3>
                                                            </div>
                                                            <!-- <span class="rounded-1 fs-11 badge bg-danger-transparent">
                                                                <?= $row['discount']; ?>% Off
                                                            </span> -->
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="fs-15 fw-semibold mb-1">Description :</p>
                                                        <p class="text-muted mb-0">
                                                            <?= $row['description']; ?>
                                                        </p>
                                                    </div>

                                                    <div class="mb-4">
                                                        <a class="btn btn-secondary me-2 mb-2">
                                                            <?= $row['category']; ?>
                                                        </a>
                                                        <a class="btn btn-success me-2 mb-2">
                                                            <?= $row['brand']; ?>
                                                        </a>
                                                    </div>


                                                    <!-- <div class="mb-4">
                                                        <p class="fs-15 fw-semibold mb-1"><i
                                                                class="ti ti-discount-2 fs-17 me-1 text-success"></i>Product Features:
                                                        </p>
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                20% off upto 300 on min purchase of $555
                                                            </span>
                                                        </p>
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                starting from ₹101 monthView Plans
                                                            </span>
                                                        </p>
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                No cost emi on selected bank card on min purchase of
                                                                $1,499
                                                            </span>
                                                        </p>
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                Free delivery on first orderView.
                                                            </span>
                                                        </p>
                                                        <p class="text-muted mb-0 ps-2 mt-2">
                                                            <i
                                                                class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                            <span>
                                                                Offer upto 30% on grosery on purchase of this
                                                                itemT&amp;C.
                                                            </span>
                                                        </p>
                                                        <div class="collapse " id="more-offers">
                                                            <p class="text-muted mb-0 ps-2 mt-2">
                                                                <i
                                                                    class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                                <span>
                                                                    Buy 4 and get 20% Off oN smart Travel bages
                                                                </span>
                                                            </p>
                                                            <p class="text-muted mb-0 ps-2 mt-2">
                                                                <i
                                                                    class="ti ti-discount-2 fs-14 text-success d-inline-flex"></i>
                                                                <span>
                                                                    No Cost EMI available.
                                                                </span>
                                                            </p>

                                                        </div>
                                                        <a class="text-success fs-12 ps-2" data-bs-toggle="collapse"
                                                            href="#more-offers" aria-expanded="false"><u>View
                                                                More</u></a>

                                                    </div> -->


                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex mt-2">
                                                    <div class="">
                                                        <h6>Quantity</h6>
                                                        <h5 class="mb-0 fw-semibold"><?=$row['quantity'];?></h5>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="">
                                                            <button type="button" class="btn btn-primary">
                                                                Expires in <?=$dateMsg; ?>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End::row-1 -->

    </div>
</div>
<!-- End::app-content -->
<?php
require_once("./includes/footer.php");
?>