<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Here's my contact and address:</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p><?php echo isset($profile['city']) ? str_replace(', Indonesia', '', $profile['city']) : 'Banjaranyar, Nganjuk, East Java'; ?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p><?php echo isset($profile['phone']) ? $profile['phone'] : '+62 838 9491 8883'; ?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>My Email</h3 |The current date and time is 12:47 PM WIB on Thursday, May 15, 2025.>
                            <p><?php echo isset($profile['email']) ? $profile['email'] : 'sartareza51@gmail.com'; ?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d988.6064038178114!2d111.9913682015948!3d-7.637294109915588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1747276596445!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="<?php echo base_url('portfolio/send_message'); ?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Your Name</label>
                            <input type="text" name="name" id="name-field" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email-field" required>
                        </div>

                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required>
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section><!-- /Contact Section -->