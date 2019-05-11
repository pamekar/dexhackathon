<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    //
    protected $appends = ['description', 'farmer', 'summary', 'rating'];

    public function getFarmerAttribute()
    {
        return $this->user->name;
    }

    public function getProductNameAttribute($name)
    {
        return Str::title($name);
    }

    public function getRatingAttribute()
    {
        $faker = \Faker\Factory::create();

        return mt_rand(4.2, 4.9).";".mt_rand(150, 1100);
    }

    public function getSummaryAttribute()
    {
        $faker = \Faker\Factory::create();

        return $faker->realText(150);
    }

    public function getDescriptionAttribute()
    {
        $faker = \Faker\Factory::create();

        return $faker->realText(150);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }

}
