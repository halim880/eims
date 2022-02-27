<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        
        Book::create([
            'slug'=> Str::slug('Programming in C'),
            'title'=> 'Programming in C',
            'author'=> 'E. Balagurusamy',
            'category'=> 'Computer Science',
            'details'=> 'This book presents a detailed exposition of C in an extremely simple style. The various features of the language have been systematically discussed. The entire text has been reviewed and revised incorporating the feedback from the readers',
            'image'=> 'programing_in_c.jpg',
            'total_quantity'=> 20,
            'rack_no'=> 12,
            'row_no'=> 10,
            'col_no'=> 10,
            'price'=> 100,
        ]);

        Book::create([
            'slug'=> Str::slug('Computer Graphics'),
            'title'=> 'Computer Graphics',
            'author'=> 'Roy Plastok',
            'category'=> 'Computer Science',
            'details'=> 'computer graphics – A solved-problem book using an algorithmic approach to digitizing images for computer generation. It covers all necessary programming and vector, matrix, and character graphics generation, clipping functions, and more. Program structures are presented in a language and machine independent form through the use of ‘Hierarchy Plus Input-Process Output’ (HIPO) charts, and technique for modularizing a program which is useable on any system',
            'image'=> 'computer_graphics.jpg',
            'total_quantity'=> 20,
            'rack_no'=> 12,
            'row_no'=> 11,
            'col_no'=> 10,
            'price'=> 90,
        ]);

        Book::create([
            'slug'=> Str::slug('Programming With C'),
            'title'=> 'Programming With C',
            'author'=> 'Byron Gottfried',
            'category'=> 'Computer Science',
            'details'=> 'Undoubtedly one of the best books to learn C programming language, Programming With C (pdf) by Byron Gottfried is preferred by thousands of programmers around the world. Filled with tons of examples, review questions, and solved problems, this book is ideal for students – both beginners and intermediates, when it comes to test preparations or self-study.',
            'image'=> 'programming_with_c.jpg',
            'total_quantity'=> 20,
            'rack_no'=> 12,
            'row_no'=> 11,
            'col_no'=> 10,
            'price'=> 90,
        ]);

        Book::create([
            'slug'=> Str::slug('Artificial Intelligence'),
            'title'=> 'Artificial Intelligence',
            'author'=> 'Stuart J. Russell and Peter Norvig',
            'category'=> 'Computer Science',
            'details'=> 'Artificial Intelligence: A Modern Approach is a university textbook on artificial intelligence, written by Stuart J. Russell and Peter Norvig. It was first published in 1995 and the fourth edition of the book was released on 28 April 2020.',
            'image'=> 'artificial_intellegence.jpg',
            'total_quantity'=> 20,
            'rack_no'=> 12,
            'row_no'=> 11,
            'col_no'=> 10,
            'price'=> 90,
        ]);

        Book::create([
            'slug'=> Str::slug('Concrete Mathematics'),
            'title'=> 'Concrete Mathematics',
            'author'=> 'Ronald Graham, Donald Knuth, and Oren Patashnik',
            'category'=> 'Computer Science',
            'details'=> 'Concrete Mathematics: A Foundation for Computer Science, by Ronald Graham, Donald Knuth, and Oren Patashnik, first published in 1989, is a textbook that is widely used in computer-science departments as a substantive but light-hearted treatment of the analysis of algorithms',
            'image'=> 'concrete_mathematics.jpg',
            'total_quantity'=> 20,
            'rack_no'=> 12,
            'row_no'=> 11,
            'col_no'=> 10,
            'price'=> 90,
        ]);
    }
}
