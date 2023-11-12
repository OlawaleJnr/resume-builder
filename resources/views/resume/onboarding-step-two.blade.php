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
  <main class="relative flex flex-col w-full h-full min-h-screen overflow-hidden">
    <div class="flex flex-row justify-center">
      <div class="md:w-1/2 w-full h-full flex flex-col px-6 lg:px-8 my-auto">
        @include('components.step-wizard')

        <div class="sm:max-w-2xl sm:w-full sm:mx-auto pb-14">
          <div class="w-full my-auto items-center flex flex-col gap-y-14">
            <div class="flex flex-col gap-y-6">
              <div class="flex flex-col mx-auto">
                <h2 class="text-center text-xl xs:text-lg md:text-2xl font-medium text-[#101828] font-urbanist">Personal
                  Information</h2>
                <span
                  class="mt-1 text-center font-normal text-xs xs:text-[9.5px] md:text-sm text-[#475467] font-inter">Now,
                  let's make it yours by adding your personal information. Start with your full name, contact details,
                  and any other essential information to craft a professional touch to your resume.</span>
              </div>
            </div>
            <form class="w-full mb-0 flex flex-col gap-8" action="{{ route('resume.process.stepOne') }}" method="POST">
              @csrf
              @method('POST')

              <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                <a href="{{ route('resume.stepOne') }}"
                  class="mb-2 md:mb-0 bg-white px-5 py-3 text-sm text-center shadow-sm font-semibold tracking-wider border text-[#0F585B] rounded-3xs font-inter text-[13px] md:text-[15px] xs:text-[11px]">Back</a>
                <button type="submit"
                  class="mb-2 md:mb-0 bg-[#0F585B] px-5 py-3 text-sm shadow-sm font-semibold tracking-wider text-white rounded-3xs hover:shadow-lg font-inter text-[13px] md:text-[15px] xs:text-[11px]">Continue</button>
              </div>
            </form>
          </div>
        </div>x
      </div>

      <div class="md:w-1/2 min-h-screen md:flex flex-col bg-gray-200 hidden px-6">
        <div class="flex flex-col w-full mx-auto items-center justify-center gap-6 xl:mt-56 my-auto">
          @include('components.section-hero-svg-animated')
          <div class="flex flex-row justify-center">
            <div class="flex-1 relative text-center">
              <span class="text-[#101828]/[.85] text-base not-italic font-normal font-inter">Create a resume to land
                your next job</span>
              <span class="font-medium text-base not-italic text-[#0F585B] font-inter xl:block">Build beautiful,
                recruiter-tested resumes in a few clicks!<span
                  class="text-[#101828]/[.85] text-base not-italic font-normal">.</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
