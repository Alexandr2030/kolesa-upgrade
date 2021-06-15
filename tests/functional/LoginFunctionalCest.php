<?php

use Page\Functional\LoginPageFunc;

/**
 * Класс для проверки авторизации
 * 
 */

 class LoginFuncCest
 {
     /**
      * Функция проверки статуса сайта
      */

     public function checkInvalidLogin(FunctionalTester $I)
     {
        $I->amOnPage(LoginPageFunc::$URL);
        $I->seeResponseCodeIsSuccessful();
     }
 }