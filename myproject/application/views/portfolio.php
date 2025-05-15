<section id="portfolio" class="portfolio section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Personal Project</h2>
        <p>Explain what project you ever worked with for example like Scikit-Learn what's on the project what the objective etc.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Scikit-Learn</li>
                <li data-filter=".filter-product">Keras</li>
                <li data-filter=".filter-branding">TensorFlow</li>
                <li data-filter=".filter-books">Python</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <?php if (!empty($projects)): ?>
                    <?php foreach ($projects as $project): ?>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo strtolower($project['category']); ?>">
                            <div class="portfolio-content h-100">
                                <img src="<?php echo base_url('assets/img/portfolio/' . $project['image']); ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?php echo $project['title']; ?></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?php echo base_url('assets/img/portfolio/' . $project['image']); ?>" title="<?php echo $project['title']; ?>" data-gallery="portfolio-gallery-<?php echo strtolower($project['category']); ?>" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No projects available.</p>
                <?php endif; ?>
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- /Portfolio Section -->