@props(['date', 'title', 'text'])

<li data-aos="fade-left" class="mb-10 ml-6">
    <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white">
        <svg class="w-4 h-4 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
    </span>
    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">{{ $title }}</h3>
    <div class="block mb-2 text-sm font-normal leading-none text-gray-400 ">{{ $date }}</div>
    <p class="mb-4 text-base font-normal text-gray-500">{{ $text }}</p>
</li>




