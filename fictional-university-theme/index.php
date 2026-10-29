
<?php get_header(); ?>

<main class="container py-5">

    <h1>Available Jobs</h1>

    <p>index.php</p>

    <?php if (have_posts()) : ?>

        <div class="jobs-list">

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

                <article class="job-item mb-4 pb-4 border-bottom">

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

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

                    <div>
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>">
                        View Job Details
                    </a>

                </article>

            <?php endwhile; ?>

        </div>

        <?php the_posts_pagination(); ?>

    <?php else : ?>

        <p>No job postings are currently available.</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
