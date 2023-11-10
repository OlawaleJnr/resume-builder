<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PleskResume Builder</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="antialiased">
  <main class="relative flex flex-col w-full h-full min-h-screen overflow-hidden">
    <div class="flex flex-row justify-center">
      <div class="md:w-1/2 w-full h-full flex flex-col py-8 px-6 lg:px-8 xl:mt-36 my-auto">
        @include('components.step-wizard')

        <div class="sm:max-w-xl sm:w-full sm:mx-auto">
          <div class="w-full my-auto items-center flex flex-col gap-y-14">
            <div class="flex flex-col gap-y-6">
              <img src="{{ asset('assets/svg/logo.svg') }}" alt="" id="logo" class="w-[200px] mx-auto">
              <div class="flex flex-col mx-auto">
                <h2 class="text-center text-xl xs:text-lg md:text-2xl font-medium text-[#101828] font-inter">Add your
                  name</h2>
                <span
                  class="mt-1 text-center font-normal text-xs xs:text-[9.5px] md:text-sm text-[#475467] font-inter">You
                  made a great template selection! Now let’s add your name to it.</span>
              </div>
            </div>
            <form class="w-full mb-0 flex flex-col gap-10" action="javascript:void(0)" method="POST">
              <div class="flex flex-col gap-10">
                <div class="relative flex flex-col">
                  <input id="first_name" name="first_name" type="text" autocomplete="off" required
                    class="w-full border border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]" />
                  <label for="first_name"
                    class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-base text-[#161616]/[.85] bg-white font-inter px-[6px]">First
                    Name</label>
                </div>

                <div class="relative flex flex-col">
                  <input id="last_name" name="last_name" type="text" autocomplete="off" required
                    class="w-full border border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]" />
                  <label for="last_name"
                    class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-base text-[#161616]/[.85] bg-white font-inter px-[6px]">Last
                    Name</label>
                </div>
              </div>

              <button type="button"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-3xs shadow-sm font-semibold text-[13px] md:text-[15px] xs:text-[11px] text-white bg-[#0F585B] focus:outline-none font-inter">Continue</button>
            </form>
          </div>
        </div>
      </div>

      <div class="md:w-1/2 h-full min-h-screen md:flex flex-col bg-gray-200 hidden px-6">
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
