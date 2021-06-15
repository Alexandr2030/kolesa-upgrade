<?php
namespace Page\Functional;

class LoginPageFunc

{
    /**
     * Имя пользователя для заблокированного аккаунта
     */
    public const USERNAME = 'standard_user';

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
     * @var \FunctionalTester;
     */
    protected $functionalTester;
    /**
     * Метод-конструктор
     */
    public function __construct(\FunctionalTester $I)
    {
        $this->functionalTester = $I;
    }

    /**
     * Заполняет поле ввода логином
     */
    public function fillUsernameField()
    {
        $this->functionalTester->fillField(self::$login_input, self::USERNAME);

        return $this;
    }

    /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField()
    {
        $this->functionalTester->fillField(self::$password_input, self::PASSWORD);
        
        return $this;
    }

    /**
     * Кликает на кнопку логина
     */
    public function clickSubmit()
    {
        $this->functionalTester->click(self::$login_button);
        
        return $this;
    }
    
    /**
     * Кликает на кнопку закрытия окна ошибки
     */
    public function clickErrorButton()
    {
        $this->functionalTester->click(self::$error_button);

        return $this;
    }

     /**
     * Проверяет наличие окна ошибки
     */
    public function seeErrorMessage()
    {
        $this->functionalTester->seeElement(self::$error_message);

        return $this;
    }
     /**
     * Проверяет, что окно ошибки закрылось
     */
    public function dontseeErrorMessage()
    {
        $this->functionalTester->dontSee(self::$error_message);

        return $this;
    }

}