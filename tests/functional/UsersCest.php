<?php

use Codeception\Example;
use Faker\Factory;

/**
 * Класс для работы с API
 */
class API
{
    /**
     * Урла POST запроса
     */
    public static $POST = 'human';

    /**
     * Урла GET запроса
     */
    public static $GET = 'people';

    /**
     * Метод, применимый в PUT и DELETE методах по _id
     */
    public static $VARIOUS = 'human?_id=';
}


/**
 * Класс для работы с юзером
 */
class UsersCest
{
    
    /**
     * Тест на создание, изменение и удаление юзера
     * @group test_user
     * @dataProvider dataForcheckUserCreate
     * @param Example $data
     */
    public function checkUserCreate(\FunctionalTester $I, Example $data)
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
            'owner' => $faker->name.'@alex_radko',
            'job'   => $faker->company,
            'name'  => $faker->firstName
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost(API::$POST, $userData);
        $userId = $I->grabDataFromResponseByJsonPath("_id")[0];
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);

        $I->sendGet(API::$GET, $userData);
        $I->seeResponseMatchesJsonType($defaultSchema);

        $I->sendPut(API::$VARIOUS.$userId, ['job'=> $faker->company]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson($data['nModified']);

        $I->sendDelete(API::$VARIOUS.$userId);
        $I->seeResponseContainsJson($data['deletedCount']);
        $I->seeResponseCodeIsSuccessful();
        $I->sendGet(API::$VARIOUS.$userId);
        $I->seeResponseContainsJson($data['errorText']);
    }

    /**
     * dataProvider для теста
     */
    protected function dataForcheckUserCreate()
    {
        return [
            [
                'nModified'    => ['nModified' => 1],
                'deletedCount' => ['deletedCount' => 1],
                'errorText'    => ['error' => 'Not Found']
            ]
        ];
    }
}