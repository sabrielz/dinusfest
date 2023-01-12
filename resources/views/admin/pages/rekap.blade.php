@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Rekap Transaksi</h2>
		<p class="text-muted">Laporan riwayat transaksi pembelian semua siswa.</p>

		<div class="card shadow mb-4">
			<div class="card-body p-2">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Siswa</th>
							<th>Nama Kantin</th>
							<th>Nominal Pembelian</th>
							<th>Tanggal Pembelian</th>
						</tr>
					</thead>
					<tbody>
						@foreach($rekap as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->user->profile->name }}</td>
								<td>{{ $row->canteen->canteen_name }}</td>
								<td>{{ GeneralHelper::toRupiah($row->bill) }}</td>
								<td>{{ GeneralHelper::toTanggal($row->created_at) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection