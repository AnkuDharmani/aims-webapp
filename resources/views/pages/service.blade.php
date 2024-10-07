@include('layouts.header')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-white display-3">Service</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Service</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
            <h1 class="mb-4">Best Logistic Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-3 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    {{-- <i class="fa fa-2x fa-truck text-dark pr-3"></i> --}}
                    <h6 class="text-white font-weight-medium m-0" style="font-size:larger">Dedicated Last-Mile Delivery
                    </h6>
                </div>
                <p>We provide specialized last-mile delivery services, ensuring your goods reach their final destination
                    efficiently and on time.</p>
                {{-- <a class="border-bottom text-decoration-none" href="">Read More</a> --}}
            </div>

            <div class="col-lg-3 col-md-3 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    {{-- <i class="fa fa-2x fa-truck text-dark pr-3"></i> --}}
                    <h6 class="text-white font-weight-medium m-0" style="font-size:larger">Customizable Fleet Services
                    </h6>
                </div>
                <p>We offer a diverse range of fleet options to accommodate varying demand levels and specific product
                    requirements. </p>
                {{-- <a class="border-bottom text-decoration-none" href="">Read More</a> --}}
            </div>

            <div class="col-lg-3 col-md-3 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    {{-- <i class="fa fa-2x fa-truck text-dark pr-3"></i> --}}
                    <h6 class="text-white font-weight-larger m-0" style="font-size:larger">Customer-Centric Approach
                    </h6>
                </div>
                <p>At Aims Alberta Logistics, we prioritize customer satisfaction. Our team goes the extra mile to
                    ensure a seamless delivery experience. </p>
                {{-- <a class="border-bottom text-decoration-none" href="">Read More</a> --}}
            </div>
            <div class="col-lg-3 col-md-3 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    {{-- <i class="fa fa-2x fa-truck text-dark pr-3"></i> --}}
                    <h6 class="text-white font-weight-medium m-0" style="font-size:larger">Advanced Route Optimization
                    </h6>
                </div>
                <p>Our logistics experts use cutting-edge technology to plan and optimize delivery routes. </p>
                {{-- <a class="border-bottom text-decoration-none" href="">Read More</a> --}}
            </div>

        </div>
    </div>
</div>
<!-- Services End -->


<!--  Quote Request Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 py-5 pt-py-lg-0 px-5">
                <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                <h1 class="mb-4">Start Your Journey with a Free Quote</h1>
                <p class="mb-4">Ready to take your shipping to new heights? Our free quote process is your first step
                    towards logistics mastery. Send us your details, and we’ll offer a tailored quote, absolutely free.
                    No commitment—just exceptional service and fair pricing.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">25</h1>
                        <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">100</h1>
                        <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">250</h1>
                        <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-5">
                <div class="bg-primary py-5 px-4 px-sm-5">
                    <form class="py-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                required="required" />
                        </div>
                        <div class="form-group">
                            <select class="custom-select border-0 px-4" style="height: 47px;">
                                <option selected>Select A Service</option>
                                <option value="1">Service 1</option>
                                <option value="2">Service 1</option>
                                <option value="3">Service 1</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Quote Request Start -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
            <h1 class="mb-4">Hear From Our Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Emily Bernier</h6>
                        {{-- <small>- Profession</small> --}}
                    </div>
                </div>
                <p class="m-0">Aims Alberta Logistics exceeded my expectations with their fast and reliable service!
                </p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Liam Brown</h6>
                        {{-- <small>- Profession</small> --}}
                    </div>
                </div>
                <p class="m-0">Their team handled everything with care and professionalism. Highly recommend!</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Sophie Davis</h6>
                        {{-- <small>- Profession</small> --}}
                    </div>
                </div>
                <p class="m-0">Efficient service and great communication. Will definitely approach them again!</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Noah Allen</h6>
                        {{-- <small>- Profession</small> --}}
                    </div>
                </div>
                <p class="m-0">Top-notch logistics support, always on time and dependable!</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


@include('layouts.footer')
