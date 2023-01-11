@extends('layouts.admin')

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
								<th>Saldo</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Darsono</td>
								<td>{{ GeneralHelper::toRupiah(100000) }}</td>
								<td>
									<div class="btn-group btn-group-sm" role="group">
										<a href="profil" class="btn btn-warning">
											<i class="fe fe-edit"></i>
										</a>
									</div>
								</td>
							</tr>
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