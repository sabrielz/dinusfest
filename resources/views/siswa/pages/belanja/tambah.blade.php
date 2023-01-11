@extends('layouts.siswa')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Masukkan Keranjang</h2>
		<p class="text-muted">Masukkan produk ke keranjang.</p>

		<form action="" method="post">
			<div class="card card-shadow mb-4">
				<div class="card-body">
					@php $inputs = [
						['name' => 'nama', 'label' => 'Nama Produk'],
						['type' => 'number', 'name' => 'Jumlah',],
						['type' => 'number', 'name' => 'harga', 'attr' => 'readonly'],
					] @endphp @csrf

					@foreach ($inputs as $input)
						@include('components.input', ['input' => $input])
					@endforeach

				</div>
			</div>

			<div class="row justify-content-center">
				<button type="submit" class="btn btn-primary">
					Masukkan Keranjang <i class="fe fe-arrow-right"></i>
				</button>
			</div>
		</form>
	</div>
@endsection