<?php

use Faker\Factory;

/**
 * Класс для работы с юзером
 */
class UsersCest
{
    /**
     * Тест на создание юзера
     * @group test_rest
     */
    public function checkUserCreate(\FunctionalTester $I)
    {
        $faker = Factory::create();

        $defaultSchema = [
            'job'       => 'string',
            '_id'       => 'string',
            'email'     => 'string',
            'superhero' => 'boolean',
            'name'      => 'string',
            'owner'     => 'string'
        ];

        $userData = [
            'email' => $faker->email,
            'owner' => $faker->lastName . '@alex_radko',
            'job'   => $faker->company,
            'name'  => $faker->firstName
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType($defaultSchema);
    }

    /**
     * Проверка негативного сценария на создание пользователся без name
     * @group test_negative
     */
    public function checkUnableUserWithoutName(\FunctionalTester $I)
    {
        $faker = Factory::create();

        $userData = [
            'email' => $faker->email,
            'owner' => $faker->lastName . '@alex_radko',
            'job'   => $faker->company,
            // 'name'  => $faker->firstName
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->canSeeResponseContainsJson(['message' => 'Что-то пошло не так, проверьте поля: email, name, owner. p.s. учимся на своих ошибках']);
    }
    /**
     * @group test_negative2
     */
    public function checkUnableUserWithoutOwner(\FunctionalTester $I)
    {
        $faker = Factory::create();
        $userData = [
            'email' => $faker->email,
            // 'owner' => $faker->lastName . '@alex_radko',
            'job'   => $faker->company,
            'name'  => $faker->firstName
        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->canSeeResponseContainsJson(['message' => 'Что-то пошло не так, проверьте поля: email, name, owner. p.s. учимся на своих ошибках']);
    }
}