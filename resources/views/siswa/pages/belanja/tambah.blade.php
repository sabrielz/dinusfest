@extends('layouts.siswa')

@section('content')
<div class="col-12">
	<h1 class="page-title">{{ $kantin->canteen_name }}</h1>
	<h2 class="page-title">Pesanan Anda</h2>
	<p class="text-muted">Daftar semua pesanan anda.</p>

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
							<th>Harga</th>
							<th>Jumlah</th>
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

	<h2 class="page-title">Pilih Jajan</h2>
	<p class="text-muted">Daftar jajan yang tersedia.</p>

	<div class="card w-100 shadow mb-4">
		<div class="card-body p-2">
			<table class="table table-hover" id="menuJajan">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Jajan</th>
						<th>Kategori Jajan</th>
						<th>Harga</th>
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

	<div class="row justify-content-center gap-2 g-2" style="gap: .5rem">
		<button type="submit" onclick="$('#resultForm').trigger('submit')" class="btn btn-sm px-4 btn-primary">
			Submit <i class="fe fe-arrow-right"></i>
		</button>
	</div>
</div>
@endsection

@section('script')
<script>
	let selected = {
	}

	let products = {
		@foreach ($products as $product)
			{{ $product->product_id }}: ['{{ $product->product_name }}', '{{ $product->category->category_name }}', '{{ GeneralHelper::toRupiah($product->product_price) }}'],
		@endforeach
	};

	let actions = {
		hapus: $('#elementActionHapus').html(),
		tambah: $('#elementActionTambah').html(),
	}

	let selectors = {
		selected: 'table#selectedJajan tbody',
		products: 'table#menuJajan tbody',
	}
	

	function parseRow(row, type) {
		let arr = [];
		let cols = $(row).find('td');
		cols.each((i, col) => {
			if (i === cols.length-1 || i === 0) return;
			if (i === cols.length-2 && type === 'selected') return;
			arr.push(col.innerText);
		})
		return arr;
	}

	function renderTable(tbody, action, selecteds, type) {
		$(tbody).empty(); let iter = 1;
		for (let jajanId in selecteds) {
			let items = selecteds[jajanId];
			let newrow = document.createElement('tr');
			newrow.setAttribute('data-jajan-id', jajanId);
			newrow.innerHTML = `<td>${iter++}</td>`;
			
			$.each(items, function (i, text) {
				newrow.innerHTML += `<td>${text}</td>`;
			});

			if (type === 'selected') {
				newrow.innerHTML += `<td><input type="number" class="form-control" value="1" /></td>`
			}
			
			newrow.innerHTML += `<td>${action}</td>`;
			$(tbody).append(newrow);
		}
	}

	function render() {
		renderTable(selectors.selected, actions.hapus, selected, 'selected');
		renderTable(selectors.products, actions.tambah, products, 'product');
	} render()
	
	function clear() {
		products = {...products, ...selected};
		selected = {};
		render();
	}
	
	function changeJajan (elem) {
		elem = $(elem);
		let type = elem.attr('data-jajan-action');
		let subtype = type === 'tambah' ? 'product' : 'selected';
		let row = elem.closest('tr');
		let jajanId = $(row).attr('data-jajan-id');
		jajanId = Number(jajanId);
		let rowdata = parseRow(row, subtype);
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
@endsection