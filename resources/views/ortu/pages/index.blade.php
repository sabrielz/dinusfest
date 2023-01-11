@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Beranda</h2>
		<p class="text-muted">Atur pembagian saldo.</p>

			<div class="row">
				<div class="col-12 mb-4">
					<div class="card shadow">
						<div class="card-body py-4">
							<div class="row justify-content-center flex-column align-items-center">
								<h5 class="">Saldo</h5>
								<h2 class="">
									{{ GeneralHelper::toRupiah(auth()->user()->finance->finance_balance) }}
								</h2>
								{{-- <h5 class="text-light">{{ auth()->user()->profile->name }}</h5>

								{{-- <div class="col-3 text-center">
									<span class="circle circle-sm bg-primary-light">
										<i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
									</span>
								</div>
								<div class="col pr-0">
									<p class="small text-light mb-0">Saldo</p>
									<span class="h3 mb-0 text-white">$1250</span>
									<span class="small text-muted">+5.5%</span>
								</div> --}}
								
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
@endsection