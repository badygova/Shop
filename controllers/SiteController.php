<?php
/**
 * Контроллер CartController
 */
class SiteController
{
    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        //$categories = Category::getCategoriesList();
        // Список последних товаров
        //$latestProducts = Product::getLatestProducts(6);
        // Список товаров для слайдера
        //$sliderProducts = Product::getRecommendedProducts();
        // Подключаем вид
        require_once(ROOT . '/views/index.php');
        return true;
    }
    /**
     * Action для страницы "Контакты"
     */
    public function actionContact()
    {
        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору
                $adminEmail = 'abadygova17@gmail.сom';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/index.php');
        return true;
    }


}