<h2>Поиск</h2>
<form action="#" method="post">
    <input type="text" name="search" placeholder="Поиск" value="<?php echo $search; ?>"/>
    <input type="submit" name="submit" class="btn btn-default" value="Искать" />
</form>
<div id="div">
    <#if petsshop ??>
    <#list petsshop as pets>
    <div class="col-sm-4 col-md-4 not-visible animated" data-animation="fadeInLeft">
        <div class="panel panel-default staff-info">
            <div class="panel-body">
                <img class="photo" src="${pets.img}" alt="staff">
                <div class="inform"><span class="name">${pets.name}</span>
                    <span class="price">${pets.price}</span></div>
                <span class="information">${pets.description}</span><br>
                <span class="number">${pets.number}</span>
            </div>
        </div>
    </div>
</#list>
</#if>

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

