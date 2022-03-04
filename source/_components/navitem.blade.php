@props(['link', 'text', 'extra'])
<!-- Nav item -->
<li class="transition ease-in-out py-4 @if($extra) {{ $extra }} @endif hover:bg-theme-black duration-300">
  <a href="{{ $link }}" class="text-xl block py-2 pr-4 pl-3 text-white font-bold uppercase">{{ $text }}</a>
</li>
<!-- End Nav item -->
