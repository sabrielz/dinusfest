@extends('layouts.siswa')

@section('content')
<div class="col-12">
	<div class="row align-items-center my-4">
		<div class="col">
			<h2 class="page-title">Belanja</h2>
			<p class="text-muted">Daftar produk yang tersedia.</p>
		</div>
		<div class="col-auto">
			<a href="belanja/keranjang" class="btn btn-primary"><span class="fe fe-shopping-cart fe-12 mr-2"></span>Keranjang Saya</a>
		</div>
	</div>

	<form action="" method="post">
		<div class="card shadow mb-4">
			<div class="card-body p-0">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Jenis</th>
							<th>Harga</th>
							<th>Tindakan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Permen</td>
							<td>Makanan</td>
							<td>{{ GeneralHelper::toRupiah(1000) }}</td>
							<td>
								<div class="btn-group btn-group-sm" role="group">
									<a href="belanja/tambah" class="btn btn-warning">
										Masukkan keranjang <i class="fe fe-shopping-bag"></i>
									</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>
@endsection