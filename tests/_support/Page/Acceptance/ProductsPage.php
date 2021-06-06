<?php
namespace Page\Acceptance;

class ProductsPage
{

    /**
     * Пароль
     */

     /**
     * Страница c платьями
     *
     * @var string
     */
    public static $dressesUrl = 'index.php?id_category=8&controller=category';

    /**
     * Селектор лого
     */
    public static $headerLogo = '#header_logo';

    /**
     * Url
     */
    public static $URL = '';

    /**
     * Селектор с блоком товаров
     *
     * @var string
     */
    public static $productCards = '//ul[contains(@class, "product_list")]//li[contains(@class, "product")][%s]';

  /**
     * Селектор с блоком товаров
     *
     * @var string
     */
    public static $firstProductCard = '//*[@id="homefeatured"]/li[%s]';

    /**
     * Селектор кнопки быстрый просмотр
     */
    public static $quick_view_button = '#homefeatured > li:nth-child(1) a.quick-view';

    /**
     * Селектор кнопки добавления товара в корзину
     *
     * @var string
     */
    public static $addToCartButton = '//li[contains(@class,"ajax_block_product")][%s]//a[@title="Add to cart"]';

    /**
     * Селектор карточки товара
     *
     * @var string
     */
    public static $cartWindow= '.fancybox-iframe';

    /**
     * Селектор кнопки "добавить в список желаний"
     */
    public static $addToWishList = '#wishlist_button';

    /**
     * 
     */
    public static $closeCartButton = '#product > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';

    /**
     * Селектор кнопки возвращения к покупкам
     *
     * @var string
     */
    public static $goBackShoppingButton = '//span[@title="Continue shopping"]';

    /**
     * success сообщение после добавления товара в корзину
     *
     * @var string
     */
    public static $successMessage = 'Added to your wishlist.';

      /**
       * Селектор кнопки корзины на странице товаров
       *
       * @var string
       */
    public static $cartListButton = '//a[@title="View my shopping cart"]';

}
