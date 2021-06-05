<?php

use Page\Acceptance\Dresses;

/**
 * Класс для проверки Summer Dresses
 * 
 */

class DressesCest
{
    /**
     * Функция проверки вида карточек Summer Dresses(старый тест)
     */
    public function checkSummerDressesView(AcceptanceTester $I)
    /**
     * 
     */
    {
        // $scenario->skip('Старый тест, для ДЗ_08 не нужен');
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
}
