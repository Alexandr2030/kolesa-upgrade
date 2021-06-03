<?php
namespace Page;

class Category
{
    // include url of current page
    public static $URL = '';

    /**
     * Локатор кнопки "Разработка"
     */
    public static $navbarLinks = '//*[@id="navbar-links"]/li[%d]';

    /**
     * Линка категорий
     */
    public static $catLink = '.page-header';

    /**
     * Линк "Разработка"
     */
    public static $devLink = 'develop';

}
