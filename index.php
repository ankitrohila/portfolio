<?php include 'includes/header.php'; ?>

<style>
/* ===== SKILLS TECH GRID ===== */
.tech-skills-section { padding: 80px 0; background: #f9f8ff; }
.tech-skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
    gap: 16px;
    margin-top: 40px;
}
.tech-skill-card {
    background: #fff;
    border-radius: 16px;
    padding: 24px 16px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    border: 1.5px solid transparent;
    transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
}
.tech-skill-card:hover {
    border-color: #5544FF;
    transform: translateY(-3px);
    box-shadow: 0 10px 32px rgba(85,68,255,0.12);
}
.tech-skill-card i, .tech-skill-card .tech-img {
    font-size: 36px;
    margin-bottom: 10px;
    display: block;
}
.tech-skill-card .tech-img { width: 40px; height: 40px; margin: 0 auto 10px; object-fit: contain; }
.tech-skill-card h5 { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; color: #333; margin: 0 0 8px; }
.tech-skill-card .skill-bar {
    height: 4px;
    background: #eee;
    border-radius: 4px;
    overflow: hidden;
    margin-top: 6px;
}
.tech-skill-card .skill-bar-fill {
    height: 100%;
    background: linear-gradient(90deg, #5544FF, #8b7dff);
    border-radius: 4px;
}

/* ===== PORTFOLIO PREVIEW ===== */
.home-portfolio { padding: 80px 0; }
.portfolio-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-top: 40px;
}
.pf-item {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 16/9;
    cursor: pointer;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}
.pf-item img { width: 100%; height: 100%; object-fit: cover; object-position: top; transition: transform 0.4s; }
.pf-item:hover img { transform: scale(1.05); }
.pf-overlay {
    position: absolute;
    inset: 0;
    background: rgba(10,10,30,0.7);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
    text-align: center;
    padding: 20px;
}
.pf-item:hover .pf-overlay { opacity: 1; }
.pf-overlay h4 { color: #fff; font-size: 16px; font-weight: 800; margin-bottom: 6px; }
.pf-overlay p { color: rgba(255,255,255,0.7); font-size: 12px; margin-bottom: 14px; }
.pf-overlay a {
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    border: 1.5px solid #fff;
    padding: 7px 18px;
    border-radius: 30px;
    text-decoration: none;
    transition: background 0.2s;
}
.pf-overlay a:hover { background: rgba(255,255,255,0.2); color: #fff; }

/* ===== TECH STACK SECTION (replacing partner logos) ===== */
.techstack-section { padding: 70px 0; background: #0d0d0d; text-align: center; }
.techstack-section h4.sub-title { color: rgba(255,255,255,0.5); }
.techstack-section h2 { color: #fff; font-size: 32px; font-weight: 800; margin-bottom: 36px; }
.techstack-pills { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
.techstack-pill {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    transition: background 0.2s, border-color 0.2s;
}
.techstack-pill i { font-size: 16px; color: #8b7dff; }
.techstack-pill:hover { background: rgba(85,68,255,0.25); border-color: #5544FF; }

@media (max-width: 767px) {
    .portfolio-grid { grid-template-columns: 1fr; }
    .tech-skills-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 575px) {
    .tech-skills-grid { grid-template-columns: repeat(2, 1fr); }
    .techstack-section h2 { font-size: 24px; }
}
</style>

    <!-- Start Banner ============================================= -->
    <div class="banner-style-one-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="banner-style-one-thumb">
                        <img src="assets/img/illustration/1.png" alt="Ankit Rohilla">
                        <div class="author-social">
                            <ul>
                                <li><a href="https://www.linkedin.com/in/rohillaankit/" target="_blank">Linkedin</a></li>
                                <li><a href="https://wa.me/918950205038" target="_blank">WhatsApp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 pl-80 pl-md-15 pl-xs-15">
                    <div class="banner-style-one-one">
                        <div class="top">
                            <div class="left">
                                <p>
                                    I build modern websites and web applications using PHP, WordPress &amp; Laravel — with a focus on performance, SEO/AEO, and AI-powered solutions that drive real business results.
                                </p>
                            </div>
                            <div class="right">
                                <a href="projects.php" class="btn-circle">
                                    <div class="button-content">
                                        <span><img src="assets/img/icon/1.png" alt="Portfolio"></span> My Portfolio
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="bottom">
                            <h2>HI, I'M ANKIT</h2>
                            <h1>
                                <span class="header-caption" id="page-top">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">Web Developer</b>
                                            <b class="is-hidden">PHP Developer</b>
                                            <b class="is-hidden">WordPress Expert</b>
                                        </span>
                                    </span>
                                </span>
                            </h1>
                            <p>
                                3+ years building high-quality, business-oriented websites across 5 companies — from WordPress agencies to government event platforms and US-based digital marketing firms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Services ============================================= -->
    <div id="services" class="services-style-one-area default-padding">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="sub-title">My Expertise</h4>
                        <h2 class="title">What I Do Best</h2>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="service.php" class="btn-style-one">All Services <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="service-style-one-box">
                <div class="row">
                    <div class="col-lg-7 pr-70 pr-md-15 pr-xs-15">
                        <div class="services-style-one-items">
                            <div class="services-style-one-item">
                                <div class="icon">
                                    <img src="assets/img/icon/2.png" alt="">
                                    <span>01</span>
                                </div>
                                <div class="info">
                                    <h4><a href="service.php">WORDPRESS DEVELOPMENT</a></h4>
                                    <p>Custom WordPress websites built from scratch — child themes, Elementor Pro, Divi, Be, Gutenberg, WooCommerce, and performance-optimised setups for businesses of every size.</p>
                                    <ul class="list-style-one">
                                        <li>Elementor / Divi / Gutenberg / Be Theme</li>
                                        <li>Custom Child Themes from Scratch</li>
                                        <li>WooCommerce &amp; Shopify Stores</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="services-style-one-item">
                                <div class="icon">
                                    <img src="assets/img/icon/3.png" alt="">
                                    <span>02</span>
                                </div>
                                <div class="info">
                                    <h4><a href="service.php">PHP / LARAVEL DEVELOPMENT</a></h4>
                                    <p>Full-stack web apps, custom CRMs, and event portals using PHP Core, Laravel, CodeIgniter &amp; Yii — deployed on AWS EC2, GoDaddy, Hostinger, and Cloudflare.</p>
                                    <ul class="list-style-one">
                                        <li>Laravel, CodeIgniter &amp; Yii</li>
                                        <li>Custom CRM &amp; Admin Portals</li>
                                        <li>AWS S3 / EC2 / Cloudflare</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="services-style-one-item">
                                <div class="icon">
                                    <img src="assets/img/icon/4.png" alt="">
                                    <span>03</span>
                                </div>
                                <div class="info">
                                    <h4><a href="service.php">SEO, AEO &amp; GEO OPTIMISATION</a></h4>
                                    <p>Modern search strategies for AI-era discoverability — optimising for Google, ChatGPT, Perplexity &amp; Gemini with structured data, schema markup, and Core Web Vitals.</p>
                                    <ul class="list-style-one">
                                        <li>Technical SEO &amp; On-Page Audit</li>
                                        <li>AEO / GEO / Schema Markup</li>
                                        <li>Core Web Vitals &amp; Page Speed</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="service-style-one-thumb">
                            <img src="assets/img/illustration/2.png" alt="Services">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start About ============================================= -->
    <div id="about" class="about-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-style-one-info">
                        <div class="d-flex flex-column">
                            <h4 class="sub-title">About Me</h4>
                            <h2 class="title">Full Stack Web Developer — 3+ Years, 5 Companies, 80+ Websites</h2>
                        </div>
                        <p>
                            Hi, I'm Ankit Rohilla — a Full Stack Web Developer from India with hands-on experience across 5 companies including a US-based digital marketing agency (Grow Nearby, Tampa FL), a government event-tech platform (Enseur, New Delhi), and digital branding agencies.
                        </p>
                        <p>
                            I specialise in WordPress (Elementor, Divi, custom themes), PHP frameworks (Laravel, CodeIgniter, Yii), and modern SEO strategies (SEO, AEO, GEO). I have built 80+ websites across real estate, hospitality, home services, education, and government sectors — deployed on AWS, Cloudflare, GoDaddy, and Hostinger.
                        </p>
                        <ul class="list-style-two" style="padding-left:0;list-style:none;margin-top:16px;">
                            <li style="display:flex;align-items:center;gap:14px;padding:10px 0;border-bottom:1px solid #f0f0f0;">
                                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                <div><strong>Phone:</strong> <a href="tel:+918950205038">+91-8950205038</a></div>
                            </li>
                            <li style="display:flex;align-items:center;gap:14px;padding:10px 0;border-bottom:1px solid #f0f0f0;">
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <div><strong>Email:</strong> <a href="mailto:rohilla77@gmail.com">rohilla77@gmail.com</a></div>
                            </li>
                            <li style="display:flex;align-items:center;gap:14px;padding:10px 0;">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div><strong>Location:</strong> India — Remote Available</div>
                            </li>
                        </ul>
                        <div class="bottom mt-30">
                            <a href="contact.php" class="btn-circle">
                                <div class="button-content">
                                    <span><img src="assets/img/icon/1.png" alt="Contact"></span> Contact Me
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-style-one-thumb pl-50" style="padding-left:0;">
                        <!-- Project screenshots in place of dummy images -->
                        <div class="thumb" style="position:relative;">
                            <img src="assets/img/portfolio/proj_enseur.jpg" alt="Enseur Project" style="width:100%;border-radius:16px;box-shadow:0 12px 40px rgba(0,0,0,0.12);object-fit:cover;object-position:top;max-height:240px;">
                        </div>
                        <div style="margin-top:16px;">
                            <img src="assets/img/portfolio/proj_grownearby.jpg" alt="Grow Nearby Project" style="width:100%;border-radius:16px;box-shadow:0 12px 40px rgba(0,0,0,0.12);object-fit:cover;object-position:top;max-height:200px;">
                        </div>
                        <!-- Stats row -->
                        <div style="display:flex;gap:12px;margin-top:16px;">
                            <div style="flex:1;background:#5544FF;color:#fff;border-radius:12px;padding:16px;text-align:center;">
                                <strong style="font-size:26px;font-weight:900;display:block;">80+</strong>
                                <span style="font-size:11px;opacity:.8;">Websites Built</span>
                            </div>
                            <div style="flex:1;background:#f9f8ff;border-radius:12px;padding:16px;text-align:center;">
                                <strong style="font-size:26px;font-weight:900;color:#5544FF;display:block;">3+</strong>
                                <span style="font-size:11px;opacity:.6;">Years Exp.</span>
                            </div>
                            <div style="flex:1;background:#f9f8ff;border-radius:12px;padding:16px;text-align:center;">
                                <strong style="font-size:26px;font-weight:900;color:#5544FF;display:block;">5</strong>
                                <span style="font-size:11px;opacity:.6;">Companies</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Skills ============================================= -->
    <div id="skills" class="tech-skills-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub-title">My Skills</h4>
                    <h2 class="title">Development Skills</h2>
                </div>
            </div>
            <div class="tech-skills-grid">
                <!-- WordPress -->
                <div class="tech-skill-card">
                    <i class="fab fa-wordpress" style="color:#21759b;"></i>
                    <h5>WordPress</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:95%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">95%</small>
                </div>
                <!-- PHP -->
                <div class="tech-skill-card">
                    <i class="fab fa-php" style="color:#8892be;"></i>
                    <h5>PHP</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:85%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">85%</small>
                </div>
                <!-- HTML5 -->
                <div class="tech-skill-card">
                    <i class="fab fa-html5" style="color:#e34f26;"></i>
                    <h5>HTML5</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:95%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">95%</small>
                </div>
                <!-- CSS3 -->
                <div class="tech-skill-card">
                    <i class="fab fa-css3-alt" style="color:#1572b6;"></i>
                    <h5>CSS3</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:90%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">90%</small>
                </div>
                <!-- JavaScript -->
                <div class="tech-skill-card">
                    <i class="fab fa-js" style="color:#f7df1e;"></i>
                    <h5>JavaScript</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:80%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">80%</small>
                </div>
                <!-- Bootstrap -->
                <div class="tech-skill-card">
                    <i class="fab fa-bootstrap" style="color:#7952b3;"></i>
                    <h5>Bootstrap</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:90%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">90%</small>
                </div>
                <!-- Laravel -->
                <div class="tech-skill-card">
                    <i class="fab fa-laravel" style="color:#ff2d20;"></i>
                    <h5>Laravel</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:75%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">75%</small>
                </div>
                <!-- MySQL -->
                <div class="tech-skill-card">
                    <i class="fas fa-database" style="color:#00618a;"></i>
                    <h5>MySQL</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:82%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">82%</small>
                </div>
                <!-- SEO/AEO -->
                <div class="tech-skill-card">
                    <i class="fas fa-search" style="color:#5544FF;"></i>
                    <h5>SEO / AEO</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:88%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">88%</small>
                </div>
                <!-- Shopify -->
                <div class="tech-skill-card">
                    <i class="fab fa-shopify" style="color:#96bf48;"></i>
                    <h5>Shopify</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:70%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">70%</small>
                </div>
                <!-- AWS -->
                <div class="tech-skill-card">
                    <i class="fab fa-aws" style="color:#ff9900;"></i>
                    <h5>AWS</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:72%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">72%</small>
                </div>
                <!-- Figma -->
                <div class="tech-skill-card">
                    <i class="fab fa-figma" style="color:#f24e1e;"></i>
                    <h5>Figma</h5>
                    <div class="skill-bar"><div class="skill-bar-fill" style="width:75%;"></div></div>
                    <small style="opacity:.5;font-size:11px;">75%</small>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skills -->

    <!-- Start Brand Ticker ============================================= -->
    <div class="brand-area relative overflow-hidden bg-gradient-secondary text-light">
        <div class="brand-style-one">
            <div class="container-fill">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-items">
                            <div class="brand-conetnt">
                                <div class="item"><h2>WordPress</h2></div>
                                <div class="item"><h2>Laravel</h2></div>
                                <div class="item"><h2>PHP</h2></div>
                                <div class="item"><h2>Development</h2></div>
                            </div>
                            <div class="brand-conetnt">
                                <div class="item"><h2>SEO / AEO</h2></div>
                                <div class="item"><h2>Branding</h2></div>
                                <div class="item"><h2>AI Automation</h2></div>
                                <div class="item"><h2>MySQL</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Ticker -->

    <!-- Start Career (Experience Only) ============================================= -->
    <div class="career-area default-padding">
        <div class="shape">
            <img src="assets/img/shape/6.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">My Experience</h4>
                        <h2 class="title">Professional Career Journey</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content career-tab-content" id="myTabContent" style="padding-top:0;">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <ul class="timeline-style-one-items">
                                <li>
                                    <div class="left">
                                        <h5>Apr 2026 – Present</h5>
                                        <img src="assets/img/icon/12.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h3>FULL STACK DEVELOPER</h3>
                                        <h6>BrandThink Studios Pvt Ltd — New Delhi, India</h6>
                                        <p>Full-stack development for luxury and lifestyle brands. Projects: Bluebells Luxury Real Estate, Bakers, Little Riders Cup, IBFW Weddings — custom WordPress and PHP/Laravel platforms.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <h5>Aug 2025 – Feb 2026</h5>
                                        <img src="assets/img/icon/13.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h3>WEB DEVELOPER</h3>
                                        <h6>Grow Nearby — Tampa, Florida, USA</h6>
                                        <p>INC. 5000 Growth Leader &amp; Best Web Design Agency (Netty Awards). WordPress sites for Mike Diamond Plumbing, Chilly-Billy Heating &amp; Cooling, ALL-ISR, James Armstrong Plumbing, Plumbing Template. SEO, AEO &amp; AIO strategies.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <h5>Dec 2023 – Aug 2025</h5>
                                        <img src="assets/img/icon/15.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h3>WEB DEVELOPER</h3>
                                        <h6>Enseur — New Delhi, India</h6>
                                        <p>Government event-tech platform. Full-stack (WordPress + PHP Yii/CodeIgniter/Laravel) for AIMA, Ananta Center, BYST, EMS-Works, Flowvillas, ABS Vacations, Yatraveda Journey.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <h5>Jun 2023 – Oct 2023</h5>
                                        <img src="assets/img/icon/14.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h3>WEB DEVELOPER</h3>
                                        <h6>Brandforce 360 — New Delhi, India</h6>
                                        <p>Digital marketing agency. WordPress websites for Super Pattern, AVG Logistics, Maxvolt Energy, Netexpress — across Elementor, Gutenberg, Divi, Be builders.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <h5>Oct 2022 – Jun 2023</h5>
                                        <img src="assets/img/icon/12.png" alt="">
                                    </div>
                                    <div class="right">
                                        <h3>WORDPRESS DESIGNER</h3>
                                        <h6>Grid IT Solutions — Sonipat, Haryana, India</h6>
                                        <p>Built WordPress websites for Ohmypet Grooming, Shambhu Dayal School, Boxica Packaging, GSIL Edu. Society, PD Metals Craft, Vidyarthi Juniors, R S Solar, Softhics. Custom child themes and full theme builds.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Career -->

    <!-- Start Portfolio Preview ============================================= -->
    <div id="portfolio" class="home-portfolio default-padding bg-gray">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="sub-title">My Work</h4>
                        <h2 class="title">Recent Projects</h2>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="projects.php" class="btn-style-one">All Projects <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="portfolio-grid">
                <!-- Grow Nearby -->
                <div class="pf-item">
                    <img src="assets/img/portfolio/proj_grownearby.jpg" alt="Grow Nearby">
                    <div class="pf-overlay">
                        <h4>Grow Nearby</h4>
                        <p>WordPress · SEO/AEO · Tampa, USA</p>
                        <a href="project-grownearby.php">View Project</a>
                    </div>
                </div>
                <!-- Enseur -->
                <div class="pf-item">
                    <img src="assets/img/portfolio/proj_enseur.jpg" alt="Enseur">
                    <div class="pf-overlay">
                        <h4>Enseur</h4>
                        <p>PHP · WordPress · Event Tech</p>
                        <a href="project-enseur.php">View Project</a>
                    </div>
                </div>
                <!-- Brandforce 360 -->
                <div class="pf-item">
                    <img src="assets/img/portfolio/proj_brandforce360.jpg" alt="Brandforce 360">
                    <div class="pf-overlay">
                        <h4>Brandforce 360</h4>
                        <p>WordPress · Elementor · Agency</p>
                        <a href="project-brandforce360.php">View Project</a>
                    </div>
                </div>
                <!-- Grid IT Solutions -->
                <div class="pf-item">
                    <img src="assets/img/portfolio/proj_griditsolutions.jpg" alt="Grid IT Solutions">
                    <div class="pf-overlay">
                        <h4>Grid IT Solutions</h4>
                        <p>WordPress · Custom Themes · IT</p>
                        <a href="project-griditsolutions.php">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Preview -->

    <!-- Tech Stack Section (replaces Partner logos) ============================================= -->
    <div class="techstack-section">
        <div class="container">
            <h4 class="sub-title" style="color:rgba(255,255,255,0.45);letter-spacing:2px;font-size:12px;font-weight:700;text-transform:uppercase;margin-bottom:10px;">Technologies</h4>
            <h2>Tech Stack I Work With</h2>
            <div class="techstack-pills">
                <span class="techstack-pill"><i class="fab fa-php"></i> PHP Core</span>
                <span class="techstack-pill"><i class="fab fa-laravel"></i> Laravel</span>
                <span class="techstack-pill"><i class="fas fa-code"></i> CodeIgniter</span>
                <span class="techstack-pill"><i class="fas fa-layer-group"></i> Yii Framework</span>
                <span class="techstack-pill"><i class="fab fa-wordpress"></i> WordPress</span>
                <span class="techstack-pill"><i class="fas fa-puzzle-piece"></i> Elementor Pro</span>
                <span class="techstack-pill"><i class="fas fa-paint-brush"></i> Divi Builder</span>
                <span class="techstack-pill"><i class="fab fa-shopify"></i> Shopify</span>
                <span class="techstack-pill"><i class="fab fa-html5"></i> HTML5</span>
                <span class="techstack-pill"><i class="fab fa-css3-alt"></i> CSS3</span>
                <span class="techstack-pill"><i class="fab fa-bootstrap"></i> Bootstrap 5</span>
                <span class="techstack-pill"><i class="fab fa-js"></i> JavaScript</span>
                <span class="techstack-pill"><i class="fas fa-database"></i> MySQL</span>
                <span class="techstack-pill"><i class="fab fa-aws"></i> AWS S3 / EC2</span>
                <span class="techstack-pill"><i class="fas fa-shield-alt"></i> Cloudflare</span>
                <span class="techstack-pill"><i class="fas fa-server"></i> Hostinger</span>
                <span class="techstack-pill"><i class="fas fa-globe"></i> GoDaddy</span>
                <span class="techstack-pill"><i class="fas fa-search"></i> SEO / AEO / GEO</span>
                <span class="techstack-pill"><i class="fab fa-figma"></i> Figma</span>
                <span class="techstack-pill"><i class="fas fa-robot"></i> AI Integration</span>
            </div>
        </div>
    </div>
    <!-- End Tech Stack -->

    <!-- Start CTA ============================================= -->
    <div style="padding:70px 0;text-align:center;background:#f9f8ff;">
        <div class="container">
            <h3 style="font-size:30px;font-weight:800;margin-bottom:10px;">Have a project in mind?</h3>
            <p style="opacity:.6;margin-bottom:24px;">Let's build something great together.</p>
            <a href="contact.php" style="display:inline-flex;align-items:center;gap:8px;background:#5544FF;color:#fff;padding:14px 30px;border-radius:30px;font-weight:700;text-decoration:none;font-size:15px;">
                Get In Touch <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <!-- End CTA -->

    <?php include 'chatbot/chatbot.php'; ?>
    <?php include 'includes/footer.php'; ?>
