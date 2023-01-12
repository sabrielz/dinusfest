@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Beranda</h2>

			<div class="row mb-4">
				<div class="col-sm-6 mb-4">
					<div class="card shadow">
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-3 text-center">
									<span class="circle circle-md bg-primary-light">
										<i class="fe fe-dollar-sign text-white mb-0"></i>
									</span>
								</div>
								<div class="col">
									<p class="small text-black mb-0">Total Saldo</p>
									<span class="h3 mb-0 text-black">
										{{ GeneralHelper::toRupiah(auth()->user()->finance->finance_balance) }}
									</span>
									{{-- <span class="small text-muted">+5.5%</span> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 mb-4">
					<div class="card shadow">
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-3 text-center">
									<span class="circle circle-md bg-primary-light">
										<i class="fe fe-dollar-sign text-white mb-0"></i>
									</span>
								</div>
								<div class="col">
									<p class="small text-black mb-0">Saldo Harian</p>
									<span class="h3 mb-0 text-black">
										{{ GeneralHelper::toRupiah(auth()->user()->finance->finance_balance_daily) }}
									</span>
									{{-- <span class="small text-muted">+5.5%</span> --}}
								</div>
							</div>
						</div>
						{{-- <div class="card-body py-4">
							<div class="row justify-content-center flex-column align-items-center">
								<h5 class="">Total Saldo</h5>
								<h2 class="">
									{{ GeneralHelper::toRupiah(auth()->user()->finance->finance_balance) }}
								</h2>
							</div>
						</div> --}}
					</div>
				</div>
			</div>

		<h3 class="page-title">Pembagian Saldo</h3>
		<p class="text-muted">Bagi saldo menjadi jatah uang saku siswa perharinya.</p>

		<div class="row mb-4">
			<div class="col-12">
				<div class="card shadow mb-4">
					<div class="card-body">
						<form action="/ortu/daily/{{ auth()->user()->id }}" method="post">
							@csrf @php $inputs = [
								['type' => 'number', 'name' => 'saldo', 'label' => 'Jumlah Saldo', 'value' => auth()->user()->finance->finance_balance ?? old('saldo') ?? '', 'attr' => 'disabled'],
								['type' => 'number', 'name' => 'day', 'label' => 'Pembagi Hari', 'value' => old('day') ?? ''],
								['type' => 'number', 'name' => 'perday', 'label' => 'Uang Saku Perhari', 'value' => old('perday') ?? '', 'attr' => 'readonly'],
							] @endphp

							@foreach($inputs as $input)
								@include('components.input', ['input' => $input])
							@endforeach
							
							<div class="row justify-content-center">
								<button type="submit" class="btn btn-primary">
									Submit <i class="fe fe-arrow-right"></i>
								</button>
							</div>

							@push('scripts')
								<script>
									$(function () {
										let initSaldo = 0 + $('input#saldo').val();
										$('input#day').change(function (v) {
											let day = 0 + $(v.currentTarget).val();
											$('input#perday').val(initSaldo / day);
										});
									});
								</script>
							@endpush
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection