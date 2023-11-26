@extends('layout')

@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-Frontend">Frontend</li>
                        <li data-filter=".filter-Backend">Backend</li>
                        <li data-filter=".filter-FullStack">FullStack</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item filter-Frontend">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-Backend">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-FullStack">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
