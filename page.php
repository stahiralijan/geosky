<?php get_header(); ?>

<div class="container mx-auto my-8 max-w-7xl">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class("bg-white shadow-lg rounded-lg overflow-hidden"); ?>>
                <!-- Page Title -->
                <header class="p-6 bg-blue-600 text-white">
                    <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
                </header>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full object-cover">
                    </div>
                <?php endif; ?>

                <!-- Page Content -->
                <div class="p-6">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else : ?>
        <p class="text-center text-gray-600">Sorry, no pages matched your criteria.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>