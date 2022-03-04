<section class="px-6 md:p-0 bg-theme-black h-auto overflow-hidden" id="about">
    <div class="container mx-auto pt-14 mx8">
    <div class="block md:flex flex-row">
        <!-- Left side -->
        <div class="container mx-auto my-auto md:px4 md:pt-12 mx8 md:flex flex-wrap flex-1 block" data-aos="fade-up">
            <x-sectiontitle title="about" extra="" />
            <x-sectiontext text="{{ $page->abouttext }}" />
        </div>
        <!-- Right side -->
        <div class="hidden md:flex align-middle mx-auto my-auto" data-aos="fade-up">
            <!--<x-sectiontitle title="about" extra="mx-auto my-auto" />-->
            <div class="bg-cover bg-no-repeat bg-center rounded-full h-80 w-80" style="background-image: url('https://www.lnbo.nl/images/avatars/1835.jpg')"></div>
        </div>
    </div>
    <x-divider />
</div>
</section>
