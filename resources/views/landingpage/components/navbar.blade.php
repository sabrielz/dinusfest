<?php $navbar_menu = [
	['href' => '/', 'label' => 'Beranda', 'active' => '/'],
	['href' => '/login', 'label' => 'Login', 'desc' => 'Login Siswa', 'active' => 'login'],
	['href' => '/kontak', 'label' => 'Kontak'],
] ?>

<nav id="navbar" class="w-full bg-primary text-white shadow-md fixed top-0 left-0 right-0 z-10">
	<div class="max-w-screen-lg mx-auto px-2 sm:px-4 py-0">
		<div class="flex justify-start md:justify-between gap-2 items-center">

			<button type="button" id="navbarToggler" class="cursor-pointer block md:hidden bg-transparent outline-none hover:opacity-80 transition-opacity p-2">
				<i class="fa fa-bars fa-lg"></i>
			</button>

			<a href="/" class="p-2">
				<img src="/dist/img/main-logo-horizontal.png" alt="Logo SanguKu" width="120" class="">
			</a>

			<div id="navbarMenu" class="hidden md:block absolute md:relative top-full left-0 right-0 z-20">
				<ul class="flex m-0 flex-col md:flex-row w-full bg-primary justify-center items-center" data-sticky-background>
					@foreach ($navbar_menu as $menu)
					<?php $active = request()->is($menu['active'] ?? substr($menu['href'], 1).'*') ?>
	
							<li class="group relative w-full">
								<a href="{{ isset($menu['dropdown']) ? 'javascript:void()' : $menu['href'] }}"
								title="{{ $menu['desc'] ?? '' }}"
								style="text-decoration:none"
								class="hover:opacity-100 transition-opacity flex flex-nowrap items-center gap-2 opacity-90
									{{ $active ? 'text-secondary' : '' }} p-3 block {{ isset($menu['dropdown']) ? 'navbar-dropdown-toggler' : '' }}">
									{{ $menu['label'] }} @isset($menu['dropdown']) <i class="fa fa-angle-down"></i> @endisset
								</a>
	
								@isset($menu['dropdown'])
									<ul class="hidden md:absolute top-full left-0 min-w-max bg-primary rounded-b">
										@foreach ($menu['dropdown'] as $dropdown)
											<?php $active = request()->is($dropdown['active'] ?? substr($dropdown['href'], 1)) ?>
											
											<a href="{{ $dropdown['href'] }}" title="{{ $dropdown['desc'] ?? '' }}" class="hover:opacity-75 transition-opacity
												{{ $active ? 'text-secondary' : '' }} px-3 py-1.5 block w-full md:text-center"
												style="text-decoration:none">
												{{ $dropdown['label'] }}
											</a>
										@endforeach
									</ul>
								@endisset
							</li>
					@endforeach
				</ul>
			</div>

		</div>
	</div>
</nav>