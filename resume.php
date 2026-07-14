<?php include 'includes/header.php'; ?>

<style>
.resume-hero {
    padding: 110px 0 50px;
    text-align: center;
    background: #f9f8ff;
}
.resume-hero .sub-label {
    display: inline-block;
    background: rgba(85,68,255,0.1);
    color: #5544FF;
    padding: 5px 18px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 14px;
}
.resume-hero h1 { font-size: 46px; font-weight: 800; margin-bottom: 14px; }
.resume-hero p { font-size: 16px; max-width: 560px; margin: 0 auto 24px; opacity: 0.7; line-height: 1.7; }
.resume-hero .download-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #5544FF;
    color: #fff;
    padding: 14px 30px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: background 0.2s;
}
.resume-hero .download-btn:hover { background: #3d2ee0; color: #fff; }

@media (max-width: 991px) {
    .resume-hero { padding: 90px 0 36px; }
    .resume-hero h1 { font-size: 32px; }
}
@media (max-width: 575px) {
    .resume-hero h1 { font-size: 26px; }
}
</style>

<!-- HERO -->
<div class="resume-hero">
    <div class="container">
        <span class="sub-label">My Resume</span>
        <h1>Professional Career &amp; Education</h1>
        <p>3+ years across 5 companies, 80+ websites built — from WordPress agencies to government event-tech platforms and US-based digital marketing firms.</p>
        <a href="https://drive.google.com/file/d/1ndZychVwCWJX6jxrzQ407irwLxnIbZ4t/view?usp=sharing" target="_blank" class="download-btn">
            <i class="fas fa-download"></i> Download Resume PDF
        </a>
    </div>
</div>

<!-- EXPERIENCE & EDUCATION -->
<div class="career-area default-padding">
    <div class="shape">
        <img src="assets/img/shape/6.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <ul class="nav nav-tabs career-nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tabs_1" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab" aria-selected="true">
                                My Experience
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tabs_2" data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab" aria-selected="false">
                                My Education
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content career-tab-content" id="myTabContent">
                    <!-- EXPERIENCE -->
                    <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tabs_1">
                        <ul class="timeline-style-one-items">
                            <li>
                                <div class="left">
                                    <h5>Apr 2026 – Present</h5>
                                    <img src="assets/img/icon/12.png" alt="">
                                </div>
                                <div class="right">
                                    <h3>FULL STACK DEVELOPER</h3>
                                    <h6>BrandThink Studios Pvt Ltd — New Delhi, India</h6>
                                    <p>Manage all technical products and services. Lead overall technical operations, coordinate with design, marketing, and content teams. Projects: Bluebells Luxury Real Estate, Bakers, Little Riders Cup, IBFW Weddings. Webapps, CRMs, AI-powered solutions, performance marketing, social analytics, Shopify stores, and WordPress CRM-based real estate clients.</p>
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
                                    <p>INC. 5000 Growth Leader &amp; Netty Award winner. Built pixel-perfect WordPress sites with Elementor Pro for HVAC &amp; home service clients: Mike Diamond Plumbing, ALL-ISR, Chilly-Billy Heating &amp; Cooling, James Armstrong Plumbing, Plumbing Template. SEO, AEO, AIO strategies. Team management, AI implementation in processes.</p>
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
                                    <p>Event management technology for public sector. Full-stack (WordPress + PHP Yii/CodeIgniter/Laravel). Projects: AIMA, Ananta Center, BYST, EMS-Works, Flowvillas, ABS Vacations, Yatraveda Journey. Frontend and backend development for event portals, webapps, and webinar platforms.</p>
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
                                    <p>Digital marketing agency. WordPress websites on Elementor, Gutenberg, Divi, Be — ensuring peak performance, security, and uptime. Projects: Super Pattern, AVG Logistics, Maxvolt Energy, Netexpress. Managed multiple concurrent projects with strict timelines.</p>
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
                                    <p>Built responsive WordPress websites using themes, child themes, and from scratch. Projects: Ohmypet Grooming, Shambhu Dayal School, Boxica Packaging, GSIL Edu. Society, PD Metals Craft, Vidyarthi Juniors, R S Solar, Softhics. Speed and performance optimisation.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- EDUCATION -->
                    <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tabs_2">
                        <ul class="timeline-style-one-items">
                            <li>
                                <div class="left">
                                    <h5>Completed Jun 2023</h5>
                                    <h4>PGDCA</h4>
                                </div>
                                <div class="right">
                                    <h3>Post Graduate Diploma in Computer Applications (PGDCA-SPD)</h3>
                                    <h6>IGNOU — Indira Gandhi National Open University</h6>
                                    <p>Advanced postgraduate diploma covering software development, database management, and information systems.</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <h5>Completed Jun 2022</h5>
                                    <h4>M.A.</h4>
                                </div>
                                <div class="right">
                                    <h3>Master of Arts — Political Science</h3>
                                    <h6>IGNOU — Indira Gandhi National Open University</h6>
                                    <p>Postgraduate degree developing research, analytical, and critical thinking skills.</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <h5>Completed Dec 2020</h5>
                                    <h4>B.A.</h4>
                                </div>
                                <div class="right">
                                    <h3>Bachelor of Arts</h3>
                                    <h6>IGNOU — Indira Gandhi National Open University</h6>
                                    <p>Undergraduate degree providing a foundation in humanities and analytical reasoning — the base for a self-taught transition into web development.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Tech Stack Summary -->
<div style="background:#0d0d0d;padding:60px 0;text-align:center;">
    <div class="container">
        <h4 style="color:rgba(255,255,255,0.4);font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:8px;">TECH STACKS</h4>
        <h2 style="color:#fff;font-size:28px;font-weight:800;margin-bottom:28px;">Technologies I Work With</h2>
        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px;">
            <?php
            $stacks = ['PHP (Core)','Laravel','CodeIgniter','Yii','HTML5','CSS3','JavaScript','Bootstrap','WordPress','Shopify','Custom CRMs','MySQL','Hostinger','GoDaddy','AWS S3/EC2','Cloudflare','Figma','Adobe XD','SEO/AEO/GEO'];
            foreach ($stacks as $s): ?>
            <span style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);color:#fff;padding:9px 18px;border-radius:30px;font-size:13px;font-weight:600;"><?= $s ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- CTA -->
<div style="padding:60px 0;text-align:center;background:#f9f8ff;">
    <div class="container">
        <h3 style="font-size:28px;font-weight:800;margin-bottom:10px;">Want to see my work?</h3>
        <p style="opacity:.6;margin-bottom:24px;">Check out the live websites I've built across 5 companies.</p>
        <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
            <a href="projects.php" style="display:inline-flex;align-items:center;gap:8px;background:#5544FF;color:#fff;padding:13px 26px;border-radius:30px;font-weight:700;text-decoration:none;font-size:14px;">
                View Portfolio <i class="fas fa-arrow-right"></i>
            </a>
            <a href="https://drive.google.com/file/d/1ndZychVwCWJX6jxrzQ407irwLxnIbZ4t/view?usp=sharing" target="_blank" style="display:inline-flex;align-items:center;gap:8px;border:2px solid #5544FF;color:#5544FF;padding:12px 24px;border-radius:30px;font-weight:700;text-decoration:none;font-size:14px;">
                <i class="fas fa-download"></i> Download CV
            </a>
        </div>
    </div>
</div>

<?php include 'chatbot/chatbot.php'; ?>
<?php include 'includes/footer.php'; ?>
