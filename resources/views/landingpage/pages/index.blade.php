@extends('layouts.landingpage')

@section('content')
	{{-- <section class="w-full overflow-hidden relative">
		<img src="/dist/img/bg2.jpg" alt="" class="w-full max-h-[500px] object-center object-cover">
		<div class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-center">

		</div>
	</section> --}}

	<section class="w-full py-[10rem] bg-primary">
		<div class="w-full h-full flex flex-col justify-center items-center">
			<img src="/dist/img/main-logo-horizontal-black-with-slogan.png" alt="" class="w-[90vw] max-w-[640px]">
		</div>
	</section>

	<section class="w-full relative">
		<div class="max-w-screen-lg mx-auto px-4 py-10 md:py-16">
			<h2 class="text-center font-bold text-3xl mb-4">
				Latar Belakang
			</h2>
			<p class="text-center max-w-screen-md mx-auto">
				SMK Muhammadiyah Bligo merupakan sekolah yang bernuansa
				islami dalam pembentukan karakter siswanya, akan tetapi kejadian
				kenakalan remaja ditempat kami kadang masih sering kami jumpai.
				Kenakalan remaja yang sering terjadi disekolah kami salah satunya adalah
				konsumtif terhadap rokok, yang merupakan hal dilarang disekolah kami.
				Mengingat kejadian teresebut kami mempunyai ide untuk membuat aplikasi
				kontrol keuangan siswa bagi sekolah kami.
			</p>
		</div>
	</section>

	{{-- <section class="w-full bg-white">
		<div class="max-w-screen-md mx-auto px-4 py-10 md:py-16">
			<h2 class="text-center font-bold text-3xl mb-4">
				Identifikasi Masalah
			</h2>
			<p class="text-center max-w-screen-md mx-auto">
				Dari identifkasi latar belakang di atas kami menyimpulkan beberapa masalah
				seperti nominal uang saku siswa sekolah kami yang cukup besar sehingga dapat memicu
				siswa menghemat uang saku untuk membeli rokok atau hal lain yang berbahaya.
				
				Ataupun cuaca yang sekarang ini kurang begitu bersahabat dapat membuat
				kesehatan siswa menjadi kurang baik. Kadang hal yang sering terjadi
				siswa yang sedang sakit batuk dan pilek masih membeli makanan yang
				dapat memicu sakit menjadi lebih parah.
			</p>
		</div>
	</section> --}}

	<section class="w-full bg-white">
		<div class="max-w-screen-md mx-auto px-4 py-10 md:py-16">
			<h2 class="text-center font-bold text-3xl mb-4">
				Hubungi Kami
			</h2>
			<p class="text-center max-w-screen-md mx-auto">
				Hubungi penyedia layanan atau sosial media kami jika ada
				kendala dalam penggunan aplikasi ini.
			</p>
			<a href="/kontak" class="block max-w-max mx-auto py-2 px-5 rounded border border-dark hover:bg-dark hover:text-white transition mt-5">
				Kontak
			</a>
		</div>
	</section>
@endsection