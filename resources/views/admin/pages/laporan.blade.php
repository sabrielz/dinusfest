@extends('layouts.admin')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Laporan</h2>
		<p class="text-muted">Laporan riwayat pengisian saldo.</p>

		<div class="card shadow mb-4">
			<div class="card-body p-2">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pengguna</th>
							<th>Username Pengguna</th>
							<th>Nominal Topup</th>
							<th>Tanggal Topup</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Darsono</td>
							<td>darsono</td>
							<td>{{ GeneralHelper::toRupiah(100000) }}</td>
							<td>{{ GeneralHelper::toTanggal() }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection