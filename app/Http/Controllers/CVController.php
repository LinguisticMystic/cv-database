<?php

namespace App\Http\Controllers;

use App\Http\Requests\CVFormRequest;
use App\Services\AddCVService;
use App\Services\DeleteCVService;
use App\Services\UpdateCVService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CVController extends Controller
{
    private AddCVService $addCVService;
    private DeleteCVService $deleteCVService;
    private UpdateCVService $updateCVService;

    public function __construct(
        AddCVService $addCVService,
        UpdateCVService $updateCVService,
        DeleteCVService $deleteCVService
    )
    {
        $this->addCVService = $addCVService;
        $this->deleteCVService = $deleteCVService;
        $this->updateCVService = $updateCVService;
    }

    public function create(): View
    {
        return view('CV.create');
    }

    public function edit(int $id): View
    {
        $personInfo = DB::table('people')->where('id', $id)->first();
        $educationInfo = DB::table('education')->where('person_id', $id)->get();
        $workInfo = DB::table('work_experiences')->where('person_id', $id)->get();

        return view('CV.edit', [
            'personId' => $id,
            'personInfo' => $personInfo,
            'educationInfo' => $educationInfo,
            'workInfo' => $workInfo
        ]);
    }

    public function add(CVFormRequest $request): RedirectResponse
    {
        $this->addCVService->execute($request->all());

        return redirect('/create')->with('message', 'CV added to database!');
    }

    public function update(int $id, CVFormRequest $request): RedirectResponse
    {
        $this->updateCVService->execute($id, $request->all());

        return redirect('/')->with('message', 'CV updated!');
    }

    public function delete(int $id): RedirectResponse
    {
        $this->deleteCVService->execute($id);

        return redirect('/')->with('message', 'CV deleted from database!');
    }
}
