<?php
/**
 * Created by PhpStorm.
 * User: Алия
 * Date: 23.04.2019
 * Time: 15:19
 */

class Category
{
    /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public static function getCategoriesList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT id, name FROM category WHERE status = "1" ORDER BY sort_order, name ASC');
        // Получение и возврат результатов
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}