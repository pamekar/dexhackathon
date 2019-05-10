<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
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

        $userRole = \App\Role::where('name', 'user')
            ->firstOrFail();
        $farmerRole = \App\Role::where('name', 'user')
            ->firstOrFail();
        $farmers = \App\User::where('role_id', $farmerRole->id)->pluck('id');
        $users = \App\User::where('role_id', $farmerRole->id)->pluck('id');
        $products = \App\Product::pluck('id');
        foreach (range(1, 40) as $index) {
            \App\Transaction::create([
                'user_id'    => $faker->randomElement($users),
                'product_id' => $faker->randomElement($products),
                'quantity'   => mt_rand(1, 80),
                'amount'     => mt_rand(10, 1000) * 100,
                'status'     => $faker->randomElement(['delivered', 'ordered']),
                'remark'     => 'paid'
            ]);
        }
    }
}
