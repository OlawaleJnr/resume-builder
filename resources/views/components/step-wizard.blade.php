<div class="h-full w-full py-14">
  <div class="container mx-auto">
    <!-- Code Block for progress bar Starts -->
    <dh-component>
      <div class="w-11/12 lg:w-1/2 mx-auto">
        <!-- Long Bar that Signifies Steps that are untouched -->
        <div class="bg-gray-200 h-1 flex items-center justify-between">
          <!-- First Long Bar that indicates if the step has been completed or not-->
          <div class="w-1/3 bg-[#0F585B] h-1 flex items-center">
            <!-- First Check Icon that indicates if the step has been completed or not-->
            <div class="bg-[#0F585B] h-6 w-6 rounded-full shadow flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18"
                height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
            </div>
          </div>

          <!-- Second Long Bar that indicates if the step has been completed or not-->
          <div class="w-1/3 flex justify-between bg-[#0F585B] h-1 items-center relative">
            <!-- Second Check Icon that indicates if the step has been completed or not-->
            <div class="bg-[#0F585B] h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18"
                height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M5 12l5 5l10 -10" />
              </svg>
            </div>

            <!-- Active step rounded white -->
            <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative">
              <!-- Active step rounded indigo -->
              <div class="h-3 w-3 bg-[#0F585B] rounded-full"></div>
            </div>
          </div>

          <div class="w-1/3 flex justify-end">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
          </div>
        </div>
      </div>
    </dh-component>
    <!--Code Block for progress bar Starts-->
  </div>
</div>
