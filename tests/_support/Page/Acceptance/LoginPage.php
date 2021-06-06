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
     * 
     */
    public static $emailField = '#email';

    /**
     * 
     */
    public static $passwordField = '#passwd';

    /**
     * 
     */
    public static $loginButton = '.login';

    /**
     * 
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
