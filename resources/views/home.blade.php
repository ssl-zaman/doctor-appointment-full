<x-main-layout>

<!-- hero booking section  -->
<section class="relative w-full h-[800px] slider z-[1] bg-[#F2F2F2]">
    <!-- slider 1  -->
    @foreach ($sliders as $item)
        <div class="w-full h-full slide z-[100]">
            <div class="w-full h-full ">
                <img class=" w-full h-full bg-cover z-0" src="{{ asset('storage/'. $item->image) }}" alt="">
            </div>

            <div class="absolute top-0 bottom-0 left-0 right-0" style="">
                <div class="container flex items-center justify-start h-full">
                    <div class="w-full sm:w-1/2 p-10 h-full">
                        <div class="h-full w-full  flex  flex-col gap-10 justify-center">

                            <div class="space-y-5">
                                <h2 class="text-4xl text-pink-600 font-semibold">{{ $item->title1}}</h2>
                                <h2 class="text-6xl font-bold text-blue-700">{{ $item->title2}}</h2>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-5">
                                {{-- <div class="flex gap-3 items-start">
                                    <div class="text-4xl text-pink-600 mt-2">
                                        <i class="fa-solid fa-teeth-open"></i>
                                    </div>
                                    <div class="space-y-2 ">
                                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                                        <p class="text-sm text-slate-600 w-full sm:w-2/3">Competently parallel task researched data process </p>
                                    </div>
                                </div> --}}
                                @foreach ($item->components as $com)
                                    <div class="flex gap-3 items-start">
                                        <div class="text-4xl text-pink-600 mt-2">
                                            {{-- <i class="fa-solid fa-teeth-open"></i> --}}
                                            <img class="w-[50px] h-[50px]" src="{{ asset('storage/'. $com->image) }}" alt="">
                                        </div>
                                        <div class="space-y-2 ">
                                            <h2 class="text-xl font-semibold text-slate-800">{{ $com->title }}</h2>
                                            <p class="text-sm text-slate-600 w-full sm:w-2/3">{{ $com->description }} </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div>
                                <button class="bg-blue-700 text-white px-5 py-4 rounded-md flex gap-2 cursor-pointer">
                                    <span>Dentel Solution</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <div class="w-full h-full slide z-[100]">
        <div class="w-full h-full ">
            <img class=" w-full h-full z-0"  src="./assets/hero-3.jpg" alt="">
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0" style="">
            <div class="container flex items-center justify-start h-full">
                <div class="w-full sm:w-1/2 p-10 h-full">
                    <div class="h-full w-full  flex  flex-col gap-10 justify-center">

                        <div class="space-y-5">
                            <h2 class="text-4xl text-pink-600 font-semibold">Care For Your smaile</h2>
                            <h2 class="text-6xl font-bold text-blue-700">Commited to Excelance</h2>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-5">
                            <div class="flex gap-3 items-start">
                                <div class="text-4xl text-pink-600 mt-2">
                                    <i class="fa-solid fa-teeth-open"></i>
                                </div>
                                <div class="space-y-2 ">
                                    <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                                    <p class="text-sm text-slate-600 w-2/3">Competently parallel task researched data process </p>
                                </div>
                            </div>

                            <div class="flex gap-3 items-start">
                                <div class="text-4xl text-pink-600 mt-2">
                                    <i class="fa-solid fa-teeth-open"></i>
                                </div>
                                <div class="space-y-2 ">
                                    <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                                    <p class="text-sm text-slate-600 w-2/3">Competently parallel task researched data process </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="bg-blue-700 text-white px-5 py-4 rounded-md flex gap-2 cursor-pointer">
                                <span>Dentel Solution</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                      </svg>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-full slide z-[100]">
        <div class="w-full h-full ">
            <img  class=" w-full h-full z-0" src="./assets/hero-2.jpg" alt="">
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0" style="">
            <div class="container flex items-center justify-start h-full">
                <div class="w-full sm:w-1/2 p-10 h-full">
                    <div class="h-full w-full  flex  flex-col gap-10 justify-center">

                        <div class="space-y-5">
                            <h2 class="text-4xl text-pink-600 font-semibold">Care For Your smaile</h2>
                            <h2 class="text-6xl font-bold text-blue-700">Commited to Excelance</h2>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-5">
                            <div class="flex gap-3 items-start">
                                <div class="text-4xl text-pink-600 mt-2">
                                    <i class="fa-solid fa-teeth-open"></i>
                                </div>
                                <div class="space-y-2 ">
                                    <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                                    <p class="text-sm text-slate-600 w-full sm:w-2/3">Competently parallel task researched data process </p>
                                </div>
                            </div>

                            <div class="flex gap-3 items-start">
                                <div class="text-4xl text-pink-600 mt-2">
                                    <i class="fa-solid fa-teeth-open"></i>
                                </div>
                                <div class="space-y-2 ">
                                    <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                                    <p class="text-sm text-slate-600 w-full sm:w-2/3">Competently parallel task researched data process </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="bg-blue-700 text-white px-5 py-4 rounded-md flex gap-2 cursor-pointer">
                                <span>Dentel Solution</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                      </svg>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}


    <div class="absolute top-1/2 -translate-y-1/2 right-5 space-y-2 space-x-2">
        <div class="indicator h-5 w-1 hover:w-5 hover:bg-purple-600 bg-gray-300 cursor-pointer" data-slide="0"></div>
        <div class="indicator h-5 w-1 hover:w-5 hover:bg-purple-600 bg-gray-300 cursor-pointer" data-slide="1"></div>
        <div class="indicator h-5 w-1 hover:w-5 hover:bg-purple-600 bg-gray-300 cursor-pointer" data-slide="2"></div>
    </div>

