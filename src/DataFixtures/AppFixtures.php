<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;
use App\Factory\ProductDetailsFactory;
use App\Factory\ProductFactory;



class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'username' => 'Disi',
            'password' => 'Disi',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'Manager',
            'password' => 'Manager',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'Jack',
            'password' => 'Jack',
            'role' => 'ROLE_USER'
        ]);

        UserFactory::createOne([
            'username' => 'User',
            'password' => 'User',
            'role' => 'ROLE_USER'
        ]);


        ProductFactory::createOne(['name' => 'Puma Hoodie']);
        ProductFactory::createOne(['name' => 'Nike Tech Fleece']);
        ProductFactory::createOne(['name' => 'Nike Jordans']);

        ProductDetailsFactory::createOne([
            'Brand' => 'Puma',
            'Price' => '50',
            'Clothing_name' => ProductFactory::find(['name' => 'Puma Hoodie']),
        ]);

        ProductDetailsFactory::createOne([
            'Brand' => 'Nike',
            'Price' => '90',
            'Clothing_name' => ProductFactory::find(['name' => 'Nike Tech Fleece']),
        ]);


    }
}
