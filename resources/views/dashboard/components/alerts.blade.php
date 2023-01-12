@if($errors->get('alerts'))
	<?php $alerts = $errors->get('alerts') ?? [] ?>
		@foreach ($alerts as $variant => $msg)
			<?php 
				$msg = is_array($msg) ? $msg : [$msg];
				$icon = 'fe fe-16 ' . ($variant === 'success' ? 'fe-check' : 'fe-x')
			?>
		
			@foreach($msg as $message)
				<script>
					$(function () {
						$(document).Toasts('create', {
							class: 'bg-{{ $variant }}',
							body: "{!! $message !!}",
							title: "Pemberitahuan",
							icon: "{!! $icon !!}",
						})
					})
				</script>
			@endforeach

		@endforeach
@endif
