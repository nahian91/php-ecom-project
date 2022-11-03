<?php include 'inc/header.php';?>
    <div class="details">
        <h4>Products</h4>
        <div class="row">
            <div class="col-xxl-12">
                <a href="product-add.php" class="btn btn-primary">Add Product</a>
                <table class="table table-bordered mt-4">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Shoe</td>
                        <td>
                            <img src="https://via.placeholder.com/150" alt="">
                        </td>
                        <td>Men</td>
                        <td>$49</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="product-edit.php" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?>