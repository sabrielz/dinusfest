@extends('layouts.landingpage-nobody')

@section('body')
	{{-- <div class="bg-white text-black rounded-lg shadow-lg w-full p-4 min-w-[280px] max-w-[320px]">
		<h1 class="text-3xl font-bold mb-5 mt-2 text-center">Login</h1>
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
	</div> --}}
	<div class="w-full min-h-screen flex justify-stretch items-stretch flex-col sm:flex-row">
		<div class="flex-1 bg-primary w-full min-h-full hidden sm:flex justify-center items-center">
			<img src="/dist/img/main-logo.png" alt="Logo Sanguku" class="w-[60%] ">
		</div>
		<div class="flex-1 bg-white flex justify-center items-center flex-col relative">
			<a href="/" class="absolute m-3 top-0 left-0">
				<i class="fa fa-angle-left"></i> Kembali
			</a>
			
			<h1 class="text-3xl font-bold mb-1 mt-4 text-center">Login</h1>
			<p class="text-center mb-6">Masukkan username dan password.</p>
			<form action="/login" method="post" class="">
				@csrf
	
				@php $inputs = [
					['type' => 'text', 'name' => 'username', 'label' => 'Username', 'attr' => 'autofocus'],
					['type' => 'password', 'name' => 'password', 'label' => 'Password'],
				] @endphp
	
				<div class="w-full flex flex-col gap-2 mb-4">
						@foreach ($inputs as $input)
						@php $input = GeneralHelper::initInput($input) @endphp
						
						<div class="mb-1">
							<input
								type="{{ $input['type'] }}"
								name="{{ $input['name'] }}"
								value="{{ $input['value'] }}"
								placeholder="{{ $input['label'] ?? $input['placeholder'] }}"
								class="w-[280px] min-w-[200px] max-w-[400px] block py-2 px-2 border text-sm"
								{!! $input['attr'] ?? '' !!}
							/>
						</div>
						@endforeach
				</div>
	
				<button type="submit" class="block max-w-max mx-auto bg-primary text-white py-1.5 px-6 rounded font-semibold
				bg-opacity-90 hover:bg-opacity-100 transition">
					Submit <i class="fa fa-angle-right ml-1"></i>
				</button>
	
			</form>
		</div>
	</div>
@endsection