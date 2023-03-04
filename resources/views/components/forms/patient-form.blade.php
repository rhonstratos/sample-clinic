<div class="con1 transition-all duration-300 ease-in-out">

	{{-- Basic Info --}}
	<h2 class="text-xl font-semibold">Basic Info</h2>
	<div class="flex flex-row gap-4 ">
		<div class="flex-1">
			<div class="mb-2">
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('firstName')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="firstName">Middle name</label>
				<input id="middleName" name="middleName" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('middleName')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="firstName">Last name</label>
				<input id="lastName" name="lastName" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('lastName')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="suffix">Suffix</label>
				<input id="suffix" name="suffix" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('suffix')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			<div class="mb-2">
				<label for="bdate">Birthdate</label>
				<input id="bdate" name="bdate" type="date" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('bdate')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="bplace">Birth place</label>
				<input id="bplace" name="bplace" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('bplace')" class="mt-2" />
			</div>
			<div class="mb-2">
				<span>Sex</span>
				<div class="flex gap-x-7 items-center ">
					<div class="form-control flex-row">
						<label for="sex-male">Male</label>
						<input id="sex-male" name="sex" type="radio" value="male" class="ml-2 radio radio-primary" checked />
					</div>
					<div class="form-control flex-row">
						<label for="sex-female">Female</label>
						<input id="sex-female" name="sex" type="radio" value="female" class="ml-2 radio radio-primary" />
					</div>
				</div>
				<x-input-error :messages="$errors->get('sex')" class="mt-2" />
			</div>
		</div>
	</div>

	<div class="my-4 divider"></div>

	{{-- Personal Info --}}
	<h2 class="text-xl font-semibold">Personal Info</h2>
	<div class="flex flex-row gap-4 ">
		<div class="flex-1">
			<div class="mb-2">
				<label for="contact">Contact Number</label>
				<input id="contact" name="contact" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('contact')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="occupation">Occupation</label>
				<input id="occupation" name="occupation" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('occupation')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="seniorNumber">Senior Number</label>
				<input id="seniorNumber" name="seniorNumber" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('seniorNumber')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			<div class="mb-2">
				<label for="civilStatus">Civil Status</label>
				<select name="civilStatus" id="civilStatus" class="select select-bordered w-full">
					@php
						$_civilStatuses = ['Single', 'Married', 'Divorced', 'Widowed', 'Separated', 'Common Law'];
					@endphp
					@foreach ($_civilStatuses as $cs)
						<option value="{{ $cs }}">{{ Str::title($cs) }}</option>
					@endforeach
				</select>
				<x-input-error :messages="$errors->get('civilStatus')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="nationality">Nationality</label>
				<input id="nationality" name="nationality" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('nationality')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="religion">Religion</label>
				<input id="religion" name="religion" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('religion')" class="mt-2" />
			</div>
		</div>
	</div>

	<div class="my-4 divider"></div>

	{{-- Emergency Contact Person --}}
	<h2 class="text-xl font-semibold">Emergency Contact Person</h2>
	<div class="flex flex-row gap-4 ">
		<div class="flex-1">
			<div class="mb-2">
				<label for="emergencyContact[firstName]">First name</label>
				<input id="emergencyContact[firstName]" name="emergencyContact[firstName]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('emergencyContact.firstName')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="emergencyContact[middleName]">Middle name</label>
				<input id="emergencyContact[middleName]" name="emergencyContact[middleName]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('emergencyContact.middleName')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="emergencyContact[lastName]">Last name</label>
				<input id="emergencyContact[lastName]" name="emergencyContact[lastName]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('emergencyContact.lastName')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="emergencyContact[suffix]">Suffix</label>
				<input id="emergencyContact[suffix]" name="emergencyContact[suffix]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('emergencyContact.suffix')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			<div class="mb-2">
				<label for="emergencyContact[contact]">Contact No.</label>
				<input id="emergencyContact[contact]" name="emergencyContact[contact]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('emergencyContact.contact')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="emergencyContact[address]">Address</label>
				<input id="emergencyContact[address]" name="emergencyContact[address]" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('emergencyContact.address')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="emergencyContact[relationship]">Relation to Patient</label>
				<input id="emergencyContact[relationship]" name="emergencyContact[relationship]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('emergencyContact.relationship')" class="mt-2" />
			</div>
		</div>
	</div>

	<div class="my-4 divider"></div>

	{{-- Address --}}
	<h2 class="text-xl font-semibold">Address</h2>
	<div class="flex flex-row gap-4">
		<div class="flex-1">
			<h2 class="text-lg font-semibold">Current</h2>
			<div class="mb-2">
				<label for="street">Street No.</label>
				<input id="street" name="address[street]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('address.street')" class="mt-2" />

			</div>
			<div class="mb-2">
				<label for="barangay">Barangay</label>
				<input id="barangay" name="address[barangay]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('address.street')" class="mt-2" />

			</div>
			<div class="mb-2">
				<label for="city">City</label>
				<input id="city" name="address[city]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('address.city')" class="mt-2" />

			</div>
			<div class="mb-2">
				<label for="province">Province</label>
				<input id="province" name="address[province]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('address.province')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			<div class="flex flex-row justify-between">
				<h2 class="text-lg font-semibold">Permanent</h2>
				<div class="form-control">
					<label class="label cursor-pointer">
						<span class="label-text">Same as Address</span>
						<input type="checkbox" name="sameAsAddress" value="1" class="toggle toggle-primary ml-2" />
					</label>
				</div>
			</div>
			<div class="mb-2">
				<label for="street">Street No.</label>
				<input id="street" name="permanentAddress[street]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('permanentAddress.street')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="barangay">Barangay</label>
				<input id="barangay" name="permanentAddress[barangay]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('permanentAddress.barangay')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="city">City</label>
				<input id="city" name="permanentAddress[city]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('permanentAddress.city')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="province">Province</label>
				<input id="province" name="permanentAddress[province]" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('permanentAddress.province')" class="mt-2" />
			</div>
		</div>
	</div>

	<div class="my-4 divider"></div>

	{{-- Relatives --}}
	<h2 class="text-xl font-semibold">Relatives</h2>
	<div class="flex flex-col">
		@foreach (range(1, 4) as $relative)
			<h4 class="text-lg font-semibold">Relative #{{ $loop->iteration }}</h4>
			<div class="flex flex-row justify-between gap-4">
				<div class="mb-2 grow">
					<label for="relative-name-{{ $loop->iteration }}">Full name</label>
					<input id="relative-name-{{ $loop->iteration }}" name="relatives[relative{{ $loop->iteration }}][name]" type="text" class="input input-bordered w-full" />
					<x-input-error :messages="$errors->get('relatives.relative' . $loop->iteration . '.name')" class="mt-2" />
				</div>
				<div class="mb-2 grow">
					<label for="relative-address-{{ $loop->iteration }}">Address</label>
					<input id="relative-address-{{ $loop->iteration }}" name="relatives[relative{{ $loop->iteration }}][address]" type="text" class="input input-bordered w-full" />
					<x-input-error :messages="$errors->get('relatives.relative' . $loop->iteration . '.address')" class="mt-2" />
				</div>
				<div class="mb-2 grow">
					<label for="relative-contact-{{ $loop->iteration }}">Contact No.</label>
					<input id="relative-contact-{{ $loop->iteration }}" name="relatives[relative{{ $loop->iteration }}][contact]" type="text" class="input input-bordered w-full" />
					<x-input-error :messages="$errors->get('relatives.relative' . $loop->iteration . '.contact')" class="mt-2" />
				</div>
			</div>
		@endforeach
	</div>
</div>