</section>

<section class="bg-[#F2F2F2] p-5 md:p-10 mt-[40px] md:-mt-[120px]  relative" >
    <div class="container flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 relative -mr-[50px] ">
            <div class="z-[150] bg-[#1055AE] p-5  md:p-10  md:absolute md:top-1/2 md:transform md:-translate-y-1/2 md:right-0">
                <div class="flex flex-col items-center justify-center gap-5">
                    <div class="w-[150px] h-[3px] bg-pink-500"></div>
                        <blockquote>
                            <P class="text-white text-2xl quote tracking-wide">{{ company_info('about')}}</P>
                        </blockquote>
                    <div class="w-[150px] h-[3px] bg-pink-500"></div>
                    <img src="{{ company_info_file('signature') }}" alt="">
                </div>
            </div>
        </div>
        <div class="w-full md:w-3/5 bg-white flex flex-col gap-10 relative z-[120] pl-5 md:pl-[100px] p-5 md:px-20 md:pt-10 md:pb-10 shadow-md">
            <h2 class="text-3xl font-semibold text-blue-800 border-b border-gray-200 pb-3">Book Your Appointment</h2>
            <div class="flex flex-col md:flex-row gap-10 z-0">
                <img class="w-full md:w-1/2" src="{{ asset('frontend/assets/booking1_min.png') }}" alt=""/>
                <div class="w-full md:w-1/2 flex flex-col gap-5">
                    <div class="flex flex-col w-full">
                        <label for="phone" class="text-sm text-slate-700"> Name</label>
                        <input type="tel" id="phone" class="border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 shadow-md">
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="phone" class="text-sm text-slate-700"> Phone</label>
                        <input type="tel" id="phone" class="border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 shadow-md">
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="date" class="text-sm text-slate-700">Preferred Date</label>
                        <input type="date" id="date" class="w-full border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 shadow-md">
                    </div>
                    <button class="bg-pink-500 text-white px-5 py-3 rounded-md hover:bg-pink-400 transition duration-300">Book Appointment Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- servie list start  -->
 <section class="bg-[#F2F2F2] py-20 px-5" >
    <div class="container space-y-10">
        <div class="flex flex-col sm:flex-row justify-between items-center text-center md:text-left sm:items-end">
            <div>
                <h2 class="text-4xl text-pink-600 font-semibold">Committed To</h2>
                <h2 class="text-6xl text-blue-700 font-bold">Excellence</h2>
            </div>
            <div>
                <button class="bg-[#1D55AD] text-white text-sm px-7 py-4 rounded-md">View All Services</button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-10">



            @foreach ($services as $service)
                <div class="flex flex-col relative w-full max-w-[400px] mx-auto animate-slide-up">
                    <!-- Image Section with smaller height -->
                    <div class="w-full h-[250px] ">
                        <img class="w-full h-full object-cover rounded-t-lg" src="{{ asset('storage/'.$service->image) }}" alt="">
                    </div>

                    <!-- Text Section with smaller height -->
                    <div class="p-5 bg-[#BC74A5] space-y-3 flex flex-col justify-end w-full h-[250px] rounded-b-lg">
                        <h2 class="text-2xl font-semibold text-white">{{ $service->name}}</h2>
                        <p class="text-sm md:text-base text-white">
                           {{ $service->description }}
                        </p>
                    </div>

                    <!-- Centered Icon -->
                    <div class="absolute inset-y-1/2 left-5 -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white  shadow-lg">
                        <img src="{{asset('storage/'.$service->icon) }}" alt="">
                    </div>
                </div>
            @endforeach

            {{-- <div class="flex flex-col relative w-full max-w-[400px] mx-auto">
                <!-- Image Section with smaller height -->
                <div class="w-full h-[250px] ">
                    <img class="w-full h-full object-cover rounded-t-lg" src="./assets/home-services.jpg" alt="">
                </div>

                <!-- Text Section with smaller height -->
                <div class="p-5 bg-[#BC74A5] space-y-3 flex flex-col justify-end w-full h-[250px] rounded-b-lg">
                    <h2 class="text-2xl font-semibold text-white">Dental Service</h2>
                    <p class="text-sm md:text-base text-white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.or sit amet consectetur, adipisicing elit. Nor sit amet consectetur, adipisicing elit
                    </p>
                </div>

                <!-- Centered Icon -->
                <div class="absolute inset-y-1/2 left-5 -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white  shadow-lg">
                    <i class="fa-solid fa-tooth"></i>
                </div>
            </div>


            <div class="flex flex-col relative w-full max-w-[400px] mx-auto">
                <!-- Image Section with smaller height -->
                <div class="w-full h-[250px] ">
                    <img class="w-full h-full object-cover rounded-t-lg" src="./assets/home-services.jpg" alt="">
                </div>

                <!-- Text Section with smaller height -->
                <div class="p-5 bg-[#BC74A5] space-y-3 flex flex-col justify-end w-full h-[250px] rounded-b-lg">
                    <h2 class="text-2xl font-semibold text-white">Dental Service</h2>
                    <p class="text-sm md:text-base text-white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.or sit amet consectetur, adipisicing elit. Nor sit amet consectetur, adipisicing elit
                    </p>
                </div>

                <!-- Centered Icon -->
                <div class="absolute inset-y-1/2 left-5 -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white  shadow-lg">
                    <i class="fa-solid fa-tooth"></i>
                </div>
            </div>


            <div class="flex flex-col relative w-full max-w-[400px] mx-auto">
                <!-- Image Section with smaller height -->
                <div class="w-full h-[250px] ">
                    <img class="w-full h-full object-cover rounded-t-lg" src="./assets/home-services.jpg" alt="">
                </div>

                <!-- Text Section with smaller height -->
                <div class="p-5 bg-[#BC74A5] space-y-3 flex flex-col justify-end w-full h-[250px] rounded-b-lg">
                    <h2 class="text-2xl font-semibold text-white">Dental Service</h2>
                    <p class="text-sm md:text-base text-white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.or sit amet consectetur, adipisicing elit. Nor sit amet consectetur, adipisicing elit
                    </p>
                </div>

                <!-- Centered Icon -->
                <div class="absolute inset-y-1/2 left-5 -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white  shadow-lg">
                    <i class="fa-solid fa-tooth"></i>
                </div>
            </div> --}}


        </div>
    </div>
 </section>
