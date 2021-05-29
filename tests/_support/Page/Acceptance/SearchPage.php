<?php
namespace Page\Acceptance;

/**
 * Класс для поиска товаров
 */
class SearchPage
{
    /**
     * URL 
     */
    public static $URL = '';

    /**
     * Селектор товара
     */
    public static $product_blouse_css = '#homefeatured > li:nth-child(2)';

    /**
     * Окно quick-view(быстрый просмотр)
     */
    public static $click_to_quick_view_css = '#homefeatured > li:nth-child(2) a.quick-view';

    /**
     * Карточка товара
     */
    public static $product_card_css = '.fancybox-wrap';

    /**
     * iframe карточки товара
     */
    public static $iframe_css = '.fancybox-iframe';

    /**
     * Проверка наличия товара Blouse
     */
    public static $check_product_blouse_css = '.pb-center-column>h1';

    /**
     * 
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
