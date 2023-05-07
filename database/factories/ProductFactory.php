<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */

 Product::factory()
    ->count(20)
    ->state(new Sequence(
        ['name' => 'Hamburger', 'description' => 'Classic burger with beef patty, cheese, lettuce, and tomato', 'price' => 5.99],
    ['name' => 'Cheeseburger', 'description' => 'Hamburger with extra cheese', 'price' => 6.49],
    ['name' => 'Chicken Sandwich', 'description' => 'Crispy chicken with lettuce, tomato, and mayo', 'price' => 6.99],
    ['name' => 'Fish Sandwich', 'description' => 'Battered fish fillet with lettuce and tartar sauce', 'price' => 7.49],
    ['name' => 'French Fries', 'description' => 'Classic fries with salt and ketchup', 'price' => 2.99],
    ['name' => 'Onion Rings', 'description' => 'Crispy breaded onion rings', 'price' => 3.99],
    ['name' => 'Chicken Nuggets', 'description' => 'Breaded chicken nuggets', 'price' => 4.99],
    ['name' => 'Hot Dog', 'description' => 'Grilled hot dog with ketchup and mustard', 'price' => 3.49],
    ['name' => 'Pizza', 'description' => 'Classic cheese pizza', 'price' => 8.99],
    ['name' => 'Taco', 'description' => 'Crispy taco shell with beef, lettuce, tomato, and cheese', 'price' => 2.99],
    ['name' => 'Burrito', 'description' => 'Flour tortilla with rice, beans, cheese, and beef or chicken', 'price' => 7.99],
    ['name' => 'Quesadilla', 'description' => 'Grilled tortilla with cheese and chicken or steak', 'price' => 6.99],
    ['name' => 'Nachos', 'description' => 'Tortilla chips with cheese, beans, and salsa', 'price' => 5.99],
    ['name' => 'Milkshake', 'description' => 'Vanilla milkshake with whipped cream', 'price' => 4.99],
    ['name' => 'Soda', 'description' => 'Coke, Sprite, or Fanta', 'price' => 1.99],
    ['name' => 'Iced Tea', 'description' => 'Sweet or unsweetened iced tea', 'price' => 1.99],
    ['name' => 'Coffee', 'description' => 'Freshly brewed coffee with cream and sugar', 'price' => 2.49],
    ['name' => 'Ice Cream', 'description' => 'Single scoop of vanilla or chocolate ice cream', 'price' => 2.99],
    ['name' => 'Brownie', 'description' => 'Warm chocolate brownie with ice cream', 'price' => 5.99]
    ))
    ->create();




$factory->define(Product::class, function (Faker $faker) use ($fastFoods) {
    $fastFood = $fastFoods[array_rand($fastFoods)];
    return [
        'name' => $fastFood['name'],
        'description' => $fastFood['description'],
        'price' => $fastFood['price'],
    ];
});
