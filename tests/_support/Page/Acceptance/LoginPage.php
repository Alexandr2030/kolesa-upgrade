<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * Имя пользователя для аккаунта
     */
    public const USERNAME = 'polm2030@gmail.com';

    /**
     * Пароль пользователя
     */
    public const PASSWORD = 'WNn@AyXrp5kUepA';

    /**
     * Адрес страницы
     */
    public static $URL = '';
    
    /**
     * Урла личного кабинета
     */
    public static $myAccountUrl = 'index.php?controller=my-account';
    
    /**
     * Старница листа желаний
     */
    public static $myWishListUrl = 'index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * 
     */
    public static $successTextOfWishlist = 'My wishlists';

    /**
     * Селектор поля емаил
     */
    public static $emailField = '#email';

    /**
     * Селектор отмены товаров
     */
    public static $cancellButton = '//td[6]/a/i';

    /**
     * Селектор кнопки logout
     */
    public static $logoutButton= '.logout >a';

    /**
     * Селектор поля пароль
     */
    public static $passwordField = '#passwd';

    /**
     * Селектор кнопки "залогиниться"
     */
    public static $loginButton = '.login';

    /**
     * Селектор кнопки "submitLogin"
     */
    public static $submitLogin = '#SubmitLogin';


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
