<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=YOUR-FONT-NAME:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-MkX8Bx4hO7pEJ+2tVYgYDApfmK77E1xWDFRSxOOG30QgU38ZGoYXNBLf9Bph6K5JlbEytnxFZwl7JUXsLwBfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- GSAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-...your-integrity-hash..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
    <style>
        body {
            background-color: #1B262F; /* Background for the whole body */
            color: #ffffff; /* Ensure text is readable */
        }
        .card-body {
            background-color: #1a1a1a;
            color: #e0e0e0;
            border-radius: 0 0 12px 12px;
        }
        .custom-header {
            background-color: #1B262F; /* Background for the navigation */
        }
        .nav-link {
            text-decoration: none;
            color: #ffffff; /* White text for nav links */
        }
        .nav-link:hover {
            text-decoration: underline;
            color: #F4D03F; /* Yellow hover effect */
        }
        .rounded-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .rounded-card:hover {
            transform: scale(105); /* Scale on hover */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5); /* Shadow on hover */
        }
        .rounded-img {
            border-radius: 12px 12px 0 0;
        }
        .custom-footer {
            background-color: #1B262F;
            padding: 20px 0;
            color: #1A7FA8;
        }
    </style>
</head>

<body <?php body_class(); ?>>

<header class="custom-header py-5 bg-gray-900 shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output.png" alt="Logo" class="h-12">
            </a>
           
            <nav>
                <ul class="flex justify-center space-x-6">
                    <li><a href="<?php echo esc_url(home_url('/homepage')); ?>" class="text-white hover:text-yellow-400 nav-link transition-transform duration-300">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-white hover:text-yellow-400 nav-link transition-transform duration-300">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/cloud-security')); ?>" class="text-white hover:text-yellow-400 nav-link transition-transform duration-300">Cloud Security</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news-and-insights')); ?>" class="text-white hover:text-yellow-400 nav-link transition-transform duration-300">News</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="text-white hover:text-yellow-400 nav-link transition-transform duration-300">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- GSAP Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        gsap.from('.nav-link', { 
            duration: 1, 
            opacity: 0, 
            y: 2, 
            stagger: 0.2, 
            ease: 'power2.out' 
        });
    });
</script>

<!-- Tailwind Pulse Animation -->
<style>
    .nav-link {
        animation: pulse-random 2s infinite;
    }
    @keyframes pulse-random {
        0% {
            text-shadow: 0 0 0 rgba(255, 255, 255, 0);
        }
        50% {
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
        }
        100% {
            text-shadow: 0 0 0 rgba(255, 255, 255, 0);
        }
    }
</style>



