<?php

use Page\Acceptance\LoginPageAccept;

/**
 * Класс для проверки авторизации
 * 
 */

 class LoginAcceptCest
 {
     /**
      * Функция проверки заблокированного пользователя
      */

     public function checkInvalidLogin(AcceptanceTester $I)
     {
        $loginPage = new LoginPageAccept($I);

        $I->amOnPage(LoginPageAccept::$URL);
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