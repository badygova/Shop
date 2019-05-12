<!-- Stylesheets -->
<link rel="stylesheet" href="../../template/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../../template/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../template/css/flaticon.css"/>
<link rel="stylesheet" href="../../template/css/slicknav.min.css"/>
<link rel="stylesheet" href="../../template/css/jquery-ui.min.css"/>
<link rel="stylesheet" href="../../template/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="../../template/css/animate.css"/>
<link rel="stylesheet" href="../../template/css/style.css"/>
<link rel="stylesheet" href="../../template/css/form.css"/>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li style="font-size: 21px; color: white"> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="test">
                    <div class="signup-form"><!--sign up form-->
                        <h2 class="loginH">Вход на сайт</h2><br>
                        <form action="login.php" class="form_login" method="post">
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Пароль"
                                   value="<?php echo $password; ?>"/>
                            <input type="submit" name="submit" class="btn btn-default" style="background-color: white; margin-top: 7px" value="Вход"/>
                        </form>
                        <a href="http://localhost/user/register"><input type="submit" name="submit"
                                                                        class="btn btn-default"
                                                                        style="background-color: white; width: 287px;
                                                                         margin-left: -16px"
                                                                        value="Регистрация"/></a>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


