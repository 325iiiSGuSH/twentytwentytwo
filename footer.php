<footer class="custom-footer">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="text-left animate-pulse">
            <p>Flint Studio</p>
        </div>
        <div class="text-right animate-pulse">
            <p>Kernel Afrika © 2023 Copyright Reserved</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    // GSAP animations
    gsap.from(".bg-gray-800", { opacity: 0, y: 50, stagger: 0.2, duration: 1 });
    gsap.from("header", { opacity: 0, y: -50, duration: 1 });
    gsap.from("h1", { opacity: 0, y: -50, duration: 1, delay: 0.5 });
</script>

</body>
</html>
