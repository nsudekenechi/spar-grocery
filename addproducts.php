<?php
require_once("./includes/header.php");

?>
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
margin: 0;
}
</style>
<?php
if (!isset($_GET["edit"])) {
    ?>
                                        <!-- Start::app-content -->
                                        <div class="main-content app-content">
                                        <div class="container-fluid">

                                        <!-- PAGE-HEADER -->
                                        <div class="page-header">
                                        <h1 class="page-title my-auto">Add Product</h1>
                                        <div>
                                        <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Ecommerce</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                                        </ol>
                                        </div>
                                        </div>
                                        <!-- PAGE-HEADER END -->


                                        <!-- Start::row-1 -->
                                        <form action="./handlers/add.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-xl-12">
                                        <div class="card custom-card">
                                        <div class="card-body add-products p-0">
                                        <div class="p-4">
                                        <div class="row gx-5">
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 mb-4">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                        <div class="card-body p-0">
                                        <div class="row gy-3">
                                        <div class="col-xl-12">
                                        <label for="product-name-add" class="form-label">Product
                                        Name</label>
                                        <input type="text" class="form-control" id="product-name-add"
                                        placeholder="Name" name="name" >


                                        </div>
                                        <div class="col-xl-6">
                                        <label for="product-category-add"
                                        class="form-label">Category</label>
                                        <select class="form-control" data-trigger
                                        id="product-category-add" name="category">
                                        <option value="">Category</option>
                                        <?php
                                        $query = "SELECT * FROM category";
                                        $res = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($catRow = mysqli_fetch_assoc($res)) {
                                                ?>

                                                                                                                                  <option  value="<?= $catRow['name']; ?>">
                                                                                                                                                <?= $catRow['name']; ?>
                                                                                                                                                </option>
                                                                                                                                            <?php
                                                                                                                                            ?>
                       

                                                                                                                        <?php
                                            }
                                        }
                                        ?>
                                        </select>
                                        </div>

                                        <div class="col-xl-6">
                                        <label for="product-brand-add" class="form-label">Brand</label>
                                        <select class="form-control" data-trigger name="brand"
                                        id="product-brand-add">
                                        <option value="">Brand</option>
                                        <?php
                                        $query = "SELECT * FROM brands  ";
                                        $res = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($res) > 0) {

                                            while ($brandRow = mysqli_fetch_assoc($res)) {

                                                ?>
                                                                                                                                <option value="<?= $brandRow['name']; ?>">
                                                                                                                                            <?= $brandRow['name']; ?>
                                                                                                                                            </option>
                                                                                                                        <?php
                                            }
                                        }

                                        ?>
                                                


                                        </select>
                                        </div>
                                        <div class="col-xl-6 " style="display:none;">
                                        <label for="product-color-add" class="form-label">Colors</label>
                                        <select class="form-control" name="product-color-add"
                                        id="product-color-add" multiple>
                                        <option value="White">White</option>
                                        <option value="Black">Black</option>
                                        <option value="Red">Red</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Green">Green</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Purple">Purple</option>
                                        </select>
                                        </div>

                                        <div class="col-xl-12">
                                        <label for="product-description-add" class="form-label">Product
                                        Description</label>
                                        <textarea class="form-control" id="product-description-add"
                                        rows="2" style="resize:none" name="description" > </textarea>

                                        </div>
                            
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                        <div class="card-body p-0">
                                        <div class="row gy-4">
                                        <div class="col-xl-6">
                                        <label for="product-actual-price" class="form-label">Actual
                                        Price</label>
                                        <input type="number" class="form-control"
                                        id="product-actual-price" placeholder="Actual Price"
                                        inputmode="numeric" name="actualPrice" value="">
                                        </div>
                                        <div class="col-xl-6">
                                        <label for="product-dealer-price" class="form-label">Dealer
                                        Price</label>
                                        <input type="text" class="form-control"
                                        id="product-dealer-price" placeholder="Dealer Price"
                                        name="dealerPrice" value="">
                                        </div>
                                
                                        <div class="col-xl-6">
                                        <label for="product-type" class="form-label">Product
                                        Type</label>
                                        <input type="text" class="form-control" id="product-type"
                                        placeholder="Type" name="type"  value="">
                                        </div>
                                        <div class="col-xl-6">
                                        <label for="product-discount" class="form-label">Product
                                        Weight</label>
                                        <input type="text" class="form-control" id="product-discount1"
                                        placeholder="Weight (Kg)" name="weight" value="">
                                        </div>
                                        <div class="col-xl-6 product-documents-container">
                                        <p class="fw-semibold mb-2 fs-14">Product Images :</p>
                                        <input type="file" class="product-Images" name="images"
                                        id="imageFile">
                                        </div>

                                        <div class="col-xl-6">
                                        <label for="product-discount"
                                        class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="product-discount"
                                        placeholder="Enter in Quantity" name="quantity" value="">
                                        </div>
                                        <div class="col-xl-6">
                                        <label for="publish-date" class="form-label">Manufacturing
                                        Date</label>
                                        <input type="text" class="form-control" id="publish-date"
                                        placeholder="Choose date" name="manufacturingDate" value="">
                                        </div>

                                        <div class="col-xl-6">
                                        <label for="expiry_date" class="form-label">Expiry Date</label>
                                        <input type="text" class="form-control" id="publish-date"
                                        placeholder="Choose date" name="expiryDate" value="">
                                        </div>

                                        <div class="col-xl-6" style="display:none">
                                        <label for="product-tags" class="form-label">Product
                                        Tags</label>
                                        <select class="form-control" name="product-tags"
                                        id="product-tags" multiple>
                                        <option value="Relaxed" selected>Relaxed</option>
                                        <option value="Solid">Solid</option>
                                        <option value="Washed">Washed</option>
                                        <option value="Plain" selected>Plain</option>
                                        </select>
                                        </div>
                                        <div class="col-xl-12">
                                        <label for="product-status-add1"
                                        class="form-label">Availability</label>
                                        <select class="form-control" data-trigger name="availability"
                                        id="product-status-add1">
                                        <?php
                                        $options = ["Select", "In Stock", "Out Of Stock"];
                                        foreach ($options as $option) {
                                          ?>
                                              <option value="<?= $option; ?>"><?= $option; ?></option>

                                                                                <?php
                                            }
                                            ?>
                                   
                     
                      
                                        </select>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                        <button class="btn btn-primary-light m-1" name="add_product">Add Product<i
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
                                        <!-- End::app-content -->
                                        <?php
} else {
    $id = $_GET["edit"];
    $query = "SELECT * FROM product WHERE id = '$id'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
    ?>
                                <div class="main-content app-content">
                                        <div class="container-fluid">

                                        <!-- PAGE-HEADER -->
                                        <div class="page-header">
                                        <h1 class="page-title my-auto">Edit Product</h1>
                                        <div>
                                        <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                                        </ol>
                                        </div>
                                        </div>
                                        <!-- PAGE-HEADER END -->


                                        <!-- Start::row-1 -->
                                        <form action="./handlers/edit.php" method="POST" enctype="multipart/form-data">
                                            <input type="text" value="<?= $row['id']; ?>" name="id" hidden>
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
                                        <label for="product-name-add" class="form-label">Product
                                        Name</label>
                                        <input type="text" class="form-control" id="product-name-add"
                                        placeholder="Name" name="name" value="<?= $row['name']; ?>">


                                        </div>
                                        <div class="col-xl-6">
                                        <label for="product-category-add"
                                        class="form-label">Category</label>
                                        <select class="form-control" data-trigger
                                        id="product-category-add" name="category">
                                        <option value="">Category</option>
                                        <?php
                                        $query = "SELECT * FROM category";
                                        $res = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($res) > 0) {
                                            while ($catRow = mysqli_fetch_assoc($res)) {
                                                if ($catRow['name'] == $row['category']) {
                                                    ?>
                                                                                                                                                 <option selected value="<?= $catRow['name']; ?>">
                                                                                                                                                        <?= $catRow['name']; ?>
                                                                                                                                                        </option>
                                                                                                                                                    <?php
                                                } else {
                                                    ?>
                                                                                                                                          <option  value="<?= $catRow['name']; ?>">
                                                                                                                                                        <?= $catRow['name']; ?>
                                                                                                                                                        </option>
                                                                                                                                                    <?php
                                                }
                                                ?>
                       

                                                                                                                        <?php
                                            }
                                        }
                                        ?>
                                        </select>
                                        </div>

                                        <div class="col-xl-6">
                                        <label for="product-brand-add" class="form-label">Brand</label>
                                        <select class="form-control" data-trigger name="brand"
                                        id="product-brand-add">
                                        <option value="">Brand</option>
                                        <?php
                                        $query = "SELECT * FROM brands  ";
                                        $res = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($res) > 0) {

                                            while ($brandRow = mysqli_fetch_assoc($res)) {
                                                if ($brandRow['name'] == $row['brand']) {
                                                    ?>
                                                                                                                            <option selected value="<?= $brandRow['name']; ?>">
                                                                                                                                                <?= $brandRow['name']; ?>
                                                                                                                                                </option>
                                                                                                                            <?php
                                                } else {
                                                    ?>
                                                                                                                             <option value="<?= $brandRow['name']; ?>">
                                                                                                                                                <?= $brandRow['name']; ?>
                                                                                                                                                </option>
                                                                                                                            <?php
                                                }
                                                ?>
                                                

                                                                                                                        <?php
                                            }
                                        }
                                        ?>
                                        </select>
                                        </div>
                                        <div class="col-xl-6 " style="display:none;">
                                        <label for="product-color-add" class="form-label">Colors</label>
                                        <select class="form-control" name="product-color-add"
                                        id="product-color-add" multiple>
                                        <option value="White">White</option>
                                        <option value="Black">Black</option>
                                        <option value="Red">Red</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Green">Green</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Purple">Purple</option>
                                        </select>
                                        </div>

                                        <div class="col-xl-12">
                                        <label for="product-description-add" class="form-label">Product
                                        Description</label>
                                        <textarea class="form-control" id="product-description-add"
                                        rows="2" style="resize:none" name="description" ><?= $row['description']; ?> </textarea>

                                        </div>
                            
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                        <div class="card-body p-0">
                                        <div class="row gy-4">
                                        <div class="col-xl-6">
                                        <label for="product-actual-price" class="form-label">Actual
                                        Price</label>
                                        <input type="number" class="form-control"
                                        id="product-actual-price" placeholder="Actual Price"
                                        inputmode="numeric" name="actualPrice" value="<?= $row['actual_price']; ?>">
                                        </div>
                                        <div class="col-xl-6">
                                        <label for="product-dealer-price" class="form-label">Dealer
                                        Price</label>
                                        <input type="text" class="form-control"
                                        id="product-dealer-price" placeholder="Dealer Price"
                                        name="dealerPrice" value="<?= $row['dealer_price']; ?>">
                                        </div>
                                
                                        <div class="col-xl-6">
                                        <label for="product-type" class="form-label">Product
                                        Type</label>
                                        <input type="text" class="form-control" id="product-type"
                                        placeholder="Type" name="type"  value="<?= $row['type']; ?>">
                                        </div>
                                        <div class="col-xl-6">
                                        <label for="product-discount" class="form-label">Product
                                        Weight</label>
                                        <input type="text" class="form-control" id="product-discount1"
                                        placeholder="Weight (Kg)" name="weight" value="<?= $row['weight']; ?>">
                                        </div>
                                        <div class="col-xl-6 product-documents-container">
                                        <p class="fw-semibold mb-2 fs-14">Product Images :</p>
                                        <input type="file" class="product-Images" name="images"
                                        id="imageFile">
                                        <span><?= $row['image']; ?></span>
                                        <input name="image" type="text" value="<?= $row['image']; ?>" hidden>
                                        </div>

                                        <div class="col-xl-6">
                                        <label for="product-discount"
                                        class="form-label">Quantity</label>
                                        <input type="number" class="form-control" id="product-discount"
                                        placeholder="Discount in %" name="quantity" value="<?= $row['quantity']; ?>">
                                        </div>
                                        <div class="col-xl-6">
                                        <label for="publish-date" class="form-label">Manufacturing
                                        Date</label>
                                        <input type="text" class="form-control" id="publish-date"
                                        placeholder="Choose date" name="manufacturingDate" value="<?= $row['manufacturing_date']; ?>">
                                        </div>

                                        <div class="col-xl-6">
                                        <label for="expiry_date" class="form-label">Expiry Date</label>
                                        <input type="text" class="form-control" id="publish-date"
                                        placeholder="Choose date" name="expiryDate" value="<?= $row['expiry_date']; ?>">
                                        </div>

                                        <div class="col-xl-6" style="display:none">
                                        <label for="product-tags" class="form-label">Product
                                        Tags</label>
                                        <select class="form-control" name="product-tags"
                                        id="product-tags" multiple>
                                        <option value="Relaxed" selected>Relaxed</option>
                                        <option value="Solid">Solid</option>
                                        <option value="Washed">Washed</option>
                                        <option value="Plain" selected>Plain</option>
                                        </select>
                                        </div>
                                        <div class="col-xl-12">
                                        <label for="product-status-add1"
                                        class="form-label">Availability</label>
                                        <select class="form-control" data-trigger name="availability"
                                        id="product-status-add1">
                                        <?php
                                        $options = ["Select", "In Stock", "Out Of Stock"];
                                        foreach ($options as $option) {
                                            if ($row["availability"] == $option) {
                                                ?>
                                                <option value="<?= $option; ?>" selected><?= $option; ?></option>
                                                                                    <?php
                                            } else {
                                                ?>
                                                <option value="<?= $option; ?>"><?= $option; ?></option>

                                                                                <?php
                                            }
                                            ?>
                                   
                                                                <?php
                                            # code...
                                        }
                                        ?>
                     
                      
                                        </select>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                        <button class="btn btn-primary-light m-1" name="edit_product">Edit Product<i
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
<!-- Internal Add Products JS -->

<script src="./assets/js/add-products.js"></script>