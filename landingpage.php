<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Permissions-Policy" content="accelerometer=*, gyroscope=*, magnetometer=*">
    <title>Travel & Tours | Financial</title>
    <link rel="icon" type="image/jpg" href="img/viavantalogo.jpg">
    <link href="./landingpage_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./landingpage_files/bootstrap.min.css">
    <script src="./landingpage_files/bootstrap.bundle.min.js.download"></script>
    <script src="./landingpage_files/animations.js.download" defer=""></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            overflow-y: hidden;
        }
        html,
        body {
            overflow-x: hidden;
        }
        section {
            scroll-margin-top: 85px;
        }
        .main-section {
            height: 100vh;
        }
        .home-h1 {
            font-size: 4rem;
        }
        .home-h2 {
            font-size: 2.5rem;
        }
        .home-p {
            font-size: 17px;
        }
        @media (max-width: 768px) {
            .home-h1 {
                font-size: 2rem;
            }
            .home-h2 {
                font-size: 1.5rem;
            }
            .home-p {
                font-size: 15px;
            }
        }
        @media (max-width: 576px) {
            section {
                scroll-margin-top: 84px;
            }
            .home-h1 {
                font-size: 1.3rem;
            }
            .home-h2 {
                font-size: 1rem;
            }
            .home-p {
                font-size: 12px;
            }
            .home-btn {
                font-size: 12px;
            }
        }
        .social-icon:hover {
            color:  rgba(219, 233, 255, 1);
        }
        .comments-wrapper {
            margin-top: 60px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            overflow-x: hidden;
            white-space: nowrap;
            position: relative;
            cursor: grab;
        }
        .comments-wrapper.active {
            cursor: grabbing;
        }
        .scroll-track {
            display: inline-flex;
            animation: scroll 40s linear infinite;
            user-select: none;
            justify-content: flex-start;
            width: max-content;
            transition: transform 0.3s ease;
        }
        .comment-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            padding: 20px;
            margin-right: 12px;
            width: 260px;
            flex-shrink: 0;
            text-align: center;
            word-break: break-word;
            overflow-wrap: break-word;
            border-left: 4px solid  #00df94ff;
        }
        .comment-card p {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
            white-space: normal;
        }
        .comment-card h4 {
            font-size: 13px;
            color: #777;
        }
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
.feature-card, .benefit-card {
    border-radius: 1.25rem;
    box-shadow: 0 2px 16px rgba(37,99,235,0.08);
    transition: box-shadow 0.2s;
    background: #f6f8fa !important;
    min-height: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.feature-card:hover, .benefit-card:hover {
    box-shadow: 0 4px 24px rgba(37,99,235,0.14);
}
.text-royal {
    color: #2563eb !important;
}
.card .fw-bold {
    letter-spacing: 0.5px;
}
.card .text-muted {
    color: #4b5563 !important;
}
.card-body span i {
    filter: drop-shadow(0 2px 6px rgba(37,99,235,0.12));
    color: #2563eb !important;
}
#features-summary {
    min-height: 650px;
    max-height: 800px;
    padding-top: 60px;
    padding-bottom: 60px;
    display: flex;
    align-items: center;
}
@media (max-width: 991px) {
    #features-summary {
        min-height: 480px;
        max-height: none;
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .feature-card, .benefit-card {
        min-height: 180px;
    }
}
    </style>
