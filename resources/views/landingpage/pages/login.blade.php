@extends('layouts.landingpage')

@section('content')
	<div class="bg-white text-black rounded-lg shadow-lg w-full p-4 min-w-[280px] max-w-[320px]">
		<h1 class="text-4xl font-bold mb-4 text-center">Login</h1>
		<form action="" method="post">
			@csrf

			@php $inputs = [
				['type' => 'text', 'name' => 'username', 'label' => 'Username'],
				['type' => 'password', 'name' => 'password', 'label' => 'Password'],
			] @endphp

			<div class="w-full flex flex-col gap-2 mb-4">
					@foreach ($inputs as $input)
					<div class="mb-1">
						<input
							type="{{ $input['type'] }}"
							placeholder="{{ $input['label'] ?? $input['placeholder'] }}"
							class="w-full block py-2 px-2 border text-sm"
						/>
					</div>
					@endforeach
			</div>

			<button type="submit"
				class="block max-w-max mx-auto bg-primary text-white py-1 px-4 rounded-md">
				Login <i class="fa fa-angle-right"></i>
			</button>

		</form>
	</div>
@endsection