<header class="md:h-2/3">
  <div class="bg-red-600 flex">
    <div class="container mx-auto px4 mx8">
      <div class="flex flex-col p-4 md:p-32 m-auto animate__animated animate__fadeIn">
        <span class="m-auto"><img class="text-center" alt="This is me, sort off.." width="264" height="280" src="https://david-homepage.vercel.app/_next/image?url=%2Fassets%2Fsvg%2Fdavid.svg&w=128&q=75"></span>
        <h2 class="text-xl md:text-5xl text-white font-bold text-center uppercase leading-relaxed">{!! $intro !!}</h2>
        <h1 class="text-xl md:text-5xl text-white font-bold text-center uppercase leading-relaxed">{!! $maintitle !!}</h1>
        <h2 class="text-xl md:text-5xl text-white font-thin text-center leading-relaxed">{!! $subtitle !!}</h2>
        <a class="m-auto pt-4 text-center text-white uppercase font-thin" href="#about">Scroll
          <x-arrowdown width="w-12" height="h-12" />
        </a>
      </div>
    </div>
  </div>
  @include('navigation')
</header>
