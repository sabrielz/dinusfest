<nav class="topnav navbar navbar-light">

	<button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
		<i class="fe fe-menu navbar-toggler-icon"></i>
	</button>

	<a class="nav-link text-muted my-2 mr-auto" href="/{{ auth()->user()->type }}">
		SANGUMU
	</a>
	
	{{-- <form class="form-inline mr-auto searchform text-muted">
		<input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
	</form> --}}
	
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link text-muted my-2" href="javascript:void()" id="modeSwitcher" data-mode="light">
				<i class="fe fe-sun fe-16"></i>
			</a>
		</li>
		{{-- <li class="nav-item">
			<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
				<span class="fe fe-grid fe-16"></span>
			</a>
		</li>
		<li class="nav-item nav-notif">
			<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
				<span class="fe fe-bell fe-16"></span>
				<span class="dot dot-md bg-success"></span>
			</a>
		</li> --}}

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle text-muted pr-0" href="javascript:void()" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="avatar avatar-sm mt-2">
					<img src="/tinydash/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
				</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="/profil/{{ auth()->user()->id }}">Profil</a>
				<a class="dropdown-item text-danger" href="/logout">Log Out</a>
			</div>
		</li>
	</ul>
</nav>