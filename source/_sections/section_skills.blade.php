<section class="px-6 md:p-0 bg-theme-black h-auto overflow-hidden" id="skills">
    <div class="container mx-auto pt-14 mx8">
    <div class="block md:flex flex-row md:pb-14">
        <!-- Left side -->
        <div class="flex justify-between flex-wrap flex-1 align-middle mx-auto" data-aos="fade-right" id="skillpills">
            <div class="flex-auto">
                <div class="py-4">
                    <x-sectiontitle title="Back-end development" extra="" />
                    <p class="font-thin text-xl text-white mb-2">Skills related to back-end development; Building the applications functionality, structure and backbone including databases.</p>
                    @foreach($page->backenddata as $backend)
                        <x-skillpill text="#{{ $backend }}" />
                    @endforeach
                </div>
                <div class="py-4">
                    <x-sectiontitle title="Front-end development" extra="" />
                    <p class="font-thin text-xl text-white mb-2">Skills related to front-end development; The applications visuals, what you can see.</p>
                    @foreach($page->frontenddata as $frontend)
                        <x-skillpill text="#{{ $frontend }}" />
                    @endforeach
                </div>
                <div class="py-4">
                    <x-sectiontitle title="Server sided" extra="" />
                    <p class="font-thin text-xl text-white mb-2">Skills related to server administration; The place where the application and related data is located.</p>
                    @foreach($page->serverdata as $server)
                        <x-skillpill text="#{{ $server }}" />
                    @endforeach
                </div>
                <div class="py-4">
                    <x-sectiontitle title="Search Engine Optimisations (SEO)" extra="" />
                    <p class="font-thin text-xl text-white mb-2">Skills related to back-end development; SEO makes best practices so search engines will index and rate the application.</p>
                    @foreach($page->seodata as $seo)
                        <x-skillpill text="#{{ $seo }}" />
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Right side -->
        <div class="container my-auto pl-0 md:pl-10 md:flex flex-wrap flex-1 block" data-aos="fade-left">
            <x-sectiontitle title="skills & Knowledge" extra="" />
            <x-sectiontext text="{{ $page->skillstext }}" />
        </div>
    </div>
    <x-divider />
</div>


</section>
