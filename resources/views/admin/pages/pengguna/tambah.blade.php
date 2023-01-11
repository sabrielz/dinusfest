@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Tambah Akun</h2>
		<p class="text-muted">Tambahkan akun untuk pengguna Sangumu.</p>

		<form action="" method="post">
			<div class="card card-shadow mb-4">
				<div class="card-body">
					@php $inputs = [
						['type' => 'radio', 'name' => 'type', 'label' => 'Type', 'values' => [
							['label' => 'Orang Tua', 'value' => 'ortu'],
							['label' => 'Siswa', 'value' => 'siswa'],
						]],
						['name' => 'nama', 'label' => 'Nama Lengkap'],
						['type' => 'text', 'name' => 'username',],
						['type' => 'password', 'name' => 'password',],
					] @endphp @csrf

					@foreach ($inputs as $input)
						@include('components.input', ['input' => $input])
					@endforeach

				</div>
			</div>

			<div class="row justify-content-center">
				<button type="submit" class="btn btn-primary">
					Tambah User <i class="fe fe-arrow-right"></i>
				</button>
			</div>
		</form>
	</div>
@endsection