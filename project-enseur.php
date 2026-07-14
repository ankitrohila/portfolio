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
    background: url('assets/img/portfolio/proj_enseur.jpg') center top / cover no-repeat;
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

<!-- ===== HERO ===== -->
<div class="proj-detail-hero">
    <div class="bg-screenshot"></div>
    <div class="container">
        <span class="hero-badge">PHP · WordPress · Event Tech · Laravel</span>
        <h1>Enseur</h1>
        <div class="hero-meta">
            <span><i class="fas fa-map-marker-alt"></i>New Delhi, India</span>
            <span><i class="fas fa-calendar"></i>Dec 2023 — Aug 2025</span>
            <span><i class="fas fa-briefcase"></i>Web Developer</span>
        </div>
    </div>
</div>

<!-- ===== BODY ===== -->
<div class="proj-detail-body">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 pr-lg-5">
                <div class="proj-content">

                    <h2>About the Project</h2>
                    <p>Enseur is an event management technology company based in New Delhi, India, primarily serving the public sector and government clients. The platform powers online events, webinars, conferences, and large-scale digital gatherings for organisations across India.</p>
                    <p>Working here for nearly two years, I gained deep experience in PHP frameworks alongside WordPress — building robust, scalable web applications that handled high traffic during live events and government proceedings.</p>

                    <div class="screenshot-full-wrap">
                        <img src="assets/img/portfolio/proj_enseur.jpg" alt="Enseur Full Page Screenshot">
                    </div>

                    <h2>My Role & Responsibilities</h2>
                    <ul class="styled">
                        <li>Developing and maintaining websites and webapps on WordPress and PHP (Yii, CodeIgniter, Laravel) on a daily basis</li>
                        <li>Working independently with public sector clients to deliver government-facing portals</li>
                        <li>Full-stack development: frontend interfaces and backend PHP logic for event management systems</li>
                        <li>Building event registration, webinar, and live-streaming web applications</li>
                        <li>Team collaboration for complex multi-module projects and webinar websites</li>
                        <li>Database design and MySQL query optimisation for large event datasets</li>
                    </ul>

                    <h2>Tech Stack Used</h2>
                    <p>PHP was the backbone of all backend work — spanning multiple frameworks: Yii for enterprise-grade apps, CodeIgniter for rapid development, and Laravel for modern RESTful features. WordPress powered content-heavy portals. MySQL handled all relational data.</p>

                    <h2>Outcome</h2>
                    <p>Over nearly two years, I delivered multiple production-grade event management platforms used by government bodies, NGOs, and public sector entities. The experience gave me significant depth in PHP framework development and enterprise web application architecture.</p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="proj-info-card">
                    <h4>Project Info</h4>
                    <ul>
                        <li><strong>Company</strong><span>Enseur</span></li>
                        <li><strong>Location</strong><span>New Delhi, India</span></li>
                        <li><strong>Role</strong><span>Web Developer</span></li>
                        <li><strong>Period</strong><span>Dec 2023 – Aug 2025</span></li>
                        <li><strong>Industry</strong><span>Event Tech / Gov</span></li>
                        <li><strong>Type</strong><span>PHP / WordPress</span></li>
                    </ul>
                    <h4>Tech Stack</h4>
                    <div class="tech-pills">
                        <span>WordPress</span><span>PHP</span><span>Yii</span>
                        <span>CodeIgniter</span><span>Laravel</span><span>MySQL</span>
                        <span>HTML5</span><span>CSS3</span><span>JavaScript</span>
                    </div>
                    <a href="https://enseur.in" target="_blank" class="btn-visit-full">
                        <i class="fas fa-external-link-alt"></i> Visit enseur.in
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
                <a href="project-grownearby.php" class="nav-item">
                    <i class="fas fa-arrow-left" style="font-size:20px;color:#5544FF;"></i>
                    <div>
                        <div class="nav-label">Previous</div>
                        <h6>Grow Nearby</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 text-end">
                <a href="project-brandforce360.php" class="nav-item justify-content-end">
                    <div>
                        <div class="nav-label">Next Project</div>
                        <h6>Brandforce 360</h6>
                    </div>
                    <i class="fas fa-arrow-right" style="font-size:20px;color:#5544FF;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
