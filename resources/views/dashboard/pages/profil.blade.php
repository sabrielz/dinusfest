@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Profil</h2>
		<p class="text-muted">Ubah profil pengguna.</p>

		<form action="/{{ request()->path() }}" method="post">
			<div class="card card-shadow mb-4">
				<div class="card-body">
					@php $inputs = [
						['type' => 'text', 'name' => 'nama', 'label' => 'Nama Lengkap', 'value' => $user->profile->name ?? old('nama') ?? ''],
						['type' => 'text', 'name' => 'username', 'label' => 'Username', 'attr' => 'disabled', 'value' => $user->username ?? old('username') ?? ''],
						['type' => 'password', 'name' => 'new_password', 'label' => 'Password Baru', 'value' => old('password') ?? ''],
					] @endphp @csrf

					@foreach ($inputs as $input)
						@include('components.input', ['input' => $input])
					@endforeach

				</div>
			</div>

			<div class="row justify-content-center">
				<button type="submit" class="btn btn-warning">
					Ubah Profil <i class="fe fe-arrow-right"></i>
				</button>
			</div>
		</form>
	</div>
@endsection