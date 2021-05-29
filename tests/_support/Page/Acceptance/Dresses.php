<?php
namespace Page\Acceptance;

/**
 * Класс для поиска товаров
 */
class Dresses
{
    /**
     * URL 
     */
    public static $URL = '';

    /**
     * Селектор кнопки "dresses"
     */
    public static $dresses_button = '#block_top_menu>ul>li:nth-child(2)';

    /**
     * Селектор кнопки "Summer Dresses"
     */
    public static $summer_dresses = '#block_top_menu>ul>li>ul>li:nth-child(3)>a';

    /**
     * Селектор кнопки "Grid"
     */
    public static $grid_button = '#grid';

    /**
     * Селектор для проверки просмотра товаров таблицей
     */
    public static $grid_table = '#center_column>ul.grid';

    /**
     * Селектор кнопки "List"
     */
    public static $list_button = '#list';

    /**
     * Селектор для проверки просмотра товаров списком
     */
    public static $list_table = '#center_column>ul.list';
}
