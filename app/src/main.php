<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-6 col-md-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col col-md-auto top-buttons">
                    <div class="row justify-content-center justify-content-lg-end align-items-center gx-2 gx-md-3">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill px-md-5 fw-700 h3 phone-button">
                                <div class="d-none d-md-block"><?= $phone_number ?></div>
                                <div class="d-md-none">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.99988 4.03595C10.1699 4.03595 11.9287 5.79705 11.9287 7.9671" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.99988 1.43335C11.6072 1.43335 14.5313 4.35749 14.5313 7.96479" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.34553 1.95324C-0.670875 3.96964 0.529983 8.43976 4.02854 11.9383C7.52474 15.4369 11.9949 16.6354 14.0113 14.619C14.6212 14.0067 14.9001 12.6191 14.9001 12.6191C14.945 12.3898 14.8126 12.1345 14.6046 12.0518L10.9429 10.5885C10.7349 10.5058 10.4252 10.5744 10.2574 10.7446L9.19838 11.8036C8.99508 12.0069 8.70432 12.0565 8.47266 11.9525C8.45375 11.9431 8.43721 11.9336 8.41829 11.9241C8.4112 11.9194 8.40175 11.9147 8.39465 11.91C7.58857 11.4703 6.7352 10.832 5.93384 10.0283C5.13012 9.22694 4.49187 8.37357 4.05218 7.56749C4.04746 7.5604 4.04273 7.5533 4.04036 7.54621C4.03091 7.5273 4.02145 7.50839 4.012 7.49184C3.90799 7.26018 3.95763 6.96942 4.15856 6.76613L5.21995 5.70474C5.39015 5.5369 5.4587 5.22723 5.37596 5.01921L3.91271 1.3599C3.82998 1.15188 3.57468 1.0195 3.34538 1.06442C3.34538 1.06442 1.95777 1.34099 1.34553 1.95324Z" fill="white" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn border-white bordered rounded-pill">
                                <div class="px-2 px-md-4 fw-800 line-height-1 h5">Get <span class="d-none d-md-inline-block">Your Free</span> Quote</div>
                                <div class="arrow">
                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.97453 9.89947L1.39867 3.32361C0.86711 2.79205 0.867111 1.93023 1.39867 1.39867C1.93023 0.867111 2.79205 0.867111 3.32361 1.39867L10.7559 8.83098C10.7945 8.86198 10.8319 8.89539 10.8677 8.93122C11.1353 9.19885 11.2682 9.55021 11.2664 9.90098C11.2674 10.2507 11.1346 10.6008 10.8677 10.8677C10.8319 10.9035 10.7946 10.9369 10.756 10.9678L3.32362 18.4003C2.79206 18.9318 1.93024 18.9318 1.39868 18.4003C0.867124 17.8687 0.867124 17.0069 1.39868 16.4753L7.97453 9.89947Z" fill="#F26522" />
                                        <path d="M7.97453 9.89947L8.32808 10.253L8.68163 9.89947L8.32808 9.54591L7.97453 9.89947ZM1.39867 3.32361L1.75222 2.97005H1.75222L1.39867 3.32361ZM3.32361 1.39867L3.67716 1.04511L3.67716 1.04511L3.32361 1.39867ZM10.7559 8.83098L10.4024 9.18453L10.4217 9.20384L10.443 9.22094L10.7559 8.83098ZM10.8677 8.93122L10.5142 9.28477L10.5142 9.28478L10.8677 8.93122ZM11.2664 9.90098L10.7663 9.89832L10.7664 9.90253L11.2664 9.90098ZM10.756 10.9678L10.443 10.5779L10.4218 10.595L10.4025 10.6143L10.756 10.9678ZM3.32362 18.4003L2.97007 18.0467H2.97007L3.32362 18.4003ZM1.39868 18.4003L1.04513 18.7538L1.39868 18.4003ZM1.39868 16.4753L1.75223 16.8289H1.75223L1.39868 16.4753ZM8.32808 9.54591L1.75222 2.97005L1.04511 3.67716L7.62097 10.253L8.32808 9.54591ZM1.75222 2.97005C1.41593 2.63376 1.41593 2.08852 1.75222 1.75222L1.04512 1.04511C0.318296 1.77193 0.318295 2.95034 1.04511 3.67716L1.75222 2.97005ZM1.75222 1.75222C2.08852 1.41593 2.63376 1.41593 2.97006 1.75222L3.67716 1.04511C2.95034 0.318295 1.77194 0.318295 1.04512 1.04511L1.75222 1.75222ZM2.97006 1.75222L10.4024 9.18453L11.1095 8.47743L3.67716 1.04511L2.97006 1.75222ZM10.443 9.22094C10.4674 9.24057 10.4912 9.26184 10.5142 9.28477L11.2213 8.57767C11.1725 8.52895 11.1216 8.48338 11.0689 8.44102L10.443 9.22094ZM10.5142 9.28478C10.6836 9.45418 10.7675 9.6756 10.7664 9.89832L11.7664 9.90363C11.7689 9.42482 11.5871 8.94353 11.2213 8.57767L10.5142 9.28478ZM10.7664 9.90253C10.767 10.1246 10.6831 10.3452 10.5141 10.5141L11.2213 11.2212C11.586 10.8565 11.7678 10.3769 11.7664 9.89942L10.7664 9.90253ZM10.5141 10.5141C10.4912 10.5371 10.4675 10.5583 10.443 10.5779L11.069 11.3578C11.1218 11.3154 11.1726 11.2699 11.2213 11.2212L10.5141 10.5141ZM10.4025 10.6143L2.97007 18.0467L3.67717 18.7538L11.1096 11.3214L10.4025 10.6143ZM2.97007 18.0467C2.63377 18.383 2.08853 18.383 1.75223 18.0467L1.04513 18.7538C1.77195 19.4806 2.95035 19.4806 3.67718 18.7538L2.97007 18.0467ZM1.75223 18.0467C1.41594 17.7104 1.41594 17.1652 1.75223 16.8289L1.04513 16.1218C0.318308 16.8486 0.318308 18.027 1.04513 18.7538L1.75223 18.0467ZM1.75223 16.8289L8.32808 10.253L7.62097 9.54591L1.04513 16.1218L1.75223 16.8289Z" fill="#F26522" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6" data-aos="fade-left">
                    <h1 class="text-primary-gradient">Sydney's Leading Floor Polishing Company</h1>
                    <h3 class="py-3 font-articulat text-dark">Servicing Residential, Commercial & Industrial Services</h3>
                    <div class="row py-4 justify-content-center justify-content-md-start high-quality">
                        <div class="col-5 col-md-6 col-xl-5">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <?= renderImg("highest-quality-mobile.png", "lib", "d-md-none") ?>
                                    <?= renderImg("highest-quality.png", "lib", "d-none d-md-block") ?>
                                </div>
                                <div class="col-12 col-md">
                                    <h3 class="letter-spacing-035 fw-600 text-uppercase text-black py-2 py-md-4 text-center text-md-start">The Best Machines</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-md-6 col-xl-5">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <?= renderImg("highest-quality-mobile.png", "lib", "d-md-none") ?>
                                    <?= renderImg("highest-quality.png", "lib", "d-none d-md-block") ?>
                                </div>
                                <div class="col-12 col-md">
                                    <h3 class="letter-spacing-035 fw-600 text-uppercase text-black py-2 py-md-4 text-center text-md-start">Top Quality Service</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about">
    <div class="about-circle-1"><?= renderImg("about-circle-1.png", "lib") ?></div>
    <div class="about-circle-2"><?= renderImg("about-circle-2.png", "lib") ?></div>
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-7">
                <h1 class="text-primary text-center pb-3">You won't find this kind of quality anywhere else.</h1>
            </div>
            <div class="col-12 col-lg-7 font-articulat text-center">
                <h5 class="py-4 line-height-3">Excel Floor Polishing Pty Ltd uses high end floor polishing products and machinery to insure great and desirable results. We use Klindex Machines, Accessories & products which are ideal for the professional working in the flooring industry that regularly works on large projects and can even work comfortably in smaller areas for the optimum results. Our Professional machines delivers superior capabilities to polish marble, granite, terrazzo and concrete. Available to handle all types of flooring, from grinding, polishing to floor preparation.</h5>
                <h5 class="line-height-3">We are dedicated to making sure our customers receive the best products, the most cutting-edge technologies, superior prices, and exceptional customer service that exceeds their expectations. Everything we offer, from our free professional consultations to our flexible schedule is meant to show our commitment and dedication to our customers.</h5>
            </div>
        </div>
        <div class="text-center pt-5">
            <a href="#services" class="btn">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="font-articulat text-primary fw-800 h5">See our services</div>
                    <div class="ps-3"><?= renderImg("arrow-down.png", "icons") ?></div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="container-fluid pe-xxl-0">
        <div class="row justify-content-end">
            <div class="col-12 col-xxl-11">
                <div class="service-nav-slider">
                    <div class="service-nav" d-service="0">
                        Concrete Polishing
                        <div class="reflection">Concrete Polishing</div>
                    </div>
                    <div class="service-nav" d-service="1">
                        Marble Polishing &amp; Restoration
                        <div class="reflection">Marble Polishing &amp; Restoration</div>
                    </div>
                    <div class="service-nav" d-service="2">
                        Sandstone Polishing
                        <div class="reflection">Sandstone Polishing</div>
                    </div>
                    <div class="service-nav" d-service="3">
                        Travertine Polishing
                        <div class="reflection">Travertine Polishing</div>
                    </div>
                    <div class="service-nav" d-service="4">
                        Limestone Polishing
                        <div class="reflection">Limestone Polishing</div>
                    </div>
                    <div class="service-nav" d-service="5">
                        Terrazo Polishing
                        <div class="reflection">Terrazo Polishing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-slider">
        <div class="service-slider-content service-1">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <h2 class="text-primary">Concrete Polishing</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-10">
                                <h5 class="font-articulat line-height-3 pt-4 pt-md-5">
                                    Polished concrete has become the ideal floor finish for many settings, including retail, restaurants, show room floors, manufacturing, garages, and residential interiors due to its low maintenance, durability and high resistance to staining. Polished concrete is also relatively inexpensive and can be stylish in its appearance, with many new colours from which you can choose.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center service-buttons pt-5 gx-2 gx-md-3 d-none d-md-flex">
                            <div class="col-auto">
                                <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                                    Get a free quote
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                                    Call us today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-md-0">
                        <div class="text-primary h5 font-articulat fw-700">What do we offer?</div>
                        <div class="row offers g-3">
                            <div class="col-auto">
                                <div class="offer-box">Polished Concrete Floors &amp; Benchtops</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout &amp; Crack Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grinding</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Buffing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout & Crack Repairs</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Anti Slip & Stain Resistant Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Decorative Concrete Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete & Aggregate Supply & Pouring</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center service-buttons pt-5 gx-2 gx-md-3 d-md-none">
                    <div class="col-auto">
                        <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                            Get a free quote
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                            Call us today
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-slider-content service-2">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <h2 class="text-primary">Marble Polishing &amp; Restoration</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-10">
                                <h5 class="font-articulat line-height-3 pt-5">
                                    Polished concrete has become the ideal floor finish for many settings, including retail, restaurants, show room floors, manufacturing, garages, and residential interiors due to its low maintenance, durability and high resistance to staining. Polished concrete is also relatively inexpensive and can be stylish in its appearance, with many new colours from which you can choose.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center service-buttons pt-5">
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                                    Get a free quote
                                </a>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                                    Call us today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-primary h5 font-articulat fw-700">What do we offer?</div>
                        <div class="row offers g-3">
                            <div class="col-auto">
                                <div class="offer-box">Marble Grinding</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Marble Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Marble Polishing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Marble Restoration</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Marble Crack & Stain Repair</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-slider-content service-3">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <h2 class="text-primary">Sandstone Polishing</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-10">
                                <h5 class="font-articulat line-height-3 pt-5">
                                    Polished concrete has become the ideal floor finish for many settings, including retail, restaurants, show room floors, manufacturing, garages, and residential interiors due to its low maintenance, durability and high resistance to staining. Polished concrete is also relatively inexpensive and can be stylish in its appearance, with many new colours from which you can choose.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center service-buttons pt-5">
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                                    Get a free quote
                                </a>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                                    Call us today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-primary h5 font-articulat fw-700">What do we offer?</div>
                        <div class="row offers g-3">
                            <div class="col-auto">
                                <div class="offer-box">Polished Concrete Floors &amp; Benchtops</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout &amp; Crack Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grinding</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Buffing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout & Crack Repairs</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Anti Slip & Stain Resistant Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Decorative Concrete Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete & Aggregate Supply & Pouring</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-slider-content service-4">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <h2 class="text-primary">Travertine Polishing</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-10">
                                <h5 class="font-articulat line-height-3 pt-5">
                                    Polished concrete has become the ideal floor finish for many settings, including retail, restaurants, show room floors, manufacturing, garages, and residential interiors due to its low maintenance, durability and high resistance to staining. Polished concrete is also relatively inexpensive and can be stylish in its appearance, with many new colours from which you can choose.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center service-buttons pt-5">
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                                    Get a free quote
                                </a>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                                    Call us today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-primary h5 font-articulat fw-700">What do we offer?</div>
                        <div class="row offers g-3">
                            <div class="col-auto">
                                <div class="offer-box">Polished Concrete Floors &amp; Benchtops</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout &amp; Crack Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grinding</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Buffing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout & Crack Repairs</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Anti Slip & Stain Resistant Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Decorative Concrete Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete & Aggregate Supply & Pouring</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-slider-content service-5">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <h2 class="text-primary">Limestone Polishing</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-10">
                                <h5 class="font-articulat line-height-3 pt-5">
                                    Polished concrete has become the ideal floor finish for many settings, including retail, restaurants, show room floors, manufacturing, garages, and residential interiors due to its low maintenance, durability and high resistance to staining. Polished concrete is also relatively inexpensive and can be stylish in its appearance, with many new colours from which you can choose.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center service-buttons pt-5">
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                                    Get a free quote
                                </a>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                                    Call us today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-primary h5 font-articulat fw-700">What do we offer?</div>
                        <div class="row offers g-3">
                            <div class="col-auto">
                                <div class="offer-box">Polished Concrete Floors &amp; Benchtops</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout &amp; Crack Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grinding</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Buffing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout & Crack Repairs</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Anti Slip & Stain Resistant Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Decorative Concrete Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete & Aggregate Supply & Pouring</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-slider-content service-6">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <h2 class="text-primary">Terrazo Polishing</h2>
                        <div class="row">
                            <div class="col-12 col-xxl-10">
                                <h5 class="font-articulat line-height-3 pt-5">
                                    Polished concrete has become the ideal floor finish for many settings, including retail, restaurants, show room floors, manufacturing, garages, and residential interiors due to its low maintenance, durability and high resistance to staining. Polished concrete is also relatively inexpensive and can be stylish in its appearance, with many new colours from which you can choose.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center service-buttons pt-5">
                            <div class="col-12 col-md-auto">
                                <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-4 fw-700 h5">
                                    Get a free quote
                                </a>
                            </div>
                            <div class="col-12 col-md-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn border-secondary text-secondary font-articulat bordered rounded-pill px-4 fw-800 line-height-1 h5">
                                    Call us today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-primary h5 font-articulat fw-700">What do we offer?</div>
                        <div class="row offers g-3">
                            <div class="col-auto">
                                <div class="offer-box">Polished Concrete Floors &amp; Benchtops</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout &amp; Crack Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grinding</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Buffing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Sealing</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete Grout & Crack Repairs</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Anti Slip & Stain Resistant Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Decorative Concrete Coatings</div>
                            </div>
                            <div class="col-auto">
                                <div class="offer-box">Concrete & Aggregate Supply & Pouring</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="business-type">
    <div class="hero">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-10 col-md-12">
                    <h2>Floor polishing is beneficial<br class="d-none d-md-block"> for all kinds of business</h2>
                </div>
                <div class="col-8 col-lg-4 py-4 py-md-5">
                    <div class="h5 font-articulat line-height-3">Not sure if we service you? Check out the range of residential, commercial and industrial buildings we’ve done. Floor polishing is suitable for a huge range of homes and businesses, give us a call if you have any questions!</div>
                </div>
                <div class="col-12 pt-4 pt-md-0">
                    <a href="#form" class="btn btn-secondary text-white font-articulat rounded-pill px-3 px-md-4 py-2 py-md-3 fw-700 h5">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.122 6.12354C16.8528 6.12354 19.8765 9.15124 19.8765 12.882" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.122 1.64917C19.3238 1.64917 24.351 6.67638 24.351 12.8781" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.68176 2.54313C-1.78486 6.00975 0.27967 13.6948 6.29445 19.7096C12.3052 25.7244 19.9903 27.7849 23.4569 24.3182C24.5054 23.2657 24.985 20.8801 24.985 20.8801C25.0622 20.4858 24.8346 20.0469 24.4769 19.9047L18.1818 17.3891C17.8241 17.2468 17.2917 17.3647 17.0032 17.6573L15.1825 19.478C14.833 19.8275 14.3331 19.9128 13.9348 19.734C13.9023 19.7177 13.8739 19.7015 13.8414 19.6852C13.8292 19.6771 13.8129 19.669 13.8007 19.6609C12.4149 18.9049 10.9478 17.8076 9.57006 16.4259C8.18829 15.0482 7.091 13.5811 6.33509 12.1952C6.32696 12.183 6.31883 12.1708 6.31477 12.1586C6.29851 12.1261 6.28225 12.0936 6.266 12.0652C6.08718 11.6669 6.17253 11.167 6.51797 10.8175L8.34272 8.99275C8.63533 8.70421 8.75319 8.17182 8.61095 7.81418L6.09531 1.52305C5.95307 1.16542 5.51415 0.93783 5.11994 1.01505C5.11994 1.01505 2.73435 1.49054 1.68176 2.54313V2.54313Z" fill="white" />
                        </svg>

                        <span class="ps-2"><?= $phone_number ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pe-0">
        <div class="row ge-0 justify-content-end">
            <div class="col-12 col-xxl-11 ps-xxl-8">
                <div class="type-slider">
                    <div><?= renderImg("type-residentials.png", "lib") ?></div>
                    <div><?= renderImg("type-kitchens.png", "lib") ?></div>
                    <div><?= renderImg("type-bathrooms.png", "lib") ?></div>
                    <div><?= renderImg("type-garages.png", "lib") ?></div>
                    <div><?= renderImg("type-driveways.png", "lib") ?></div>
                    <div><?= renderImg("type-patios.png", "lib") ?></div>
                    <div><?= renderImg("type-pools.png", "lib") ?></div>
                    <div><?= renderImg("type-shopping-centers.png", "lib") ?></div>
                    <div><?= renderImg("type-factories.png", "lib") ?></div>
                    <div><?= renderImg("type-showrooms.png", "lib") ?></div>
                    <div><?= renderImg("type-cafes.png", "lib") ?></div>
                    <div><?= renderImg("type-childcare.png", "lib") ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="description">
        <div class="container">
            <div class="row gx-xl-6">
                <div class="col-auto d-none d-md-block" data-aos="fade-right">
                    <?= renderImg("polishing-guy.png", "lib") ?>
                </div>
                <div class="col py-xl-6" data-aos="fade-left">
                    <h2>10 Years of Floor<br class="d-md-none"> Polishing</h2>
                    <h4 class="font-articulat fw-700 py-4">Get your heavy duty, low maintenance and non-slip floor today for your home or business!</h4>
                    <p class="line-height-3 h5 font-articulat pb-4 py-md-4">
                        Excel Floor Polishing Pty Ltd has over 10 years of experience providing expert flooring solutions to customers across a wide range of industries. We are a highly reputable and dependable company, offering grinding, polishing, buffing and sealing of concrete, marble, terrazzo, granite, insitu, limestone and sandstone surfaces.
                    </p>
                    <a href="#services" class="btn px-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="font-articulat text-white fw-700 h5">Get your free quote now</div>
                            <div class="ps-3"><?= renderImg("arrow-down-white.png", "icons") ?></div>
                        </div>
                    </a>
                </div>
                <div class="col-auto d-md-none" data-aos="fade-right">
                    <?= renderImg("polishing-guy.png", "lib", "pt-4") ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <h2 class="text-center text-primary" data-aos="fade-up">Projects We've Done</h2>
        <div class="row g-3 pt-5 pt-xl-7 d-none d-md-flex">
            <div class="col-12 col-md-4" data-aos="flip-up"><?= renderImg("gallery-1.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-4" data-aos="flip-up"><?= renderImg("gallery-2.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-4" data-aos="flip-up"><?= renderImg("gallery-3.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-3" data-aos="flip-up"><?= renderImg("gallery-4.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-3" data-aos="flip-up"><?= renderImg("gallery-5.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-3" data-aos="flip-up"><?= renderImg("gallery-6.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-3" data-aos="flip-up"><?= renderImg("gallery-7.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-8" data-aos="flip-up"><?= renderImg("gallery-8.jpg", "lib", "w-100") ?></div>
            <div class="col-12 col-md-4" data-aos="flip-up"><?= renderImg("gallery-9.jpg", "lib", "w-100") ?></div>
        </div>
        <div class="gallery-slider d-lg-none">
            <div class=""><?= renderImg("gallery-1.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-2.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-3.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-4.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-5.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-6.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-7.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-8.jpg", "lib", "w-100") ?></div>
            <div class=""><?= renderImg("gallery-9.jpg", "lib", "w-100") ?></div>
        </div>
    </div>

    <div class="container-fluid pt-4 pt-md-7 pt-xxl-10">
        <h4 class="text-center text-dark font-articulat fw-700">Brands we've worked with</h4>
        <div class="row justify-content-end py-5">
            <div class="col-12 col-xxl-11 ps-xxl-8">
                <div class="brands-slider">
                    <div class="brands"><?= renderImg("klindex.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("castle-tower.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("versatile.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("constructioncontrol.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("built.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("us-embassay.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("canberra.png", "logo") ?></div>
                    <div class="brands"><?= renderImg("mlc-center.png", "logo") ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gmb">
    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424141.6978944982!2d150.93197474999997!3d-33.84824395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW!5e0!3m2!1sen!2sau!4v1660795175794!5m2!1sen!2sau" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="social-links" data-aos="fade-right">
        <div class="gmb-wrapper">
            <div class="gmb-img"><?= renderImg("gmb.png", "lib") ?></div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>