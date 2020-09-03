<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // one-to-one relationship with the save() method:
      // Create 2 records of users
      factory(App\User::class, 2)->create()->each(function ($user) {
          // Seed the relation with one customer
          $customer = factory(App\Customer::class)->make();
          $user->customer()->save($customer);
      });
    }
}
