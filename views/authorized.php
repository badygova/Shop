<?php include __DIR__.'/layouts/header.php';?>
	<!-- Hero section -->
<section class="hero-section">
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Одежда</a>
                    <ul class="sub-menu">
                        <li><a href="#">Верхняя</a></li>
                        <li><a href="#">Верх</a></li>
                        <li><a href="#">Низ</a></li>
                        <li><a href="#">Платья</a></li>
                    </ul>
                </li>
                <li><a href="#">Украшения</a></li>
                <li><a href="#">Обувь</a>
                    <ul class="sub-menu">
                        <li><a href="#">На каблуке</a></li>
                        <li><a href="#">Спортивная</a></li>
                        <li><a href="#">Повседневная</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Связаться</a></li>
            </ul>
        </div>
    </nav>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="../template/img/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>Новая коллекция</span>
                        <p>Текст текст текст текст</p>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>от</span>
                    <h2>990</h2>
                    <p>КУПИТЬ</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="../template/img/bg-2.jpg" style="background-repeat: no-repeat; background-size: cover; background-position: center 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>Новая коллекция</span>
                        <p>Текст текст текст текст</p>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>от</span>
                    <h2>990</h2>
                    <p>КУПИТЬ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>

	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="../template/img/icons/1.png" alt="#">
						</div>
						<h2>Быстрая оплата</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="../template/img/icons/2.png" alt="#">
						</div>
						<h2>Премиальное качество</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="../template/img/icons/3.png" alt="#">
						</div>
						<h2>Бесплатная доставка</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>НОВИНКИ</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="../template/img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>1 990</h6>
						<p>Название</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="../template/img/product/2.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>1 990</h6>
						<p>Название</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="../template/img/product/3.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>1 990</h6>
						<p>Название</p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/4.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
			</div>
		</div>
		<div id="modal_form">
			<span id="modal_close">X</span>
			<div id="modal_content"></div>
		</div>
		<div id="overlay"></div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>ЛИДЕРЫ ПРОДАЖ</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">ТОПЫ</a></li>
				<li><a href="#">БЛУЗЫ</a></li>
				<li><a href="#">КАРДИГАНЫ</a></li>
				<li><a href="#">ДЖИНСЫ</a></li>
				<li><a href="#">ПЛАТЬЯ</a></li>
				<li><a href="#">ШОРТЫ</a></li>
				<li><a href="#">БРЮКИ</a></li>
				<li><a href="#">ЮБКИ</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="../template/img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 990</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 900</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="../template/img/product/12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>В корзину</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>1 900</h6>
							<p>Название</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->

	<div class="section-title">
		<h2>СВЯЗАТЬСЯ</h2>
	</div>
	<!-- Contact section -->
	<section class="contact-section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Вы можете найти нас по адресу:</h3>
					<p>Респеблика Татарстан, город Казань, ул. Деревня Универсиады д.18</p>
					<p>+7 937 876 17 21</p>
					<p>abadygova17@gmail.com</p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
					<form class="contact-form" action="../controllers/emailController.php" id="form" method="post" name="form">
						<input type="text" id="name" name="name" placeholder="Ваше имя имя">
						<input type="text" id="email" name="email" placeholder="Ваш e-mail">
						<input type="text" id="sub" name="sub"  placeholder="Тема">
						<textarea id="message" name="message" placeholder="Сообщение"></textarea>
						<button class="site-btn" id="submit" name="submit">ОТПРАВИТЬ</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.9012813505306!2d49.179591115592075!3d55.742844200227914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415eadd584290a13%3A0xd8d7be028c7b6641!2z0YPQuy4g0LTQtdGA0LXQstC90Y8g0KPQvdC40LLQtdGA0YHQuNCw0LTRiywgMTgsINCa0LDQt9Cw0L3RjCwg0KDQtdGB0L8uINCi0LDRgtCw0YDRgdGC0LDQvSwgNDIwMTM4!5e0!3m2!1sru!2sru!4v1555446222269!5m2!1sru!2sru" style="border:0" allowfullscreen></iframe> </div>
		<div>&nbsp</div>
	</section>
	<!-- Contact section end -->
<?php include __DIR__.'/layouts/footer.php';?>
