<link rel="stylesheet" href="../template/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../template/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../template/css/flaticon.css"/>
<link rel="stylesheet" href="../template/css/slicknav.min.css"/>
<link rel="stylesheet" href="../template/css/jquery-ui.min.css"/>
<link rel="stylesheet" href="../template/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="../template/css/animate.css"/>
<link rel="stylesheet" href="../template/css/style.css"/>
<link rel="stylesheet" href="../template/css/form.css"/>

    <section class="login">
        <div class="container">

            <div class="row">
                <div class="test1">
                <h3 style="color: white; font-size: 5vh; text-align: center">Кабинет пользователя</h3><br>

                <h4 style="color: white; font-size: 4vh; text-align: center"">Привет, <?php echo $user['username'];?>!</h4>
                <ul>
                    <li style="list-style-type: none;"><a  href="/cabinet/edit">Редактировать данные</a></li>
                    <li style="list-style-type: none;"><a href="http://localhost/index.php">Главная страница</a></li>
                    <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
                </ul>

            </div>
            </div>
        </div>
    </section>

