@extends('layouts.dashboard')

@section('content')
	<div class="col-12">
		<h2 class="page-title">Kontrol Pembelian</h2>
		<p class="text-muted">Kontrol apa saja yang bisa dibeli siswa.</p>

		<div class="card w-100 shadow mb-4">
			<div class="card-body p-2">
				<form id="resultForm" action="" method="post">
					@csrf
					<table class="table table-hover" id="selectedJajan">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Jajan</th>
								<th>Kategori Jajan</th>
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
							{{-- <tr>
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
							</tr> --}}
						</tbody>
					</table>
				</form>
			</div>
		</div>

		<h3 class="page-title">Pilih Jajan</h3>
		<p class="text-muted">Daftar jajan yang tersedia.</p>

		<div class="card w-100 shadow mb-4">
			<div class="card-body p-2">
				<table class="table table-hover" id="menuJajan">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Jajan</th>
							<th>Kategori Jajan</th>
							<th>Tindakan</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>

		<div class="d-none">
			<div id="elementActionTambah">
				<div class="btn-group" >
					<a href="javascript:void()" class="btn btn-sm btn-primary" data-jajan-action="tambah" onclick="changeJajan(this)">
						<i class="fe fe-plus"></i>
					</a>
				</div>
			</div>

			<div id="elementActionHapus">
				<div class="btn-group">
					<a href="javascript:void()" class="btn btn-sm btn-danger" data-jajan-action="hapus" onclick="changeJajan(this)">
						<i class="fe fe-x"></i>
					</a>
				</div>
			</div>
		</div>

		@push('scripts')
			<script>
					let selected = {
						2: ['Tempe Goreng', 'Gorengan'],
						4: ['Batagor', 'Gorengan'],
					}

					let products = {
						5: ['Nabati', 'Snack'],
					};

					let actions = {
						hapus: $('#elementActionHapus').html(),
						tambah: $('#elementActionTambah').html(),
					}

					let selectors = {
						selected: 'table#selectedJajan tbody',
						products: 'table#menuJajan tbody',
					}
					

					function parseRow(row) {
						let arr = [];
						let cols = $(row).find('td');
						cols.each((i, col) => {
							if (i === cols.length-1 || i === 0) return;
							arr.push(col.innerText);
						})
						return arr;
					}

					function renderTable(tbody, action, selecteds) {
						$(tbody).empty(); let iter = 1;
						for (let jajanId in selecteds) {
							let items = selecteds[jajanId];
							let newrow = document.createElement('tr');
							newrow.setAttribute('data-jajan-id', jajanId);
							newrow.innerHTML = `<td>${iter++}</td>`;
							
							$.each(items, function (i, text) {
								newrow.innerHTML += `<td>${text}</td>`;
							});
							
							newrow.innerHTML += `<td>${action}</td>`;
							$(tbody).append(newrow);
						}
					}

					function render() {
						renderTable(selectors.selected, actions.hapus, selected);
						renderTable(selectors.products, actions.tambah, products);
					} render()
					
					function clear() {
						products = {...products, ...selected};
						selected = {};
						render();
					}
					
					function changeJajan (elem) {
						elem = $(elem);
						let type = elem.attr('data-jajan-action');
						let row = elem.closest('tr');
						let jajanId = $(row).attr('data-jajan-id');
						jajanId = Number(jajanId);
						let rowdata = parseRow(row);
						if (type === 'tambah') {
							delete products[jajanId];
							// selected = Object.assign({`${jajanId}`: rowdata}, selected);
							selected[jajanId] = rowdata;
						} else {
							delete selected[jajanId];
							// products = Object.assign({`${jajanId}`: rowdata}, products);
							products[jajanId] = rowdata;
						}
						render();
					}

			</script>
		@endpush

		<div class="row justify-content-center gap-2 g-2" style="gap: .5rem">
			<button type="submit" onclick="$('#resultForm').trigger('submit')" class="btn px-4 btn-primary">
				Submit <i class="fe fe-arrow-right"></i>
			</button>
		</div>
	</div>
@endsection