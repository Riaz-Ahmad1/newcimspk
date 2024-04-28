@extends('layouts.app')

@section('title', 'CIMS MULTAN')

@section('content')
    {{-- code  --}}
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center  shadow">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <h3 class="cmhtitle">
                CIMS MULTAN
            </h3>
            <nav id="navbar" class="navbar">
                <ul>
                    {{-- menubar --}}
                    <li class="dropdown"><a href="#"><span>HOME</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>CIMS Institute</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Campus</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>CIMS Policies</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Student Affairs</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Admissions</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link " href="#">Career</a></li>
                    <li><a class="nav-link " href="#">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/g1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            {{-- <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Green</span></h2> --}}
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}
                            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/g2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            {{-- <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2> --}}
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}
                            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/g3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            {{-- <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2> --}}
                            {{-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}
                            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-2">
                        <h4 class="title"><a href="">ANNOUNCEMENTS</a></h4>
                    </div>

                    <div class="col-md-10">
                        <marquee behavior="" direction="">
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat tarad limino ata</p>
                        </marquee>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-1">
                        <img src="assets/img/aboutus/cims.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
                        <h3>CIMS MEDICAL COLLEGE</h3>
                        <p class="fst-italic">
                            CIMS Medical College is a member of medical colleges being run under dependable patronage of
                            Pakistan Army. CIMS Medical College is recognized and approved for admission of 150 MBBS
                            students
                            per year by PMDC with NUMS University. It has a beautiful campus in a safe and serene
                            environment of
                            Multan Cantt. The large state of the art campus is designed and purpose built by professional
                            architects
                            and consultants. The college building consists of contemporary plan with lecture halls, tutorial
                            rooms,
                            laboratories, museums, up to-date library, computer lab, skills lab, administration block,
                            girls’ common room, cafeteria, masjid, sports facilities, gymnasium, spacious parking area and
                            grounds. Separate hostels for girls and boys with all allied facilities are available within the
                            premises
                            of College. CIMS has been able to acquire the best faculty & teaching staff in the country.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-2">
                        <img src="assets/img/aboutus/cdc.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content">
                        <h3>CIMS DENTAL COLLEGE </h3>
                        <p class="fst-italic">
                            CIMS Dental College Multan was recognized and approved for admission of 50 BDS students per year
                            from session 2021-2022 by PMDC/affiliated with NUMS University. CIMS Dental College is in the
                            premises of Combined Military Hospital Multan near 20 MDC Multan. College building is purpose
                            built with state-of-the-art architecture portraying the southern culture. The college consists
                            of well-equipped lecture rooms for each department, tutorial rooms, laboratories, library,
                            computer lab, cafeteria, and a spacious parking area. The curriculum design, content coverage,
                            methods of teaching and evaluation of student performance are aligned with NUMS vision of
                            quality of life through education, research, innovation, and health care.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">FACILITIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">BOYS HOSTEL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">GIRLS HOSTEL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">HEALTHCARE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">LEARNING RESOURCE CENTER
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">CAFETERIA
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">HEALTH & FITNESS
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiology</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                            parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum
                                            eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat
                                            minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui
                                            similique accusamus nostrum rem vero</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Et blanditiis nemo veritatis excepturi</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                            parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                            reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit
                                            ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna
                                            desera vafle de nideran pal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                        <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim
                                            fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis
                                            aut</p>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                            quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae
                                            sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et
                                            harum voluptatem optio quae</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas
                                            iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                            necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                            consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a
                                            laborum inventore</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img4.jpeg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                                        </p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                            ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet.
                                            Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img5.jpeg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-6">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                                        </p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                            ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet.
                                            Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img6.jpeg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-7">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                                        </p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                            ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet.
                                            Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/dept/img7.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Activities Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="activitiesHeading text-center">ACTIVITIES </h2>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->



                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h4 class="newsheading"> Latest News</h4>
                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-md-12">
                                <div class="list-group ">
                                    <a href="#" class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">6th Batch Provisional Call Up Notice – Admission MBBS-09
                                                Batch (Session 2023-24)</h5>
                                        </div>
                                        <div class="ue-grid-item-meta-data"><span class="ue-grid-item-meta-data-icon"><i
                                                    class="fas fa-calendar-week"></i></span> March 29, 2024</div>
                                    </a>
                                </div>
                                <div class=""> <a class="btn btn-sm btn-primary d-block" href="#">view all</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section><!-- End activities Section -->

        <!-- ======= coo msg Section ======= -->
        <section id="msg">
            <div class="container rounded">
                <div class="row">
                    <div class="col-md-12">
                        <div id="robotcarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <ol class="carousel-indicators">
                                    <li data-target="#robotcarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#robotcarousel" data-slide-to="1"></li>
                                    <li data-target="#robotcarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img class="rounded shadow-lg" src="assets/img/coo/coo.jpg" height="300px"
                                                alt="flight">
                                                <h6 class="text-white fw-bold msgofficername">Brig. Dr. Fowad Khurshid Imami </h6>
                                                <p class="fw-bold text-white msgdesignation">Chief Operating Officer </p>
                                        </div>
                                        <div class="col-md-8 text-white">
                                            <p style="text-align: justify;color: white; font-weight: bold;">
                                                As’salam o Alai’kum ! <br>
                                                As Chief Operating Officer, I thank you for visiting CMH Multan Institute of
                                                Medical Sciences website.
                                                I hope the information you find here will be helpful as you explore centers
                                                of excellence in
                                                medical education.
                                                CIMS Multan ranks among the top private medical and dental institutes in the country. Our faculty is of the highest professional 
                                                standing in the areas of the basic sciences as well as clinical expertise in the region. Having started its journey in 2015 with a 
                                                vision to provide quality medical education in Southern Punjab,

                                            </p>
                                            <button class="btn btn-sm btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img class="rounded shadow-lg" src="assets/img/coo/cmcprinc.jpg"
                                                height="300px" alt="flight">
                                                <h6 class="text-white fw-bold msgofficername"> PROFESSOR DR. WAJID HUSSAIN BARKI </h6>
                                                <p class="fw-bold text-white msgdesignation"> Principal CIMS Medical College </p>
                                        </div>
                                        <div class="col-md-8 text-white">
                                            <p style="text-align: justify;color: white; font-weight: bold;">
                                                With great pride and pleasure, I welcome you to CMH Multan Institute of Medical Sciences. In a very short span of 
                                                time CIMS Multan has developed as a vibrant learning environment, Under the dependable organization of Pakistan Army. 
                                                CIMS Multan offers secure educational platform where our students are enthusiastic and motivated to achieve endless possibilities 
                                                in medical education.

                                                An experienced faculty at CIMS Multan is ready to foster a passion for learning and developing professionalism in our future health 
                                                care providers. The college aims to produce lifelong learners with all the attributes of a passionate Doctor.  The college aims to 
                                                provide high quality medical education. The integrated curriculum and co-curricular activities  would  not only groom our graduates to 
                                                become empathetic health 
                                                care providers but also develop research oriented mindset to address the emerging challenges in  our own society and globally.

                                            </p>
                                            <button class="btn btn-sm btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img class="rounded shadow-lg" src="assets/img/coo/cdcprinc.jpg"
                                                height="300px" alt="flight">
                                                <h6 class="text-white fw-bold msgofficername"> COL. DR. DIL RASHEED </h6>
                                                <p class="fw-bold text-white msgdesignation"> Principal CIMS Dental College </p>
                                        </div>
                                        <div class="col-md-8 text-white">
                                            <p style="text-align: justify;color: white; font-weight: bold;">
                                                As’salam o Alai’kum ! <br>
                                                It is my immense pleasure to welcome you all to CIMS Dental College Multan. I congratulate you on choosing to be a 
                                                part of this 
                                                exciting world of healing and teaching.

                                                At CIMS Dental College, we provide an environment that fosters innovation, discovery, and research, an environment that
                                                 makes it 
                                                possible to achieve all these ventures for the benefit of the patients in the community of Southern Punjab. Our outstanding 
                                                faculty 
                                                works closely with our patients and students. 
                                                It supports diversity in thinking and encourages innovative, alternative approaches to issues.

                                            </p>
                                            <button class="btn btn-sm btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End coo msg Section -->

        <!-- ======= Activities Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="activitiesHeading text-center">ACHIEVEMENTS </h2>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt="">
                                        <h4> heading</h4>
                                        <button class="btn btn-sm btn-primary">Read More</button>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h4 class="newsheading"> Event Calendar </h4>
                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-md-4 bg-gray">
                                <div class="ectbe-date-area text-center">
                                    <span class="ectbe-week-day">Monday</span> <br>
                                    <span class="ectbe-ev-day">26</span> <br>
                                    <span class="ectbe-ev-mo">February</span>
                                    </div>                                        
                                </div>
                                <div class="col-md-8 eventdetail">
                                    <p>
                                        Sports Week (26 Feb - 01 March) 2024
                                    </p>
                                    <p>February 26 - March 1</p>
                                </div>
                            <div class=""> <a class="btn btn-sm btn-primary d-block" href="#">view all</a> </div>
                        </div>
                    </div>
                </div>
        </section><!-- End activities Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g1.jpg"><img
                                    src="assets/img/gallery/g1.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g2.jpg"><img
                                    src="assets/img/gallery/g2.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g3.jpg"><img
                                    src="assets/img/gallery/g3.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g4.jpg"><img
                                    src="assets/img/gallery/g4.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g5.jpg"><img
                                    src="assets/img/gallery/g5.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g6.jpg"><img
                                    src="assets/img/gallery/g6.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g7.jpg"><img
                                    src="assets/img/gallery/g7.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/g8.jpg"><img
                                    src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>WHY JOIN CIMS?</h2>
                    <p>
                        CMH Multan Institute of Medical Sciences is a contemporary and technologically advanced medical
                        and dental college located in the heart of a big city in Southern Punjab. It is inclusive of
                        enthusiastic,
                        and talented people who are driven to grow and succeed. By being a part of the CIMS Multan
                        fraternity, you
                        join a vibrant community that spreads both national and international missions in significant ways,
                        inspires
                        innovation and collaboration, and builds skills and expertise to achieve prominence in healthcare
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Guaranteed</a></h4>
                            <p>
                                A conducive learning environment, a peaceful highly secure campus, state-of-the-art
                                infrastructure with fully furnished modern hostel facilities
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Strong Together</a></h4>
                            <p>Learning together helps create lifelong bonds as successful future professionals</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <i class="bx bx-tachometer"></i>
                            </div>
                            <h4><a href="">Achievment</a></h4>
                            <p>Your success is celebrated with academic high scores in University Professional Exams and
                                intercollegiate co-curricular competitions</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4><a href="">Learning</a></h4>
                            <p>Your success is celebrated with academic high scores in University Professional Exams and
                                intercollegiate co-curricular competitions</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Big Network</a></h4>
                            <p>Studying at CIMS Multan promises connections with the global medical community and our
                                graduates are aspiring for international residency programs</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Professional</a></h4>
                            <p>The team of highly trained professional faculty members and mentors is determined to
                                positively shaping the young budding doctors</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

            <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="section-title">
                <h2>CIMS FAMILY</h2>
                <p>
                    We help you see the world differently, discover 
                    opportunities you may never have imagined and achieve results that bridge.
                </p>
            </div>
          <div class="row">
            <div class="col-md-2">
              <div class="count-box">
                <i class="fas fa-user-md"></i>
                <span data-purecounter-start="0" data-purecounter-end="394" data-purecounter-duration="1" class="purecounter"></span>
                <p>GRADUATES</p>
              </div>
            </div>
            <div class="col-md-3">
                <div class="count-box">
                  <i class="fas fa-user-md"></i>
                  <span data-purecounter-start="0" data-purecounter-end="109" data-purecounter-duration="1" class="purecounter"></span>
                  <p>BASIC SCIENCE FACULTY</p>
                </div>
              </div>
  
            <div class="col-md-3 mt-5 mt-md-0">
              <div class="count-box">
                <i class="far fa-hospital"></i>
                <span data-purecounter-start="0" data-purecounter-end="84" data-purecounter-duration="1" class="purecounter"></span>
                <p>CLINICAL FACULTY</p>
              </div>
            </div>
  
            <div class="col-md-2 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fas fa-flask"></i>
                <span data-purecounter-start="0" data-purecounter-end="283" data-purecounter-duration="1" class="purecounter"></span>
                <p>STAFF</p>
              </div>
            </div>
  
            <div class="col-md-2 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="fas fa-award"></i>
                <span data-purecounter-start="0" data-purecounter-end="788" data-purecounter-duration="1" class="purecounter"></span>
                <p>STUDENTS</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="shadow">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 footer-contact">
                      <div class="d-flex justify-content-between align-items-center">
                      {{-- <div class="d-flex"> --}}
                        <img src="assets/img/favicon.jpg" height="100px" alt="">
                        <h3 class="footertitle m-2">
                            CMH MULTAN
                            INSTITUTE OF
                            MEDICAL SCIENCES
                        </h3>
                      </div>
                        <p>
                            CIMS Multan is a member of NUMS affiliated medical and dental colleges being run under 
                            the dependable patronage of Pakistan Army. It is located in the beautiful 
                            and serene environment of Multan Cantonment near Combined Military Hospital Multan.
                        </p>
                    </div>

                    <div class="col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Career</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">CIMS Alumni</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contacts</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Announcements</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-2">

            <div class="me-md-auto text-center text-md-start ">
                <div class="copyright">
                    &copy; Copyright <strong><span>CIMS MULTAN</span></strong>. All Rights Reserved . Designed by <a
                        href="#">IT Dept</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- code  --}}
@endsection
