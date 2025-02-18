<header class="container border-b border-slate-400 hidden md:block">
    <!-- header top part  -->
  <div class="flex justify-between items-center ">
      <a href="/">
          <img class="h-[100px]" src="{{ company_info_file('company_logo') }}" alt="">
      </a>
      <div class="flex items-center gap-10">
          <div class="flex items-center gap-3">
              <div class="text-4xl text-blue-400">
                {{-- <i class="fa-solid fa-clock "></i> --}}
                <img class="w-[45px] h-[45px]" src="{{ asset('frontend/assets/medical.png')}}" alt="">
            </div>
              <div>
                  <div class="text-2xl text-slate-800 font-semibold font-sans">{{ company_info('phone')}}</div>
                  <div class="text-sm text-slate-600">24/7 Emergency Phone</div>
              </div>
          </div>
          <div class="flex items-center gap-3">
              <div class="text-4xl text-blue-400">
                {{-- <i class="fa-solid fa-clock "></i> --}}
                <img class="w-[45px] h-[45px]" src="{{ asset('frontend/assets/24-hours.png')}}" alt="">
            </div>
              <div>
                  <div class="text-2xl text-slate-800 font-semibold font-sans">{{ company_info('work_day')}} </div>
                  <div class="text-sm text-slate-600">{{ company_info('available_time')}}</div>
              </div>
          </div>

      </div>
  </div>
  <!-- navbar  -->
</header>



  <div class="bg-white sticky top-0 w-full z-[2200] shadow-xl hidden md:block">
      <div class=" container bg-white ">

          <div class="w-full  flex justify-between ">
             <nav class="">
                 <!-- <ul class="flex">
                     <li class="relative px-3 py-5 hover:border-x border-[rgba(0,0,0,0.2)] shadow-[4px_0_10px_rgba(0,0,0,0.2), -4px_0_10px_rgba(0,0,0,0.2) group">
                         <a class="" href="">Home</a>
                         <ul class="z-[2000] absolute left-0 mt-3 w-[120px] space-y-3 p-5 hidden group-hover:block bg-white border border-[rgba(0,0,0,0.2)]">
                             <li class="hover:text-pink-600 z-[5000]"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>

                         </ul>
                     </li>

                     <li class="relative px-3 py-5 hover:border-x border-[rgba(0,0,0,0.2)] shadow-[4px_0_10px_rgba(0,0,0,0.2), -4px_0_10px_rgba(0,0,0,0.2) group">
                         <a class="" href="">About</a>
                         <ul class="absolute left-0 mt-3 w-[120px] space-y-3 p-5 hidden group-hover:block bg-white border border-[rgba(0,0,0,0.2)]">
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                         </ul>
                     </li>

                     <li class="relative px-3 py-5 hover:border-x border-[rgba(0,0,0,0.2)] shadow-[4px_0_10px_rgba(0,0,0,0.2), -4px_0_10px_rgba(0,0,0,0.2) group">
                         <a class="" href="">Contact Us</a>
                         <ul class="absolute left-0 mt-3 w-[120px] space-y-3 p-5 hidden group-hover:block bg-white border border-[rgba(0,0,0,0.2)]">
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                             <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
                         </ul>
                     </li>


                 </ul> -->
                 <ul class="flex gap-3">


                     <li class="navItem  ">
                        <a class="  py-2 hover:border-b-2 hover:border-pink-800 ">Home</a>
                        <!-- <div class="h-[2px] w-[60px] bg-pink-800 absolute bottom-1 left-1/2 transform -translate-x-1/2"></div> -->
                        <ul class="absolute left-0 top-full bg-white w-[220px] text-sm pt-3  pb-5 flex flex-col gap-2 shadow-xl">



                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>


                        </ul>
                     </li>


                     <li class="navItem  ">
                        <a class="  py-2 hover:border-b-2 hover:border-pink-800 ">Services</a>
                        <!-- <div class="h-[2px] w-[60px] bg-pink-800 absolute bottom-1 left-1/2 transform -translate-x-1/2"></div> -->
                        <ul class="absolute left-0 top-full bg-white w-[220px] text-sm pt-3 pb-5 flex flex-col gap-2 shadow-xl">

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>

                            <li class="group flex items-center gap-2 px-2 hover:text-pink-500">
                                <div class="hover-bar w-0 opacity-0 h-[2px] bg-pink-500 transition-all duration-300 group-hover:w-[10px] group-hover:opacity-100"></div>
                                <a href="">Sub Nav</a>
                            </li>
                        </ul>
                     </li>



                 </ul>

            </nav>

             <div class="flex  gap-5">
                 <div class=" pr-5">
                     <div class="flex items-center gap-3 h-full">
                         <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href="{{ company_info('facebook_link')}}"><i class="fa-brands fa-facebook"></i></a></div>
                         <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href="{{ company_info('youtube_link')}}"><i class="fa-brands fa-youtube"></i></a></div>
                         <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href="{{ company_info('x_link')}}"><i class="fa-brands fa-twitter"></i></a></div>
                         <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href="{{ company_info('linkdin_link')}}"><i class="fa-brands fa-linkedin-in"></i></a></div>
                         <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href="{{ company_info('instagram_link')}}"><i class="fa-brands fa-instagram"></i></a></div>
                     </div>
                 </div>
                 <!-- <div class="flex items-center gap-3">
                     <div><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></div>
                     <div><a href=""><i class="fa-solid fa-bag-shopping"></i></a></div>
                 </div> -->
             </div>

          </div>
      </div>
  </div>





