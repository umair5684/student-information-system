<?php

namespace App\Actions;

use App\Jobs\SendMailJob;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StoreStudents
{
    public function save(array $students): int
    {
        $created = 0;
        foreach ($students as $studentData) {

            $validator = Validator::make($studentData, Student::$rules);

            if ($validator->validated()) {
                $student = Student::create($studentData);

                if ($student) {
                    SendMailJob::dispatch($student);
                    $created++;
                }
            }
        }

        return $created;
    }
}
