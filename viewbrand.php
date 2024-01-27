<?php
require_once("./includes/header.php");
?>
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title my-auto">View Brand</h1>
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Brand</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->


        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Brands List
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-4">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <input class="form-check-input check-all" type="checkbox" id="all-products"
                                                value="" aria-label="...">
                                        </th>
                                        <th scope="col">Product</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM brands";
                                    $res = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($res) > 0) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr class="product-list">
                                                <td class="product-checkbox"><input class="form-check-input" type="checkbox"
                                                        id="product1" value="" aria-label="..."></td>

                                                <td>
                                                    <?= $row["name"]; ?>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="addbrand.php?edit=<?= $row["id"]; ?>"
                                                            class="btn btn-icon btn-sm btn-info-light"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light product-btn" data-id="<?= $row['id']; ?>"><i
                                                                class="ri-delete-bin-line" ></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <td colspan="3" class="text-center">
                                            You  don't have any category yet
                                        </td>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <nav aria-label="...">
                                <!-- <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item " aria-current="page">
                                                <span class="page-link">2</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul> -->
                            </nav>
                            <button class="btn btn-danger btn-wave m-1 waves-effect waves-light" id="all_categories">Delete All</button>
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
    let deleteIcons = document.querySelectorAll(".product-btn");
    let productLists = document.querySelectorAll(".product-list");
    let tbody =document.querySelector("tbody");
    deleteIcons.forEach((deleteIcon, index) => {
        deleteIcon.onclick = async() => {
            let req =await fetch(`./handlers/delete.php?brand=${deleteIcon.dataset.id}`);
            let res =await req.text();
            if(res=="success"){
                productLists[index].remove()
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted Successfully',
                    text: 'Item was deleted',
                })
                if(!tbody.querySelector("td")){
                    tbody.innerHTML = ` <td colspan='3' class='text-center'>
                                            You  don't have any category yet
                                        </td>`
                }
            }
        }
    })

    document.querySelector("#all_categories").onclick = async ()=>{
        let req =await fetch(`./handlers/delete.php?all_categories`);
            let res =await req.text();
            if(res=="success"){
                productLists.forEach(list=>{
                    list.remove();
                })
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted Successfully',
                    text: 'Item was deleted',
                })
                if(!tbody.querySelector("td")){
                    tbody.innerHTML = ` <td colspan='3' class='text-center'>
                                            You  don't have any category yet
                                        </td>`
                }
               
            }
            console.log(res)
    }
</script>