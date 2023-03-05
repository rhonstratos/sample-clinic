<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
				{{ __('Fluid Intake') }}
			</h2>
			<x-nav-link :href="route('patients.fluid-intake.index', $patient->id)" :active="request()->routeIs('patients.fluid-intake.index', $patient->id)">
				{{ __('Back to Menu') }}
			</x-nav-link>
		</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					<h2 class="text-2xl font-semibold">
						New Fluid Intake Record
					</h2>

					<div class="divider"></div>
					<form method="post" action="{{ route('patients.fluid-intake.store', $patient->id) }}" class="form" required aria-required="true">
						@csrf
						<x-forms.fluid-intake-form-1></x-forms.fluid-intake-form-1>

						<div class="my-4 divider"></div>

						<div class="flex flex-row-reverse justify-between mt-4">
							<button id="form-submit" type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