</head>
<body>
    <a href="http://localhost/FINANCE/landingpage.php#" id="scrollToTopBtn" class="btn btn-orange position-fixed" style="bottom: 20px; right: 20px; z-index: 999; display: none;">
        <i class="fas fa-arrow-up"></i>
    </a>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollBtn = document.getElementById("scrollToTopBtn");
            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    scrollBtn.style.display = "block";
                } else {
                    scrollBtn.style.display = "none";
                }
            });
            scrollBtn.addEventListener("click", (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>
    <div class="position-fixed top-50 start-0 translate-middle-y bg-dark p-2 rounded-3 shadow d-none d-lg-block" style="z-index: 2;">
        <div class="d-flex flex-column gap-2">
            <a href="https://web.facebook.com/profile.php?id=61556988658842" target="_blank" class="social-icon text-light text-center">
                <i class="fab fa-facebook fa-lg"></i>
            </a>
            <a href="https://www.instagram.com/adventours_travel_inc/" target="_blank" class="social-icon text-light text-center">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="tel:+639700513830" class="social-icon text-light text-center">
                <i class="fas fa-phone fa-md"></i>
            </a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light shadow-sm p-3 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="#home">
                <img src="img/viavantalogo.jpg" alt="Logo" class="logo me-2" style="height: 50px; width: auto; border-radius: 50px;">
                <span class="d-none d-xl-inline">&nbsp;ViaVanta Travel & Tours</span>
            </a>
            <button class="navbar-toggler border-0 animate left-to-right show" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home&nbsp;&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us&nbsp;&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-none d-lg-flex gap-2">
                    <a class="btn btn-outline-dark px-3 px-xl-5" href="auth/register.php">Sign Up</a>
                    <a class="btn btn-dark px-3 px-xl-5" href="auth/login.php">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggler = document.querySelector(".navbar-toggler");

            if (toggler) {
                toggler.addEventListener("click", function() {
                    this.classList.toggle("collapsed");
                });
            }
            const navLinks = document.querySelectorAll(".close-navbar");
            const navbarCollapse = document.getElementById("navbarNav");
            navLinks.forEach(link => {
                link.addEventListener("click", function() {
                    if (navbarCollapse.classList.contains("show")) {
                        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                        if (bsCollapse) {
                            bsCollapse.hide();
                        }
                    }
                });
            });
            const sections = document.querySelectorAll("section");
            const allNavLinks = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");
            const dropdownItems = document.querySelectorAll(".dropdown-item");
            const dropdownToggles = document.querySelectorAll(".nav-item.dropdown .nav-link.dropdown-toggle");
            function removeActiveClasses() {
                allNavLinks.forEach(link => link.classList.remove("active"));
                dropdownItems.forEach(item => item.classList.remove("active"));
                dropdownToggles.forEach(toggle => toggle.classList.remove("active"));
            }
           function activateNavLink() {
                let scrollY = window.scrollY;
                let currentSectionId = null;            
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 150; 
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute("id");            
                    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                        currentSectionId = sectionId;
                    }
                });            
                if (currentSectionId) {
                    removeActiveClasses();          
                    let activeItem = document.querySelector(`.dropdown-item[href="#${currentSectionId}"]`);
                    let activeLink = document.querySelector(`.nav-link[href="#${currentSectionId}"]`);            
                    if (activeItem) {
                        activeItem.classList.add("active");
                        let parentDropdown = activeItem.closest(".dropdown").querySelector(".nav-link.dropdown-toggle");
                        if (parentDropdown) {
                            parentDropdown.classList.add("active");
                        }
                    } else if (activeLink) {
                        activeLink.classList.add("active");
                    }
                }
            }
            window.addEventListener("scroll", activateNavLink);
            dropdownItems.forEach(item => {
                item.addEventListener("click", function() {
                    removeActiveClasses();
                    this.classList.add("active");
                    const parentDropdown = this.closest(".dropdown").querySelector(".nav-link.dropdown-toggle");
                    if (parentDropdown) {
                        parentDropdown.classList.add("active");
                    }
                });
            });
            allNavLinks.forEach(link => {
                link.addEventListener("click", function() {
                    removeActiveClasses();
                    this.classList.add("active");
                });
            });
            activateNavLink(); 
        });
    </script>
