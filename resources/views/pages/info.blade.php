@extends('layout.master')
@section('content')
    <section class="d-flex justify-content-center align-items-center">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('./assets/img/Medicines-img/paracetemol/istockphoto-1022216070-612x612.jpeg') }}"
                        class="img-fuild" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/events-1.jpg" alt="...">
                        </div>
                        <div class="card-body">

                            <p class="card-text">1. About paracetamol for adults

                                Paracetamol is a common painkiller
                                used to treat aches and pain. It can
                                also be used to reduce a high
                                temperature.
                                <br />
                                It's available combined with other
                                painkillers and anti-sickness
                                medicines. It's also an ingredient in a
                                wide range of cold and flu remedies.
                            </p>
                            <p class="card-text">
                                2. Key fact|
                                x Paracetamol takes up to an hour to work
                                x The usual dose of paracetamol is one or two 500mg tablets at
                                a time
                                x Do not take paracetamol with other medicines containing
                                paracetamol
                                x Paracetamol is safe to take in pregnancy and while
                                breastfeeding, at recommended doses
                                x yrand names include Disprol, Hedex, Medinol and Panadol.
                                <br />
                                <br />
                                03 Precautiona

                                In the following situations, it is not advised. 
                                
                                x You're expecting a child or are nursing a baby. This is because
                                you should only take the prescription if your doctor
                                recommends it when you are pregnant or breastfeeding. 
                                x You have major issues with the way your liver functions, or you
                                regularly consume large amounts of alcohol. 
                                x Your doctor has recommended medication for you. 
                                x A drug has caused you to experience an allergic response.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======= pharmist Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h2>Reviews by Famous Pharmacists</h2>
            </div>

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p1.webp') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus.
                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                    semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p2.jpg') }}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis
                                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p3.jpg') }}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p4.jpg') }}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End pharmist Section -->
@endsection
