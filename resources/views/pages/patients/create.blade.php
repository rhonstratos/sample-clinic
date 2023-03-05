<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
				{{ __('Appointments') }}
			</h2>
			<x-nav-link :href="route('admissions.index')" :active="request()->routeIs('admissions.index')">
				{{ __('Back to Menu') }}
			</x-nav-link>
		</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					<h2 class="text-2xl font-semibold">Add Patient Details</h2>



					<div class="divider"></div>
					<form method="post" action="{{ route('admissions.store') }}" class="form" required aria-required="true">
						@csrf

						<x-forms.patient-form></x-forms.patient-form>

						<x-forms.admission-form-1></x-forms.admission-form-1>

						<div class="my-4 divider"></div>

						<div class="flex flex-row-reverse justify-between mt-4">
							<button id="form-submit" type="submit" class="btn btn-primary hidden">Submit</button>
							<button id="form-next" type="button" class="btn btn-secondary justify-self-end">Next</button>
							<button id="form-previous" type="button" class="btn btn-accent justify-self-start hidden">Previous</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@push('scripts')
		<script type="module">
			$(() => {
				let submit = $('#form-submit')
				let next = $('#form-next')
				let previous = $('#form-previous')

				next.click(() => {
					$('.con1').addClass('hidden')
					$('.con2').removeClass('hidden')

					previous.removeClass('hidden')
					submit.removeClass('hidden')
					next.addClass('hidden')
				})

				previous.click(() => {
					$('.con2').addClass('hidden')
					$('.con1').removeClass('hidden')

					previous.addClass('hidden')
					submit.addClass('hidden')
					next.removeClass('hidden')
				})
			})
		</script>
	@endpush
</x-app-layout>
