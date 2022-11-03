<?php include 'header.php';?>
<section class="page-bannar" style="background-image:url('assets/img/bannar.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <h1>Single Product</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xxl-4">
                <img src="assets/img/product1.jpg" alt="">
            </div>
            <div class="col-xxl-8">
                <div class="product">
                    <h4>Product Name</h4>
                    <ul>
                        <li>Price - $45</li>
                        <li>Category - Man</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eaque veniam obcaecati mollitia voluptate aperiam repellat consequuntur adipisci nisi accusamus!</p>
                    <div class="form-group">
                        <div class="input-group">                            
                            <span class="input-group-btn">
                                <button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
                            </span>
                            <input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
                            <span class="input-group-btn">
                                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
                                </button>
                            </span>
                            <input type="hidden" value="10" name="id">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>