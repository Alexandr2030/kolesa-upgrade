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
    public const PRODUCTS_NMB = 2;


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
     * Метод будет выполняться после всех тестов
     */
    public function _after(\AcceptanceTester $I)
    {
        $I->waitForElementVisible(LoginPage::$cancellButton);
        $I->click(LoginPage::$cancellButton);
        $I->acceptPopup();
        $I->click(LoginPage::$logoutButton);
    }

    /**
     * Проверка листа желаний добавленных товаров
     */
    public function checkWishList(\AcceptanceTester $I)
    {
        for($i = 1; $i<=self::PRODUCTS_NMB; $i++) {
            $I->waitForElement(sprintf(ProductsPage::$firstProductCard, $i));
            $I->moveMouseOver(sprintf(ProductsPage::$firstProductCard, $i));
            $I->waitForElementVisible(sprintf(ProductsPage::$quick_view_button, $i));
            $I->click(sprintf(ProductsPage::$quick_view_button, $i));
            $I->waitForElementVisible(ProductsPage::$cartWindow);
            $I->switchToIFrame(ProductsPage::$cartWindow);
            $I->click(ProductsPage::$addToWishList);
            $I->waitForText(ProductsPage::$successMessage);
            $I->switchToIFrame();
            $I->click(ProductsPage::$iframeCloseButton);

        }

        $I->click(ProductsPage::$accountBotton);
        $I->waitForElementVisible(ProductsPage::$wishListButtonInAccount);
        $I->seeInCurrentUrl(LoginPage::$myAccountUrl);
        $I->click(ProductsPage::$wishListButtonInAccount);
        $I->waitForText(LoginPage::$successTextOfWishlist);

        $totalSum = $I->grabValueFrom('//td[2]');
        // var_dump($totalSum);
        $I->assertEquals(self::PRODUCTS_NMB, $totalSum);

    }

}