<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        $role = \App\Role::where('name', 'user')
            ->firstOrFail();
        $users = \App\User::where('role_id', $role->id)->pluck('id');

        foreach ($users as $user) {

            \App\Customer::create([
                'user_id'       => $user,
                'address'       => $faker->streetAddress,
                'city'          => $faker->randomElement([
                    'Kanuas',
                    'Vilinius',
                    'Utena'
                ]),
                'health_issues' => $faker->randomElement([
                    'Diabetes',
                    'Hypertension',
                    'Madness'
                ])
            ]);
        }
    }
}