<!-- servie list end -->


<!-- Booking Section Start -->
{{-- <section class="relative w-full h-auto md:h-[800px] flex flex-col md:flex-row items-center bg-cover bg-no-repeat"
style="
background-image: url('./assets/chember1.jpg'),
                  linear-gradient(0deg, rgba(255,255,255,0.88) 0%, rgba(255,255,255,1) 100%);"
>
    <!-- Background Image -->
    <div class="w-full md:w-1/2 h-full md:block order-2 sm:order-1">
        <img class="pt-20 px-10" src="./assets/doctor.png" alt="Booking Background">
    </div>

    <!-- Booking Form Container -->
    <div class="flex flex-col justify-center items-center md:items-start w-full md:w-1/2 px-5 md:px-10 p-10 bg-transparent bg-opacity-40 rounded-lg shadow-lg relative z-10 order-1 sm:order-2">
        <!-- Heading -->
        <div class="space-y-3 border-b border-gray-300 pb-6 w-full text-center md:text-left">
            <h3 class="text-3xl md:text-4xl font-medium text-[#bc74a5]">Book Your Visit At</h3>
            <h2 class="text-4xl md:text-5xl font-bold text-purple-600">DentiCare</h2>
            <p class="text-sm text-gray-700">
                Have an emergency? Book with us using the simple form below. We ensure superior deliverables and seamless web-enabled services.
            </p>
        </div>

        <!-- Booking Form -->
        <div class="pt-6 w-full">
            <form action="" class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label for="name" class="text-sm text-slate-700">Your Name</label>
                        <input type="text" id="name" class="border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="email" class="text-sm text-slate-700">Your Email</label>
                        <input type="email" id="email" class="border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label for="phone" class="text-sm text-slate-700">Your Phone</label>
                        <input type="tel" id="phone" class="border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="date" class="text-sm text-slate-700">Preferred Date</label>
                        <input type="date" id="date" class="border bg-white rounded border-gray-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 w-full">
                    </div>
                </div>

                <div class="flex justify-center   mt-4">
                    <button class="w-full bg-blue-800 text-white px-5 py-3 rounded-md hover:bg-blue-700 transition duration-300">Book Appointment Now</button>
                </div>
            </form>
        </div>
    </div>
</section> --}}
<!-- Booking Section End -->




