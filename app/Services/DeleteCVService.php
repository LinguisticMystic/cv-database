<?php

namespace App\Services;

use App\Models\Person;
use Illuminate\Support\Facades\DB;

class DeleteCVService
{
    public function execute(int $id): void
    {
        Person::find($id)->delete();

        DB::table('education')->where('person_id', $id)->delete();
        DB::table('work_experiences')->where('person_id', $id)->delete();
    }
}
