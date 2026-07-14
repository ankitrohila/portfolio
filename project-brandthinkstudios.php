<?php include 'includes/header.php'; ?>

<style>
.proj-detail-hero {
    position: relative;
    overflow: hidden;
    min-height: 520px;
    display: flex;
    align-items: flex-end;
    padding-bottom: 60px;
    background: linear-gradient(135deg, #1a0050 0%, #0d0d2b 100%);
}
.proj-detail-hero .bg-screenshot {
    position: absolute;
    inset: 0;
    background: url('assets/img/portfolio/proj_grownearby.jpg') center top / cover no-repeat;
    filter: brightness(0.18) blur(2px);
    transform: scale(1.04);
}
.proj-detail-hero .container { position: relative; z-index: 2; }
.proj-detail-hero .hero-badge {
    display: inline-block;
    background: #5544FF;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 14px;
    border-radius: 20px;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 16px;
}
.proj-detail-hero h1 { font-size: 52px; font-weight: 900; color: #fff; margin-bottom: 12px; }
.proj-detail-hero .hero-meta { color: rgba(255,255,255,0.65); font-size: 15px; }
.proj-detail-hero .hero-meta span { margin-right: 24px; }
.proj-detail-hero .hero-meta i { margin-right: 6px; color: #5544FF; }

.proj-detail-body { padding: 80px 0; }
.proj-info-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.08);
    padding: 32px;
    position: sticky;
    top: 100px;
}
.proj-info-card h4 { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #5544FF; margin-bottom: 16px; }
.proj-info-card ul { list-style: none; padding: 0; margin: 0 0 24px; }
.proj-info-card ul li {
    padding: 10px 0;
    border-bottom: 1px solid #f0f0f0;
    font-size: 14px;
    display: flex;
    justify-content: space-between;
    gap: 10px;
}
.proj-info-card ul li strong { color: #666; font-weight: 500; white-space: nowrap; }
.proj-info-card ul li span { font-weight: 700; text-align: right; }
.proj-info-card .tech-pills { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 24px; }
.proj-info-card .tech-pills span {
    background: #f0eeff;
    color: #5544FF;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
}
.btn-visit-full {
    display: block;
    background: #5544FF;
    color: #fff !important;
    text-align: center;
    padding: 14px;
    border-radius: 10px;
    font-weight: 700;
    text-decoration: none;
    font-size: 15px;
    transition: background 0.2s;
}
.btn-visit-full:hover { background: #3d2ee0; color: #fff !important; }
.proj-content h2 { font-size: 28px; font-weight: 800; margin-bottom: 16px; margin-top: 40px; }
.proj-content h2:first-child { margin-top: 0; }
.proj-content p { font-size: 16px; line-height: 1.85; opacity: 0.8; margin-bottom: 16px; }
.proj-content ul.styled { padding-left: 0; list-style: none; }
.proj-content ul.styled li {
    padding: 8px 0 8px 28px;
    position: relative;
    font-size: 15px;
    opacity: 0.8;
    border-bottom: 1px dashed #eee;
}
.proj-content ul.styled li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #5544FF;
    font-weight: 700;
}

/* Client project cards */
.client-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin: 28px 0; }
.client-card {
    background: #f9f8ff;
    border-radius: 12px;
    padding: 18px 20px;
    border-left: 3px solid #5544FF;
}
.client-card h5 { font-size: 14px; font-weight: 800; margin-bottom: 4px; }
.client-card p { font-size: 12px; opacity: 0.6; margin: 0; }

.proj-nav-bar {
    background: #f8f7ff;
    padding: 24px 0;
    border-top: 1px solid #eee;
}
.proj-nav-bar .nav-item { display: flex; align-items: center; gap: 14px; text-decoration: none; color: inherit; }
.proj-nav-bar .nav-item:hover h6 { color: #5544FF; }
.proj-nav-bar .nav-label { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.5; }
.proj-nav-bar h6 { font-size: 15px; font-weight: 700; margin: 0; transition: color 0.2s; }

@media (max-width: 575px) {
    .client-grid { grid-template-columns: 1fr; }
}
</style>

<div class="proj-detail-hero">
    <div class="bg-screenshot"></div>
    <div class="container">
        <span class="hero-badge">Full Stack · WordPress · PHP · Laravel</span>
        <h1>BrandThink Studios</h1>
        <div class="hero-meta">
            <span><i class="fas fa-map-marker-alt"></i>New Delhi, India</span>
            <span><i class="fas fa-calendar"></i>April 2026 — Present</span>
            <span><i class="fas fa-briefcase"></i>Full Stack Developer</span>
        </div>
    </div>
</div>

<div class="proj-detail-body">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 pr-lg-5">
                <div class="proj-content">

                    <h2>About the Company</h2>
                    <p>BrandThink Studios Pvt Ltd is a New Delhi-based creative and digital solutions agency, building premium web experiences for luxury and lifestyle brands. As a Full Stack Developer, I work on end-to-end web projects — from UI design implementation to backend PHP/Laravel development and database architecture.</p>
                    <p>The agency focuses on high-end clients in real estate, food &amp; beverage, events, and lifestyle — demanding pixel-perfect execution and robust technical foundations.</p>

                    <h2>Client Projects</h2>
                    <p>Key websites and platforms built during this engagement:</p>
                    <div class="client-grid">
                        <div class="client-card">
                            <h5>Bluebells Luxury Real Estate</h5>
                            <p>Premium real estate portal with property listings, virtual tours integration, and lead capture CRM.</p>
                        </div>
                        <div class="client-card">
                            <h5>Bakers</h5>
                            <p>Modern bakery and food brand website with menu, online ordering integration, and brand storytelling.</p>
                        </div>
                        <div class="client-card">
                            <h5>Little Riders Cup</h5>
                            <p>Sports event platform for a children's riding competition — registrations, schedules, and results.</p>
                        </div>
                        <div class="client-card">
                            <h5>IBFW Weddings</h5>
                            <p>Luxury wedding planning website with portfolio galleries, vendor coordination tools, and inquiry system.</p>
                        </div>
                    </div>

                    <h2>My Role &amp; Responsibilities</h2>
                    <ul class="styled">
                        <li>Full-stack development from Figma designs to live deployment</li>
                        <li>WordPress custom theme development for luxury brand clients</li>
                        <li>PHP / Laravel backend for custom portals and CRM functionality</li>
                        <li>MySQL database architecture and query optimisation</li>
                        <li>AWS S3 media storage and Cloudflare CDN configuration</li>
                        <li>Mobile responsiveness, performance tuning, and Core Web Vitals</li>
                        <li>SEO/AEO implementation and on-page optimisation</li>
                    </ul>

                    <h2>Tech Stack Used</h2>
                    <p>WordPress with custom PHP themes serves as the foundation for most client projects. Laravel is used for more complex portals requiring authentication, booking systems, or CRM dashboards. MySQL powers all database layers, with deployment on Hostinger and GoDaddy hosting.</p>

                    <h2>Outcome</h2>
                    <p>Currently building and shipping production-quality websites for premium brand clients — maintaining agency-level quality standards with fast turnaround times across multiple concurrent projects.</p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="proj-info-card">
                    <h4>Project Info</h4>
                    <ul>
                        <li><strong>Company</strong><span>BrandThink Studios</span></li>
                        <li><strong>Location</strong><span>New Delhi, India</span></li>
                        <li><strong>Role</strong><span>Full Stack Developer</span></li>
                        <li><strong>Period</strong><span>Apr 2026 – Present</span></li>
                        <li><strong>Industry</strong><span>Luxury / Lifestyle</span></li>
                        <li><strong>Type</strong><span>WordPress / PHP</span></li>
                        <li><strong>Clients</strong><span>4 Active Projects</span></li>
                    </ul>
                    <h4>Tech Stack</h4>
                    <div class="tech-pills">
                        <span>WordPress</span><span>PHP</span><span>Laravel</span>
                        <span>HTML5</span><span>CSS3</span><span>JavaScript</span>
                        <span>MySQL</span><span>AWS S3</span><span>Cloudflare</span>
                    </div>
                    <a href="https://brandthinkstudios.com" target="_blank" class="btn-visit-full">
                        <i class="fas fa-external-link-alt"></i> Visit brandthinkstudios.com
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="proj-nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="projects.php" class="nav-item">
                    <i class="fas fa-th-large" style="font-size:20px;color:#5544FF;"></i>
                    <div>
                        <div class="nav-label">Back to</div>
                        <h6>All Projects</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 text-end">
                <a href="project-grownearby.php" class="nav-item justify-content-end">
                    <div>
                        <div class="nav-label">Next Project</div>
                        <h6>Grow Nearby</h6>
                    </div>
                    <i class="fas fa-arrow-right" style="font-size:20px;color:#5544FF;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
