<div class="filament-icon-picker-icon-column px-4 py-3">
	@if($icon = $getState())
		{{-- <x-icon class="h-6" name="{{$icon}}" /> --}}
		<x-dynamic-component :component="$icon" @class(['h-6']) />
	@endif
</div>
