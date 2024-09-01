@props(['employer', 'size' => 90])

<!-- <img src="http://picsum.photos/seed/{{ rand(0, 10000)}}/{{ $size }}" alt="logo" class="rounded"> -->

<img src="{{ $employer->logo }}" alt="logo" class="rounded" width="{{ $size }}">