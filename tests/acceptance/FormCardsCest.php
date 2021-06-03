<?php

namespace Tests\Accetance;

use Page\Card;
use Page\Form;
use Faker\Factory;
use Helper\CustomFakerProvider;

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
        $faker = Factory::create();
        $faker->addProvider(new CustomFakerProvider($faker));

        $fname = $faker->firstName;
        $lname = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $faker->phoneNumber;
        $street = $faker->streetAddress;
        $city = $faker->city;
        $region = $faker->state;
        $postalCode = $faker->postcode;
        $creditCard = $faker->getCardNumber();
        $cvv = $faker->getCvv();

        $I->amOnPage(Form::$URL);
        $I->fillField(Form::$first_name_field, $fname);
        $I->fillField(Form::$last_name_field, $lname);
        $I->fillField(Form::$email_field, $email);
        $I->fillField(Form::$phone_number_field, $phoneNumber);
        $I->fillField(Form::$adress_field, $street);
        $I->fillField(Form::$city_field, $city);
        $I->fillField(Form::$state_field, $region);
        $I->fillField(Form::$postal_field, $postalCode);
        $I->click(Card::$radio_button_card);
        $I->fillField(Card::$first_name_field_card, $fname);
        $I->fillField(Card::$last_name_field_card, $lname);
        $I->fillField(Card::$card_number_field, $creditCard);
        $I->fillField(Card::$security_code_field, $cvv);
        $I->click(Card::$expiration_month_dropdown);
        $I->click(Card::$month_january);
        $I->click(Card::$expiration_year_dropdown);
        $I->click(Card::$year_2021);
        $I->fillField(Card::$address_field_card, $street);
        $I->fillField(Card::$city_field_card, $city);
        $I->fillField(Card::$state_province_field_card, $region);
        $I->fillField(Card::$postal_field_card, $postalCode);
        $I->click(Card::$country_dropdown);
        $I->click(Card::$country_dropdown_USA);
        $I->click(Form::$submit_form);
        $I->waitForText('Good job');
    }
}