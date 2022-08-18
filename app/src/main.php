<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto top-buttons">
                    <div class="row justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-pill px-5 fw-700 h3">
                                <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="#form" class="btn border-white bordered rounded-pill">
                                <div class="px-4 fw-800 line-height-1 h5">Get Your Free Quote</div>
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
                <div class="col-xl-6">
                    <h1 class="text-primary-gradient">Sydney's Leading Floor Polishing Company</h1>
                    <h3 class="py-3 font-articulat text-dark">Servicing Residential, Commercial & Industrial Services</h3>
                    <div class="row py-4">
                        <div class="col-6 col-xl-5">
                            <div class="row">
                                <div class="col-auto">
                                    <?= renderImg("highest-quality.png", "lib") ?>
                                </div>
                                <div class="col">
                                    <h3 class="letter-spacing-035 fw-600 text-uppercase text-black py-4">The Best Machines</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-5">
                            <div class="row">
                                <div class="col-auto">
                                    <?= renderImg("highest-quality.png", "lib") ?>
                                </div>
                                <div class="col">
                                    <h3 class="letter-spacing-035 fw-600 text-uppercase text-black py-4">Top Quality Service</h3>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="text-primary text-center pb-3">You won't find this kind of quality anywhere else.</h1>
                <div class="font-articulat text-center">
                    <h5 class="py-4 line-height-3">Excel Floor Polishing Pty Ltd uses high end floor polishing products and machinery to insure great and desirable results. We use Klindex Machines, Accessories & products which are ideal for the professional working in the flooring industry that regularly works on large projects and can even work comfortably in smaller areas for the optimum results. Our Professional machines delivers superior capabilities to polish marble, granite, terrazzo and concrete. Available to handle all types of flooring, from grinding, polishing to floor preparation.</h5>
                    <h5 class="line-height-3">We are dedicated to making sure our customers receive the best products, the most cutting-edge technologies, superior prices, and exceptional customer service that exceeds their expectations. Everything we offer, from our free professional consultations to our flexible schedule is meant to show our commitment and dedication to our customers.</h5>
                </div>
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

<?php include __DIR__ . '/footer.php'; ?>