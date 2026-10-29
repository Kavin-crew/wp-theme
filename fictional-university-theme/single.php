
<?php get_header(); ?>

<main class="container py-5">

    <?php while (have_posts()) : the_post(); ?>

        <?php
        $salary = get_post_meta(
            get_the_ID(),
            '_job_salary',
            true
        );

        $location = get_post_meta(
            get_the_ID(),
            '_job_location',
            true
        );
        ?>

        <article class="single-job">

            <h1><?php the_title(); ?></h1>

            <div class="job-details mb-4 d-flex gap-2">

                <p>
                    <strong>Salary:</strong>
                    <?php
                    echo '' !== $salary
                        ? esc_html($salary)
                        : 'Not specified';
        ?>
                </p>

                <p>
                    <strong>Location:</strong>
                    <?php
        echo '' !== $location
            ? esc_html($location)
            : 'Not specified';
        ?>
                </p>

            </div>

            <div class="job-description">
                <?php the_content(); ?>
            </div>

            <p class="mt-4">
                <a href="<?php echo esc_url(get_post_type_archive_link('job')); ?>">
                    &larr; Back to All Jobs
                </a>
            </p>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
