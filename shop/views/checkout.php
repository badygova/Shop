<?php include __DIR__.'/layouts/header.php';?>
<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Оплата заказа</h4>
    </div>
</div>
<!-- Page info end -->


<!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-2 order-lg-1">
                <form class="checkout-form">
                    <div class="cf-title">Адрес доставки</div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cf-radio-btns address-rb">
                                <div class="cfr-item">
                                    <input type="radio" name="pm" id="one">
                                    <label for="one">Использовать постоянный адрес</label>
                                </div>
                                <div class="cfr-item">
                                    <input type="radio" name="pm" id="two">
                                    <label for="two">Использовать другой адрес</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row address-inputs">
                        <div class="col-md-12">
                            <input type="text" placeholder="Страна">
                            <input type="text" placeholder="Область/регион">
                            <input type="text" placeholder="Город/село">
                            <input type="text" placeholder="Улица, дом, квартира">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Индекс">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Номер телефона">
                        </div>
                    </div>
                    <div class="cf-title">Доставка</div>
                    <div class="row shipping-btns">
                        <div class="col-6">
                            <h4>Стандартная</h4>
                        </div>
                        <div class="col-6">
                            <div class="cf-radio-btns">
                                <div class="cfr-item">
                                    <input type="radio" name="shipping" id="ship-1">
                                    <label for="ship-1">Бесплатно</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4>Премиум</h4>
                        </div>
                        <div class="col-6">
                            <div class="cf-radio-btns">
                                <div class="cfr-item">
                                    <input type="radio" name="shipping" id="ship-2">
                                    <label for="ship-2">550</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cf-title">Оплата</div>
                    <ul class="payment-list">
                        <li>Paypal<a href="#"><img src="../template/img/paypal.png" alt=""></a></li>
                        <li>Кредитная карта<a href="#"><img src="../template/img/mastercart.png" alt=""></a></li>
                        <li>Оплата при получении</li>
                    </ul>
                    <button class="site-btn submit-order-btn">Оплатить</button>
                </form>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>Корзина</h3>
                    <ul class="product-list">
                        <li>
                            <div class="pl-thumb"><img src="../template/img/cart/1.jpg" alt=""></div>
                            <h6>Название</h6>
                            <p>1 990</p>
                        </li>
                        <li>
                            <div class="pl-thumb"><img src="../template/img/cart/2.jpg" alt=""></div>
                            <h6>Название</h6>
                            <p>1 990</p>
                        </li>
                    </ul>
                    <ul class="price-list">
                        <li>Итог<span>55555</span></li>
                        <li>Доставка<span>бесплатно</span></li>
                        <li class="total">Итог<span>55555</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout section end -->

<?php include __DIR__.'/layouts/footer.php';?>
