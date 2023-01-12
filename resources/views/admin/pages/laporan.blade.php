@extends('layouts.dashboard')

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
							<th>Nama Siswa</th>
							<th>Nama Orang Tua</th>
							<th>Nominal Topup</th>
							<th>Tanggal Topup</th>
						</tr>
					</thead>
					<tbody>
						@foreach($laporan as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->finance->user->profile->name }}</td>
								<td>{{ $row->finance->user->parent->profile->name }}</td>
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