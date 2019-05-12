<?php include __DIR__.'/layouts/header.php';?>
<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Товар</h4>
    </div>
</div>
<!-- Page info end -->


<!-- product section -->
<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="../../category/<?php echo $product['category_id']; ?>"> &lt;&lt; Назад к категории</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                </div>
                <!--<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">
                        <div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="../template/img/single-product/thumb-1.jpg" alt=""></div>
                        <div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="../template/img/single-product/thumb-2.jpg" alt=""></div>
                        <div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="../template/img/single-product/thumb-3.jpg" alt=""></div>
                        <div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="../template/img/single-product/thumb-4.jpg" alt=""></div>
                    </div>
                </div>-->
            </div>
            <div class="col-lg-6 product-details">
                <h2 class="p-title"><?php echo $product['name']; ?></h2>
                <h3 class="p-price"><?php echo $product['price']; ?> руб</h3>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>
                <div class="fw-size-choose">
                    <p>Размеры</p>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="xs-size">
                        <label for="xs-size">32</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="s-size">
                        <label for="s-size">34</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="m-size" checked="">
                        <label for="m-size">36</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="l-size">
                        <label for="l-size">38</label>
                    </div>
                    <div class="sc-item disable">
                        <input type="radio" name="sc" id="xl-size" disabled>
                        <label for="xl-size">40</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="xxl-size">
                        <label for="xxl-size">42</label>
                    </div>
                </div>
                <div class="quantity">
                    <p>Количество</p>
                    <div class="pro-qty"><input type="text" value="1"></div><!--надо это как-то передать в корзину-->
                </div>
                <a href="#" class="site-btn" data-id="<?php echo $product['id']; ?>">КУПИТЬ</a>
                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Информация</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <p><b>Описание:</b><?php echo $product['description']; ?></p>
                                <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Детали оплаты</button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="../template/img/cards.png" alt="">
                                <p>Вы можете выбрать любой способ оплаты: наличные, перевод, оплата картой.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingThree">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Доставка</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body">
                                <p>Для жителей Казани возможен самовывоз и доставка курьером.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

<?php include __DIR__.'/layouts/footer.php';?>