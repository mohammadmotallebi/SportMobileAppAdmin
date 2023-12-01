<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
	<div>
		{{--<x-jet-application-logo class="block h-12 w-auto" /> --}}
	</div>

	<div class="text-2xl">
		Secure BU Portal
	</div>

	<div class="mt-6 text-gray-500">
		Welcome to the Secure BU Vendor portal. You may upload your data using the forms below. If this is your first visit, please review our documentation section for more information on this process and its guidelines.
	</div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

	<div class="p-6">
		<div class="flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
			</svg>

			<div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{url('data-records')}}">Data Upload</a></div>
		</div>

		<div class="ml-12">
			<div class="mt-2 text-sm text-gray-500">
				Please use this form for manual vendor upload. If you have any questions, please review our documentation section for appropriate CSV template structure.
			</div>

			<a href="{{url('data-records')}}">
				<div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
					<div>Proceed to vendor upload</div>

					<div class="ml-1 text-indigo-500">
						<svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
		<div class="flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
</svg>
			<div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laracasts.com">Documentation</a></div>
		</div>

		<div class="ml-12">
			<div class="mt-2 text-sm text-gray-500">
				If you need more information about this process, please click the below link to access our documentation page which will provide you with all the information you need.
			</div>

			<a href="https://laracasts.com">
				<div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
					<div>Support Documentation</div>

					<div class="ml-1 text-indigo-500">
						<svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
					</div>
				</div>
			</a>
		</div>
	</div>

	{{--
		<div class="p-6 border-t border-gray-200">
				<div class="flex items-center">
						<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
						<div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://tailwindcss.com/">Tailwind</a></div>
				</div>

				<div class="ml-12">
						<div class="mt-2 text-sm text-gray-500">
								Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
						</div>
				</div>
		</div>

		<div class="p-6 border-t border-gray-200 md:border-l">
				<div class="flex items-center">
						<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
						<div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Authentication</div>
				</div>

				<div class="ml-12">
						<div class="mt-2 text-sm text-gray-500">
								Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started what matters most: building your application.
						</div>
				</div>
		</div>
	--}}
</div>
