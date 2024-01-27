
<?php
require_once("./includes/header.php");
?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                  <h1 class="page-title my-auto">Dashboard 01</h1>
                  <div>
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
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
                                        <h6 class="fw-normal">Total Users</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">44,278</h2>
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
                                        <h6 class="fw-normal">Total Profit</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">67,987</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="leadschart"
                                                class="chart-dropshadow"></canvas>
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
                                        <h6 class="fw-normal">Total Expenses</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">$76,965</h2>
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
                                        <h6 class="fw-normal">Total Cost</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">$59,765</h2>
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

                <!-- ROW-2 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title">Sales Analytics</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mx-auto text-center justify-content-center mb-4">
                                    <div class="d-flex text-center justify-content-center me-3"><span
                                            class="dot-label bg-primary my-auto"></span>Total Sales</div>
                                    <div class="d-flex text-center justify-content-center"><span
                                            class="dot-label bg-secondary my-auto"></span>Total Orders</div>
                                </div>
                                <div class="chartjs-wrapper-demo w-100">
                                    <canvas id="transactions" class="chart-dropshadow w-100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-0 bg-recentorder">
                                <h3 class="card-title text-fixed-white mb-4">Recent Orders</h3>
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="recentorders" class="chart-dropshadow"></canvas>
                                </div>
                            </div>
                            <div id="back-chart"></div>
                            <div class="card-body">
                                <div class="d-flex mb-4 mt-3">
                                    <div class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">
                                        <i class="fe fe-check"></i>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-1 fw-semibold fs-14">Delivered Orders</h6>
                                        <p class="fw-normal fs-12 mb-1"> <span class="text-success">3.5%</span>
                                            increased </p>
                                    </div>
                                    <div class=" ms-auto mb-auto">
                                        <p class="fw-bold fs-20 mb-0"> 1,768 </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">
                                        <i class="fe fe-x"></i>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-1 fw-semibold fs-14">Cancelled Orders</h6>
                                        <p class="fw-normal fs-12 mb-1"> <span class="text-success">1.2%</span>
                                            increased </p>
                                    </div>
                                    <div class=" ms-auto mb-auto">
                                        <p class="fw-bold fs-20 mb-0"> 3,675 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>
                <!-- ROW-2 END -->

                <!-- ROW-3 -->
                <div class="row">
                    <div class="col-xxl-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title fw-semibold">Daily Activity</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="task-list">
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-primary"></i>
                                            <h6 class="fw-semibold">Task Finished<span
                                                    class="text-muted fs-11 mx-2 fw-normal">09 July 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                                    class="fw-semibold text-primary"> Project Management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-secondary"></i>
                                            <h6 class="fw-semibold">New Comment<span
                                                    class="text-muted fs-11 mx-2 fw-normal">05 July 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Victoria commented on Project <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS Template</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-success"></i>
                                            <h6 class="fw-semibold">New Comment<span
                                                    class="text-muted fs-11 mx-2 fw-normal">25 June 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Victoria commented on Project <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS Template</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-warning"></i>
                                            <h6 class="fw-semibold">Task Overdue<span
                                                    class="text-muted fs-11 mx-2 fw-normal">14 June 2023</span>
                                            </h6>
                                            <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> Integrated management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-danger"></i>
                                            <h6 class="fw-semibold">Task Overdue<span
                                                    class="text-muted fs-11 mx-2 fw-normal">29 June 2023</span>
                                            </h6>
                                            <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> Integrated management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-info"></i>
                                            <h6 class="fw-semibold">Task Finished<span
                                                    class="text-muted fs-11 mx-2 fw-normal">09 July 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                                    class="fw-semibold text-primary"> Project Management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <div>
                                    <h3 class="card-title">Sales Report by Locations with Devices</h3>
                                </div>
                            </div>
                            <div class="card-body p-0 mt-2">
                                <div class="">
                                    <div id="visitors-countries" class="worldh world-map h-250"></div>
                                </div>
                                <div class="table-responsive mt-2 text-center">
                                    <table class="table text-nowrap border-dashed mb-0">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col" class="text-start">Device</th>
                                                <th scope="col" class="">USA</th>
                                                <th scope="col" class="">India</th>
                                                <th scope="col" class="">Bahrain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start p-3 d-flex align-items-center"><span class="sales-icon text-primary bg-primary-transparent"><i class="bi bi-phone"></i></span>Mobiles</td>
                                                <td class="p-3">17%</td>
                                                <td class="p-3">22%</td>
                                                <td class="p-3">11%</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start p-3 d-flex align-items-center"><span class="sales-icon text-secondary bg-secondary-transparent "><i class="bi bi-display"></i></span>Desktops</td>
                                                <td class="p-3">34%</td>
                                                <td class="p-3">76%</td>
                                                <td class="p-3">58%</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0 text-start p-3 d-flex align-items-center"><span class="sales-icon text-danger bg-danger-transparent"><i class="bi bi-tablet"></i></span>Tablets</td>
                                                <td class="border-bottom-0 p-3">56%</td>
                                                <td class="border-bottom-0 p-3">83%</td>
                                                <td class="border-bottom-0 p-3">66%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end /table-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title fw-semibold">Browser Usage</h4>
                            </div>
                            <div class="card-body">
                                <div class="browser-stats">
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/chrome.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Chrome</h6>
                                                <h6 class="fw-semibold mb-1">35,502 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-primary" style="width: 70%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/opera.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Opera</h6>
                                                <h6 class="fw-semibold mb-1">12,563 <span
                                                        class="text-danger fs-11">(<i
                                                            class="fe fe-arrow-down"></i>15.12%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-secondary" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/ie.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">IE</h6>
                                                <h6 class="fw-semibold mb-1">25,364 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-down"></i>24.37%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-success" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/firefox.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Firefox</h6>
                                                <h6 class="fw-semibold mb-1">14,635 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-down"></i>15.63%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-danger" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/edge.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Edge</h6>
                                                <h6 class="fw-semibold mb-1">15,453 <span
                                                        class="text-danger fs-11">(<i
                                                            class="fe fe-arrow-down"></i>23.70%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-warning" style="width: 10%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/safari.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Safari</h6>
                                                <h6 class="fw-semibold mb-1">10,054 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-up"></i>11.04%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-info" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="./assets/images/browsers/netscape.svg" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Netscape</h6>
                                                <h6 class="fw-semibold mb-1">35,502 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-green" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-3 END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header d-lg-flex">
                                <h3 class="card-title mb-lg-0 mb-3">Product Sales</h3>
                                <div class="tabs-menu1 ms-auto border-0 p-0">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs product-sale">
                                        <li><a href="#tab5" class="active" data-bs-toggle="tab">All products</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab">Shipped</a></li>
                                        <li><a href="#tab7" data-bs-toggle="tab">Pending</a></li>
                                        <li><a href="#tab8" data-bs-toggle="tab">Cancelled</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body product-table">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label class="mb-3">
                                            Show
                                            <select class="form-control" data-trigger>
                                                <option value="Choice 1">10</option>
                                                <option value="Choice 2">25</option>
                                                <option value="Choice 3">50</option>
                                                <option value="Choice 3">100</option>
                                            </select>
                                            Entries
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label class="mb-3 justify-content-end">
                                            <input type="search" class="form-control" placeholder="Search...">
                                        </label>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane border-0 p-0 active" id="tab5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tab6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tab7">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tab8">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-6 my-auto">
                                        <span>Showing 1 to 8 of 8 entries</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-end mb-0">
                                                <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-4 END -->

            </div>
        </div>
        <!-- End::app-content -->
        
        <?php
        require_once("./includes/footer.php");
        ?>
    