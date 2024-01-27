<?php
require_once("./includes/header.php");
?>
<?php
if (!isset($_GET["edit"])) {
    ?>
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Add Brand</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->


            <!-- Start::row-1 -->
            <form action="./handlers/add.php" method="POST">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body add-products p-0">
                                <div class="p-4">
                                    <div class="row gx-5">
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="product-name-add" class="form-label">Brand
                                                                Name</label>
                                                            <input type="text" class="form-control" id="product-name-add"
                                                                placeholder="Enter Brand Name" name="name">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                    <button name="create_brand" class="btn btn-primary-light m-1">Create Brand<i
                                            class="bi bi-plus-lg ms-2"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--End::row-1 -->

        </div>
    </div>
    <?php
} else {
    $id = $_GET["edit"];

    $query = "SELECT * FROM brands WHERE id='$id'";
    $res = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($res);
    ?>
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title my-auto">Edit Brands</h1>
                <div>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Brands</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->


            <!-- Start::row-1 -->
            <form action="./handlers/edit.php" method="POST">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body add-products p-0">
                                <div class="p-4">
                                    <div class="row gx-5">
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="product-name-add" class="form-label">Brand
                                                                Name</label>
                                                                <input type="text" hidden value="<?=$id;?>" name="id">
                                                            <input type="text" class="form-control" id="product-name-add"
                                                                placeholder="Enter Category Name" name="name" value="<?=$row['name'];?>"> 

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                    <button name="edit_brand" class="btn btn-primary-light m-1">Edit Brand<i
                                            class="bi bi-plus-lg ms-2"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--End::row-1 -->

        </div>
    </div>
    <?php
}
?>
<?php
require_once("./includes/footer.php");
?>