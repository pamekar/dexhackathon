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

        $role = \TCG\Voyager\Models\Role::where('name', 'farmer')
            ->firstOrFail();
        $users = \App\User::where('role_id', $role)->pluck('id');

        foreach ($users as $user) {

            \App\Customer::create([
                'order'         => 1,
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
