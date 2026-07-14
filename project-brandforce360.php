<?php include 'includes/header.php'; ?>

<style>
.proj-detail-hero {
    position: relative;
    overflow: hidden;
    min-height: 520px;
    display: flex;
    align-items: flex-end;
    padding-bottom: 60px;
}
.proj-detail-hero .bg-screenshot {
    position: absolute;
    inset: 0;
    background: url('assets/img/portfolio/proj_brandforce360.jpg') center top / cover no-repeat;
    filter: brightness(0.25) blur(2px);
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
.screenshot-full-wrap {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.12);
    margin: 40px 0;
    max-height: 600px;
    overflow-y: auto;
}
.screenshot-full-wrap img { width: 100%; display: block; }
.proj-nav-bar {
    background: #f8f7ff;
    padding: 24px 0;
    border-top: 1px solid #eee;
}
.proj-nav-bar .nav-item { display: flex; align-items: center; gap: 14px; text-decoration: none; color: inherit; }
.proj-nav-bar .nav-item:hover h6 { color: #5544FF; }
.proj-nav-bar .nav-label { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.5; }
.proj-nav-bar h6 { font-size: 15px; font-weight: 700; margin: 0; transition: color 0.2s; }
</style>

<div class="proj-detail-hero">
    <div class="bg-screenshot"></div>
    <div class="container">
        <span class="hero-badge">WordPress · Elementor · Divi · Multi-builder</span>
        <h1>Brandforce 360</h1>
        <div class="hero-meta">
            <span><i class="fas fa-map-marker-alt"></i>New Delhi, India</span>
            <span><i class="fas fa-calendar"></i>Jun 2023 — Oct 2023</span>
            <span><i class="fas fa-briefcase"></i>Web Developer</span>
        </div>
    </div>
</div>

<div class="proj-detail-body">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 pr-lg-5">
                <div class="proj-content">

                    <h2>About the Project</h2>
                    <p>Brandforce 360 is a New Delhi-based digital marketing and branding agency offering services including website development, brand identity, SEO, and social media marketing to businesses across India. The agency maintains a portfolio of client websites across multiple industries.</p>
                    <p>As a Web Developer, I was responsible for developing and maintaining WordPress websites for multiple clients simultaneously, working across several page builders based on client requirements and existing setups.</p>

                    <div class="screenshot-full-wrap">
                        <img src="assets/img/portfolio/proj_brandforce360.jpg" alt="Brandforce 360 Full Page Screenshot">
                    </div>

                    <h2>My Role & Responsibilities</h2>
                    <ul class="styled">
                        <li>Developing and maintaining WordPress websites on multiple builders: Elementor, Gutenberg, Divi, Be</li>
                        <li>Ensuring peak performance and security across all client websites</li>
                        <li>Regular updates, maintenance, and uptime monitoring for client sites</li>
                        <li>Managing multiple projects simultaneously with strict timelines</li>
                        <li>Custom WordPress theme and plugin customisations for client-specific requirements</li>
                        <li>Page speed optimisation and Core Web Vitals improvements</li>
                    </ul>

                    <h2>Tech Stack Used</h2>
                    <p>WordPress was the primary CMS across all projects. I worked with Elementor Pro, Gutenberg (Block Editor), Divi Builder, and Be theme — giving me broad exposure to the WordPress ecosystem. PHP was used for custom template functions and plugin modifications.</p>

                    <h2>Outcome</h2>
                    <p>Successfully delivered multiple client websites on schedule, maintaining a full agency client roster with zero downtime incidents. Gained strong multi-builder WordPress proficiency and experience managing parallel projects under agency timelines.</p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="proj-info-card">
                    <h4>Project Info</h4>
                    <ul>
                        <li><strong>Company</strong><span>Brandforce 360</span></li>
                        <li><strong>Location</strong><span>New Delhi, India</span></li>
                        <li><strong>Role</strong><span>Web Developer</span></li>
                        <li><strong>Period</strong><span>Jun – Oct 2023</span></li>
                        <li><strong>Industry</strong><span>Digital Marketing</span></li>
                        <li><strong>Type</strong><span>Agency / WordPress</span></li>
                    </ul>
                    <h4>Tech Stack</h4>
                    <div class="tech-pills">
                        <span>WordPress</span><span>Elementor</span><span>Divi</span>
                        <span>Gutenberg</span><span>Be Theme</span><span>PHP</span>
                        <span>CSS3</span><span>JavaScript</span><span>Security</span>
                    </div>
                    <a href="https://www.brandforce360.com" target="_blank" class="btn-visit-full">
                        <i class="fas fa-external-link-alt"></i> Visit brandforce360.com
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
                <a href="project-enseur.php" class="nav-item">
                    <i class="fas fa-arrow-left" style="font-size:20px;color:#5544FF;"></i>
                    <div>
                        <div class="nav-label">Previous</div>
                        <h6>Enseur</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 text-end">
                <a href="project-griditsolutions.php" class="nav-item justify-content-end">
                    <div>
                        <div class="nav-label">Next Project</div>
                        <h6>Grid IT Solutions</h6>
                    </div>
                    <i class="fas fa-arrow-right" style="font-size:20px;color:#5544FF;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
