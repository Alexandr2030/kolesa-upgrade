<?php

use Page\Acceptance\Login;

/**
 * Класс для проверки авторизации
 */

 class LoginCest
 {
     /**
      * Функция проверки заблокированного пользователя
      */

     public function checkInvalidLogin(AcceptanceTester $I)
     {
        $loginPage = new Login($I);

        $I
            ->amOnPage(Login::$URL);
        $loginPage
            ->fillUsernameField()
            ->fillPasswordField()
            ->clickSubmit();
        $loginPage
            ->seeErrorMessage()
            ->clickErrorButton()
            ->dontseeErrorMessage();
     }
 }