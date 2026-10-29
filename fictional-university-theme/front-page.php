<?php get_header(); ?>

<main class="site-main">
    <!-- Showcase featured properties -->
    <section class="bg-dark text-light p-5" id="featured-listing">
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

                    <div class="d-flex justify-content-between align-items-center mt-auto gap-2">
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

                    <div class="d-flex justify-content-between align-items-center mt-auto gap-2">
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

                    <div class="d-flex justify-content-between align-items-center mt-auto gap-2">
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

    <section class="py-5" id="google-reviews" style="background-color: #e3a008;">
    <div class="container">

    <!-- Google Reviews Heading -->
    <div class="text-center text-white mb-4">
      <h2 class="fw-semibold mb-0"
          style="font-size: 4.5rem; letter-spacing: -2px;">Google
      </h2>

      <h3 class="fs-4 fw-semibold mb-0 d-flex justify-content-center align-items-center gap-2">
        Reviews
        <span class="d-flex justify-content-center align-items-center gap-1 pt-1">
          <i class="fa-solid fa-star fs-12"></i>
          <i class="fa-solid fa-star fs-12"></i>
          <i class="fa-solid fa-star fs-12"></i>
          <i class="fa-solid fa-star fs-12"></i>
          <i class="fa-solid fa-star fs-12"></i>
        </span>
      </h3>
    </div>


    <!-- ===================================== -->
    <!-- DESKTOP CAROUSEL: 3 REVIEWS PER SLIDE -->
    <!-- Visible on screens 768px and wider -->
    <!-- ===================================== -->

    <div id="desktopReviews"
         class="carousel slide d-none d-md-block"
         data-bs-ride="false">

      <div class="carousel-inner">

        <!-- Desktop Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4">

            <!-- Review 1 -->
            <div class="col-md-4">
              <div class="h-100">
                <div class="bg-dark text-white text-center p-3 review-card position-relative">
                  <div class="text-warning mb-2">
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                  </div>
                  <p class="small mb-0 lh-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quisque aliquam cursus nulla. Morbi aliquet
                    accumsan est et mollis. Nunc in quam orci.
                  </p>
                </div>
                <div class="text-dark small px-3 py-1">
                  <i class="fa-brands fa-google me-1"></i>
                  Phil Mitchell
                </div>
              </div>
            </div>

            <!-- Review 2 -->
            <div class="col-md-4">
              <div class="h-100">
                <div class="bg-dark text-white text-center p-3 review-card position-relative">
                  <div class="text-warning mb-2">
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                  </div>
                  <p class="small mb-0 lh-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quisque aliquam cursus nulla. Morbi aliquet
                    accumsan est et mollis. Nunc in quam orci.
                  </p>
                </div>
                <div class="text-dark small px-3 py-1">
                  <i class="fa-brands fa-google me-1"></i>
                  Karl Pilkington
                </div>
              </div>
            </div>

            <!-- Review 3 -->
        <div class="col-md-4">
              <div class="h-100">
                <div class="bg-dark text-white text-center p-3 review-card position-relative">
                  <div class="text-warning mb-2">
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                  </div>
                  <p class="small mb-0 lh-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quisque aliquam cursus nulla. Morbi aliquet
                    accumsan est et mollis. Nunc in quam orci.
                  </p>
                </div>
                <div class="text-dark small px-3 py-1">
                  <i class="fa-brands fa-google me-1"></i>
                  Simon Pegg
                </div>
              </div>
            </div>

          </div>
        </div>


        <!-- Desktop Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4">

            <!-- Review 4 -->
        <div class="col-md-4">
              <div class="h-100">
                <div class="bg-dark text-white text-center p-3 review-card position-relative">
                  <div class="text-warning mb-2">
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                  </div>
                  <p class="small mb-0 lh-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quisque aliquam cursus nulla. Morbi aliquet
                    accumsan est et mollis. Nunc in quam orci.
                  </p>
                </div>
                <div class="text-dark small px-3 py-1">
                  <i class="fa-brands fa-google me-1"></i>
                  Alex Morgan
                </div>
              </div>
            </div>

            <!-- Review 5 -->
        <div class="col-md-4">
              <div class="h-100">
                <div class="bg-dark text-white text-center p-3 review-card position-relative">
                  <div class="text-warning mb-2">
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                  </div>
                  <p class="small mb-0 lh-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quisque aliquam cursus nulla. Morbi aliquet
                    accumsan est et mollis. Nunc in quam orci.
                  </p>
                </div>
                <div class="text-dark small px-3 py-1">
                  <i class="fa-brands fa-google me-1"></i>
                  Jamie Taylor
                </div>
              </div>
            </div>

            <!-- Review 6 -->
        <div class="col-md-4">
              <div class="h-100">
                <div class="bg-dark text-white text-center p-3 review-card position-relative">
                  <div class="text-warning mb-2">
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                    <i class="fa-solid fa-star fs-12"></i>
                  </div>
                  <p class="small mb-0 lh-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quisque aliquam cursus nulla. Morbi aliquet
                    accumsan est et mollis. Nunc in quam orci.
                  </p>
                </div>
                <div class="text-dark small px-3 py-1">
                  <i class="fa-brands fa-google me-1"></i>
                  Casey Williams
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Desktop Indicators -->
      <div class="carousel-indicators position-relative mt-4 mb-0">
        <button type="button"
                data-bs-target="#desktopReviews"
                data-bs-slide-to="0"
                class="active position-relative bg-dark"
                aria-current="true"
                aria-label="Desktop reviews 1 to 3"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>

        <button type="button"
                data-bs-target="#desktopReviews"
                class="position-relative bg-dark"
                data-bs-slide-to="1"
                aria-label="Desktop reviews 4 to 6"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>
      </div>

      <!-- Desktop Controls -->
      <button class="carousel-control-prev"
              type="button"
              data-bs-target="#desktopReviews"
              data-bs-slide="prev"
              aria-label="Previous reviews"
              style="width: 5%;">
        <span class="carousel-control-prev-icon rounded-circle"></span>
      </button>

      <button class="carousel-control-next"
              type="button"
              data-bs-target="#desktopReviews"
              data-bs-slide="next"
              aria-label="Next reviews"
              style="width: 5%;">
        <span class="carousel-control-next-icon rounded-circle"></span>
      </button>

    </div>


    <!-- ===================================== -->
    <!-- MOBILE CAROUSEL: 1 REVIEW PER SLIDE -->
    <!-- Visible on screens smaller than 768px -->
    <!-- ===================================== -->

    <div id="mobileReviews"
         class="carousel slide d-md-none"
         data-bs-ride="false">

      <div class="carousel-inner">

        <!-- Mobile Review 1 -->
        <div class="carousel-item active">
          <div class="px-4">
            <div class="bg-dark text-white text-center p-4 review-card position-relative">
              <div class="text-warning mb-3">
                <i class="fa-solid fa-star fs-12"></i>
                <i class="fa-solid fa-star fs-12"></i>
                <i class="fa-solid fa-star fs-12"></i>
                <i class="fa-solid fa-star fs-12"></i>
                <i class="fa-solid fa-star fs-12"></i>
              </div>
              <p class="small mb-0 lh-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Quisque aliquam cursus nulla. Morbi aliquet
                accumsan est et mollis. Nunc in quam orci.
              </p>
            </div>
            <div class="text-dark small px-3 py-2">
              <i class="fa-brands fa-google me-1"></i>
              Phil Mitchell
            </div>
          </div>
        </div>

        <!-- Mobile Review 2 -->
        <div class="carousel-item">
          <div class="px-4">
            <div class="bg-dark text-white text-center p-4 review-card position-relative">
              <div class="text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="small mb-0 lh-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Quisque aliquam cursus nulla. Morbi aliquet
                accumsan est et mollis. Nunc in quam orci.
              </p>
            </div>
            <div class="text-dark small px-3 py-2">
              <i class="fa-brands fa-google me-1"></i>
              Karl Pilkington
            </div>
          </div>
        </div>

        <!-- Mobile Review 3 -->
        <div class="carousel-item">
          <div class="px-4">
            <div class="bg-dark text-white text-center p-4 review-card position-relative">
              <div class="text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="small mb-0 lh-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Quisque aliquam cursus nulla. Morbi aliquet
                accumsan est et mollis. Nunc in quam orci.
              </p>
            </div>
            <div class="text-dark small px-3 py-2">
              <i class="fa-brands fa-google me-1"></i>
              Simon Pegg
            </div>
          </div>
        </div>

        <!-- Mobile Review 4 -->
        <div class="carousel-item">
          <div class="px-4">
            <div class="bg-dark text-white text-center p-4 review-card position-relative">
              <div class="text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="small mb-0 lh-lg">
                Excellent service from start to finish.
                The team was friendly, professional, and
                helpful throughout the entire process.
              </p>
            </div>
            <div class="text-dark small px-3 py-2">
              <i class="fa-brands fa-google me-1"></i>
              Alex Morgan
            </div>
          </div>
        </div>

        <!-- Mobile Review 5 -->
        <div class="carousel-item">
          <div class="px-4">
            <div class="bg-dark text-white text-center p-4 review-card position-relative">
              <div class="text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="small mb-0 lh-lg">
                Great experience and excellent communication.
                Everything was handled efficiently, and
                I would happily recommend this service.
              </p>
            </div>
            <div class="text-dark small px-3 py-2">
              <i class="fa-brands fa-google me-1"></i>
              Jamie Taylor
            </div>
          </div>
        </div>

        <!-- Mobile Review 6 -->
        <div class="carousel-item">
          <div class="px-4">
            <div class="bg-dark text-white text-center p-4 review-card position-relative">
              <div class="text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="small mb-0 lh-lg">
                Very satisfied with the overall experience.
                Professional service, quick responses,
                and a smooth process from beginning to end.
              </p>
            </div>
            <div class="text-dark small px-3 py-2">
              <i class="fa-brands fa-google me-1"></i>
              Casey Williams
            </div>
          </div>
        </div>

      </div>

      <!-- Mobile Indicators -->
      <div class="carousel-indicators position-relative mt-4 mb-0 d-md-none">
        <button type="button"
                data-bs-target="#mobileReviews"
                data-bs-slide-to="0"
                class="active bg-dark position-relative"
                aria-current="true"
                aria-label="Mobile review 1"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>

        <button type="button" data-bs-target="#mobileReviews"
                data-bs-slide-to="1" class="bg-dark"
                aria-label="Mobile review 2"
                class="position-relative bg-dark"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>

        <button type="button" data-bs-target="#mobileReviews"
                data-bs-slide-to="2" class="bg-dark"
                aria-label="Mobile review 3"
                class="position-relative bg-dark"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>

        <button type="button" data-bs-target="#mobileReviews"
                data-bs-slide-to="3" class="bg-dark"
                aria-label="Mobile review 4"
                class="position-relative bg-dark"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>

        <button type="button" data-bs-target="#mobileReviews"
                data-bs-slide-to="4" class="bg-dark"
                aria-label="Mobile review 5"
                class="position-relative bg-dark"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>

        <button type="button" data-bs-target="#mobileReviews"
                data-bs-slide-to="5" class="bg-dark"
                aria-label="Mobile review 6"
                class="position-relative bg-dark"
                style="width: 4px; height: 4px; border-radius: 50%;">
        </button>
      </div>

      <!-- Mobile Controls -->
      <button class="carousel-control-prev"
              type="button"
              data-bs-target="#mobileReviews"
              data-bs-slide="prev"
              aria-label="Previous review"
              style="width: 8%;">
        <span class="carousel-control-prev-icon rounded-circle"></span>
      </button>

      <button class="carousel-control-next"
              type="button"
              data-bs-target="#mobileReviews"
              data-bs-slide="next"
              aria-label="Next review"
              style="width: 8%;">
        <span class="carousel-control-next-icon rounded-circle"></span>
      </button>

    </div>

  </div>
    </section>
</main>

<?php get_footer(); ?>