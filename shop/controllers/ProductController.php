<?php
/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{
    public function actionView($productId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);
        // Подключаем вид
        require_once(ROOT . '/views/product.php');
        return true;
    }
}