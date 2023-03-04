<div class="con2 transition-all duration-300 ease-in-out hidden">

	{{-- Admission Info --}}
	<h2 class="text-xl font-semibold">Admission Info</h2>
	<div class="flex flex-row gap-4">
		<div class="flex-1">
			<div class="mb-2">
				<label for="admittingClerk">Admitting Clerk</label>
				<input id="admittingClerk" name="admittingClerk" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('admittingClerk')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="admittingPhysician">Admitting Physician</label>
				<input id="admittingPhysician" name="admittingPhysician" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('admittingPhysician')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="refferedBy">Reffered By:</label>
				<input id="refferedBy" name="refferedBy" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('refferedBy')" class="mt-2" />
			</div>
			<div class="mb-2">
				<span>Type of Admission</span>
				<div class="flex gap-x-5 items-center ">
					<div class="form-control flex-row">
						<label for="admissionType-new">New</label>
						<input id="admissionType-new" name="admissionType" type="radio" value="new" class="radio radio-primary ml-2" checked />
					</div>
					<div class="form-control flex-row">
						<label for="admissionType-old">Old</label>
						<input id="admissionType-old" name="admissionType" type="radio" value="old" class="radio radio-primary ml-2" />
					</div>
					<div class="form-control flex-row">
						<label for="admissionType-opd">Former OPD</label>
						<input id="admissionType-opd" name="admissionType" type="radio" value="former OPD" class="radio radio-primary ml-2" />
					</div>
					<x-input-error :messages="$errors->get('admissionType')" class="mt-2" />
				</div>
			</div>
		</div>
		<div class="flex-1">
			<div class="mb-2">
				<label for="admissionStart">Admission</label>
				<input id="admissionStart" name="admission[start]" type="datetime-local" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('admission.start')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="discharge">Discharge</label>
				<input id="discharge" name="admission[end]" type="datetime-local" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('admission.end')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="admissionDuration">Total Duration</label>
				<input id="admissionDuration" name="admission[duration]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('admission.duration')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="wardRoom">Ward Room</label>
				<input id="wardRoom" name="wardRoom" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('wardRoom')" class="mt-2" />
			</div>
		</div>
	</div>

	<div class="divider"></div>

	{{-- Diagnosis Info --}}
	<h2 class="text-xl font-semibold">Diagnosis Info</h2>
	<div class="flex flex-row gap-4">
		<div class="flex-1">
			<div class="mb-2">
				<ul class="list-disc list-inside">
					<li>
						<label for="hospitalPlan">Hospitalization Plan</label>
					</li>
					<li>
						<label for="hospitalPlan">Company / Industrial Name</label>
					</li>
				</ul>
				<input id="hospitalPlan" name="insurance[plan]" type="plan" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('insurance.plan')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="insurance[name]">Insurance Name</label>
				<input id="insurance[name]" name="insurance[name]" type="name" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('insurance.name')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="insurance[type]">Type of Insurance Coverage</label>
				<input id="insurance[type]" name="insurance[type]" type="type" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('insurance.type')" class="mt-2" />
			</div>
			<div class="mb-2">
				<span>Social Service Classification</span>
				<div class="flex gap-x-5 items-center ">
					@foreach (['a', 'b', 'c1', 'c2', 'c3', 'd'] as $ssc)
						<div class="form-control flex-row">
							<label for="socialService-{{ $ssc }}" class="capitalize">{{ $ssc }}</label>
							<input id="socialService-{{ $ssc }}" name="socialService" type="radio" value="{{ $ssc }}" class="radio radio-primary ml-2" />
						</div>
					@endforeach
				</div>
				<x-input-error :messages="$errors->get('socialService')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			<div class="mb-2">
				<label for="diagnosis-initial">Admission Diagnosis</label>
				<input id="diagnosis-initial" name="diagnosis[initial]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('diagnosis.initial')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="diagnosis-principal">Principal Diagnosis</label>
				<input id="diagnosis-principal" name="diagnosis[principal]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('diagnosis.principal')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="diagnosis-other">Other Diagnosis</label>
				<input id="diagnosis-other" name="diagnosis[other]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('diagnosis.other')" class="mt-2" />
			</div>
			<div class="flex  gap-4">
				<div class="mb-2">
					<label for="idcCode">IDC Code No.</label>
					<input id="idcCode" name="idcCode" type="text" class="input input-bordered w-full " />
					<x-input-error :messages="$errors->get('idcCode')" class="mt-2" />
				</div>
				<div class="mb-2">
					<label for="icpmCode">ICPM Code No.</label>
					<input id="icpmCode" name="icpmCode" type="text" class="input input-bordered w-full " />
					<x-input-error :messages="$errors->get('icpmCode')" class="mt-2" />
				</div>
			</div>
		</div>
	</div>

	{{-- Principal Operation Procedure --}}
	<h2 class="text-xl font-semibold">Diagnosis Info</h2>
	<div class="flex flex-row gap-4">
		<div class="flex-1">
			<div class="mb-2">
				<label for="alergy">Alergic To</label>
				<textarea id="alergy" name="alergy[]" rows="1" type="text" class="textarea textarea-bordered w-full "></textarea>
				<x-input-error :messages="$errors->get('alergy.*')" class="mt-2" />
			</div>
		</div>
	</div>
	<div class="flex flex-row gap-4">
		<div class="flex-1">
			<div class="mb-2">
				<label for="operationProcedure-principal">Principal Operation Procedure</label>
				<textarea id="operationProcedure-principal" name="operationProcedure[principal]" rows="3" type="text" class="textarea textarea-bordered w-full "></textarea>
				<x-input-error :messages="$errors->get('operationProcedure.principal')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			<div class="mb-2">
				<label for="operationProcedure-other">Other Operation Procedure</label>
				<textarea id="operationProcedure-other" name="operationProcedure[other]" rows="3" type="text" class="textarea textarea-bordered w-full "></textarea>
				<x-input-error :messages="$errors->get('operationProcedure.other')" class="mt-2" />
			</div>
		</div>
	</div>
</div>
