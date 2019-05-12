<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Shop</title>
    <meta charset="UTF-8">
    <!-- Favicon -->
    <link href="../../template/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../template/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../template/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../../template/css/flaticon.css"/>
    <link rel="stylesheet" href="../../template/css/slicknav.min.css"/>
    <link rel="stylesheet" href="../../template/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="../../template/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../../template/css/animate.css"/>
    <link rel="stylesheet" href="../../template/css/style.css"/>
   <!--<link rel="stylesheet" href="../../template/css/form.css"/>-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="../index.php" class="site-logo">
                        <img src="../../template/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Поиск...">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <!--<div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="#" class="sign_in">Войти</a>
                            <i class="flaticon-puzzle"></i>
                            <a href="#" class="sign_up">Создать аккаунт</a>
                        </div>-->

                        <?php if (User::isGuest()): ?>
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="../user/login/" class="sign_in">Войти</a>
                        <?php else: ?>
                            <a href="../cabinet/" >Аккаунт</a>
                            <a href="../user/logout/">Выйти</a>
                        </div>
                        <?php endif; ?>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span id="cart-count"><?php echo Cart::countItems(); ?></span>
                            </div>
                            <a href="">Корзина</>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->