@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Laporan</h2>
		<p class="text-muted">Laporan riwayat pembelian jajan siswa.</p>

		<div class="row">
			<div class="col-12">
					<div class="card shadow mb-4">
						<div class="card-body p-2">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Jajan</th>
										<th>Harga Jajan</th>
										<th>Kategori Jajan</th>
										<th>Jumlah Jajan</th>
										<th>Tanggal Jajan</th>
									</tr>
								</thead>
								<tbody>
									@foreach($laporan as $row)
										@foreach ($row->items ?? [] as $item)
										@php $newitem = \App\Models\Product::find($item['product_id']) @endphp
											<tr>
												<td>{{ $loop->iteration }}</td>
												<td>{{ $newitem->product_name }}</td>
												<td>{{ GeneralHelper::toRupiah($newitem->product_price) }}</td>
												<td>{{ $newitem->category->category_name }}</td>
												<td>{{ $item['jumlah'] }}</td>
												<td>{{ GeneralHelper::toTanggal($row->created_at) }}</td>
											</tr>
										@endforeach
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection