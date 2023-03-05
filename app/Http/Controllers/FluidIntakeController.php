<?php

namespace App\Http\Controllers;

use App\Actions\Records\FluidIntake\StoreFluidIntake;
use App\Http\Requests\Records\FluidIntake\StoreFluidIntakeRequest;
use App\Models\FluidIntake;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FluidIntakeController extends Controller
{
    public function __construct(
        private StoreFluidIntake $storeFluidIntake
    )
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Patients $patient)
    {
        $patient = $patient->load(['fluidIntake']);

        return view('pages.records.fluid-intake.index')
            ->with(compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Patients $patient)
    {
        return view('pages.records.fluid-intake.create')
            ->with(compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Patients $patient, StoreFluidIntakeRequest $request)
    {
        try {
            DB::beginTransaction();
            $fluidIntake = $this->storeFluidIntake->handle($patient, $request);
            DB::commit();
            return redirect()->route('patients.fluid-intake.index', $patient->id);
        } catch (\Exception $err) {
            DB::rollBack();
            return redirect()->back()->withErrors($err->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Patients $patient, FluidIntake $fluid_intake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patients $patient, FluidIntake $fluid_intake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Patients $patient, Request $request, FluidIntake $fluid_intake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patients $patient, FluidIntake $fluid_intake)
    {
        //
    }
}
