

<footer>
    <div class="bg-[#F2F2F2]">
        <div class="container px-6 py-16 flex flex-wrap gap-10 justify-between">

            <!-- Column 1: Contact Info -->
            <div class="flex flex-col gap-4 flex-1 min-w-[250px]">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">Denti<span class="text-pink-500">Care</span></div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>
                <p>A team of dentists working to ensure you receive the best treatment.</p>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-purple-700"></i>
                        <span>415-205-5550</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-purple-700"></i>
                        <span>abc@gmail.com</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-globe text-purple-700"></i>
                        <span>www.google.com</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: About Section -->
            <div class="flex flex-col gap-4 flex-1 min-w-[250px]">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">About</div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a href="">Our Dental Team</a></li>
                    <li><a href="">Pricing & Pricelist</a></li>
                    <li><a href="">Solution</a></li>
                    <li><a href="">Dental Services</a></li>
                    <li><a href="">Client</a></li>
                </ul>
            </div>

            <!-- Column 3: Awards Section -->
            <div class="flex flex-col gap-4 flex-1 min-w-[250px]">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">Our Award</div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>
                <div class="relative w-full h-auto md:h-[200px] rounded-lg overflow-hidden">
                    <img class="w-full h-full  min-w-[250px]" src="./assets/awards_right.png" alt="Awards">
                    <div class="absolute inset-0 flex flex-col justify-center items-center text-slate-500 text-lg font-semibold p-4">
                        <h2 class="text-lg md:text-xl">🏆 Best Doctor 2023</h2>
                        <h2 class="text-lg md:text-xl">🏅 Best ABC 2023</h2>
                        <h2 class="text-lg md:text-xl">🥇 Best X-Word 2023</h2>
                    </div>
                </div>
            </div>

            <!-- Column 4: Social Networks -->
            <div class="flex flex-col gap-4 flex-1 min-w-[250px]">
                <div class="flex flex-col gap-3">
                    <div class="text-purple-800 text-2xl font-bold">Social Networks</div>
                    <div class="h-[4px] w-[80px] bg-pink-500"></div>
                </div>
                <p>Visit DentiCare on these social links and connect with us. Make sure to follow our accounts for regular updates.</p>
                <div class="flex gap-3">
                    <a href="{{ company_info('facebook_link')}}" class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><i class="fa-brands fa-facebook"></i></a>
                    <a href="{{ company_info('youtube_link')}}" class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><i class="fa-brands fa-youtube"></i></a>
                    <a href="{{ company_info('x_link')}}" class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><i class="fa-brands fa-twitter"></i></a>
                    <a href="{{ company_info('linkdin_link')}}" class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="{{ company_info('instagram_link')}}" class="text-blue-500 hover:text-pink-600 text-3xl duration-200"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>

    </div>
      <div class="bg-[#1055AE]">
        <div class="container flex flex-col sm:flex-row justify-between items-center p-5 text-white space-y-3">
            <div>
                <p>{{ company_info('footer_info')}}</p>
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



  <script>
        function animateSlide() {
            // Show the slide
            $('.slide').removeClass('hidden').addClass('fade-in');

            // Animate each section inside the slide
            $('.slide .space-y-5 h2').each(function(index) {
                $(this).delay(index * 300).addClass('slide-up');
            });

            // Animate icons with a slight delay
            $('.slide .fa-teeth-open').each(function(index) {
                $(this).delay(index * 400).addClass('slide-up-delayed');
            });

            // Button fade-in with delay
            $('.slide button').delay(800).fadeIn(500);
        }


        $(document).ready(function() {
            animateSlide();
            var $slides = $('.slide');
            var $indicators = $('.indicator');
            var currentIndex = 0;
            var interval;

            function changeSlide(index) {
                // Hide all slides and show the selected one
                $slides.hide().eq(index).fadeIn();

                // Update indicator styles
                $indicators.removeClass('bg-purple-600 h-5 w-5').addClass('bg-gray-300 h-5 w-2');
                $indicators.eq(index).addClass('bg-purple-600 h-5 w-5');

                currentIndex = index;
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % $slides.length;
                changeSlide(currentIndex);
            }

            // Start auto-slide
            function startAutoSlide() {
                interval = setInterval(nextSlide, 5000);
            }

            // Stop auto-slide when clicking an indicator
            function stopAutoSlide() {
                clearInterval(interval);
            }

            // Handle indicator click
            $indicators.click(function() {
                var index = $(this).data('slide');
                stopAutoSlide();
                changeSlide(index);
                startAutoSlide();
            });

            // Initialize slider
            changeSlide(currentIndex);
            startAutoSlide();
        });


        $(document).ready(function(){

            const closeBtn = document.getElementById('close-btn');
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMenu = document.getElementById('close-menu');

            closeMenu.classList.add('hidden');
            // Toggle the mobile menu visibility
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('-translate-x-full'); // Slide in the mobile menu
                closeMenu.classList.remove('hidden');
            });

            // Close the mobile menu
            closeMenu.addEventListener('click', () => {
                mobileMenu.classList.add('-translate-x-full'); // Slide out the mobile menu
                closeMenu.classList.add('hidden');
            });
        });



        // $(document).ready(function () {
        //     // When clicking on a menu item
        //     $("li").click(function (event) {
        //         event.stopPropagation(); // Prevent event bubbling

        //         // Close other open submenus
        //         $("li ul").not($(this).children("ul")).slideUp();

        //         // Toggle the submenu for the clicked item
        //         $(this).children("ul").slideToggle();
        //     });

        //     // Close submenu if clicking anywhere outside
        //     $(document).click(function () {
        //         $("li ul").slideUp();
        //     });
        // });


        // service section
        $(document).ready(function () {
            function animateOnScroll() {
                $(".flex.flex-col.relative").each(function (index) {
                    if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                        $(this)
                            .delay(index * 300) // Delays each animation
                            .animate({ opacity: 1, top: "0px" }, 500);
                    }
                });
            }

            // Initially set opacity 0
            $(".flex.flex-col.relative").css({ opacity: 0, position: "relative", top: "50px" });

            // Run animation on scroll
            $(window).on("scroll", animateOnScroll);

            // Also check once when page loads
            animateOnScroll();
        });


        $(document).ready(function () {
            function animateOnScroll() {
                $(".info_animation").each(function (index) {
                    if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                        $(this)
                            .delay(index * 300) // Delays each animation
                            .animate({ opacity: 1, top: "0px" }, 500);
                    }
                });
            }

            // Initially set opacity 0
            $(".info_animation").css({ opacity: 0, position: "relative", top: "50px" });

            // Run animation on scroll
            $(window).on("scroll", animateOnScroll);

            // Also check once when page loads
            animateOnScroll();
        });




        // $(document).ready(function () {
        //     function animateOnScroll() {
        //         $(".button_animation").each(function (index) {
        //             if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
        //                 $(this)
        //                     .delay(index * 300) // Delays each animation
        //                     .animate({ opacity: 1, top: "0px" }, 500);
        //             }
        //         });
        //     }

        //     // Initially set opacity 0
        //     $(".button_animation").css({ opacity: 0, position: "relative", top: "0px" });

        //     // Run animation on scroll
        //     $(window).on("scroll", animateOnScroll);

        //     // Also check once when page loads
        //     animateOnScroll();
        // });



        $(document).ready(function(){
            // Initially hide all <ul> inside .navItem
            $('.navItem').children('ul').hide();

            // Hover event for .navItem
            $('.navItem').hover(
                function() {
                    // Show dropdown menu
                    $(this).children('ul').stop(true, true).slideDown();
                    // Add border bottom to the <a> inside .navItem
                    $(this).children('a').addClass('border-b-2 border-pink-800');
                },
                function() {
                    // Hide dropdown menu
                    $(this).children('ul').stop(true, true).slideUp();
                    // Remove border bottom when hover is removed
                    $(this).children('a').removeClass('border-b-2 border-pink-800');
                }
            );
        });



        $(document).ready(function() {
            $(".hover-effect").hover(
                function() {
                    // Hover in: Hide barw and show barb with animation
                    $(this).find(".barw").stop().animate({ width: "0px" }, 300); // Hide the white bar
                    $(this).find(".barb").stop().animate({ width: "5px" }, 300); // Show the pink bar with animation
                },
                function() {
                    // Hover out: Reset both bars to initial state
                    $(this).find(".barw").stop().animate({ width: "5px" }, 300); // Reset white bar width
                    $(this).find(".barb").stop().animate({ width: "0px" }, 300); // Hide the pink bar
                }
            );
        });


        $(document).ready(function() {
            $('.mobileSubNav').hide();
            // When mobileNavbtn is clicked
            $('.mobileNavbtn').on('click', function() {
                // Find the closest <ul> and toggle its visibility
                $(this).siblings('ul').stop(true, true).slideToggle(); // Slide up/down
            });
        });



  </script>

</body>
</html>
