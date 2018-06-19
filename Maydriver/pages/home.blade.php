@extends(_get_frontend_layout_path('frontend'))

@section('content')

    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded my-5" src="{{ asset('images/frontend/sirbasil/intro.png') }}" alt="Info Image">
                </div>
                <div class="col-lg-6 text-center my-auto">
                    <h2>Hi, Welcome to Sir Basil</h2>
                    <hr class="colored">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam asperiores at cum dolor dolore, eaque fuga, fugit illum laboriosam mollitia quisquam repudiandae rerum sequi soluta suscipit vel velit vero.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus, dolorem dolores, ducimus, impedit inventore labore nemo perferendis porro possimus quam quas reprehenderit veritatis. Ab accusamus amet expedita hic maxime!</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="call-to-action" style="background-image: url('images/frontend/sirbasil/assets/backgrounds/bg-quote.jpg');">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <span class="quote">Something about our special room</span>
                    <hr class="colored">
                    <a class="btn btn-primary js-scroll-trigger" href="#people">View More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Gallery -->
    <section class="page-section" id="menu">
        <div class="container wow fadeIn">
            <div class="text-center">
                <h2>Menu</h2>
                <hr class="colored">
                <p>Here is a selection of items from our menu. Please call for additional details.</p>
            </div>
            <div class="portfolio-gallery">
                <div class="item">
                    <a href="{{ asset('images/frontend/sirbasil/assets/menu/1.jpg') }}" class="gallery-link" title="Czech Honey Cake">
                        <img src="{{ asset('images/frontend/sirbasil/assets/menu/1.jpg') }}" class="img-fluid mx-auto" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ asset('images/frontend/sirbasil/assets/menu/2.jpg') }}" class="gallery-link" title="Mini Croissants">
                        <img src="{{ asset('images/frontend/sirbasil/assets/menu/2.jpg') }}" class="img-fluid mx-auto" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ asset('images/frontend/sirbasil/assets/menu/3.jpg') }}" class="gallery-link" title="Gourmet Sweet Cakes">
                        <img src="{{ asset('images/frontend/sirbasil/assets/menu/3.jpg') }}" class="img-fluid mx-auto" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ asset('images/frontend/sirbasil/assets/menu/4.jpg') }}" class="gallery-link" title="Traditional Honey Cake">
                        <img src="{{ asset('images/frontend/sirbasil/assets/menu/4.jpg') }}" class="img-fluid mx-auto" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ asset('images/frontend/sirbasil/assets/menu/5.jpg') }}" class="gallery-link" title="Rosemary Breadsticks and Salami Rolls">
                        <img src="{{ asset('images/frontend/sirbasil/assets/menu/5.jpg') }}" class="img-fluid mx-auto" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ asset('images/frontend/sirbasil/assets/menu/6.jpg') }}" class="gallery-link" title="Mini Croissants">
                        <img src="{{ asset('images/frontend/sirbasil/assets/menu/6.jpg') }}" class="img-fluid mx-auto" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hours Section - Repurposed from Pricing Table -->
    <section class="page-section pricing" id="hours" style="background-image: url('images/frontend/sirbasil/assets/backgrounds/bg-pricing.jpg')">
        <div class="container wow fadeIn">
            <div class="text-center">
                <h2>Hours</h2>
                <hr class="colored">
                <p>We serve breakfast, lunch, and dinner every day of the week.</p>
            </div>
            <div class="row">
                <!-- Pricing Table 1 -->
                <div class="col-md-4">
                    <div class="pricing-item">
                        <h3>Breakfast</h3>
                        <hr class="colored">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Mon - Thu: 7am - 11am
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Fri: 7am - 12pm
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Sat: 7am - 3pm
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Sun: All Day
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 2 -->
                <div class="col-md-4">
                    <div class="pricing-item">
                        <h3>Lunch</h3>
                        <hr class="colored">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Mon - Thu: 7am - 11am
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Fri: 7am - 12pm
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Sat: 7am - 3pm
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Sun: All Day
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 3 -->
                <div class="col-md-4">
                    <div class="pricing-item">
                        <h3>Dinner</h3>
                        <hr class="colored">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Mon - Thu: 7am - 11am
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Fri: 7am - 12pm
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Sat: 7am - 3pm
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="w-100 text-center font-italic">
                                    Sun: All Day
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Press Section -->
    <section class="page-section testimonials" id="press">
        <div class="container wow fadeIn">
            <h2>Testimonials</h2>
            <hr class="colored">
            <p class="mb-4">Here's what the critics are saying.</p>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="testimonials-carousel">
                        <!-- Testimonial Item 1 -->
                        <div class="item mb-4">
                            <p class="lead">"A unique blend of flavors at this restaurant made for an unforgettable culinary adventure."</p>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, temporibus, laborum, dignissimos doloremque corporis alias nostrum recusandae culpa id quisquam harum impedit sed sunt non obcaecati vero ipsam aut fugit?</p>
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="{{ asset('images/frontend/sirbasil/assets/testimonials/1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Jim Walker</span>
                                <p class="small">Food Critic</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item 2 -->
                        <div class="item mb-4">
                            <p class="lead">"Some of the best food I ever tasted came from the head chef."</p>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem amet rem minus dolorum, facere in soluta explicabo, unde eveniet illo vel, nemo nostrum atque nesciunt facilis quaerat quasi reprehenderit dicta.</p>
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="{{ asset('images/frontend/sirbasil/assets/testimonials/2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Ashley Creadle</span>
                                <p class="small">Writer at Cuisine World</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection