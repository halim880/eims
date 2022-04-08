<?php

namespace Database\Seeders;

use App\Models\Academic\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        
        foreach (Course::all() as $course) {
            $course->delete();
        }

        $semesters = [
                [
                    'semester'=>1,
                    'courses'=> [
                        ['title'=>'Introduction to Computer Science', 'course_code'=>'CSE 101', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1001'],
                        ['title'=>'Introduction to Computer Science(Sessional)', 'course_code'=>'CSE 102', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1001'],
                        ['title'=>'Physics', 'course_code'=> 'PHY 101', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1001'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1001'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1001'],
                        ['title'=>'Mechanical Engineering', 'course_code'=> 'ME 101', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1001'],
                        ['title'=>'Mechanical Engineering (Sessional)', 'course_code'=> 'ME 102', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1001'],
                    ]
                ],
                [
                    'semester'=>2,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1002'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1002'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1002'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1002'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1002'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1002']
                    ]
                ],
                [
                    'semester'=>3,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1003']
                    ]
                ],
                [
                    'semester'=>4,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1003'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1003']
                    ]
                ],
                [
                    'semester'=>5,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1004'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1004'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1004'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1004'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1004'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1004']
                    ]
                ],
                [
                    'semester'=>6,
                    'courses'=> [
                        ['title'=>'Compiler Design', 'course_code'=>'CSE 601', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Compiler Design (Sessional)', 'course_code'=>'CSE 602', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Networking', 'course_code'=> 'CSE 603', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Networking (Sessional)', 'course_code'=> 'CSE 604', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Software Engineering', 'course_code'=> 'CSE 605', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'software Engineering (Sessional)', 'course_code'=> 'CSE 606', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Concrete Mathmetics', 'course_code'=> 'CSE 607', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Numerical Methods', 'course_code'=> 'CSE 609', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1005'],
                        ['title'=>'Numerical Methods (Sessional)', 'course_code'=> 'CSE 609', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1005']
                    ]
                ],
                [
                    'semester'=>7,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1006'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1006'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1006'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1006'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1006'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1006']
                    ]
                ],
                [
                    'semester'=>8,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1008'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1008'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1008'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1008'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '1', 'semester_id'=>'1008'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '1', 'semester_id'=>'1008']
                    ]
                ],
            ];
        $sem = 101;
        foreach ($semesters as $semester) {
            
            foreach($semester['courses'] as $course){
                $cor = Course::create([
                    'title'=>$course['title'],
                    'course_code'=>$course['course_code'],
                    'credit'=>$course['credit'],
                    'department_id'=> $course['department_id'],
                    'semester_id'=> $course['semester_id'],
                ]);
            }
        }

    }
}
