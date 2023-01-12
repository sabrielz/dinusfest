@extends('layouts.siswa')

@section('content')
<div class="row my-4">
	<div class="col-md-12">
		<h2 class="page-title">Nota Pembelian</h2>
		<div class="card shadow mb-4">
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<caption>Nota pembelian jajan di <strong>{{ $payment->canteen->canteen_name }}</strong>.</caption>
					<thead>
						<tr>
							<th>No</th>
							<th>Jajan</th>
							<th>Kategori</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Sub Total</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="5">
								<strong>
									Total Bayar
								</strong>
							</td>
							<td>{{ GeneralHelper::toRupiah($payment->bill) }}</td>
						</tr>
					</tfoot>
					<tbody>
						@foreach ($payment->items as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ App\Helpers\ModelHelper::getProdukName($item['product_id']) }}</td>
								<td>{{ App\Helpers\ModelHelper::getProdukCategory($item['product_id']) }}</td>
								<td>{{ GeneralHelper::toRupiah(App\Helpers\ModelHelper::getProdukHarga($item['product_id'])) }}</td>
								<td>{{ $item['jumlah'] }}</td>
								<td>{{ GeneralHelper::toRupiah(App\Helpers\ModelHelper::getProdukHarga($item['product_id']) * $item['jumlah']) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div> <!-- .card-body -->
		</div> <!-- .card -->
	</div> <!-- .col-md -->
</div> <!-- .col-md -->
@endsection