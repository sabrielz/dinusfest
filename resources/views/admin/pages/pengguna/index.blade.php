@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Pengguna</h2>
		<p class="text-muted">Daftar pengguna akun Sangumu.</p>

		<form action="" method="post">
			<div class="card shadow mb-4">
				<div class="card-body p-0">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Nama Orang Tua</th>
								<th>Total Saldo</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_pengguna as $row)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $row->profile->name }}</td>
									<td>{{ $row->parent->profile->name }}</td>
									<td>{{ GeneralHelper::toRupiah($row->finance->finance_balance) }}</td>
									<td>
										<a href="/profil/{{ $row->id }}" class="btn btn-sm btn-warning text-white">
											<i class="fe fe-edit">Siswa</i>
										</a>
										<a href="/profil/{{ $row->parent->id }}" class="btn btn-sm btn-warning text-white">
											<i class="fe fe-edit">Ortu</i>
										</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</form>

		<div class="row justify-content-center">
			<a href="pengguna/tambah" class="btn btn-primary">
				<i class="fe fe-plus"></i> Tambah Pengguna
			</a>
		</div>
	</div>
@endsection