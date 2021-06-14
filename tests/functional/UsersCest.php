<?php

// use Codeception\Example;
use Faker\Factory;





/**
 * Класс для работы с юзером
 */
class UsersCest
{
    
    public const NUMBER_OF_USERS = 1;
    /**
     * Данные для создания пользователя
     * 
     * @var array
     */
    protected $data;
    
    /**
     * Тест на создание, изменение и удаление юзера

     * @param FunctionalTester $I
     * @return void
     * 
     */
    public function createRandomlyUserData()

    {
        $faker = Factory::create();

        $this->data = [
            'email'             => strtolower($faker->email),
            'superhero'         => $faker->boolean(),
            'skill'             => $faker->word,
            'owner'             => $faker->name.'@alex_radko',
            'job'               => $faker->company,
            'name'              => $faker->firstName,
            'DOB'               => $faker->date("Y-m-d"),
            'avatar'            => $faker->imageUrl(),
            'canBeKilledBySnap' => $faker->boolean(),
            'created_at'        =>$faker->date("Y-m-d"),
            
        ];
        return $this;
    }
    /**
     * 
     * @group test_user
     */
    
    public function sendRandomUsers(\FunctionalTester $I)
    {
        for ($i = 0; $i <= self::NUMBER_OF_USERS; $i++)
        {
            $I->sendPost('/human', [$this->data]);
            $this->createRandomlyUserData();
            $I->amOnPage('http://izze.xyz');
            // $I->haveInCollection('/people', $this->data);
        }

    }
}