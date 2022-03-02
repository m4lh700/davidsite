<section class="px-6 md:p-0 bg-theme-black h-auto overflow-hidden" id="skills">
    <div class="container mx-auto pt-14 mx8">
    <div class="block md:flex flex-row md:pb-14">
        <!-- Left side -->
        <div class="flex justify-between flex-wrap flex-1 align-middle mx-auto" data-aos="fade-right">
            <div class="flex-auto">
                <div class="py-4">
                    <x-sectiontitle title="Back-end development" extra="mb-2" />
                    @foreach($page->backenddata as $backend)
                        <x-skillpill text="#{{ $backend }}" />
                    @endforeach
                </div>
                <div class="py-4">
                    <x-sectiontitle title="Front-end development" extra="mb-2" />
                    @foreach($page->frontenddata as $frontend)
                        <x-skillpill text="#{{ $frontend }}" />
                    @endforeach
                </div>
                <div class="py-4">
                    <x-sectiontitle title="Server sided" extra="mb-2" />
                    @foreach($page->serverdata as $server)
                        <x-skillpill text="#{{ $server }}" />
                    @endforeach
                </div>
                <div class="py-4">
                    <x-sectiontitle title="Search Engine Optimisations (SEO)" extra="mb-2" />
                    @foreach($page->seodata as $seo)
                        <x-skillpill text="#{{ $seo }}" />
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Right side -->
        <div class="container mx-auto my-auto px4 pt-12 mx8 md:flex flex-wrap flex-1 block" data-aos="fade-left">
            <x-sectiontitle title="skills & Knowledge" extra="" />
            <x-sectiontext text="{{ $page->skillstext }}" />
        </div>
    </div>
    <x-divider />
</div>


</section>