<!-- // mobile menu start  -->


<!-- Hamburger Button for Mobile -->
<div class="md:hidden p-5 flex gap-5 sticky top-0 z-[100] bg-white">
<button id="menu-toggle" class="text-3xl text-blue-500">
<i class="fa-solid fa-bars"></i> <!-- Hamburger Icon -->
</button>
<div>
<img class="h-[80px]" src="./assets/logo.png" alt="">
</div>


</div>

<!-- Mobile Menu (Initially Hidden) -->
<div id="mobile-menu" class="flex flex-col z-[1000] fixed top-0 left-0 w-[300px] h-full bg-white shadow-lg transform -translate-x-full transition-all duration-300 ease-in-out">
<div class="p-5  flex gap-5 ">
<button id="close-menu" class="text-3xl text-blue-500 absolute -right-10 top-10 close-btn">
    <i class="fa-solid fa-times"></i> <!-- Close Icon -->
</button>
<div>
    <img class="h-[80px]" src="./assets/logo.png" alt="">
</div>
</div>
<nav class="px-5 flex-1 flex flex-col">


<div class="flex flex-col items-center gap-10">
    <div class="flex items-center gap-3">
        <div class="text-2xl text-blue-400"><i class="fa-solid fa-clock "></i></div>
        <div class="text-center">
            <div class="text-xl text-slate-800 font-semibold font-sans">415-205-5550</div>
            <div class="text-sm text-slate-600">24/7 Emergency Phone</div>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <div class="text-2xl text-blue-400"><i class="fa-solid fa-clock "></i></div>
        <div class="text-center">
            <div class="text-xl text-slate-800 font-semibold font-sans">Monday - Friday </div>
            <div class="text-sm text-slate-600">9AM - 9PM</div>
        </div>
    </div>

</div>

<div class="flex-1 flex gap-10 flex-col  py-5">
    <div class="flex-1">
        <ul class="flex flex-col">

            <li class="border-b border-slate-200   py-2 w-full flex justify-between relative">
                <div class="flex w-full  justify-between">
                    <a class="flex-1 text-center">Home</a>
                    <button class="mobileNavbtn">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                          </svg>
                    </button>
                      <ul class="mobileSubNav absolute top-full w-full flex flex-col border-b border-slate-200">
                        <li class="cursor-pointer border-slate-400 text-center py-2 w-full"><a class="w-full text-center">sub nav</a></li>

                        <li class="cursor-pointer border-slate-400 text-center py-2 w-full"><a class="w-full text-center">sub nav</a></li>

                        <li class="cursor-pointer border-slate-400 text-center py-2 w-full"><a class="w-full text-center">sub nav</a></li>
                      </ul>
                </div>

            </li>



        </ul>
    </div>

    <div class="flex  gap-5">
        <div class="mx-auto">
            <div class="flex items-center gap-5  h-full">
                <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href="{{ company_info('facebook_link') }}"><i class="fa-brands fa-facebook"></i> facebook</a></div>
                <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-youtube"></i></a></div>
                <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-linkedin-in"></i></a></div>
                <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-instagram"></i></a></div>
            </div>
        </div>

    </div>
</div>
</nav>
</div>


<!-- // mobile menu end -->
