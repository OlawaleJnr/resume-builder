<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>PleskResume Builder</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="antialiased">
  <main>
    <!-- Navigation Section -->
    <nav class="container relative mx-auto p-6">
      <!-- Flex Container For Nav Items -->
      <div class="flex items-center justify-between space-x-20">
        <!-- Logo -->
        <div class="z-30">
          <img src="{{ asset('assets/svg/logo.svg') }}" alt="" id="logo" class="w-[200px] lg:w-full">
        </div>

        <!-- Menu Items -->
        <div class="hidden items-center space-x-10 uppercase text-grayishBlue md:flex">
          <a href="#roadmap" class="tracking-widest hover:text-[#0F585B]">Roadmap</a>
          <a href="#contributors" class="tracking-widest hover:text-[#0F585B]">Contributors</a>
          <a href="#faq" class="tracking-widest hover:text-[#0F585B]">FAQ</a>

          <a href="{{ route('resume.stepOne') }}"
            class="px-8 py-3 text-white bg-[#0F585B] rounded-full hover:opacity-70">Get Started</a>
        </div>

        <!-- Hamburger Button -->
        <button id="menu-btn" class="z-30 block md:hidden focus:outline-none hamburger">
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="menu"
        class="fixed inset-0 z-20 flex-col items-center self-end w-full h-full m-h-screen px-6 py-1 pt-24 pb-4 tracking-widest text-white uppercase divide-y divide-gray-500 opacity-90 bg-veryDarkBlue hidden">
        <div class="w-full py-3 text-center">
          <a href="#roadmap" class="block hover:text-softRed">Roadmap</a>
        </div>
        <div class="w-full py-3 text-center">
          <a href="#contributors" class="block hover:text-softRed">Contributors</a>
        </div>
        <div class="w-full py-3 text-center">
          <a href="#faq" class="block hover:text-softRed">FAQ</a>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="bg-no-repeat bg-contain bg-bottom"
      style="background-image: url('{{ asset('assets/svg/bg-curvy-light-mode.svg') }}')">
      <!-- Hero Container -->
      <div class="container flex flex-col-reverse mx-auto p-6 lg:flex-row">
        <!-- Content Container -->
        <div class="flex flex-col space-y-10 mb-44 lg:mt-16 lg:w-1/2 xl:mb-52">
          <h1 class="text-xl font-bold text-center lg:text-6xl lg:max-w-md lg:text-left font-urbanist">
            CREATE YOUR PROFESSIONAL CV IN JUST 5 minutes!
          </h1>
          <p class="text-lg lg:text-2xl text-center text-gray-400 lg:max-w-md lg:text-left font-inter">
            Easy to use. Time-saver. Professional.
          </p>
          <div class="mx-auto lg:mx-0">
            <a href="{{ route('resume.stepOne') }}"
              class="py-5 px-10 text-sm lg:text-xl font-bold text-white bg-[#0F585B] rounded-full lg:py-4 hover:opacity-70 font-urbanist uppercase">Get
              Started</a>
          </div>
        </div>

        <!-- Image -->
        <div class="mb-24 mx-auto md:w-180 lg:mb-0 lg:w-1/2">
          @include('components.homepage-hero-svg-animated')
        </div>
      </div>
    </section>

    <!-- Roadmap Section -->
    <section id="roadmap" class="pt-6 bg-gray-50">
      <!-- Features Container -->
      <div class="container mx-auto px-6 pb-32">
        <!-- First Row -->
        <div class="flex flex-col space-y-24 text-center md:flex-row md:space-y-0">
          <!-- Item 1 -->
          <div class="flex flex-col items-center space-y-2 md:w-1/2">
            <div class="flex items-center justify-center h-24 mb-6">
              <img src="{{ asset('assets/svg/choose.svg') }}" alt="" />
            </div>
            <h3 class="text-xl font-bold font-urbanist">Choose Your CV Template</h3>
            <p class="max-w-md">
              Pick a professional template and color scheme from a diverse selection to set the tone for your impressive
              resume.
            </p>
          </div>
          <!-- Item 2 -->
          <div class="flex flex-col items-center space-y-2 md:w-1/2">
            <div class="flex items-center justify-center h-24 mb-6">
              <img src="{{ asset('assets/svg/information.svg') }}" alt="" />
            </div>
            <h3 class="text-xl font-bold font-urbanist">Personalize your information</h3>
            <p class="max-w-md">
              Personalize your resume by adding your details, customizing sections, and creating a unique, professional
              document.
          </div>
        </div>

        <!-- Second Row -->
        <div class="flex flex-col space-y-24 mt-28 text-center md:flex-row md:space-y-0">
          <!-- Item 3 -->
          <div class="flex flex-col items-center space-y-2 md:w-1/2">
            <div class="flex items-center justify-center h-24 mb-6">
              <img src="{{ asset('assets/svg/certification.svg') }}" alt="" />
            </div>
            <h3 class="text-xl font-bold font-urbanist"> Add Your Professional Experience</h3>
            <p class="max-w-md">
              Input your job history with titles, companies, dates, and emphasize achievements to make your resume stand
              out.
            </p>
          </div>
          <!-- Item 4 -->
          <div class="flex flex-col items-center space-y-2 md:w-1/2">
            <div class="flex items-center justify-center h-24 mb-6">
              <img src="{{ asset('assets/svg/download.svg') }}" alt="" />
            </div>
            <h3 class="text-xl font-bold font-urbanist">Instantly download your CV</h3>
            <p class="max-w-md">
              Download your CV instantly as a PDF, ready to share through a link for swift and convenient distribution.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>
