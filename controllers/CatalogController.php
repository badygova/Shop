<?php
/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController
{
    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex($categoryId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        $category = Category::getCategoryNameById($categoryId);
        // Список последних товаров
        $latestProducts = Product::getLatestProducts(10);
        // Подключаем вид
        require_once(ROOT . '/views/category.php');
        return true;
    }
    /**
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId, $page = 1)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        // Список товаров в категории
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид
        require_once(ROOT . '/views/category.php');
        return true;
    }
}