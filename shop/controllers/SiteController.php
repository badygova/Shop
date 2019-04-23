<?php
/**
 * Контроллер CartController
 */
include_once __DIR__.'/models/Category.php';
class SiteController
{
    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = array();
        $categories = Category::getCategoriesList();
        // Список последних товаров
        //$latestProducts = Product::getLatestProducts(6);
        // Список товаров для слайдера
        //$sliderProducts = Product::getRecommendedProducts();
        // Подключаем вид
        require_once(ROOT . '/views/index.php');
        return true;
    }
}