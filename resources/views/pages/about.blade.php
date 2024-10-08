@include('layouts.header')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-white display-3">About</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">About</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="img/1.jpg" alt="">
                <div class="bg-primary text-dark text-center p-4">
                    <h3 class="m-0">Bettter delivery experience with us.</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                <p class="mb-4">At Aims Alberta Logistics, we specialize in providing efficient and reliable logistics
                    solutions tailored to meet the unique needs of our clients. With years of experience in the
                    industry, our dedicated team is committed to ensuring timely deliveries, streamlined operations, and
                    exceptional customer service</p>
                <p class="mb-4">We utilize advanced technology and a robust network to optimize your supply chain,
                    making transportation and warehousing seamless. Whether you're a small business or a large
                    corporation, we pride ourselves on delivering innovative solutions that drive your success.
                </p>
                <p>
                    Join us on the journey to enhance your logistics experience. Your satisfaction is our priority!</p>
            </div>
        </div>
    </div>
    <!-- Video Modal -->
    {{-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid bg-secondary my-5 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/1.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Why Choose Us</h6>
                <h1 class="mb-4">Reliable, Fast, and Trusted Logistics Partners</h1>
                <p class="mb-4">With a focus on providing top-quality, secure, and timely logistics services, we
                    ensure that your shipments are always handled with precision. Our commitment to reliability and
                    customer satisfaction makes us a trusted partner for all your logistics needs.</p>
                <ul class="list-inline">
                    <li>
                        <h6><i class="far fa-dot-circle text-primary mr-3"></i>Top Tier Service</h6>
                    <li>
                        <h6><i class="far fa-dot-circle text-primary mr-3"></i>Rapid Response Solutions</h6>
                    </li>
                    <li>
                        <h6><i class="far fa-dot-circle text-primary mr-3"></i>Round-the-Clock Assistance</h6>
                    </li>
                </ul>
                {{-- <a href="" class="btn btn-primary mt-3 py-2 px-4">Learn More</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Team Start -->
{{-- <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Delivery Team</h6>
            <h1 class="mb-4">Meet Our Delivery Team</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/drive1.png" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Antonio</h5>
                            <span>Team Member</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/drive2.png" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Johnson</h5>
                            <span>Team Member</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/drive3.png" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Smith</h5>
                            <span>Team Member</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/drive4.png" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Jimmy</h5>
                            <span>Team Member</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->


@include('layouts.footer')
