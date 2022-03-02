<section class="bg-theme-black h-auto" id="about">
    <div class="container mx-auto pt-14 mx8">
    <div class="block md:flex flex-row">
        <!-- Left side -->
        <div class="container mx-auto px4 pt-12 mx8 mb-4 md:flex justify-between flex-wrap flex-1 block" data-aos="fade-up">
            <x-sectiontitle title="about" extra="" />
            <x-sectiontext text="{{ $page->abouttext }}" />
        </div>
        <!-- Right side -->
        <div class="flex align-middle mx-auto my-auto" data-aos="fade-up">
            <!--<x-sectiontitle title="about" extra="mx-auto my-auto" />-->
            <div class="bg-cover bg-no-repeat bg-center rounded-full h-80 w-80" style="background-image: url('https://www.lnbo.nl/images/avatars/1835.jpg')"></div>
        </div>
    </div>
    <x-divider />
</div>
</section>
