<?php

namespace Tests\Accetance;

use Codeception\Example;
use Page\Category;
use phpDocumentor\Reflection\Types\Integer;

/**
 * Класс для тестирования категорий
 * @group test
 */
class HabrCategoryCest
{
    /**
     * Функция проверки категорий
     * @param Example $data
     * @dataProvider getDataForNavbarLinks
     */

    public function checkCategory(\AcceptanceTester $I,Example $data)

    {
        $I->amOnPage(Category::$URL);
        $I->waitForElement(sprintf(Category::$navbarLinks, $data['flows']));
        $I->click(sprintf(Category::$navbarLinks, $data['flows']));
        $I->waitForElementVisible(Category::$catLink);
        // $I->seeInCurrentUrl([$I->grabFromCurrentUrl()]);
        $I->seeInCurrentUrl($data['url']);
    }

    protected function getDataForNavbarLinks()
    {
        // $count = rand(1,8);
        return[
            // ['flows' => rand(1,8), 'url' => 'develop']
            ['flows' => '5', 'url' => 'management'],
            ['flows' => '3', 'url' => 'admin']

        ];
    }
}