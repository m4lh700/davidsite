<header class="h-2/3">
  <div class="bg-red-600 flex">
    <div class="container mx-auto px4 mx8">
      <div class="flex flex-col p-32 m-auto animate__animated animate__fadeIn">
        <span class="m-auto"><img class="text-center" alt="This is me, sort off.." src="https://david-homepage.vercel.app/_next/image?url=%2Fassets%2Fsvg%2Fdavid.svg&w=128&q=75"></span>
        <h3 class="text-5xl text-white font-bold text-center uppercase leading-relaxed">{!! $intro !!}</h3>
        <h1 class="text-5xl text-white font-bold text-center uppercase leading-relaxed">{!! $maintitle !!}</h1>
        <h3 class="text-5xl text-white font-thin text-center leading-relaxed">{!! $subtitle !!}</h3>
        <a class="m-auto" href="#home">
          <x-arrowdown width="w-12" height="h-12" />
        </a>
      </div>
    </div>
  </div>
  @include('navigation')
</header>
