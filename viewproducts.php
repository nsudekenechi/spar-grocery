<?php
require_once("./includes/header.php");
?>
<div class="main-content app-content">
<div class="container-fluid">

<!-- PAGE-HEADER -->
<div class="page-header">
<h1 class="page-title my-auto">View Products</h1>
<div>
<ol class="breadcrumb mb-0">
<li class="breadcrumb-item">
<a href="javascript:void(0)">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">View Products</li>
</ol>
</div>
</div>
<!-- PAGE-HEADER END -->


<!-- Start::row-1 -->
<div class="row">
<div class="col-12 col-sm-12">
<div class="card">
<div class="card-header d-lg-flex">
<h3 class="card-title mb-lg-0 mb-3">Product Lists</h3>
<div class="tabs-menu1 ms-auto border-0 p-0">
<!-- Tabs -->
<!-- <ul class="nav panel-tabs product-sale" role="tablist">
    <li><a href="#tab5" class="active" data-bs-toggle="tab" aria-selected="true" role="tab">All products</a></li>
    <li><a href="#tab6" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Shipped</a></li>
    <li><a href="#tab7" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Pending</a></li>
    <li><a href="#tab8" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Cancelled</a></li>
</ul> -->
</div>
</div>
<div class="card-body product-table">
<div class="row">
<div class="col-sm-12 col-md-6">
    <label class="mb-3">
        Show
        <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-trigger="" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1" data-custom-properties="[object Object]">10</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="[object Object]" aria-selected="true">10</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="This is a placeholder set in the config" placeholder="Search"><div class="choices__list" role="listbox"><div id="choices--ngwn-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">10</div><div id="choices--ngwn-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">25</div><div id="choices--ngwn-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">50</div><div id="choices--ngwn-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">100</div></div></div></div>
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
<div class="tab-pane border-0 p-0 active" id="tab5" role="tabpanel">
    <div class="table-responsive">
        <table class="table table-bordered text-nowrap mb-0">
            <thead class="border-top">
                <tr>
                    <th scope="col" class="">Name</th>
                    <th scope="col" class="">Category</th>
                    <th scope="col" class="">Brand</th>
                    <th scope="col" class="">Actual Price</th>
                    <th scope="col" class="">Expiry Date</th>
                    <th scope="col" class="">Availability</th>
                    <th scope="col" class="">Action</th>
                </tr>
            </thead>
          <tbody>
          <?php
          $query = "SELECT * FROM product";
          $res = mysqli_query($conn, $query);
          if (mysqli_num_rows($res) > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                $name = $row['name'];
                  ?>
                                    <tr class="product-list">
                                            <td><h6 class="mb-0 fs-14 fw-semibold"> <?=strlen($name) <= 20 ? $name : substr($name,0, 20)."..." ?></h6></td>
                            
                                            <td><h6 class="mb-0 fs-14 fw-semibold"><?= $row['category']; ?></h6></td>
                                            <td><h6 class="mb-0 fs-14 fw-semibold"><?= $row['brand']; ?></h6></td>
                                            <td><h6 class="mb-0 fs-14 fw-semibold"><?= $row['actual_price']; ?></h6></td>
                                            <td><span class="fw-semibold"><?= $row['expiry_date']; ?></span></td>
                                            <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3"><?= $row['availability']; ?></span></td>
                                            <td>
                                                <div class="g-1">
                                                    <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"
                                                    href="addproducts.php?edit=<?=$row['id'];?>"
                                                    ><span class="fe fe-edit fs-14" href=""></span></a>
                                
                                                    <a class="btn text-danger btn-sm delete" data-bs-toggle="tooltip" data-bs-original-title="Delete" data-id="<?= $row['id']; ?>"><span class="fe fe-trash-2 fs-14"></span></a>

                                                    <a class="btn  btn-sm" 
                                                    href="productDetails.php?id=<?=$row['id'];?>"
                                                    data-bs-toggle="tooltip" data-bs-original-title="View"><span class="fe fe-eye fs-14"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                            <?php
              }
          } else {
              ?>
        <td colspan='7' class='text-center'>
    You  don't have any category yet
    </td>
            <?php
          }
          ?>
          </tbody>
        </table>
    </div>
</div>
<div class="tab-pane border-0 p-0" id="tab6" role="tabpanel">
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/9.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/11.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/4.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/8.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/6.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/1.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/10.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/2.jpg&quot;) center center;"></span>
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
<div class="tab-pane border-0 p-0" id="tab7" role="tabpanel">
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/9.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/11.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/4.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/8.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/6.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/1.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/10.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/2.jpg&quot;) center center;"></span>
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
<div class="tab-pane border-0 p-0" id="tab8" role="tabpanel">
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/9.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/9.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/11.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/11.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/4.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/4.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/8.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/8.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/6.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/6.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/1.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/1.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/10.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/10.jpg&quot;) center center;"></span>
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
                            <span class="avatar cover-image avatar-sm" data-bs-image-src="./assets/images/ecommerce/orders/2.jpg" style="background: url(&quot;./assets/images/ecommerce/orders/2.jpg&quot;) center center;"></span>
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
<!--End::row-1 -->

</div>
</div>

<?php
require_once("./includes/footer.php");
?>
<script>
let deleteIcons = document.querySelectorAll(".delete");
let productLists = document.querySelectorAll(".product-list");
let tbody =document.querySelector("tbody");

deleteIcons.forEach((deleteIcon, index) => {
deleteIcon.onclick = async() => {
let req =await fetch(`./handlers/delete.php?product=${deleteIcon.dataset.id}`);
let res =await req.text();
if(res=="success"){
productLists[index].remove()
Swal.fire({
icon: 'success',
title: 'Deleted Successfully',
text: 'Item was deleted',
})
if(!tbody.querySelector("td")){
tbody.innerHTML = ` <td colspan='6' class='text-center'>
You  don't have any category yet
</td>`
}
}
}
})

// document.querySelector("#all_products").onclick = async ()=>{
// let req =await fetch(`./handlers/delete.php?all_products`);
// let res =await req.text();
// if(res=="success"){
// productLists.forEach(list=>{
// list.remove();
// })
// Swal.fire({
// icon: 'success',
// title: 'Deleted Successfully',
// text: 'Item was deleted',
// })
// if(!tbody.querySelector("td")){
// tbody.innerHTML = ` <td colspan='3' class='text-center'>
// You  don't have any category yet
// </td>`
// }

// }
// }
</script>