@props(['width' => 90, 'employer'])

{{-- <img src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}/{{ $width }}" class="rounded-xl"
    alt=""> --}}
<img src="{{ asset($employer->logo) }}" width="{{ $width }}" class="rounded-xl" alt="">
