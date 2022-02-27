<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            DepartmentTableSeeder::class,
            SemesterTableSeeder::class,
            UsersTableSeeder::class,
            SessionsTableSeeder::class,
            CoursesTableSeeder::class,
            HostelSeeder::class,
            StudentsTableSeeder::class,
            HostelStudentSeeder::class,
            TeacherSeeder::class,
            
            SliderImageTableSeeder::class,
            EventsTableSeeder::class,
            LibrarianSeeder::class,
            BooksTableSeeder::class,
        ]);
    }
}
