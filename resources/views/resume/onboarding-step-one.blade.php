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
              <div class="grid grid-cols-6 gap-6">
                <!-- Job Title -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="job_title" name="job_title" type="text" autocomplete="off"
                      class="w-full border @error('job_title') is-invalid @else is-valid @enderror focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('job_title', session('job_title')) }}" />
                    <label for="job_title"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Job
                      Title</label>
                  </div>
                  @error('job_title')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div
                  class="flex relative w-12 h-12 bg-[#0F585B] justify-center items-center m-1 mr-2 text-xl rounded-full text-white">
                  AT</div>
              </div>

              <div class="grid grid-cols-6 gap-6">
                <!-- First Name -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="first_name" name="first_name" type="text" autocomplete="off"
                      class="w-full border @error('first_name') is-invalid @else is-valid @enderror focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('first_name', session('first_name')) }}" />
                    <label for="first_name"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">First
                      Name</label>
                  </div>
                  @error('first_name')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Last Name -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="last_name" name="last_name" type="text" autocomplete="off"
                      class="w-full border @error('last_name') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('last_name', session('last_name')) }}" />
                    <label for="last_name"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Last
                      Name</label>
                  </div>
                  @error('last_name')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="grid grid-cols-6 gap-6">
                <!-- Email Address -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="email" name="email" type="email" autocomplete="off"
                      class="w-full border @error('email') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('email', session('email')) }}" />
                    <label for="email"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Email
                      Address</label>
                  </div>
                  @error('email')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Mobile Number -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="mobile_number" name="mobile_number" type="number" autocomplete="off"
                      class="w-full border @error('mobile_number') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('mobile_number', session('mobile_number')) }}" />
                    <label for="mobile_number"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Mobile
                      Number</label>
                  </div>
                  @error('mobile_number')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="grid grid-cols-6 gap-6">
                <!-- Address -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="address" name="address" type="text" autocomplete="off"
                      class="w-full border @error('address') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('address', session('address')) }}" spellcheck="false" />
                    <label for="address"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Address</label>
                  </div>
                  @error('address')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Postal Code -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="postal_code" name="postal_code" type="number" autocomplete="off"
                      class="w-full border @error('postal_code') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('postal_code', session('postal_code')) }}" />
                    <label for="postal_code"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Postal
                      Code</label>
                  </div>
                  @error('postal_code')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="grid grid-cols-6 gap-6">
                <!-- City -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="city" name="city" type="text" autocomplete="off"
                      class="w-full border @error('city') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('city', session('city')) }}" />
                    <label for="city"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">City</label>
                  </div>
                  @error('city')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Country -->
                <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                  <div class="relative">
                    <input id="country" name="country" type="text" autocomplete="off"
                      class="w-full border @error('country') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                      value="{{ old('country', session('country')) }}" />
                    <label for="country"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Country</label>
                  </div>
                  @error('country')
                    <div class="block text-[#F33535] text-[12px] font-inter">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                <a href="{{ route('home') }}"
                  class="mb-2 md:mb-0 bg-white px-5 py-3 text-sm text-center shadow-sm font-normal tracking-wider border text-[#0F585B] rounded-3xs font-inter text-[13px] md:text-[13px] xs:text-[11px]">Back</a>
                <button type="submit"
                  class="mb-2 md:mb-0 bg-[#0F585B] px-5 py-3 text-sm shadow-sm font-normal tracking-wider text-white rounded-3xs hover:shadow-lg font-inter text-[13px] md:text-[13px] xs:text-[11px]">Continue</button>
              </div>
            </form>
          </div>
        </div>
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
