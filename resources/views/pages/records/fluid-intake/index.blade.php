<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
				{{ __('Fluid Intake') }}
			</h2>
			<div>
				<x-nav-link :href="route('patients.index')" :active="request()->routeIs('patients.index')">
					{{ __('Back to Patients') }}
				</x-nav-link>
				<span> | </span>
				<x-nav-link :href="route('patients.fluid-intake.create', $patient->id)" :active="request()->routeIs('patients.fluid-intake.create', $patient->id)">
					{{ __('Add New Record') }}
				</x-nav-link>
			</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					<div class="overflow-x-auto">
						<table class="table w-full">
							<!-- columns -->
							<thead>
								<tr>
									<th></th>
									<th>Date</th>
									<th>Time</th>
									<th>Intake</th>
									<th>Oral</th>
									<th>Parental</th>
									<th>Total</th>
									<th></th>
									<th>Output</th>
									<th>Urine</th>
									<th>Drainage</th>
									<th>Others</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								{{-- rows --}}
								@forelse ($patient->fluidIntake as $fluidIntake)
									<tr class="hover">
										<th>{{ $loop->iteration }}</th>
										<td>{{ $fluidIntake->created_at->format('M d, Y') }}</td>
										<td>{{ $fluidIntake->time }}</td>
										<td></td>
										<td>{{ $fluidIntake->oral }}</td>
										<td>{{ $fluidIntake->parental }}</td>
										<td>{{ $fluidIntake->intake_total }}</td>
										<td></td>
										<td></td>
										<td>{{ $fluidIntake->urine }}</td>
										<td>{{ $fluidIntake->drainage }}</td>
										<td>{{ $fluidIntake->others }}</td>
										<td>{{ $fluidIntake->output_total }}</td>
									</tr>
								@empty
									<tr class="hover">
										<td>Hart Hagerty</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
