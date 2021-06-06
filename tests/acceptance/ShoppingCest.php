<?php

use GuzzleHttp\Handler\Proxy;
use Page\Acceptance\LoginPage;
use Page\Acceptance\ProductsPage;
use Page\Acceptance\ShoppingListPage;

/**
 * Класс для покупки товаров
 * @group dresses
 */
class ShopppingCest
{
    public const PRODUCTS_NMB = 1;


    /**
     * Метод для логина на страницу, будет выполняться перед каждым тестом
    */
    public function _before(\AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$loginButton);
        $I->waitForElementVisible(LoginPage::$emailField);
        $I->fillField(LoginPage::$emailField, LoginPage::USERNAME);
        $I->fillField(LoginPage::$passwordField, LoginPage::PASSWORD);
        $I->click(LoginPage::$submitLogin);
        $I->waitForElementVisible(ProductsPage::$headerLogo);
        $I->click(ProductsPage::$headerLogo);

    }

    /**
     * Проверка листа желаний добавленных товаров
     */
    public function checkWishList(\AcceptanceTester $I)
    {
        for($i = 1; $i<=self::PRODUCTS_NMB; $i++) {
            $I->waitForElement(sprintf(ProductsPage::$firstProductCard, $i));
            $I->moveMouseOver(sprintf(ProductsPage::$firstProductCard, $i));
            $I->click(ProductsPage::$quick_view_button);
            $I->waitForElementVisible(ProductsPage::$cartWindow);
            $I->switchToIFrame(ProductsPage::$cartWindow);
            $I->click(ProductsPage::$addToWishList);
            $I->waitForText(ProductsPage::$successMessage);
            
            $I->click(ProductsPage::$closeCartButton);
            $I->switchToIFrame();
            $I->wait(5);
        }
        // $I->moveMouseOver(sprintf(ProductsPage::$productCards, $i));
        // $I->click(sprintf(ProductsPage::$addToCartButton, $i));
        // $I->waitForElementVisible(ProductsPage::$addSuccessModal);
        // $I->waitForText(ProductsPage::$successMessage);
        // $I->waitForElementVisible(ProductsPage::$goBackShoppingButton);
        // $I->click(ProductsPage::$goBackShoppingButton);
        // $I->click(ProductsPage::$cartListButton);
        // $I->seeInCurrentUrl(ShoppingListPage::$ordersUrl);
    }
}