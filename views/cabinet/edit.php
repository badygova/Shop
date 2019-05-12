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
                        <p>Данные отредактированы!</p>
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
<div class="test">
                        <div class="signup-form"><!--sign up form-->
                            <h2 style="color: white; text-align: center; font-size: 6vh">Редактирование данных</h2>
                            <form action="#" method="post">
                                <p style="font-size: 18px; color: rgba(238,226,229,0.63)">Имя:</p>
                                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>

                                <p style="font-size: 18px; color: rgba(238,226,229,0.63)">Пароль:</p>
                                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                <br/>
                               <a href="http://localhost/cabinet"><input type="submit" name="submit" class="btn btn-default" value="Сохранить" style="background-color: white; margin-top: 7px; margin-left: -47px"/></a>
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

