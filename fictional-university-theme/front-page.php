<?php get_header(); ?>

<main class="site-main">
    <!-- Showcase featured properties -->
    <section class="bg-dark text-light p-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Our Featured Listing</h2>

            <div class="row g-4">
            <!-- Property 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 rounded-0 shadow h-100">
                <!-- Property Image -->
                <div class="position-relative">
                    <img
                    src="<?php echo get_theme_file_uri('/images/property-modern-living-room.avif'); ?>"
                    class="card-img-top rounded-0 w-100"
                    style="height: 250px; object-fit: cover"
                    alt="Modern living room"
                    />

                    <!-- Price Overlay -->
                    <div
                    class="position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center p-3 text-white card-background-overlay"
                    >
                    <span class="fw-bold fs-5">£1,600 PCM</span>
                    <span class="badge rounded-pill bg-danger px-3 py-2 fw-normal">Let Agreed</span>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="card-title fs-6 fw-semibold mb-5">
                        17 Carter Villas, Brockenhurst
                    </h3>

                    <p class="fs-14 text-secondary mb-2 amenities">
                        <span class="pe-1">2 Bedrooms</span>
                        <span class="pe-1">0 Bathrooms</span>
                        <span>Other</span>
                    </p>

                    <hr class="border-warning border-1 opacity-75" />

                    <div class="d-flex justify-content-between align-items-center mt-auto">
                    <button
                        class="btn rounded-circle p-0 d-flex justify-content-center align-items-center"
                        style="width: 32px; height: 32px; --bs-btn-bg: #6f42c1; --bs-btn-hover-bg: #553492; --bs-btn-color: #fff; --bs-btn-hover-color: #fff;"
                        aria-label="Add to favorites"
                    >
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <span class="fs-12 text-secondary">
                        <i class="fa-regular fa-calendar me-1"></i>
                        Available: Now
                    </span>
                    </div>
                </div>
                </div>
            </div>

            <!-- Property 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 rounded-0 shadow h-100">
                <!-- Property Image -->
                <div class="position-relative">
                    <img
                    src="<?php echo get_theme_file_uri('/images/property-relaxing-bedroom.avif'); ?>"
                    class="card-img-top rounded-0 w-100"
                    style="height: 250px; object-fit: cover"
                    alt="Relaxing masters bedroom"
                    />

                    <!-- Price Overlay -->
                    <div
                    class="position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center p-3 text-white card-background-overlay"
                    >
                    <span class="fw-bold fs-5">£1,400 PCM</span>
                    <span class="badge rounded-pill bg-warning px-3 py-2 fw-normal">To Let</span>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="card-title fs-6 fw-semibold mb-5">
                        56 Dumpton Cross, Exeter
                    </h3>

                    <p class="fs-14 text-secondary mb-2 amenities">
                        <span class="pe-1">4 Bedrooms</span>
                        <span class="pe-1">4 Bathrooms</span>
                        <span>House</span>
                    </p>

                    <hr class="border-warning border-1 opacity-75" />

                    <div class="d-flex justify-content-between align-items-center mt-auto">
                    <button
                        class="btn rounded-circle p-0 d-flex justify-content-center align-items-center"
                        style="width: 32px; height: 32px; --bs-btn-bg: #6f42c1; --bs-btn-hover-bg: #553492; --bs-btn-color: #fff; --bs-btn-hover-color: #fff;"
                        aria-label="Add to favorites"
                    >
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <span class="fs-12 text-secondary">
                        <i class="fa-regular fa-calendar me-1"></i>
                        Available: November 6, 2022
                    </span>
                    </div>
                </div>
                </div>
            </div>

            <!-- Property 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 rounded-0 shadow h-100">
                <!-- Property Image -->
                <div class="position-relative">
                    <img
                    src="<?php echo get_theme_file_uri('/images/property-moder-white-house.avif'); ?>"
                    class="card-img-top rounded-0 w-100"
                    style="height: 250px; object-fit: cover"
                    alt="Modern house with outdoor pool"
                    />

                    <!-- Price Overlay -->
                    <div
                    class="position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center p-3 text-white card-background-overlay"
                    >
                    <span class="fw-bold fs-5">£290,000</span>
                    <span class="badge rounded-pill bg-warning px-3 py-2 fw-normal">For Sale</span>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="card-title fs-6 fw-semibold mb-5">
                        118 Kingsdale Ford, Sherborne
                    </h3>

                    <p class="fs-14 text-secondary mb-2 amenities">
                        <span class="pe-1">5 Bedrooms</span>
                        <span class="pe-1">1 Bathrooms</span>
                        <span>House</span>
                    </p>

                    <hr class="border-warning border-1 opacity-75" />

                    <div class="d-flex justify-content-between align-items-center mt-auto">
                    <button
                        class="btn rounded-circle p-0 d-flex justify-content-center align-items-center"
                        style="width: 32px; height: 32px; --bs-btn-bg: #6f42c1; --bs-btn-hover-bg: #553492; --bs-btn-color: #fff; --bs-btn-hover-color: #fff;"
                        aria-label="Add to favorites"
                    >
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <span class="fs-12 text-secondary">
                        <i class="fa-regular fa-calendar me-1"></i>
                        Available: For Sale
                    </span>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>