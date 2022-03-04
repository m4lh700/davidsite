<div class="bg-red-500 navbar z-40 p-6 md:p-0" id="sticky">
  <div class="container mx-auto">
    <nav class="bg-red-500 dark:bg-gray-800">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <span class="text-white uppercase font-bold self-center text-xl font-semibold whitespace-nowrap"><code>&lt; {{ $page->name }} /></code></span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-theme-black">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full h-full md:block md:w-auto" id="mobile-menu">
          <!-- Menu items -->
          <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <x-navitem link="#" text="Home" extra="" />
            <x-navitem link="#about" text="About" extra="" />
            <x-navitem link="#skills" text="Skills" extra="" />
            <x-navitem link="#resume" text="Resume" extra="" />
            <x-navitem link="#hello" text="Say Hello" extra="bg-theme-black h-full" />
          </ul>
          <!-- End Menu items -->
        </div>
      </div>
    </nav>
  </div>
</div>
