@extends('layouts.siswa')

@section('content')
<div class="col-12">
	<div class="row align-items-center my-4">
		<div class="col">
			<h2 class="page-title">Belanja</h2>
			<p class="text-muted">Kantin yang tersedia.</p>
		</div>
	</div>

	<form action="" method="post">
		<div class="card shadow mb-4">
			<div class="card-body p-0">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kantin</th>
							<th>Tindakan</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($kantin as $item)
						<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->canteen_name }}</td>
								<td>
									<div class="btn-group btn-group-sm" role="group">
										<a href="kantin/{{ $item->canteen_id }}" class="btn btn-warning">
											Kunjungi <i class="fe fe-arrow-right"></i>
										</a>
									</div>
								</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>
@endsection