<?php include 'inc/header.php';?>
    <div class="details">
        <h4>Categorys</h4>
        <div class="row">
            <div class="col-xxl-12">
                <a href="category-add.php" class="btn btn-primary">Add Category</a>
                <table class="table table-bordered mt-4">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Post Count</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Men</td>
                        <td>
                            <img src="https://via.placeholder.com/150" alt="">
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            <a href="category-edit.php" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?>