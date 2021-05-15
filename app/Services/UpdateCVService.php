<?php

namespace App\Services;

use App\Models\Education;
use App\Models\Person;
use App\Models\WorkExperience;

class UpdateCVService
{
    public function execute(int $id, array $request): void
    {
        Person::updateOrCreate(
            ['id' => $id],
            [
                'first_name' => $request['fname'],
                'last_name' => $request['lname'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'street_name' => $request['street_name'],
                'house_number' => $request['house_number'],
                'city' => $request['city'],
                'postal_code' => $request['postal_code'],
                'country' => $request['country']
            ]);

        foreach ($request['school'] as $key => $record) {

            Education::updateOrCreate(
                ['id' => $request['education_id'][$key]],
                [
                    'person_id' => $id,
                    'school' => $request['school'][$key],
                    'degree' => $request['degree'][$key],
                    'major' => $request['major'][$key],
                    'education_start_date' => $request['education_start_date'][$key],
                    'education_end_date' => $request['education_end_date'][$key]
                ]);
        }

        foreach ($request['company'] as $key => $record) {

            WorkExperience::updateOrCreate(
                ['id' => $request['work_id'][$key]],
                [
                    'person_id' => $id,
                    'company' => $request['company'][$key],
                    'job_title' => $request['job_title'][$key],
                    'work_start_date' => $request['work_start_date'][$key],
                    'work_end_date' => $request['work_end_date'][$key],
                    'description' => $request['description'][$key]
                ]);
        }

    }
}
