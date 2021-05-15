<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CVSeeder extends Seeder
{
    public function run(): void
    {
        $people = [
            'first_name' => ['Jānis', 'Ieva', 'Harry'],
            'last_name' => ['Bērziņš', 'Kalniņa', 'Potter'],
            'phone' => ['23045033', '20994033', '68493029'],
            'email' => ['janis@berzins.lv', 'ieva@kalnina.lv', 'harry@potter.co.uk'],
            'street_name' => ['Zaļā iela', 'Zilā iela', 'Privet Drive'],
            'house_number' => ['34a', '12', '4'],
            'city' => ['Riga', 'Riga', 'Little Whinging'],
            'postal_code' => ['LV-1010', 'LV-2444', 'W1A 1AA'],
            'country' => ['Latvia', 'Latvia', 'United Kingdom']
        ];

        $education = [
            'person_id' => [1, 2, 3],
            'school' => ['Liepājas universitāte', 'Latvijas universitāte', 'Hogwarts'],
            'degree' => ['Bakalaura grāds', 'Maģistra grāds', 'Bachelor'],
            'major' => ['Ķīmija', 'Fizika', 'Magic'],
            'education_start_date' => ['2009-09-01 00:00', '2010-09-01 00:00', '2009-09-01 00:00'],
            'education_end_date' => ['2013-05-30 00:00', '2012-05-30 00:00','2013-05-30 00:00']
        ];

        $work = [
            'person_id' => [1, 2, 3],
            'company' => ['XYZ laboratorija', 'LHC', 'Magic Protectors\' Guild'],
            'job_title' => ['Laborants', 'Fiziķis', 'Wizard'],
            'work_start_date' => ['2013-05-30 00:00', '2012-05-30 00:00', '2013-05-30 00:00'],
            'work_end_date' => [null, null, null],
            'description' => ['Ķīmiskie eksperimenti', null, 'Magic research']
        ];

        foreach ($people['first_name'] as $key => $person) {
            DB::table('people')->insert([
                'first_name' => $people['first_name'][$key],
                'last_name' => $people['last_name'][$key],
                'phone' => $people['phone'][$key],
                'email' => $people['email'][$key],
                'street_name' => $people['street_name'][$key],
                'house_number' => $people['house_number'][$key],
                'city' => $people['city'][$key],
                'postal_code' => $people['postal_code'][$key],
                'country' => $people['country'][$key],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        foreach ($education['person_id'] as $key => $school) {
            DB::table('education')->insert([
                'person_id' => $education['person_id'][$key],
                'school' => $education['school'][$key],
                'degree' => $education['degree'][$key],
                'major' => $education['major'][$key],
                'education_start_date' => $education['education_start_date'][$key],
                'education_end_date' => $education['education_end_date'][$key],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        foreach ($work['person_id'] as $key => $job) {
            DB::table('work_experiences')->insert([
                'person_id' => $work['person_id'][$key],
                'company' => $work['company'][$key],
                'job_title' => $work['job_title'][$key],
                'work_start_date' => $work['work_start_date'][$key],
                'work_end_date' => $work['work_end_date'][$key],
                'description' => $work['description'][$key],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

    }
}
