//modal
$(".sign_in").click(function (event) {
    event.preventDefault();
    modalOpen(`<form class="modal-form" action="signIn.php" method="post">
    <h1 class="form__title">Вход</h1>
    <div class="form__group">
    <input placeholder=" " type="text" name="email" id="log" class="form__input" />
    <label class="form__label" for="log">Email</label>
    </div>
    <div class="form__group">
    <input placeholder=" " type="password" id="pass" name="password" class="form__input" />
    <label class="form__label" for="pass">Пароль</label>
    </div>
    <button class="form__button" name="signIn" >Войти</button>
    </form>`);
});

$(".sign_up").click(function (event) {
    event.preventDefault();
    modalOpen(`<form class="modal-form" action="signUp.php" method="post">
            <h1 class="form__title">Регистрация</h1>
            <div class="form__group">
            <input placeholder=" " type="text" name="name" id="name" class="form__input" /> 
            <label class="form__label" for="name">Имя</label></div>
            <div class="form__group">
            <input placeholder=" " type="text" name="secondName" id="secondName" class="form__input" /> 
            <label class="form__label" for="secondName">Фамилия</label></div>
            <div class="form__group"> 
            <input placeholder=" " type="text" name="email" id="reg" class="form__input" /> 
            <label class="form__label" for="reg">Email</label>
            </div>
            <div class="form__group">  
            <input placeholder=" " type="password" id="pass" name="password" class="form__input" />
            <label class="form__label" for="pass">Пароль</label>
            </div>
            <button class="form__button" name="signUp">Зарегистрироваться</button>
        </form>`);
});

$("#modal_close, #overlay").click(function () {
    $("#modal_form").animate({opacity: 0, top: "0%"}, 200, function () {
        $(this).css("display", "none");
        $("#overlay").fadeOut(400);
    });
});


function modalOpen(content) {
    $("#overlay").fadeIn(400, function () {
        $("#modal_form")
            .css("display", "block")
            .animate({opacity: 1, top: "35%"}, 200);
    });
    $("#modal_content").html(content);
}