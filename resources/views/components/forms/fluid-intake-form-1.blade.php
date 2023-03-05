<div class="con1 transition-all duration-300 ease-in-out">

	@php
		$_timeSlots = [
		    '7am-3pm' => '7AM - 3PM',
		    '3pm-11pm' => '3PM - 11PM',
		    '11pm-7am' => '11PM - 7AM',
		];
	@endphp

	{{-- 7am-3pm time --}}
	<h2 class="text-xl font-semibold">Time:</h2>
	<div class="flex flex-row gap-4 ">
		<div class="flex-1">
			<div class="mb-2">
				<label for="time">Oral</label>
				<select id="time" name="time" class="select select-bordered w-full">
					@foreach ($_timeSlots as $k => $v)
						<option value="{{ $k }}">{{ $v }}</option>
					@endforeach
				</select>
				<x-input-error :messages="$errors->get('time')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1"></div>
	</div>
	<div class="flex flex-row gap-4 ">
		<div class="flex-1">
			{{-- Intake Info --}}
			<h2 class="text-xl font-semibold">Intake</h2>
			<div class="mb-2">
				<label for="oral">Oral</label>
				<input id="oral" name="oral" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('oral')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="parental">Parental</label>
				<input id="parental" name="parental" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('parental')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="intake_total">Total</label>
				<input id="intake_total" name="intake_total" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('intake_total')" class="mt-2" />
			</div>
		</div>
		<div class="flex-1">
			{{-- Output Info --}}
			<h2 class="text-xl font-semibold">Output</h2>
			<div class="mb-2">
				<label for="urine">Urine</label>
				<input id="urine" name="urine" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('urine')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="drainage">Drainage</label>
				<input id="drainage" name="drainage" type="text" class="input input-bordered w-full " />
				<x-input-error :messages="$errors->get('drainage')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="others">Others</label>
				<input id="others" name="others" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('others')" class="mt-2" />
			</div>
			<div class="mb-2">
				<label for="output_total">Total</label>
				<input id="output_total" name="output_total" type="text" class="input input-bordered w-full" />
				<x-input-error :messages="$errors->get('output_total')" class="mt-2" />
			</div>
		</div>
	</div>
</div>
