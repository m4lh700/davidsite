<header class="md:h-2/3">
  <div class="bg-red-600 flex">
    <div id="ex1" class="container mx-auto px4 mx8 header-image bg-fixed bg-center bg-cover">
        <div class="flex flex-col p-4 md:p-32 m-auto animate__animated animate__fadeIn font-poppins">
          <span class="m-auto"><img id="ex1-layer" class="text-center" alt="This is me, sort off.." width="264" height="280" src="{{ $page->avatar }}"></span>
          <h2 class="text-xl md:text-5xl text-white font-bold text-center uppercase leading-relaxed">{!! $page->intro !!}</h2>
          <h1 class="text-xl md:text-5xl text-white font-bold text-center uppercase leading-relaxed">{!! $page->maintitle !!}</h1>
          <h2 class="text-xl md:text-5xl text-white font-thin text-center leading-relaxed">{!! $page->subtitle !!}</h2>
          <a class="m-auto pt-4 text-center text-white uppercase font-thin" href="#about">Scroll
            <x-arrowdown width="w-12" height="h-12" />
          </a>
        </div>
    </div>
  </div>
  @include('_layouts.navigation')
</header>
