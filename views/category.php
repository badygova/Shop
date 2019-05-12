<?php include __DIR__.'/layouts/header.php';?>
<!-- Page info -->
<!--<div class="page-top-info">
    <div class="container">
        <h4></h4>
    </div>
</div>-->
<!-- Page info end -->


<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">
                    <?php foreach ($categoryProducts as $product): ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                <div class="pi-links">
                                    <a href="#" class="add-card add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="flaticon-bag"></i><span>В корзину</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6><?php echo $product['price']; ?> руб</h6>
                                <p><a href="/product/<?php echo $product['id']; ?>">
                                        <?php echo $product['name']; ?>
                                    </a></p>
                            </div>
                        </div>
                    </div> <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->
<?php include __DIR__.'/layouts/footer.php';?>
