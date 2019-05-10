<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }

        $role = Role::where('name', 'farmer')->firstOrFail();
        foreach (range(1, 2) as $index) {
            \App\User::create([
                'role_id'  => $role->id,
                'name'     => "$faker->firstName $faker->lastName",
                'email'    => $faker->email,
                'password' => bcrypt('password'),
                'location'=>$faker->randomElement(['vilnius','kanuas','palanga','telsiai'])
            ]);
        }

        $role = Role::where('name', 'user')->firstOrFail();
        foreach (range(1, 10) as $index) {
            $name = "$faker->firstName $faker->lastName";
            \App\User::create([
                'role_id'  => $role->id,
                'name'     => "$faker->firstName $faker->lastName",
                'email'    => $faker->email,
                'password' => bcrypt('password'),
                'location'=>$faker->randomElement(['vilnius','kanuas','palanga','telsiai'])
            ]);
        }
    }
}
