@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Tambah Akun</h2>
		<p class="text-muted">Tambahkan akun untuk pengguna Sangumu.</p>

		<form action="/admin/pengguna" method="post">
			<div class="card card-shadow mb-4">
				<div class="card-header">
					<strong class="card-title">Data Siswa</strong>
				</div>
				<div class="card-body">
					@php $inputs = [
						['name' => 'nama_siswa', 'label' => 'Nama Lengkap'],
						['type' => 'text', 'name' => 'username_siswa', 'label' => 'Username'],
						['type' => 'password', 'name' => 'password_siswa', 'label' => 'Password'],
					] @endphp @csrf

					@foreach ($inputs as $input)
						@include('components.input', ['input' => $input])
					@endforeach

				</div>
			</div>

			<div class="card card-shadow mb-4">
				<div class="card-header">
					<strong class="card-title">Data Orang Tua</strong>
				</div>
				<div class="card-body">
					@php $inputs = [
						['name' => 'nama_ortu', 'label' => 'Nama Orang Tua'],
						['type' => 'text', 'name' => 'username_ortu', 'label' => 'Username'],
						['type' => 'password', 'name' => 'password_ortu', 'label' => 'Password'],
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