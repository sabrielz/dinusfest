@extends('layouts.admin')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Kontrol Pembelian</h2>
		<p class="text-muted">Kontrol apa saja yang bisa dibeli siswa.</p>

		<div class="row">
			<div class="col-12">
				<div class="card shadow mb-4">
					<div class="card-body p-2">
						<table class="table table-hover table-sm">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Jajan</th>
									<th>Kategori Jajan</th>
									<th>Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Tempe Goreng</td>
									<td>Gorengan</td>
									<td>
										<div class="btn-group">
											<a href="javascript:void()" class="btn btn-sm btn-danger" data-jajan-action="hapus">
												<i class="fe fe-x"></i>
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="card shadow mb-4">
					<div class="card-header p-2">
						<strong class="card-title">Pilih Jajan</strong>
					</div>
					<div class="card-body p-2">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Jajan</th>
									<th>Kategori Jajan</th>
									<th>Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Batagor</td>
									<td>Gorengan</td>
									<td>
										<div class="btn-group">
											<a href="javascript:void()" class="btn btn-sm btn-primary" data-jajan-action="tambah">
												<i class="fe fe-plus"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Nabati</td>
									<td>Snack</td>
									<td>
										<div class="btn-group">
											<a href="javascript:void()" class="btn btn-sm btn-primary" data-jajan-action="tambah">
												<i class="fe fe-plus"></i>
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			@push('scripts')
				<script>
					$(function () {
						let selected = [
							{}
						]

						function parseRow(row) {
							let arr = [];
							let cols = $(row).find('td');
							.each((i, col) => {

							})
						}
						
						$('a[data-jajan-action=tambah]').click(function (v) {
							v.preventDefault()
							let elem = $(v.currentTarget);
							let row = elem.closest('tr');
							row.find('td').each((i, col) => {
								
							})
						})
					})
				</script>
			@endpush

		</div>
	</div>
@endsection