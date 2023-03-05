<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
				{{ __('Patient Details') }}
			</h2>
			<x-nav-link :href="route('patients.fluid-intake.index', $patient->id)" :active="request()->routeIs('patients.fluid-intake.index', $patient->id)">
				{{ __('Fluid Intake') }}
			</x-nav-link>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					{{-- code here --}}

					<pre>
                        {{ $patient->toJson(JSON_PRETTY_PRINT) }}
                    </pre>

				</div>
			</div>
		</div>
	</div>
</x-app-layout>
