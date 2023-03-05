<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
				{{ __('Patients') }}
			</h2>
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
									<th>Patient Full Name</th>
									<th>Ward Room</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								{{-- rows --}}
								@forelse ($patients as $patient)
									<tr class="hover">
										<th>{{ $loop->iteration }}</th>
										<td>{{ $patient->fullName }}</td>
										<td>{{ $patient->admission->ward_room }}</td>
										<td>
											<x-nav-link :href="route('patients.show', $patient->id)" :active="request()->routeIs('patients.show')">
												View
											</x-nav-link>
										</td>
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
