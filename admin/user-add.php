<?php include 'inc/header.php';?>
    <div class="details">
        <h4>Add User</h4>
        <div class="row">
            <div class="col-xxl-12">
                <form action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="User Name">
                    </div>                    
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <select class="form-control">
                            <option value="">Select Status</option>
                            <option value="">Admin</option>
                            <option value="">Customer</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add User">
                </form>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?>