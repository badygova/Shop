<!-- Stylesheets -->
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

                <div class="col-sm-4 col-sm-offset-4 padding-right">

                    <?php if ($result): ?>
                        <p>Вы зарегистрированы!</p>
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li style="color: white; font-size: 20px"> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <div class="test">
                        <div><!--sign up form-->
                            <h2 style="color: white; text-align: center; margin-bottom: 10px">Регистрация на сайте</h2>
                            <form action="" method="post">
                                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                                <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                <input type="submit" name="submit" class="btn btn-default" value="Регистрация" style="background-color: white;
margin-top: 7px"/>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                    <?php endif; ?>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

