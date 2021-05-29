<?php

use Page\Acceptance\Dresses;

/**
 * Класс для проверки Summer Dresses
 */

class SummerDressesCest
{
    /**
     * Функция проверки вида карточек Summer Dresses
     */
    public function checkSummerDressesView(AcceptanceTester $I)
    /**
     * 
     */
    {
        $I->amOnPage(Dresses::$URL);
        $I->seeElement(Dresses::$dresses_button);
        $I->moveMouseOver(Dresses::$dresses_button);
        $I->seeElement(Dresses::$summer_dresses);
        $I->moveMouseOver(Dresses::$summer_dresses);
        $I->click(Dresses::$summer_dresses);
        $I->waitForElement(Dresses::$grid_button);
        $I->seeElement(Dresses::$grid_button);
        $I->seeElement(Dresses::$grid_table);
        $I->moveMouseOver(Dresses::$grid_button);
        $I->click(Dresses::$list_button);
        $I->waitForElement(Dresses::$list_table);
        $I->seeElement(Dresses::$list_table);
    }
    // tests
    
    // public function checkSearchProductBlouse_with_css(AcceptanceTester $I)

    // {

    //     $I->amOnPage(SearchProduct::$URL);
    //     $I->waitForElementVisible(SearchProduct::$product_blouse_css);
    //     $I->seeElement(SearchProduct::$product_blouse_css);
    //     $I->scrollTo(SearchProduct::$product_blouse_css);
    //     $I->moveMouseOver(SearchProduct::$product_blouse_css);
    //     $I->click(SearchProduct::$click_to_quick_view_css);
    //     $I->waitForElementVisible(SearchProduct::$product_card_css);
    //     $I->seeElement(SearchProduct::$product_card_css);
    //     $I->switchToIFrame(SearchProduct::$iframe_css);
    //     $I->waitForElementVisible(SearchProduct::$check_product_blouse_css);
    //     $I->seeElement(SearchProduct::$check_product_blouse_css);

    // }

}
