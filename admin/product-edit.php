<?php include 'inc/header.php';?>
    <div class="details">
        <h4>Edit Product</h4>
        <div class="row">
            <div class="col-xxl-12">
            <form action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <textarea placeholder="Description" class="form-control"></textarea>
                    </div> 
                    <div class="mb-3">
                        <select class="form-control">
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                    </div> 
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Price">
                    </div> 
                    <div class="mb-3">
                        Featured?
                        <input type="radio" name="featured"> Yes
                        <input type="radio" name="featured"> No
                    </div>
                    <div class="mb-3">
                        Active?
                        <input type="radio" name="active"> Yes
                        <input type="radio" name="active"> No
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update Product">
                </form>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php';?>