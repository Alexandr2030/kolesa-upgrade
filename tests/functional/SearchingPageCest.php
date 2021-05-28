<?php

class SearchPageCest
{
    /**
     * В поле поиска написать «Printed dress»,  на странице результатов убедиться, что было найдено 5 товаров
     */
    // tests
    public function checkSearchPage_css(FunctionalTester $I)

    {
        $search_element_css = '#search_query_top';
        $message = 'Printed dress';
        $searchbox_button_css = '#searchbox > button';
        $conter_css = '.product-container';

        $I->amOnPage('');
        $I->seeElement($search_element_css);
        $I->fillField($search_element_css, $message);
        $I->click($searchbox_button_css);
        $I->seeNumberOfElements($conter_css, 5);

    }

    public function checkSearchPage_xpath(FunctionalTester $I)

    {
        $search_element_xpath = '//*[@id="search_query_top"]';
        $message = 'Printed dress';
        $searchbox_button_xpath = '//button[@name="submit_search"]';
        $counter_xpath = '//*[@class="product-container"]';

        $I->amOnPage('');
        $I->seeElement($search_element_xpath);
        $I->fillField($search_element_xpath, $message);
        $I->click($searchbox_button_xpath);
        $I->seeNumberOfElements($counter_xpath, 5);
    }
}
