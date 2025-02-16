<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->

  {{-- <link href="./output.css" rel="stylesheet"> --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans relative">
  <header class="container border-b border-slate-400">
      <!-- header top part  -->
    <div class="flex justify-between items-center ">
        <div>
            <img class="h-[100px]" src="./assets/logo.png" alt="">
        </div>
        <div class="flex items-center gap-10">
            <div class="flex items-center gap-3">
                <div class="text-4xl text-blue-400"><i class="fa-solid fa-clock "></i></div>
                <div>
                    <div class="text-2xl text-slate-800 font-semibold font-sans">415-205-5550</div>
                    <div class="text-sm text-slate-600">24/7 Emergency Phone</div>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="text-4xl text-blue-400"><i class="fa-solid fa-clock "></i></div>
                <div>
                    <div class="text-2xl text-slate-800 font-semibold font-sans">Monday - Friday </div>
                    <div class="text-sm text-slate-600">9AM - 9PM</div>
                </div>
            </div>

        </div>
    </div>
    <!-- navbar  -->
</header>

<div class="bg-white sticky top-0 w-full z-[1000] shadow-xl">
    <div class=" container bg-white z-60">

        <div class="w-full   flex justify-between ">
           <nav class="">
               <ul class="flex">
                   <li class="relative px-3 py-5 hover:border-x border-[rgba(0,0,0,0.2)] shadow-[4px_0_10px_rgba(0,0,0,0.2), -4px_0_10px_rgba(0,0,0,0.2) group">
                       <a class="" href="">Home</a>
                       <ul class="absolute left-0 mt-3 w-[120px] space-y-3 p-5 hidden group-hover:block bg-white border border-[rgba(0,0,0,0.2)]">
                           <li class="hover:text-pink-600"><a href="">Nav Link 1</a></li>
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


               </ul>
           </nav>

           <div class="flex  gap-5">
               <div class="border-r border-slate-400 pr-5">
                   <div class="flex items-center gap-3 h-full">
                       <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-facebook"></i></a></div>
                       <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-youtube"></i></a></div>
                       <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-linkedin-in"></i></a></div>
                       <div class="text-blue-500 hover:text-pink-600 text-xl duration-200"><a class="" href=""><i class="fa-brands fa-pinterest"></i></a></div>
                   </div>
               </div>
               <div class="flex items-center gap-3">
                   <div><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></div>
                   <div><a href=""><i class="fa-solid fa-bag-shopping"></i></a></div>
               </div>
           </div>

        </div>
    </div>
</div>




  <main class="">
    <!-- hero booking section  -->
    <section class="relative w-full h-[800px]">
        <div class="w-full h-full ">
            <img class=" w-full h-full" src="./assets/chember1.jpg" alt="">
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0" style="background: linear-gradient(266deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 37%, rgba(255,255,255,0.4990371148459384) 100%);">
            <div class="container flex items-center justify-start h-full">
                <div class="w-1/2 p-10 h-full">
                    <div class="h-full w-full  flex  flex-col gap-10 justify-center">

                        <div class="space-y-5">
                            <h2 class="text-4xl text-pink-600 font-semibold">Care For Your smaile</h2>
                            <h2 class="text-6xl font-bold text-blue-700">Commited to Excelance</h2>
                        </div>
                        <div class="flex gap-5">
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
                            <button class="bg-blue-700 text-white px-5 py-4 rounded-md">Dentel Solution</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <section class="bg-[#F2F2F2]">
        <div class="container">
            <div class="w-1/3 bg-blue-500"></div>
            <div class="w-3/5 bg-red-500"></div>
        </div>
    </section>

    <!-- servie list start  -->
     <section class="bg-[#F2F2F2] py-20">
        <div class="container space-y-10">
            <div class="flex justify-between items-end">
                <div>
                    <h2 class="text-4xl text-pink-600 font-semibold">Committed To</h2>
                    <h2 class="text-6xl text-blue-700 font-bold">Excellence</h2>
                </div>
                <div>
                    <button class="bg-[#1D55AD] text-white text-sm px-7 py-4 rounded-md">View All Services</button>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-10">
                <div class="flex flex-col relative">
                    <div class="flex-1 h-full max-w-[300px]">
                        <img src="./assets/home-services.jpg" alt="">
                    </div>
                    <div class="flex-1 p-5 bg-[#BC74A5] pt-10 space-y-3 flex flex-col justify-end">
                        <h2 class="text-2xl font-semibold  text-white">Dental Service</h2>
                        <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fuga quos</p>
                    </div>
                    <div class="absolute top-1/2 left-3 transform -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white ">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                </div>

                <div class="flex flex-col relative">
                    <div class="flex-1 h-full max-w-[300px]">
                        <img src="./assets/home-services.jpg" alt="">
                    </div>
                    <div class="flex-1 p-5 bg-[#BC74A5] pt-10 space-y-3 flex flex-col justify-end">
                        <h2 class="text-2xl font-semibold  text-white">Dental Service</h2>
                        <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fuga quos</p>
                    </div>
                    <div class="absolute top-1/2 left-3 transform -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white ">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                </div>

                <div class="flex flex-col relative">
                    <div class="flex-1 h-full max-w-[300px]">
                        <img src="./assets/home-services.jpg" alt="">
                    </div>
                    <div class="flex-1 p-5 bg-[#BC74A5] pt-10 space-y-3 flex flex-col justify-end">
                        <h2 class="text-2xl font-semibold  text-white">Dental Service</h2>
                        <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fuga quos</p>
                    </div>
                    <div class="absolute top-1/2 left-3 transform -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white ">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                </div>

                <div class="flex flex-col relative">
                    <div class="flex-1 h-full max-w-[300px]">
                        <img src="./assets/home-services.jpg" alt="">
                    </div>
                    <div class="flex-1 p-5 bg-[#BC74A5] pt-10 space-y-3 flex flex-col justify-end">
                        <h2 class="text-2xl font-semibold  text-white">Dental Service</h2>
                        <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil fuga quos</p>
                    </div>
                    <div class="absolute top-1/2 left-3 transform -translate-y-1/2 w-[80px] h-[80px] flex items-center justify-center text-4xl bg-white ">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                </div>

            </div>
        </div>
     </section>
    <!-- servie list end -->

    <!-- booking second  start-->
    <section class="relative w-full h-[800px]">
        <div class="w-full h-full ">
            <img class=" w-full h-full" src="./assets/chember1.jpg" alt="">
        </div>

        <div class="absolute top-0 bottom-0 left-0 right-0" style="background: linear-gradient(266deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 37%, rgba(255,255,255,0.4990371148459384) 100%);">
            <div class="container flex items-center justify-end">
                <div class="w-1/2 p-10">
                    <div class="space-y-3 border-b border-gray-300 py-10">
                        <div class="space-y-5">
                            <h3 class="text-4xl font-medium text-pink-500">Book Your Visit At</h3>
                            <h2 class="text-5xl font-bold text-purple-600">DentiCare</h2>
                        </div>
                        <p class="text-sm ">Have an emergency? Do book with us with this simple form below and superior deliverables whereas web-enabled applications. Continually reintermediate integrated processes through technically sound intellectual capital.</p>
                    </div>
                    <div class="pt-10">
                        <form action="" class="grid grid-cols-2 gap-10">
                            <div class="flex flex-col gap-2">
                                <label for="" class="text-sm text-slate-700">Your Name</label>
                                <input type="text" class="border bg-white rounded border-gray-400 px-3 py-3">
                            </div>


                            <div class="flex flex-col gap-2">
                                <label for="" class="text-sm text-slate-700">Your Name</label>
                                <input type="text" class="border bg-white rounded border-gray-400 px-3 py-3">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="" class="text-sm text-slate-700">Your Name</label>
                                <input type="text" class="border bg-white rounded border-gray-400 px-3 py-3">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="" class="text-sm text-slate-700">Your Name</label>
                                <input type="text" class="border bg-white rounded border-gray-400 px-3 py-3">
                            </div>


                            <div class="col-span-2 flex items-center justify-center">

                                <button class="bg-blue-800 text-white px-3 py-3 rounded-md">Book Appointment Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- booking second  end-->

    <!-- service provide  -->
    <section class="bg-[#F2F2F2] py-20 relative">
        <div class="container">
            <div class="grid grid-cols-4 gap-10">
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
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>

                <div class="flex gap-3 items-start">
                    <div class="text-4xl text-pink-600 mt-2">
                        <i class="fa-solid fa-teeth-open"></i>
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>


                <div class="flex gap-3 items-start">
                    <div class="text-4xl text-pink-600 mt-2">
                        <i class="fa-solid fa-teeth-open"></i>
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>


                <div class="flex gap-3 items-start">
                    <div class="text-4xl text-pink-600 mt-2">
                        <i class="fa-solid fa-teeth-open"></i>
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>


                <div class="flex gap-3 items-start">
                    <div class="text-4xl text-pink-600 mt-2">
                        <i class="fa-solid fa-teeth-open"></i>
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>

                <div class="flex gap-3 items-start">
                    <div class="text-4xl text-pink-600 mt-2">
                        <i class="fa-solid fa-teeth-open"></i>
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>


                <div class="flex gap-3 items-start">
                    <div class="text-4xl text-pink-600 mt-2">
                        <i class="fa-solid fa-teeth-open"></i>
                    </div>
                    <div class="space-y-2 ">
                        <h2 class="text-xl font-semibold text-slate-800">General Dentistry</h2>
                        <p class="text-sm text-slate-600">Competently parallel task researched data process </p>
                    </div>
                </div>
            </div>

        </div>
        <a class="bg-[#bc74a5] text-white  w-fit px-5 py-3 text-sm rounded-md absolute  -bottom-10 left-1/2 transform -translate-1/2 hover:opacity-80 duration-200 cursor-pointer">View Dentecare Solution</a>
    </section>
    <!-- service provide  -->

    <!-- contact component start-->
    <section class="bg-white py-20">
        <div class="container">

            <div class="gap-10 mb-5">
                <h2 class="text-5xl font-bold text-center text-slate-900"><span class="text-purple-700">Contact</span> <span class="text-pink-500">DentiCare</span></h2>
                <p class="text-center text-md text-slate-500 w-1/3 mx-auto tracking-wider">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p>
            </div>

            <div class="relative">
                <!-- map section -->
                <div class="w-2/3 h-[800px]">
                    <!-- <img class="h-full" src="./assets/map.png" alt=""> -->
                    {{-- <iframe
                    class="w-full h-full"
                    frameborder="0"
                    style="border:0"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=144.95%2C-37.81%2C144.96%2C-37.82&layer=mapnik"
                    allowfullscreen
                  ></iframe> --}}

                  <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8880066801453!2d90.38322967522224!3d23.751372788739257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c766dae163a9%3A0x6f0612fa8107b57c!2sSmart%20Software%20Ltd.!5e0!3m2!1sen!2sbd!4v1739246555672!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <!-- booking section  -->
                <div class="bg-[#1055AE] p-10 w-1/3 absolute top-1/2 right-10 transform -translate-y-1/2 flex flex-col gap-5">
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
                            <div class="bg-white rounded-md px-3 py-1">
                                <span>Book</span>
                                <i class="fa-solid fa-clock"></i>
                            </div>
                        </div>
                    </div>



                    <div class="mt-10 flex flex-col gap-5">
                        <div class="text-3xl font-semibold text-white">Need Flexible Time? </div>
                        <button class="px-5  py-2 text-md bg-white w-fit ">Suggest Checkup Time</button>
                    </div>
                </div>
            </div>
            <div class="py-10 grid grid-cols-4 gap-10">

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

            </div>

        </div>
    </section>
     <!-- contact component end -->
  </main>




  <footer>
    <div class="bg-[#F2F2F2]">
        <div class="container py-20 grid grid-cols-4 gap-10">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">Denti<span class="text-pink-500">Care</span></div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>
                <p>A team of dentists working to ensure you receive the best treatment.</p>
                <div class="flex flex-col gap-2">
                    <div class="flex gap-2">
                        <div class="text-purple-700">
                            <i  class="fa-solid fa-phone"></i>
                        </div>
                        <span>415-205-5550</span>
                    </div>
                    <div class="flex gap-2">
                        <div class="text-purple-700">
                            <i  class="fa-solid fa-envelope"></i>
                        </div>
                        <span>abc@gmail.com</span>
                    </div>
                    <div class="flex gap-2">
                        <div class="text-purple-700">
                            <i  class="fa-solid fa-globe"></i>
                        </div>
                        <span>www.google.com</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">About</div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>

                <div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="">Our Dental Team</a></li>
                        <li><a href="">Pricing & Pricelist</a></li>
                        <li><a href="">Solution</a></li>
                        <li><a href="">Dental Services</a></li>
                        <li><a href="">Client</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">Our Award</div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>

                <div class="relative bg-blue-500">

                    <img class="absolute top-0 bottom-0 right-0 left-0" src="./assets/awards_right.png" alt="">
                    <div class="  absolute  top-5 left-1/2 transform -translate-x-1/2 text-center">
                        <h2>Best Doctor 2023</h2>
                        <h2>Best abc 2023</h2>
                        <h2>Best X-word 2023</h2>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 ">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">Social Networks</div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>
                <p>Visit DentiCare on these social links and connect with us. Make sure to follow our accounts for regular updates.</p>
                <div class="flex  gap-3">
                    <div class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><a class="" href=""><i class="fa-brands fa-facebook"></i></a></div>
                    <div class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><a class="" href=""><i class="fa-brands fa-youtube"></i></a></div>
                    <div class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><a class="" href=""><i class="fa-brands fa-linkedin-in"></i></a></div>
                    <div class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><a class="" href=""><i class="fa-brands fa-pinterest"></i></a></div>
                </div>
            </div>
        </div>
    </div>
      <div class="bg-[#1055AE]">
        <div class="container flex justify-between items-center px-3 py-4 text-white">
            <div>
                <p>Copyright 2025 by SSL .All Rights reserved</p>
            </div>
            <div>
                <ul class="flex items-center gap-3">
                    <li><a href="">Home </a></li>
                    <li><a href="">Service </a></li>
                    <li><a href="">Protfolio </a></li>
                    <li><a href="">About </a></li>
                    <li><a href="">Pages </a></li>
                </ul>
            </div>
        </div>
      </div>
  </footer>

</body>
</html>
