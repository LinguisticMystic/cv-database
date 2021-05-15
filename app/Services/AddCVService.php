<?php

namespace App\Services;

use App\Models\Education;
use App\Models\Person;
use App\Models\WorkExperience;

class AddCVService
{
    public function execute(array $request): void
    {
        $person = Person::create([
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

        $personId = $person->id;

        foreach ($request['school'] as $key => $record) {
            Education::create([
                'person_id' => $personId,
                'school' => $request['school'][$key],
                'degree' => $request['degree'][$key],
                'major' => $request['major'][$key],
                'education_start_date' => $request['education_start_date'][$key],
                'education_end_date' => $request['education_end_date'][$key]
            ]);
        }

        foreach ($request['company'] as $key => $record) {
            WorkExperience::create([
                'person_id' => $personId,
                'company' => $request['company'][$key],
                'job_title' => $request['job_title'][$key],
                'work_start_date' => $request['work_start_date'][$key],
                'work_end_date' => $request['work_end_date'][$key],
                'description' => $request['description'][$key]
            ]);
        }

    }
}
