<?php

use Codeception\Example;
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
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */
    public function checkUserCreateNegative(\FunctionalTester $I, Example $data)
    {
        $faker = Factory::create();

        $email = $faker->email;
        $owner = $faker->lastName . '@alex_radko';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', [
            $data['email'] ? $email : null, 
            $data['owner'] ? $owner : null,
        ]);


        $I->seeResponseContainsJson($data['errorText']);
    }

    /**
     * dataProvider для теста
     */
    protected function getDataForCreateUserNegative()
    {
        return [
            [
                'email' => true,
                'owner' => false,
                'errorText' => ['message' => 'email не передан']
            ],
            [
                'email' => false,
                'owner' => true,
                'errorText' => ['message' => 'email не передан']
            ]
        ];
    }
}