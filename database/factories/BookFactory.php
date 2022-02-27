<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=> 'bk12020',
            'title'=> 'Computer Programming',
            'author'=> 'Abdul halim',
            'image'=> 'book.jpg',
            'price'=> 330,
            'reck_no'=> 101,
            'row_no'=> 10,
            'col_no'=> 1,
            'available'=> 10,
            'total'=> 10,
        ];
    }
}
