@extends('layouts.landingpage')

@section('content')
	<section class="w-full py-28 bg-primary text-white">
		<div class="w-full h-full flex flex-col justify-center items-center">
			<h1 class="text-4xl font-bold mb-5">Hubungi Kami</h1>
			<div class="flex flex-row flex-wrap justify-center items-center gap-3">
				<a target="_blank" href="https://goo.gl/maps/zeZEoYMoG66fbGVg8" class="p-3 hover:text-secondary border rounded-md leading-4">
					<i class="fa fa-school"></i>
				</a>
				<a target="_blank" href="https://www.facebook.com/profile.php?id=100015024096175" class="p-3 hover:text-secondary border rounded-md leading-4">
					<i class="fab fa-facebook"></i>
				</a>
				<a target="_blank" href="http://www.instagram.com/smkmuhbligo_ig" class="p-3 hover:text-secondary border rounded-md leading-4">
					<i class="fab fa-instagram"></i>
				</a>
				<a target="_blank" href="mailto:smkmuhbligo2003@gmail.com" class="p-3 hover:text-secondary border rounded-md leading-4">
					<i class="fa fa-envelope"></i>
				</a>
			</div>
		</div>
	</section>

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.6102816722823!2d109.6487127!3d-6.9370938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70214ff6afc36b%3A0x5926432b08332cde!2sSMK%20Muhammadiyah%20Bligo!5e0!3m2!1sid!2sid!4v1672168300649!5m2!1sid!2sid"
width="100%" height="480" style="border:0;" allowfullscreen="true" loading="lazy"
referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection