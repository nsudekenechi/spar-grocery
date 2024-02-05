
<?php
require_once("./includes/header.php");
$query  = "SELECT * FROM product";
$res = mysqli_query($conn, $query);
$products = mysqli_num_rows($res);
?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                  <h1 class="page-title my-auto">Dashboard</h1>
                  <div>
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                    </ol>
                  </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!-- ROW-1 -->
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="fw-normal">Total Products</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">
                                            <?=$products;?>
                                        </h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="saleschart" class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle text-secondary"></i> 5%</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <?php
                                           $query  = "SELECT * FROM category";
                                           $res = mysqli_query($conn, $query);
                                        ?>

                                        <h6 class="fw-normal">Total Categories</h6>
                                        <h2 class="mb-0 text-dark fw-semibold"><?=mysqli_num_rows($res);?></h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="leadschart" class="chart-dropshadow" width="144" height="96" style="display: block; box-sizing: border-box; height: 64px; width: 96px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-pink"><i
                                            class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                    Last 6 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                    <?php
                                           $query  = "SELECT * FROM product";
                                           $res = mysqli_query($conn, $query);
                                           $totalPrices = 0;
                                           while($row=mysqli_fetch_assoc($res)){
                                            $totalPrices += floatval($row["actual_price"]);
                                           }
                                        ?>
                                        <h6 class="fw-normal">Total  Prices</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">₦<?=number_format($totalPrices,0,",")?></h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="profitchart"
                                                class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-green"><i
                                            class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                    Last 9 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                    <?php
                                           $query  = "SELECT * FROM product";
                                           $res = mysqli_query($conn, $query);
                                           $expired = 0;
                                           while($row=mysqli_fetch_assoc($res)){
                                            $day = date_diff(date_create(date("Y-m-d")), date_create($row['expiry_date']))->days;
                                            if($day < 1){
                                                $expired++;
                                            }
                                           }
                                        ?>
                                        <h6 class="fw-normal">Expired  Products</h6>
                                        <h2 class="mb-0 text-dark fw-semibold"><?=$expired;?></h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="costchart"
                                                class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-warning"><i
                                            class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                    Last year</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

           

            </div>
        </div>
        <!-- End::app-content -->
        
        <?php
        require_once("./includes/footer.php");
        ?>
    