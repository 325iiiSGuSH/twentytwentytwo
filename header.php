<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-MkX8Bx4hO7pEJ+2tVYgYDApfmK77E1xWDFRSxOOG30QgU38ZGoYXNBLf9Bph6K5JlbEytnxFZwl7JUXsLwBfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- GSAP -->
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

<header class="custom-header py-3">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewer-png-output.png" alt="Logo" class="h-12">
            </a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="<?php echo esc_url(home_url('/homepage')); ?>" class="text-white hover:text-yellow-400 nav-link">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-white hover:text-yellow-400 nav-link">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/cloud-security')); ?>" class="text-white hover:text-yellow-400 nav-link">Cloud Security</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news-and-insights')); ?>" class="text-white hover:text-yellow-400 nav-link">News</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="text-white hover:text-yellow-400 nav-link">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
