<?php


/** 
     * Не удалено специально для примера!!!!!!!
     * 
     * Проверка негативного сценария на создание пользователся без name
     * @group test_negative
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */
    // public function checkUserCreateNegative(\FunctionalTester $I, Example $data)
    // {
    //     $faker = Factory::create();

    //     $email = $faker->email;
    //     $owner = $faker->lastName . '@alex_radko';
    //     $I->haveHttpHeader('Content-Type', 'application/json');

    //     $I->sendPost('human', [
    //         $data['email'] ? $email : null, 
    //         $data['owner'] ? $owner : null,
    //     ]);


    //     $I->seeResponseContainsJson($data['errorText']);
    // }

    // /**
    //  * dataProvider для теста
    //  */
    // protected function getDataForCreateUserNegative()
    // {
    //     return [
    //         [
    //             'email' => true,
    //             'owner' => false,
    //             'errorText' => ['message' => 'email не передан']
    //         ],
    //         [
    //             'email' => false,
    //             'owner' => true,
    //             'errorText' => ['message' => 'email не передан']
    //         ]
    //     ];
    // }
