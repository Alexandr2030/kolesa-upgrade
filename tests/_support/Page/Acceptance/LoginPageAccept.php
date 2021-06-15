<?php
namespace Page\Acceptance;

class LoginPageAccept

{
    /**
     * Имя пользователя для заблокированного аккаунта
     */
    public const USERNAME = 'locked_out_user';

    /**
     * Пароль для заблокированного пользователя
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Адрес страницы
     */
    public static $URL = '';

    /**
     * Селектор поля ввода для логина
     */
    public static $login_input = '#user-name';

    /**
     * Селектор поля ввода для пароля
     */
    public static $password_input = '#password';

    /**
     * Селектор кнопки авторизации
     */
    public static $login_button = '#login-button';

    /**
     * Селектор всплывающей ошибки
     */
    public static $error_message = '.error-message-container.error';

    /**
     * Селектор кнопки закрытия всплывающей ошибки
     */
    public static $error_button = 'button';

    /**
     * Объект Tester -a
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;
    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Заполняет поле ввода логином
     */
    public function fillUsernameField()
    {
        $this->acceptanceTester->fillField(self::$login_input, self::USERNAME);

        return $this;
    }

    /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField()
    {
        $this->acceptanceTester->fillField(self::$password_input, self::PASSWORD);
        
        return $this;
    }

    /**
     * Кликает на кнопку логина
     */
    public function clickSubmit()
    {
        $this->acceptanceTester->click(self::$login_button);
        
        return $this;
    }
    
    /**
     * Кликает на кнопку закрытия окна ошибки
     */
    public function clickErrorButton()
    {
        $this->acceptanceTester->click(self::$error_button);

        return $this;
    }

     /**
     * Проверяет наличие окна ошибки
     */
    public function seeErrorMessage()
    {
        $this->acceptanceTester->seeElement(self::$error_message);

        return $this;
    }
     /**
     * Проверяет, что окно ошибки закрылось
     */
    public function dontseeErrorMessage()
    {
        $this->acceptanceTester->dontSee(self::$error_message);

        return $this;
    }

}