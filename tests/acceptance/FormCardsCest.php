<?php

namespace Tests\Accetance;

use Page\Card;
use Page\Form;

/**
 * Класс для тестирования анкеты
 * @group testForm
 */
class FormCardsCest
{
    /**
     * Функция для тестирования карт оплаты
     */
    public function checkFormCards(\AcceptanceTester $I)
    {
        $I->amOnPage(Form::$URL);
        $I->fillField(Form::$first_name_field, 'First');
        $I->fillField(Form::$last_name_field, 'Last');
        $I->fillField(Form::$email_field, 'email@mail.com');
        $I->fillField(Form::$phone_number_field, '85445454');
        $I->fillField(Form::$adress_field, 'Abay str.');
        $I->fillField(Form::$city_field, 'Almaty');
        $I->fillField(Form::$state_field, 'Oblisy');
        $I->fillField(Form::$postal_field, '0522212');
        $I->click(Card::$radio_button_card);
        $I->fillField(Card::$first_name_field_card, 'first_name_field_card');
        $I->fillField(Card::$last_name_field_card, 'last_name_field_card');
        $I->fillField(Card::$card_number_field, '4545645');
        $I->fillField(Card::$security_code_field, '546');
        $I->click(Card::$expiration_month_dropdown);
        $I->click(Card::$month_january);
        $I->click(Card::$expiration_year_dropdown);
        $I->click(Card::$year_2021);
        $I->fillField(Card::$address_field_card, 'Adress');
        $I->fillField(Card::$city_field_card, 'City');
        $I->fillField(Card::$state_province_field_card, 'State');
        $I->fillField(Card::$postal_field_card, '0212221');
        $I->click(Card::$country_dropdown);
        $I->click(Card::$country_dropdown_USA);
        $I->click(Form::$submit_form);
        $I->seeElement('body > h1');
    }
}