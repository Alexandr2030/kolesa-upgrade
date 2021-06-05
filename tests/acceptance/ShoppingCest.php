<?php

use Page\Acceptance\ProductsPage;

/**
 * Класс для покупки товаров
 * @group dresses
 */
class ShopppingCest
{
    public const PRODUCTS_NMB = 3;
    /**
     * Проверка листа желаний добавленных товаров
     */
    public function checkWishList(\AcceptanceTester $I)
    {
        $I->amOnPage(ProductsPage::$dressesUrl);
        $I->waitForElement(ProductsPage::$firstProductCard);

        for($i = 1; $i<=self::PRODUCTS_NMB; $i++) {
            $I->moveMouseOver(sprintf(ProductsPage::$productCards, $i));
            $I->click(sprintf(ProductsPage::$addToCartButton, $i));
            $I->waitForElementVisible(ProductsPage::$addSuccessModal);
            $I->waitForText(ProductsPage::$successMessage);
            $I->click(ProductsPage::$goBackShoppingButton);
        }

        $I->click(ProductsPage::$cartListButton);

    }
}