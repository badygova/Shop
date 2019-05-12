<?php
/**
 * Created by PhpStorm.
 * User: Алия
 * Date: 12.05.2019
 * Time: 17:35
 */
class SearchController
{
    public function actionIndex()
    {
        if (isset($_POST['search'])) {
// подключаемся к базе
            include('db.php');
            $db = new db();
// никогда не доверяйте входящим данным! Фильтруйте всё!
            $word =pg_escape_string($_POST['search']);
// Строим запрос
            $sql = "SELECT name FROM product WHERE content LIKE '%" . $word . "%' ORDER BY 'name' LIMIT 10";
// Получаем результаты
            $row = $db->select_list($sql);
            if(count($row)) {
                foreach ($latestProducts as $product):
                    echo '<div class="product-item"> 
<div class="pi-pic"> 
<img src="<?php echo Product::getImage($product['/id/']); ?>" alt=""/> 
<div class="pi-links"> 
<a href="#" class="add-card" data-id="<?php echo $product['/id/']; ?>"><i 
class="flaticon-bag"></i><span>В корзину</span></a> 
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
</div> 
</div> 
<div class="pi-text"> 
<h6><?php echo $product['/price/']; ?> руб</h6> 
<p><a href="/product/<?php echo $product['/id/']; ?>"> 
echo $product['/name/']; 
</a></p> 
</div> 
</div>';
                endforeach;
            } else {
                echo '<li>По вашему запросу ничего не найдено</li>';
            }
        }


        // Подключаем вид
        require_once(ROOT . '/views/search.php');
        return true;
    }
}