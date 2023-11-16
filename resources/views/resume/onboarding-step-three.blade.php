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
                <h2 class="text-center text-xl xs:text-lg md:text-2xl font-medium text-[#101828] font-urbanist">
                  Employment History</h2>
                <span
                  class="mt-1 text-center font-normal text-xs xs:text-[9.5px] md:text-sm text-[#475467] font-inter">Show
                  your relevant experience (last 10 years). Use bullet points to note your achievements, if possible -
                  use numbers/facts (Achieved X, measured by Y, by doing Z).</span>
              </div>
            </div>
            <form class="w-full mb-0 flex flex-col gap-y-4" action="{{ route('resume.process.stepThree') }}"
              method="POST">
              @csrf
              @method('POST')

              <div class="flex flex-col border rounded-3xs p-5 gap-8" id="originalEmployeeForm">
                <div class="grid grid-cols-6 gap-6">
                  <!-- Employee Job Title -->
                  <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                    <div class="relative">
                      <input id="employee_job_title" name="employee_job_title" type="text" autocomplete="off"
                        class="w-full border @error('employee_job_title') is-invalid @else is-valid @enderror focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                        value="{{ old('employee_job_title', session('employee_job_title')) }}" />
                      <label for="employee_job_title"
                        class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Job
                        Title</label>
                    </div>
                    @error('employee_job_title')
                      <div class="block text-[#F33535] text-[12px] font-inter">
                        <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <!-- Employeer -->
                  <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                    <div class="relative">
                      <input id="employeer" name="employeer" type="text" autocomplete="off"
                        class="w-full border @error('employeer') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                        value="{{ old('employeer', session('employeer')) }}" />
                      <label for="employeer"
                        class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Employeer</label>
                    </div>
                    @error('employeer')
                      <div class="block text-[#F33535] text-[12px] font-inter">
                        <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="grid grid-cols-6 gap-6">
                  <div class="flex flex-col col-span-6 sm:col-span-6 gap-y-[10px]">
                    <div class="grid grid-cols-6 gap-6">
                      <!-- Start Date -->
                      <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                        <div class="relative">
                          <input id="start_date" name="start_date" type="month" autocomplete="off"
                            class="w-full border @error('start_date') is-invalid @else is-valid @enderror focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                            value="{{ old('start_date', session('start_date')) }}" />
                          <label for="start_date"
                            class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Start
                            Date</label>
                        </div>
                        @error('start_date')
                          <div class="block text-[#F33535] text-[12px] font-inter">
                            <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>

                      <!-- End Date -->
                      <div class="flex flex-col col-span-6 sm:col-span-3 gap-y-[10px]">
                        <div class="relative">
                          <input id="end_date" name="end_date" type="month" autocomplete="off"
                            class="w-full border @error('end_date') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                            value="{{ old('end_date', session('end_date')) }}" />
                          <label for="end_date"
                            class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">End
                            Date</label>
                        </div>
                        @error('end_date')
                          <div class="block text-[#F33535] text-[12px] font-inter">
                            <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <!-- Employment City -->
                  <div class="flex flex-col col-span-6 sm:col-span-6 gap-y-[10px]">
                    <div class="relative">
                      <input id="employment_city" name="employment_city" type="text" autocomplete="off"
                        class="w-full border @error('employment_city') is-invalid @else is-valid @enderror border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md px-4 py-2 xs:pt-[13px] pt-[15px] md:pt-[17px] font-inter text-[#475467] text-xs md:text-[13px] xs:text-[11px]"
                        value="{{ old('employment_city', session('employment_city')) }}" />
                      <label for="employment_city"
                        class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">City</label>
                    </div>
                    @error('employment_city')
                      <div class="block text-[#F33535] text-[12px] font-inter error">
                        <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="flex flex-col gap-y-3">
                  <div class="relative">
                    <textarea rows="2" name="employment_description" id="employment_description"
                      class="w-full p-3 h-28 border border-[#CDCDCD] focus:border-[#0F585B] focus:ring-[#0F585B] focus:outline-none rounded-md outline-none placeholder:text-[#101828]/[.65] text-[#475467] resize-none xs:placeholder:text-[10px] sm:placeholder:text-sm text-sm @error('employment_description') is-invalid @else is-valid @enderror"
                      spellcheck="false"
                      placeholder="e.g. Proficient in an assortment of technologies, including Java, ASP.NET, C#, IIS...">{{ old('employment_description', session('employment_description')) }}</textarea>
                    <label for="employment_description"
                      class="absolute left-4 lg:-top-3 -top-2 font-normal text-sm xs:text-[11px] md:text-[0.8rem] text-[#161616]/[.85] bg-white font-inter px-[6px]">Description</label>
                  </div>
                  @error('employment_description')
                    <div class="block text-[#F33535] text-[12px] font-inter error">
                      <img class="h-4 w-4 inline-block"src="{{ asset('assets/svg/warning.svg') }}" alt="error">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-2 bg-[#0F585B]/[.08] rounded-[4px]">
                <button type="button" id="duplicateEmployeeHistoryBtn"
                  class="px-5 py-2 text-xs font-semibold text-[#0F585B] outline-none focus:outline-none active:text-grey-900 transition-all">
                  <i class="lni lni-circle-plus mr-2  align-middle leading-none"></i>
                  Add one more employment
                </button>
              </div>

              <div class="text-right md:space-x-3 md:block flex flex-col-reverse">
                <a href="{{ route('resume.stepTwo') }}"
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
                recruiter-tested resumes in a few clicks<span
                  class="text-[#101828]/[.85] text-base not-italic font-normal">!</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(document).ready(function() {
      var employeeHistoryFormCounter = 1;

      // Event delegation for dynamically added elements
      $("#originalEmployeeForm").on("click", ".deleteFormButton", function() {
        // Get the form ID associated with the clicked delete button
        var formId = $(this).data("formId");
        console.log(formId);
        // Remove the form with the corresponding ID
        $("#originalEmployeeForm" + formId).remove();
      });

      $("#duplicateEmployeeHistoryBtn").on("click", function() {
        var originalForm = $("#originalEmployeeForm");
        var clone = originalForm.clone(true, true);
        clone.find("[id]").removeAttr("id");
        var newId = "originalEmployeeForm" + employeeHistoryFormCounter++;
        clone.attr("id", newId);
        originalForm.after(clone);
        // Reset all form fields in the cloned form
        clone.find("input, textarea").val('');
        // Clean all errors
        clone.find("input, textarea").removeClass('is-invalid is-valid');

        // Create the button with a data attribute to store the form ID
        var deleteButton = $(
          '<div class="text-right mt-4"><button type="button" class="deleteFormButton inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">' +
          '<i class="fas fa-trash-alt text-sm mr-2"></i>Delete</button></div>');
        deleteButton.find(".deleteFormButton").data("formId", employeeHistoryFormCounter - 1);


        clone.append(deleteButton);
      });
    });
  </script>
</body>

</html>
