@if($errors->get('alerts'))
	<?php $alerts = $errors->get('alerts') ?? [] ?>

	<div class="row col-12 position-absolute p-3"
	style="top:0; right:0; width: 100vw; max-width: 360px; z-index: 5">
		@foreach ($alerts as $variant => $msg)
			<?php 
				$msg = is_array($msg) ? $msg : [$msg];
				$icon = 'fe fe-16 ' . ($variant === 'success' ? 'fe-check' : 'fe-x')
			?>
		
			@foreach($msg as $message)
			<div class="col-12">
				<div class="alert alert-{{ $variant }}" role="alert" style="cursor: pointer" 
				onclick="$(this).remove()">
					<h4 class="alert-heading"><i class="{{ $icon }}"></i> Notifikasi!</h4>
					<p>{{ $message }}</p>
				</div>
			</div>
			@endforeach
	
		@endforeach
	</div>
	
@endif
