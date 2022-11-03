<?php include 'inc/header.php';?>
    <div class="details">
        <h4>Orders</h4>
        <div class="row">
            <div class="col-xxl-12">
                <table class="table table-bordered mt-4">
                    <tr>
                        <th>Order ID.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2</li>
                                <li>Item 3</li>
                            </ul>
                        </td>
                        <td>$678</td>
                        <td>5</td>
                        <td>1234567890</td>
                        <td>inf0@ecom.com</td>
                        <td>Sylhet, Bangladesh</td>
                        <td>Pending</td>
                        <td>
                            <a href="order-edit.php" class="btn btn-success">Update</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?>