<!-- service provide  -->
<section class="bg-[#F2F2F2] py-20 relative ">
    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-10 p-10">

            @foreach ($solutions as $item)
                <div class="flex gap-3 items-start info_animation">
                    <div class="text-4xl text-pink-600 mt-2">
                        {{-- <i class="fa-solid fa-teeth-open"></i> --}}
                        <img class="w-[50px] h-[50px] " src="{{ asset('storage/'. $item->image) }}" alt="">
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">{{ $item->name }}</h2>
                        <p class="text-sm text-slate-600 w-2/3">{{ $item->description }} </p>
                    </div>
                </div>
            @endforeach


            {{-- <div class="flex gap-3 items-start info_animation">
                <div class="text-4xl text-pink-600 mt-2">
                    <i class="fa-solid fa-teeth-open"></i>
                </div>
                <div class="space-y-2 ">
                    <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                    <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                </div>
            </div> --}}


        </div>

    </div>
    <div class="button_animation">
        <a class="bg-[#bc74a5] text-white  w-fit px-5 py-3 text-sm rounded-md absolute  -bottom-10 left-1/2 transform -translate-1/2 hover:opacity-80 duration-200 cursor-pointer text-center">View Dentecare Solution</a>
    </div>
</section>
<!-- service provide  -->

<!-- contact component start-->
<section class="bg-white py-20 ">
    <div class="container p-5 md:p-10">

        <div class="gap-10 mb-5">
            <h2 class="text-5xl font-bold text-center text-slate-900"><span class="text-purple-700">Contact</span> <span class="text-pink-500">DentiCare</span></h2>
            <p class="text-center text-md text-slate-500 w-full md:w-1/3 mx-auto tracking-wider">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p>
        </div>

        <div class="relative">
            <!-- map section -->
            <div class="w-full sm:w-2/3 h-[400px]  md:h-[800px] ">
                <!-- <img class="h-full" src="./assets/map.png" alt=""> -->
                <iframe class="w-full h-full" src="{{ company_info('google_tag') }}"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <!-- booking section  -->
            <div class="bg-[#1055AE] p-5 md:p-10 w-full md:w-1/3 md:absolute md:top-1/2 md:right-10 md:transform md:-translate-y-1/2 flex flex-col gap-5">
                <h2 class="text-white text-2xl font-bold">Working Hours</h2>
                <p class="text-white ">Check out DentiCare’s Office hours to plan your visit.</p>
                <div>
                    <div class="flex p-2 border-b border-gray-500 justify-between items-center">
                        <div class="text-white">Monday</div>
                        <div class="text-white opacity-50">8pm-9pm</div>
                        <div class="bg-white rounded-md px-3 py-1">
                            <span>Book</span>
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>

                    <div class="flex p-2 border-b border-gray-500 justify-between items-center">
                        <div class="text-white">Monday</div>
                        <div class="text-white opacity-50">8pm-9pm</div>
                        <div class="bg-white rounded-md px-3 py-1">
                            <span>Book</span>
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>

                    <div class="flex p-2 border-b border-gray-500 justify-between items-center">
                        <div class="text-white">Monday</div>
                        <div class="text-white opacity-50">8pm-9pm</div>
                        <div class="bg-white rounded-md px-3 py-1">
                            <span>Book</span>
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>

                    <div class="flex p-2 border-b border-gray-500 justify-between items-center">
                        <div class="text-white">Monday</div>
                        <div class="text-white opacity-50">8pm-9pm</div>
                        <div class="bg-white rounded-md px-3 py-1">
                            <span>Book</span>
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>

                    <div class="flex p-2 border-b border-gray-500 justify-between items-center">
                        <div class="text-white">Monday</div>
                        <div class="text-white opacity-50">8pm-9pm</div>
                        <button onclick="openPopup()" class="bg-white rounded-md px-3 py-1">
                            <span>Book</span>
                            <i class="fa-solid fa-clock"></i>
                        </button>
                    </div>
                </div>

                <div class="mt-10 flex flex-col gap-5">
                    <div class="text-3xl font-semibold text-white">Need Flexible Time? </div>
                    <button class="px-5  py-2 text-md bg-white w-fit ">Suggest Checkup Time</button>
                </div>
            </div>
        </div>
        <!-- <div class="py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

            <div class="flex gap-3 flex-col">
                <div class="text-5xl text-center text-purple-800">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <h3 class="text-center text-2xl text-slate-900">Emergency Phone</h3>
                <div class="flex flex-col items-center">
                    <div class="text-md text-slate-600">415-205-5550</div>
                    <div class="text-md text-slate-600">Call us Anytime 24/7</div>
                </div>
            </div>

            <div class="flex gap-3 flex-col">
                <div class="text-5xl text-center text-purple-800">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <h3 class="text-center text-2xl text-slate-900">Emergency Phone</h3>
                <div class="flex flex-col items-center">
                    <div class="text-md text-slate-600">415-205-5550</div>
                    <div class="text-md text-slate-600">Call us Anytime 24/7</div>
                </div>
            </div>

            <div class="flex gap-3 flex-col">
                <div class="text-5xl text-center text-purple-800">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <h3 class="text-center text-2xl text-slate-900">Emergency Phone</h3>
                <div class="flex flex-col items-center">
                    <div class="text-md text-slate-600">415-205-5550</div>
                    <div class="text-md text-slate-600">Call us Anytime 24/7</div>
                </div>
            </div>

            <div class="flex gap-3 flex-col">
                <div class="text-5xl text-center text-purple-800">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <h3 class="text-center text-2xl text-slate-900">Emergency Phone</h3>
                <div class="flex flex-col items-center">
                    <div class="text-md text-slate-600">415-205-5550</div>
                    <div class="text-md text-slate-600">Call us Anytime 24/7</div>
                </div>
            </div>

        </div> -->

        <div class="py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-10 lg:gap-16">
            <div class="flex flex-col items-center gap-3 text-center info_animation">
                <div class="text-5xl text-purple-800">
                    {{-- <i class="fa-solid fa-notes-medical"></i> --}}
                    <img src="{{ asset('frontend/assets/medical.png') }}" alt="">
                </div>
                <h3 class="text-2xl text-slate-900">Emergency Phone</h3>
                <div class="flex flex-col">
                    <div class="text-md text-slate-600">{{ company_info('phone') }}</div>
                    <div class="text-md text-slate-600">Call us Anytime 24/7</div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-3 text-center info_animation">
                <div class="text-5xl text-purple-800">
                    {{-- <i class="fa-solid fa-notes-medical"></i> --}}
                    <img src="{{ asset('frontend/assets/location.png') }}" alt="">
                </div>
                <h3 class="text-2xl text-slate-900">Address</h3>
                <div class="flex flex-col">
                    <div class="text-md text-slate-600">{{ company_info('address') }}</div>

                </div>
            </div>

            <div class="flex flex-col items-center gap-3 text-center info_animation">
                <div class="text-5xl text-purple-800">
                    {{-- <i class="fa-solid fa-notes-medical"></i> --}}
                    <img src="{{ asset('frontend/assets/dentist-chair.png') }}" alt="">
                </div>
                <h3 class="text-2xl text-slate-900">Book By Phone</h3>
                <div class="flex flex-col">

                        @php
                            $phoneNumber = json_decode(company_info('bookbyphone'));
                        @endphp

                        @foreach ($phoneNumber as $item)
                            <div class="text-md text-slate-600">{{ $item }}</div>
                        @endforeach

                </div>
            </div>

            <div class="flex flex-col items-center gap-3 text-center info_animation">
                <div class="text-5xl text-purple-800">
                    {{-- <i class="fa-solid fa-notes-medical"></i> --}}
                    <img src="{{ asset('frontend/assets/email.png') }}" alt="">
                </div>
                <h3 class="text-2xl text-slate-900">Email US</h3>
                <div class="flex flex-col">
                    <div class="text-md text-slate-600">{{ company_info('email') }}</div>
                    {{-- <div class="text-md text-slate-600">Call us Anytime 24/7</div> --}}
                </div>
            </div>
        </div>

    </div>
</section>
 <!-- contact component end -->





</x-main-layout>
