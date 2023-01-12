@extends('layouts.siswa')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Beranda</h2>
		<p class="text-muted">Informasi saldo anda.</p>

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
	</div>
@endsection