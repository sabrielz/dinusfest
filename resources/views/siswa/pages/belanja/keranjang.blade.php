@extends('layouts.siswa')

@section('content')
<div class="col-12">
	<div class="row align-items-center my-4">
		<div class="col">
			<h2 class="page-title">Keranjang Saya</h2>
			<p class="text-muted">Daftar produk di keranjang saya.</p>
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
							<th>Jumlah</th>
							<th>Tindakan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Permen</td>
							<td>Makanan</td>
							<td>{{ GeneralHelper::toRupiah(1000) }}</td>
							<td>3</td>
							<td>
								<div class="btn-group btn-group-sm" role="group">
									<a href="profil" class="btn btn-info">
										Beli Sekarang <i class="fe fe-truck"></i>
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