<section id="resume" class="resume section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Summary</h3>
                <div class="resume-item pb-0">
                    <h4><?php echo isset($profile['name']) ? $profile['name'] : 'Muhammad Zubair Raihan'; ?></h4>
                    <p><em>Passionate Machine Learning Engineer with goals of making my own machine learning someday.</em></p>
                    <ul>
                        <li><?php echo isset($profile['city']) ? $profile['city'] : 'Nganjuk, East Java, Indonesia'; ?></li>
                        <li><?php echo isset($profile['phone']) ? $profile['phone'] : '+62 838 9491 8883'; ?></li>
                        <li><?php echo isset($profile['email']) ? $profile['email'] : 'sartareza51@gmail.com'; ?></li>
                    </ul>
                </div><!-- End Resume Item -->

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4>Multimedia Major</h4>
                    <h5>2018 - 2021</h5>
                    <p><em>SMKN 1 Tanjunganom, Nganjuk, East Java</em></p>
                    <p>Relevant subjects: Graphic Design, Photography and Videography, Audio and Video Processing.</p>
                </div><!-- End Resume Item -->

                <div class="resume-item">
                    <h4>Bachelor of System Information</h4>
                    <h5>2023 - 2027</h5>
                    <p><em>Universitas Nusantara PGRI Kediri</em></p>
                    <p>Relevant subjects: HTML, CSS, SQL, Python.</p>
                </div><!-- End Resume Item -->
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                    <h4>Job Title</h4>
                    <h5>Year</h5>
                    <p><em>Location</em></p>
                    <ul>
                        <li>Explain What Your Responsibility On That Job</li>
                        <!-- add other list items -->
                    </ul>
                </div><!-- End Resume Item -->
            </div>
        </div>
    </div>
</section><!-- /Resume Section -->