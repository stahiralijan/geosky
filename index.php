<?php get_header(); ?>

<!-- Hero Section -->
<section class="bg-gray-200 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold">Welcome to <?php bloginfo('name'); ?></h2>
        <p class="mt-4 text-lg">Leading the way in space research and technology.</p>
        <a href="#" class="mt-6 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Learn More</a>
    </div>
</section>

<!-- Services Section -->
<section class="py-16">
    <div class="container mx-auto">
        <h3 class="text-3xl font-bold text-center">Our Services</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h4 class="text-xl font-semibold">Satellite Launching</h4>
                <p class="mt-2">We provide satellite launching services to support various sectors.</p>
            </div>
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h4 class="text-xl font-semibold">Research & Development</h4>
                <p class="mt-2">Our R&D department works tirelessly to innovate space technologies.</p>
            </div>
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h4 class="text-xl font-semibold">Training Programs</h4>
                <p class="mt-2">We offer training programs for future space scientists and engineers.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>