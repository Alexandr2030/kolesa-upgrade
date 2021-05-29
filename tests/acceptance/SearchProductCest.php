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

    /**
     * Найти с помощью селекторов CSS на странице товар "Blouse" и убедиться, что это нужный нам товар
     */
    // public function checkSearchProductBlouse_with_xpath(AcceptanceTester $I)
    /**
     * Функция оставлена только для закрепления поиска локаторов по xpath для апрува Эдуардом
     */

    // {
    //     $product_blouse_xpath = '//*[@id="homefeatured"]/li[2]';
    //     $product_container = '//ul[@id="homefeatured"]/li[2]/div[@class="product-container"]';
    //     $click_to_quick_view_xpath = '//ul[@id="homefeatured"]/li[2]/div[@class="product-container"]//a[@class="quick-view"]';
    //     $product_card_xpath = '//*[@id="index"]/div[3]/div';
    //     $iframe_xpath = '//*[@class="fancybox-iframe"]';
    //     $check_product_blouse_xpath = '//*[@id="product"]/div[1]/div/div[2]/h1';

    //     $I->amOnPage('');
    //     $I->waitForElementVisible($product_blouse_xpath);
    //     $I->seeElement($product_blouse_xpath);
    //     $I->scrollTo($product_blouse_xpath);
    //     $I->moveMouseOver($product_container);
    //     $I->click($click_to_quick_view_xpath);
    //     $I->waitForElementVisible($product_card_xpath);
    //     $I->seeElement($product_card_xpath);
    //     $I->switchToIFrame($iframe_xpath);
    //     $I->waitForElementVisible($check_product_blouse_xpath);
    //     $I->seeElement(SearchProduct::$check_product_blouse_css);
        
    // }
}
