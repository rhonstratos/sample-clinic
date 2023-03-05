<?php

namespace App\Http\Controllers;

use App\Actions\Admissions\StoreAdmission;
use App\Actions\Patients\StorePatient;
use App\Http\Requests\Admissions\StoreAdmissionForm;
use App\Models\Admissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionsController extends Controller
{

    public function __construct(
        // private <imported cLassName> <variableName>
        private StorePatient $storePatient,
        private StoreAdmission $storeAdmission
    )
    {
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $admissions = Admissions::query()->with(['patient'])->paginate(20);
        return view('pages.admissions.index')
            ->with(compact('admissions'));
    }
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('pages.admissions.create');
    }
    public function store(StoreAdmissionForm $request)
    {
        try {
            DB::beginTransaction();

            $patient = $this->storePatient->handle($request);
            $admission = $this->storeAdmission->handle($request, $patient);

            DB::commit();
            return redirect()->route('admissions.index')
                ->with(compact('admission'));

        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }
    public function show(Admissions $admissions)
    {
        //
    }
    public function edit(Admissions $admissions)
    {
        //
    }
    public function update(Request $request, Admissions $admissions)
    {
        //
    }
    public function destroy(Admissions $admissions)
    {
        //
    }
}
