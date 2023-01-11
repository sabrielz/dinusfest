@extends('layouts.siswa')

@section('content')
<div class="col-12">
	<h2 class="h3 mb-4 page-title">Profile</h2>
	<div class="row mt-5 align-items-center">
		<div class="col-md-3 text-center mb-5">
			<div class="avatar avatar-xl">
				<img src="/tinydash/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
			</div>
		</div>
		<div class="col">
			<div class="row align-items-center">
				<div class="col-md-7">
					<h4 class="mb-1">Brown, Asher</h4>
					<p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col-md-7">
					<p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
				</div>
				<div class="col">
					<p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
					<p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
					<p class="small mb-0 text-muted">(537) 315-1481</p>
				</div>
			</div>
		</div>
	</div>
	<h6 class="mb-3">Last payment</h6>
	<table class="table table-borderless table-striped">
		<thead>
			<tr role="row">
				<th>ID</th>
				<th>Purchase Date</th>
				<th>Total</th>
				<th>Payment</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="col">1331</th>
				<td>2020-12-26 01:32:21</td>
				<td>$16.9</td>
				<td>Paypal</td>
				<td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="text-muted sr-only">Action</span>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Remove</a>
							<a class="dropdown-item" href="#">Assign</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="col">1156</th>
				<td>2020-04-21 00:38:38</td>
				<td>$9.9</td>
				<td>Paypal</td>
				<td><span class="dot dot-lg bg-danger mr-2"></span>False</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="text-muted sr-only">Action</span>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Remove</a>
							<a class="dropdown-item" href="#">Assign</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="col">1038</th>
				<td>2019-06-25 19:13:36</td>
				<td>$9.9</td>
				<td>Credit Card </td>
				<td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="text-muted sr-only">Action</span>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Remove</a>
							<a class="dropdown-item" href="#">Assign</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="col">1227</th>
				<td>2021-01-22 13:28:00</td>
				<td>$9.9</td>
				<td>Paypal</td>
				<td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="text-muted sr-only">Action</span>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Remove</a>
							<a class="dropdown-item" href="#">Assign</a>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div> <!-- /.col-12 -->
@endsection