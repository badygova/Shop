<?php include __DIR__.'/layouts/header.php';?>

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Корзина</h4>
    </div>
</div>
<!-- Page info end -->


<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Ваша корзина</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-th">Товар</th>
                                <th class="quy-th">Количество</th>
                                <th class="size-th">Размер</th>
                                <th class="total-th">Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-col">
                                    <img src="../template/img/cart/1.jpg" alt="">
                                    <div class="pc-title">
                                        <h4>Название</h4>
                                        <p>1 990</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>Размер M</h4></td>
                                <td class="total-col"><h4>1 990</h4></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <img src="../template/img/cart/2.jpg" alt="">
                                    <div class="pc-title">
                                        <h4>Название</h4>
                                        <p>1 990</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>Размер M</h4></td>
                                <td class="total-col"><h4>1 990</h4></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <img src="../template/img/cart/3.jpg" alt="">
                                    <div class="pc-title">
                                        <h4>Название</h4>
                                        <p>1 990</p>
                                    </div>
                                </td>
                                <td class="quy-col">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="size-col"><h4>Размер M</h4></td>
                                <td class="total-col"><h4>1 990</h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                        <h6>Итог <span>10 000</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Введите промо-код">
                    <button>Отправить</button>
                </form>
                <a href="" class="site-btn">Оплатить</a>
                <a href="" class="site-btn sb-dark">Продолжить покупки</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->

<?php include __DIR__.'/layouts/footer.php';?>