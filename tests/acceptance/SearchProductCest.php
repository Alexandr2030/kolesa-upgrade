<?php

use Page\Acceptance\SearchPage;
use Page\Acceptance\SearchProduct;

/**
 * Класс для проверки наличия товара "Blouse" на сайте.
 */

class SearchProductCest
{
    /**
     * Найти с помощью селекторов CSS на странице товар "Blouse" и убедиться, что это нужный нам товар
     */
    // tests
    
    public function checkSearchProductBlouse_with_css(AcceptanceTester $I)

    {

        $I->amOnPage(SearchPage::$URL);
        $I->waitForElementVisible(SearchPage::$product_blouse_css);
        $I->seeElement(SearchPage::$product_blouse_css);
        $I->scrollTo(SearchPage::$product_blouse_css);
        $I->moveMouseOver(SearchPage::$product_blouse_css);
        $I->click(SearchPage::$click_to_quick_view_css);
        $I->waitForElementVisible(SearchPage::$product_card_css);
        $I->seeElement(SearchPage::$product_card_css);
        $I->switchToIFrame(SearchPage::$iframe_css);
        $I->waitForElementVisible(SearchPage::$check_product_blouse_css);
        $I->seeElement(SearchPage::$check_product_blouse_css);

    }
}
