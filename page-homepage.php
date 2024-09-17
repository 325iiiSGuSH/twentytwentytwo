<?php
/* Template Name: Homepage */
get_header();
?>

<div class="container-fluid">
    <!-- Hero Section -->
    <section class="relative flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png.png');">
        <div class="absolute inset-0 bg-black bg-opacity-10"></div>
        <div class="relative z-10 text-center">
            <h5 class="font-bold text-white">Welcome to</h5>
            <h1 class="text-4xl md:text-6xl font-bold text-blue-400">Your Security is our Priority</h1>
            <p class="mt-4 text-xl md:text-2xl">At Kernel Afrika, we are experts in cyber security, offering the latest technology and global partnerships.</p>

        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-semibold text-white">INTRODUCTION HEADING - OUR USP</h2>
            <p class="mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae 
            vestibulum vestibulum. Cras venenatis euismod malesuada. Nulla facilisi. Sed interdum, odio vitae gravida scelerisque, nulla orci suscipit libero, sit amet cursus lorem quam nec nisl. In dapibus lorem nec tincidunt viverra. Phasellus a lorem est. Vestibulum ac bibendum enim, a dignissim libero. Aliquam erat volutpat. Mauris fringilla nisl quis sapien feugiat, sit amet interdum ligula fermentum.
            Sed tincidunt risus vitae magna pellentesque, non volutpat arcu tempor. Pellentesque at congue lorem. Nam gravida, metus ut 
            ultricies commodo, orci leo elementum nunc, eget volutpat metus eros nec nunc. Praesent ut ligula sit amet risus mollis consequat...</p>
        </div>
    </section>

<!-- Product Partners Section -->
<section class="py-16 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-semibold text-white">PRODUCTS PARTNERS</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-8">
            <!-- Partner Logos -->
            <div class="bg-gradient-to-r from-gray-800 to-gray-500 p-2 rounded-lg transform hover:scale-105 transition duration-300 hover:from-gray-700 hover:to-cyan-600">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output (10).png" alt="Partner 1" class="mx-auto h-10 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <div class="bg-gradient-to-r from-gray-800 to-blue-500 p-2 rounded-lg transform hover:scale-105 transition duration-300 hover:from-gray-700 hover:to-cyan-600">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output (11).png" alt="Partner 2" class="mx-auto h-10 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <div class="bg-gradient-to-r from-gray-800 to-blue-500 p-2 rounded-lg transform hover:scale-105 transition duration-300 hover:from-gray-700 hover:to-cyan-600">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output (12).png" alt="Partner 3" class="mx-auto h-10 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <div class="bg-gradient-to-r from-gray-800 to-gray-200 p-2 rounded-lg transform hover:scale-105 transition duration-300 hover:from-gray-700 hover:to-cyan-600">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output (13).png" alt="Partner 4" class="mx-auto h-10 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <div class="bg-gradient-to-r from-gray-800 to-gray-500 p-2 rounded-lg transform hover:scale-105 transition duration-300 hover:from-gray-700 hover:to-cyan-600">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output (14).png" alt="Partner 5" class="mx-auto h-10 grayscale hover:grayscale-0 transition duration-300">
            </div>
            <div class="bg-gradient-to-r from-gray-800 to-blue-500 p-2 rounded-lg transform hover:scale-105 transition duration-300 hover:from-gray-700 hover:to-cyan-600">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output (15).png" alt="Partner 6" class="mx-auto h-10 grayscale hover:grayscale-0 transition duration-300">
            </div>
        </div>
    </div>
</section>



    <!-- Services Section -->
    <section class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-semibold text-white">SERVICES</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <!-- Service Card 1 -->
                <div class="bg-gradient-to-r from-blue-500 to-blue-700 p-6 rounded-lg hover:scale-105 transition transform duration-500">
                    <div class="icon mb-2">
                        <i class="fas fa-shield-alt text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl text-white">Cloud Security</h4>
                    <p class="mt-2 text-white">Enim nec rhoncus volutpat nullam eros sapien pharetra.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg hover:scale-105 transition transform duration-500">
                    <div class="icon mb-2">
                        <i class="fas fa-user-shield text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl text-white">Identity Management</h4>
                    <p class="mt-2 text-white">Enim nec rhoncus volutpat nullam eros sapien pharetra.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg hover:scale-105 transition transform duration-500">
                    <div class="icon mb-2">
                        <i class="fas fa-lock text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl text-white">Strong Authentication</h4>
                    <p class="mt-2 text-white">Enim nec rhoncus volutpat nullam eros sapien pharetra.</p>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg hover:scale-105 transition transform duration-500">
                    <div class="icon mb-2">
                        <i class="fas fa-key text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl text-white">Public Key Infrastructure</h4>
                    <p class="mt-2 text-white">Enim nec rhoncus volutpat nullam eros sapien pharetra.</p>
                </div>

                <!-- Service Card 5 -->
                <div class="bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg hover:scale-105 transition transform duration-500">
                    <div class="icon mb-2">
                        <i class="fas fa-chalkboard-teacher text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl text-white">Workshops and Training</h4>
                    <p class="mt-2 text-white">Enim nec rhoncus volutpat nullam eros sapien pharetra.</p>
                </div>
            </div>
        </div>
    </section>


<!-- Offices Section -->
<section class="py-16 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-semibold text-white">OUR OFFICES</h2>
        <div class="flex flex-col items-center mt-8">
            <!-- Image Centered and with Adjusted Height/Width -->
            <div class="w-full md:w-4/4 lg:w-3/3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/world-map.png" 
                     alt="World Map" 
                     class="mx-auto w-full h-auto object-cover rounded-lg grayscale hover:grayscale-0 transition duration-500">
            </div>
            <div class="mt-8 text-white">
                <h3 class="text-xl font-semibold">Global Office Locations</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor venenatis tellus eget posuere.</p>
            </div>
        </div>
    </div>
</section>


    <!-- GSAP Animations -->
    <script>
        gsap.from("h1", { opacity: 0, y: 50, duration: 1.5, ease: "power4.out", delay: 0.3 });
        gsap.from("p", { opacity: 0, y: 50, duration: 1.5, ease: "power4.out", delay: 0.6 });
        gsap.from(".img-fluid", { opacity: 0, y: 50, duration: 1.5, ease: "power4.out", delay: 0.9 });
        gsap.from(".service-card", { opacity: 0, y: 50, stagger: 0.3, duration: 1, ease: "power2.out" });
    </script>
</div>


<?php get_footer(); ?>
