<section class="px-6 md:p-0 bg-theme-black h-auto overflow-hidden" id="resume">
  <div class="container mx-auto pt-14 mx8">
    <div class="block md:flex flex-row">
        <!-- Left side -->
        <div class="container my-auto pr-0 md:pr-10 pb-6 md:pb-0 md:pr-5 md:flex flex-wrap flex-1 block" data-aos="fade-right">
            <x-sectiontitle title="Resume" extra="" />
            <x-sectiontext text="{!! $page->resumetext !!}" />
        </div>
        <!-- Right side -->
        <div class="flex align-middle mx-auto my-auto" data-aos="fade-up">
            <!-- TimeLine -->
            <ol data-aos="fade-left" class="relative my-auto mx-auto border-l border-gray-200 dark:border-gray-700">
              <x-timelineitem date="October 2018 - present day" title="Full stack web developer | Lead Developer | CTO | Internship supervisor - The Home Party Company" text="Responsible for the entire tech stack.<br>Building new features, sites and shops.<br> Project and team mangement. <br>Mainly focussed on Laravel and Jamstack" />
              <x-timelineitem date="October 2017 - October 2018" title="Technical support engineer(2nd line) - VIP Internet" text="Giving technical support to customers at a hosting company." />
              <x-timelineitem date="July 2016 - October 2017" title="Junior webdeveloper | Linux system administrator - Strengholt Connect" text="Building WordPress/Magento sites including large shops and maintaining the server(s)." />
              <x-timelineitem date="Janary 2016 - June 2016" title="Junior webdeveloper | Linux system administrator internship - Strengholt Connect" text="Internship" />
              <x-timelineitem date="July 2015 - January 2016" title="Junior webdeveloper in training - Strengholt Connect" text="Side job" />
              <x-timelineitem date="February 2015 - July 2015" title="Junior webdeveloper internship - Strengholt Connect" text="Internship" />
            </ol>
        </div>
    </div>
  </div>
</section>
