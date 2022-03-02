@props(['title', 'extra'])

<h3 class="text-center md:text-left flex-row text-3xl font-bold text-white uppercase @if($extra) {{ $extra }} @endif">{{ $title }}</h3>