<section id="home" class="d-flex align-items-center justify-content-center text-center main-section position-relative py-5" style="overflow: hidden;">
        <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.4); z-index: 1;"></div>
        <div style="height: 100%; width: 100%; background-image: url(img/cover2.jpg); background-size: cover; background-position: center; position: absolute; z-index: 0;"></div>
        <div class="container-fluid position-relative z-1 text-dark">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mt-4 mt-lg-5">
                    <h2 class="home-h3 text-uppercase mb-1 text-white fw-bold animate right-to-left show">Efficiency • Accuracy • Control</h2>
                    <h1 class="home-h1 w-100 fw-bold animate left-to-right show" style="color: #00df94ff;">
                        Smart Financial Management for Smarter Decisions
                    </h1>
                    <p class="home-p w-100 w-lg-75 text-white text-center mx-auto animate right-to-left show">
                        The system improves accuracy, provides real-time insights, and strengthens financial control to support the company’s sustainable growth.
                        <br>Designed exclusively for employees of ViaVanta Travel & Tours.
                    </p>
                    <div class="mt-2">
                        <a href="#book-appointment" class="btn btn-royal px-3 px-lg-5 py-3 fw-bold text-uppercase rounded-5 shadow-lg home-btn animate fade-in-up show">
                            Book an Appointment Now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="features-summary" class="py-4 mb-5 position-relative" style="background: #fff; min-height: calc(100vh - 120px);">
    <style>
        #features-summary { padding-top: 48px; padding-bottom: 48px; }
        #features-summary .decor-top {
            position: absolute;
            top: 0; left: 0; right: 0; height: 240px;
            background: linear-gradient(135deg,#eaf3ff 60%,#f6f8fa 100%);
            filter: blur(16px);
            z-index: 0; opacity: 0.7; pointer-events: none;
        }
        #features-summary .container { z-index: 1; max-width: 1100px; }
        .feature-card, .benefit-card {
            background: #ffffff; 
            border: 1px solid rgba(15, 23, 42, 0.06);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06); 
            padding: 20px;
            min-height: 240px; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: box-shadow .18s; 
        }
        .feature-card:hover, .benefit-card:hover {
            box-shadow: 0 14px 40px rgba(15, 23, 42, 0.08);
        }
        .feature-card .icon, .benefit-card .icon {
            font-size: 1.6rem;
            color: rgba(255, 255, 255, 0.7); 
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 64px; height: 64px;
            border-radius: 14px;
            background: rgba(37,99,235,0.08); 
            margin-bottom: 14px;
            box-shadow: 0 6px 18px rgba(37,99,235,0.04);
        }
        .feature-card h5, .benefit-card h5 {
            font-size: 1.05rem;
            margin: 0 0 8px 0;
            color: #0f1724; 
            letter-spacing: 0.2px;
        }
        .feature-card p, .benefit-card p {
            font-size: 0.95rem;
            margin: 0;
            color: #475569;
            max-width: 16rem; 
        }
        .text-royal { color: #00df94ff !important; }

        @media (max-width: 991px) {
            .feature-card, .benefit-card { min-height: 180px; padding: 16px; }
            .feature-card .icon, .benefit-card .icon { width:52px; height:52px; font-size:1.25rem; border-radius:10px; }
        }
    </style>
    <div class="decor-top" aria-hidden="true"></div>
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-royal" style="font-size:1.8rem; margin-bottom:6px;">System Features</h2>
            <p class="lead text-dark" style="font-size:0.98rem; margin:0 0 18px 0;">
                Professional tools for managing your organization's finances efficiently.
            </p>
        </div>
        <div class="row gx-3 gy-3 justify-content-center mb-4">
            <div class="col-sm-6 col-md-4">
                <div class="feature-card text-center">
                    <h5 class="fw-bold">Income Tracking</h5>
                    <p>Easily record and monitor incoming funds for accurate accounting.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-card text-center">
                    <h5 class="fw-bold">Expense Monitoring</h5>
                    <p>Track outgoing payments in real-time to maintain financial control.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-card text-center">
                    <h5 class="fw-bold">Reports</h5>
                    <p>Generate concise reports to reduce discrepancies and simplify reconciliation.</p>
                </div>
            </div>
        </div>
        <div class="text-center mb-3 mt-3">
            <h3 class="fw-bold text-royal" style="font-size:1.6rem; margin-bottom:6px;">System Benefits</h3>
            <p class="lead text-dark" style="font-size:0.98rem; margin:0 0 12px 0;">Why choose our finance system?</p>
        </div>
        <div class="row gx-3 gy-3 justify-content-center">
            <div class="col-sm-6 col-md-4">
                <div class="benefit-card text-center">
                    <h5 class="fw-bold">Secure</h5>
                    <p>Your financial data is protected with advanced security measures.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="benefit-card text-center">
                    <h5 class="fw-bold">Fast</h5>
                    <p>Real-time access to records reducing delays and enabling timely decisions.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="benefit-card text-center">
                    <h5 class="fw-bold">Reliable</h5>
                    <p>Dependable performance with consistent, accurate reporting.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="py-5 mt-5" id="about" style="min-height: 100vh; background: #181f2a;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold animate fade-in-up show" style="color: #e5e5e5;">Your Trusted Financial Partner</h2>
                    <p class="lead text-light animate right-to-left show mb-0">
                        Streamlining financial processes for better decision-making and control.
                    </p>
                </div>
                <div class="card border-0 shadow-lg rounded-4 p-5 bg-dark text-light position-relative overflow-hidden">
                    <div style="position:absolute;top:-40px;right:-60px;width:220px;height:220px;background:linear-gradient(135deg,#4f8cff 40%,#181f2a 100%);opacity:0.18;filter:blur(18px);border-radius:50%;z-index:0;"></div>
                    <div style="position:absolute;bottom:-40px;left:-60px;width:220px;height:220px;background:linear-gradient(135deg,#2563eb 40%,#181f2a 100%);opacity:0.18;filter:blur(18px);border-radius:50%;z-index:0;"></div>
                    <div class="position-relative" style="z-index:1;">
                        <h3 class="fw-bold mb-4 animate fade-in-up show" style="color: rgba(219, 233, 255, 1);">Our Story</h3>
                        <p class="animate right-to-left show mb-4">
                            The Finance System was created to address inefficiencies in handling financial transactions within the Travel & Tours System. Manual processes for payments, expense tracking, and reporting often result in errors, delays, and lack of transparency. By automating these functions, the project aims to improve accuracy, reduce processing time, and provide reliable financial reports. The intended effects include process improvement, cost savings from reduced manual work, and increased customer trust through secure and efficient transaction handling.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="bg-white bg-opacity-10 rounded-3 p-4 h-100 d-flex flex-column justify-content-center shadow-sm">
                                    <h4 class="fw-bold mb-2 animate fade-in-up show" style="color: rgba(219, 233, 255, 1);">Mission</h4>
                                    <p class="text-light mb-0 animate right-to-left show">
                                        Empower organizations with seamless, secure, and transparent financial management solutions.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white bg-opacity-10 rounded-3 p-4 h-100 d-flex flex-column justify-content-center shadow-sm">
                                    <h4 class="fw-bold mb-2 animate fade-in-up show" style="color: rgba(219, 233, 255, 1);">Vision</h4>
                                    <p class="text-light mb-0 animate right-to-left show">
                                        To be the leading platform for financial accuracy, efficiency, and trust in the travel industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 py-4"></div>
            </div>
        </div>
    </div>
</section>
            <section id="contact" class="py-5">
                <div class="container text-center">
                 <h2 class="display-5 fw-bold animate fade-in-up show" style="color: #00df94ff;"><br>Website Feedback</h2>
                 <p class="lead text-muted animate left-to-right mb-2 show">
                     Have thoughts or suggestions about our website? We’d love to hear your feedback to improve your experience.
                 </p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-feedback" aria-label="Send Feedback" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        Send Feedback
                    </button>
                </div>
            </div>
            </section>
            <div class="comments-wrapper overflow-hidden position-relative mb-5 animate fade-in-up show" style="width: 100%;">
                <div class="scroll-track d-flex">
                    <div class="comment-card position-relative">
                        <p class="animate left-to-right show"><em>"Hi, Your website is not ranking well on Google.
                            I can help you in putting your website on the Google's top-3 Rank and getting more customers Guaranteed.
                            Would you like to me seo proposal your business site
                            I can send over a detailed proposal with affordable packages.
                            Warm regards, Nikita"</em></p>
                                <h4 class="animate right-to-left show">- Nikita</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                    Aug 20, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"The website is so easy to navigate, I found all the information I needed quickly."</em></p>
                                <h4 class="animate right-to-left show">- Maria</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"Great visuals and detailed pages really inspired me to travel more."</em></p>
                                <h4 class="animate right-to-left show">- Michelle</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"The user interface is very friendly and responsive, I enjoyed browsing!"</em></p>
                                <h4 class="animate right-to-left show">- Arcueno</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"Great selection of destinations and clear information made planning simple."</em></p>
                                <h4 class="animate right-to-left show">- Mark Justin</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"Amazing website! Booking was so easy and the travel experience was smooth."</em></p>
                                <h4 class="animate right-to-left show">- Eloisa</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"That's great website and I love it!"</em></p>
                                <h4 class="animate right-to-left show">- Jaymak</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                                <div class="comment-card position-relative">
                                <p class="animate left-to-right show"><em>"I love this website and this is very helpful"</em></p>
                                <h4 class="animate right-to-left show">- Roel</h4>
                                <small class="animate fade-in-up show" style="position: absolute; bottom: 8px; right: 10px; font-size: 0.75rem; color: #777;">
                                May 19, 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <style>
    .btn-feedback {
        background: transparent;          
        color: #0f1724;                    
        border: none;                       
        padding: .35rem .6rem;             
        border-radius: .5rem;
        font-weight: 600;
        box-shadow: none;
        cursor: pointer;
        transition: background-color .14s, color .14s, transform .06s;
        text-decoration: none;
    }
    .btn-feedback:hover, .btn-feedback:focus {
        background: rgba(15,23,36,0.06);    
        color: #071223;
        transform: translateY(-1px);
        outline: none;
        text-decoration: none;
    }
    .btn-feedback:active {
        transform: translateY(0);
        background: rgba(15,23,36,0.04);
    }
    .modal-footer.justify-content-center {
        border-top: 0;
        padding-top: 0.75rem;
        padding-bottom: 0;
    }
    </style>
    <div class="modal fade" id="customSuccessModal" tabindex="-1" aria-labelledby="customSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header bg-success text-white rounded-top-4">
                    <h5 class="modal-title" id="customSuccessModalLabel">
                        <i class="fas fa-check-circle me-2"></i> Message Sent Successfully!
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <p class="mb-1 fs-5">Thank you for reaching out!</p>
                    <p class="mb-2">We'll get back to you as soon as possible.</p>
                    <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="customEmailExistsModal" tabindex="-1" aria-labelledby="customEmailExistsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header bg-danger text-white rounded-top-4">
                    <h5 class="modal-title" id="customEmailExistsModalLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i> Email Already Exists
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <p class="mb-1 fs-5">This email has already submitted a message.</p>
                    <p class="mb-2">Please use a different email or wait for a response.</p>
                    <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-light py-4" style="font-size:0.95rem;">
  <div class="container text-center">
    <h5 class="fw-bold mb-2"><br><br>ViaVanta Travel & Tours Inc.<br><br></h5>
  </div>
</footer>
    <script>
        const wrapper = document.querySelector('.comments-wrapper');
        const track = document.querySelector('.scroll-track');
        let isDown = false;
        let startX;
        let scrollLeft;
        wrapper.addEventListener('mousedown', (e) => {
            isDown = true;
            wrapper.classList.add('active');
            startX = e.pageX - wrapper.offsetLeft;
            scrollLeft = wrapper.scrollLeft;
        });
        wrapper.addEventListener('mouseleave', () => {
            isDown = false;
            wrapper.classList.remove('active');
        });
        wrapper.addEventListener('mouseup', () => {
            isDown = false;
            wrapper.classList.remove('active');
        });
        wrapper.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - wrapper.offsetLeft;
            const walk = (x - startX) * 2; 
            wrapper.scrollLeft = scrollLeft - walk;
        });
        wrapper.addEventListener('touchstart', (e) => {
            startX = e.touches[0].pageX;
            scrollLeft = wrapper.scrollLeft;
        });
        wrapper.addEventListener('touchmove', (e) => {
            const x = e.touches[0].pageX;
            const walk = (x - startX) * 2; 
            wrapper.scrollLeft = scrollLeft - walk;
        });
    </script>
<div id="give-freely-root-ejkiikneibegknkgimmihdpcbcedgmpo" class="give-freely-root" data-extension-id="ejkiikneibegknkgimmihdpcbcedgmpo" data-extension-name="Volume Booster" style="display: block;"><template shadowrootmode="open"><style>
    :host {
        all: initial;
    }
    .gf-scroll-remove::-webkit-scrollbar {
        border-radius-bottom-right: 15px;
    }
    button {
        cursor: pointer;
        transition: transform 0.1s ease;
    }
    button:active {
        transform: scale(0.98);
    }
    .give-freely-close-button:hover {
        opacity: 0.7;
    }
    input[type="radio"] {
        margin-right: 8px;
    }
    hr {
        border: none;
        border-top: 1px solid #e5e5e5;
        margin: 1em 0;
    }
    @media (max-width: 600px), (max-height: 480px) {
        #give-freely-checkout-popup {
        display: none !important;
    }
  }
</style><div><div class="gf-app"></div></div></template></div></body></html>