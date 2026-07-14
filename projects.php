<?php include 'includes/header.php'; ?>

<style>
/* ====================================================
   PORTFOLIO PAGE — Companies + Individual Projects
==================================================== */
.portfolio-hero {
    padding: 110px 0 50px;
    text-align: center;
}
.portfolio-hero .sub-label {
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
.portfolio-hero h1 { font-size: 46px; font-weight: 800; margin-bottom: 14px; }
.portfolio-hero p { font-size: 16px; max-width: 540px; margin: 0 auto; opacity: 0.7; line-height: 1.7; }

/* COMPANY SECTION */
.company-section {
    padding: 70px 0 40px;
    border-bottom: 1px solid #eee;
}
.company-section:nth-child(even) { background: #f9f8ff; }
.company-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 36px;
    flex-wrap: wrap;
}
.company-header .left { max-width: 650px; }
.company-num {
    font-size: 56px;
    font-weight: 900;
    color: #5544FF;
    opacity: 0.06;
    line-height: 1;
    margin-bottom: -10px;
    font-family: monospace;
    user-select: none;
}
.company-header h2 { font-size: 32px; font-weight: 800; margin-bottom: 6px; }
.company-loc {
    font-size: 13px;
    opacity: 0.45;
    font-weight: 500;
    margin-bottom: 8px;
}
.company-loc i { margin-right: 5px; }
.company-period {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    padding: 3px 11px;
    border-radius: 20px;
    margin-bottom: 12px;
}
.company-period.current { color: #27ae60; background: rgba(39,174,96,0.1); }
.company-period.past { color: #888; background: rgba(136,136,136,0.1); }
.company-role { font-size: 14px; font-weight: 600; color: #5544FF; margin-bottom: 6px; }
.company-desc { font-size: 14px; line-height: 1.7; opacity: 0.7; max-width: 600px; }
.company-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 14px; }
.company-tags span {
    background: rgba(85,68,255,0.07);
    color: #5544FF;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 6px;
}
.company-header .right {
    display: flex;
    gap: 10px;
    flex-shrink: 0;
    align-items: flex-start;
    padding-top: 16px;
}
.btn-pf-primary {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #5544FF;
    color: #fff !important;
    padding: 10px 22px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.2s;
}
.btn-pf-primary:hover { background: #3d2ee0; }
.btn-pf-outline {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    border: 2px solid #5544FF;
    color: #5544FF !important;
    padding: 9px 20px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    background: transparent;
    transition: all 0.2s;
}
.btn-pf-outline:hover { background: #5544FF; color: #fff !important; }

/* PROJECT GRID */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}
.project-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    border: 1.5px solid transparent;
    transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
}
.project-card:hover {
    border-color: #5544FF;
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(85,68,255,0.12);
}
.project-card .card-thumb {
    height: 180px;
    overflow: hidden;
    position: relative;
}
.project-card .card-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.4s;
}
.project-card:hover .card-thumb img { transform: scale(1.05); }
.project-card .card-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15,15,35,0.72);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    opacity: 0;
    transition: opacity 0.3s;
}
.project-card:hover .card-overlay { opacity: 1; }
.card-overlay a {
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    border: 1.5px solid #fff;
    padding: 7px 16px;
    border-radius: 30px;
    text-decoration: none;
    transition: background 0.2s;
}
.card-overlay a:hover { background: rgba(255,255,255,0.2); color: #fff; }
.project-card .card-body {
    padding: 16px 18px;
}
.project-card .card-body h4 {
    font-size: 14px;
    font-weight: 800;
    margin-bottom: 4px;
}
.project-card .card-body .card-url {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #999;
}
.project-card .card-body .card-url .dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #27ae60;
    flex-shrink: 0;
}
.project-card .card-body .card-url a {
    color: #999;
    text-decoration: none;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.project-card .card-body .card-url a:hover { color: #5544FF; }

/* CTA */
.pf-cta {
    padding: 70px 0;
    text-align: center;
    background: #f9f8ff;
}
.pf-cta h3 { font-size: 28px; font-weight: 800; margin-bottom: 10px; }
.pf-cta p { opacity: 0.65; margin-bottom: 24px; }

/* RESPONSIVE */
@media (max-width: 991px) {
    .portfolio-hero { padding: 90px 0 36px; }
    .portfolio-hero h1 { font-size: 34px; }
    .company-section { padding: 50px 0 30px; }
    .company-header { flex-direction: column; }
    .company-header .right { padding-top: 0; }
    .company-num { font-size: 40px; }
    .company-header h2 { font-size: 26px; }
    .projects-grid { grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 16px; }
}
@media (max-width: 575px) {
    .portfolio-hero h1 { font-size: 26px; }
    .projects-grid { grid-template-columns: 1fr; }
    .project-card .card-thumb { height: 160px; }
    .btn-pf-primary, .btn-pf-outline { padding: 9px 16px; font-size: 12px; }
}
</style>

<!-- ===== HERO ===== -->
<div class="portfolio-hero">
    <div class="container">
        <span class="sub-label">My Work</span>
        <h1>Projects &amp; Portfolio</h1>
        <p>All the websites I've built across 5 companies — hover any screenshot to visit the live site.</p>
    </div>
</div>

<?php
/* ======================================================
   PROJECT DATA — 5 companies, each with sub-projects
====================================================== */
$companies = [
    [
        'num'     => '01',
        'title'   => 'BrandThink Studios Pvt Ltd',
        'role'    => 'Full Stack Developer',
        'loc'     => 'New Delhi, India',
        'period'  => 'Apr 2026 — Present',
        'current' => true,
        'url'     => 'https://brandthinkstudios.com',
        'detail'  => 'project-brandthinkstudios.php',
        'desc'    => 'Managing all technical products and services — webapps, CRMs, AI-powered solutions, performance marketing tools, social analytics, Shopify stores, and WordPress CRM-based real estate clients.',
        'stack'   => ['WordPress','PHP','Laravel','Shopify','AI','CRM','MySQL'],
        'projects'=> [
            ['name'=>'Bluebells Luxury Real Estate','img'=>'brandthink_bluebells.jpg','url'=>'https://bluebellsluxury.com/'],
            ['name'=>'Bakers (Clean Crafted)','img'=>'brandthink_bakers.jpg','url'=>'https://clean-crafted-foods.myshopify.com/'],
            ['name'=>'Little Riders Cup','img'=>'brandthink_littleriders.jpg','url'=>'https://littleriddercup.com/'],
            ['name'=>'IBFW Weddings','img'=>'brandthink_ibfw.jpg','url'=>'https://ibfwweddings.com/'],
        ],
    ],
    [
        'num'     => '02',
        'title'   => 'Grow Nearby',
        'role'    => 'Web Developer',
        'loc'     => 'Tampa, Florida, USA',
        'period'  => 'Aug 2025 — Feb 2026',
        'current' => false,
        'url'     => 'https://www.grownearby.com',
        'detail'  => 'project-grownearby.php',
        'desc'    => 'INC. 5000 Growth Leader &amp; Netty Award winner. Built pixel-perfect WordPress websites for HVAC &amp; home service companies with SEO, AEO, AIO strategies.',
        'stack'   => ['WordPress','Elementor Pro','PHP','SEO','AEO','Figma','Adobe XD'],
        'projects'=> [
            ['name'=>'Mike Diamond Plumbing','img'=>'grownearby_mikediamond.jpg','url'=>'https://mikediamondservices.com/'],
            ['name'=>'ALL-ISR','img'=>'grownearby_allisr.jpg','url'=>'https://www.allisr.com/'],
            ['name'=>'Chilly-Billy Heating & Cooling','img'=>'grownearby_chillybilly.jpg','url'=>'https://www.hirechillybilly.com/'],
            ['name'=>'James Armstrong Plumbing','img'=>'grownearby_jamesarmstrong.jpg','url'=>'https://www.jamesarmstrongplumbing.com/'],
            ['name'=>'Plumbing Template','img'=>'grownearby_template.jpg','url'=>'https://tp01plumbing.grow-nearby.com/'],
        ],
    ],
    [
        'num'     => '03',
        'title'   => 'Enseur',
        'role'    => 'Web Developer',
        'loc'     => 'New Delhi, India',
        'period'  => 'Dec 2023 — Aug 2025',
        'current' => false,
        'url'     => 'https://enseur.in',
        'detail'  => 'project-enseur.php',
        'desc'    => 'Event management technology for the public sector. Full-stack development using WordPress and PHP (Yii, CodeIgniter, Laravel) for event portals, webinar platforms, and government-facing webapps.',
        'stack'   => ['WordPress','PHP','Yii','CodeIgniter','Laravel','MySQL','JavaScript'],
        'projects'=> [
            ['name'=>'AIMA','img'=>'enseur_aima.jpg','url'=>'https://www.aima.in/'],
            ['name'=>'Ananta Centre','img'=>'enseur_ananta.jpg','url'=>'https://anantacentre.in/'],
            ['name'=>'BYST','img'=>'enseur_byst.jpg','url'=>'https://byst.org.in/'],
            ['name'=>'EMS-Works','img'=>'enseur_ems.jpg','url'=>'https://ems-works.com/'],
            ['name'=>'Flowvillas','img'=>'enseur_flowvillas.jpg','url'=>'https://flowvillas.in/'],
            ['name'=>'ABS Vacations','img'=>'enseur_abs.jpg','url'=>'https://absvacations.com/'],
            ['name'=>'Yatraveda Journey','img'=>'enseur_yatraveda.jpg','url'=>'https://yatravedajourney.com/'],
        ],
    ],
    [
        'num'     => '04',
        'title'   => 'Brandforce 360',
        'role'    => 'Web Developer',
        'loc'     => 'New Delhi, India',
        'period'  => 'Jun 2023 — Oct 2023',
        'current' => false,
        'url'     => 'https://www.brandforce360.com',
        'detail'  => 'project-brandforce360.php',
        'desc'    => 'Digital marketing &amp; branding agency. Developed WordPress websites across Elementor, Gutenberg, Divi, and Be builders — managing multiple concurrent projects with security and uptime.',
        'stack'   => ['WordPress','Elementor','Divi','Gutenberg','Be Theme','PHP','CSS3'],
        'projects'=> [
            ['name'=>'Super Pattern','img'=>'bf360_superpattern.jpg','url'=>'https://superpattern.in/'],
            ['name'=>'AVG Logistics','img'=>'bf360_avglogistics.jpg','url'=>'https://avglogistics.com/'],
            ['name'=>'Maxvolt Energy','img'=>'bf360_maxvolt.jpg','url'=>'https://www.maxvoltenergy.com/'],
            ['name'=>'Netexpress UAE','img'=>'bf360_netexpress.jpg','url'=>'https://netexpressuae.com/'],
        ],
    ],
    [
        'num'     => '05',
        'title'   => 'Grid IT Solutions',
        'role'    => 'WordPress Designer',
        'loc'     => 'Sonipat, Haryana, India',
        'period'  => 'Oct 2022 — Jun 2023',
        'current' => false,
        'url'     => 'https://griditsolutions.in',
        'detail'  => 'project-griditsolutions.php',
        'desc'    => 'IT solutions company. Built responsive WordPress websites from scratch — custom child themes, full theme builds, and performance optimisation for local business clients.',
        'stack'   => ['WordPress','PHP','CSS3','Child Themes','Bootstrap','jQuery','Performance'],
        'projects'=> [
            ['name'=>'Ohmypet Grooming','img'=>'gridit_ohmypet.jpg','url'=>'https://ohmypetgrooming.in/'],
            ['name'=>'Shambhu Dayal School','img'=>'gridit_shambhudayal.jpg','url'=>'https://shambhudayalschool.in/'],
            ['name'=>'Boxica Packaging','img'=>'gridit_boxica.jpg','url'=>'https://boxika.in/'],
            ['name'=>'GSIL Edu. Society','img'=>'gridit_gsil.jpg','url'=>'https://gsiledusociety.com/'],
            ['name'=>'PD Metals Craft','img'=>'gridit_pdmetals.jpg','url'=>'https://pdmetalcraft.co.in/'],
            ['name'=>'Vidyarthi Juniors','img'=>'gridit_vidyarthi.jpg','url'=>'https://vidyarthijuniors.com/'],
            ['name'=>'R S Solar','img'=>'gridit_rssolar.jpg','url'=>'https://rssolar.in/'],
            ['name'=>'Softhics','img'=>'gridit_softhics.jpg','url'=>'https://softhics.com/'],
        ],
    ],
];

foreach ($companies as $c):
?>

<div class="company-section">
    <div class="container">
        <!-- COMPANY HEADER -->
        <div class="company-header">
            <div class="left">
                <div class="company-num"><?= $c['num'] ?></div>
                <h2><?= $c['title'] ?></h2>
                <div class="company-loc"><i class="fas fa-map-marker-alt"></i><?= $c['loc'] ?></div>
                <span class="company-period <?= $c['current'] ? 'current' : 'past' ?>"><?= $c['period'] ?></span>
                <div class="company-role"><i class="fas fa-briefcase"></i> <?= $c['role'] ?></div>
                <p class="company-desc"><?= $c['desc'] ?></p>
                <div class="company-tags">
                    <?php foreach ($c['stack'] as $s): ?>
                        <span><?= $s ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="right">
                <a href="<?= $c['detail'] ?>" class="btn-pf-primary">Company Details <i class="fas fa-arrow-right"></i></a>
                <a href="<?= $c['url'] ?>" target="_blank" rel="noopener" class="btn-pf-outline"><i class="fas fa-external-link-alt"></i> Website</a>
            </div>
        </div>

        <!-- PROJECT CARDS GRID -->
        <div class="projects-grid">
            <?php foreach ($c['projects'] as $p): ?>
            <div class="project-card">
                <div class="card-thumb">
                    <img src="assets/img/portfolio/<?= $p['img'] ?>" alt="<?= $p['name'] ?> Screenshot" loading="lazy">
                    <div class="card-overlay">
                        <a href="<?= $p['url'] ?>" target="_blank" rel="noopener"><i class="fas fa-external-link-alt"></i> Visit Site</a>
                    </div>
                </div>
                <div class="card-body">
                    <h4><?= $p['name'] ?></h4>
                    <div class="card-url">
                        <span class="dot"></span>
                        <a href="<?= $p['url'] ?>" target="_blank" rel="noopener"><?= str_replace(['https://','http://','www.'], '', rtrim($p['url'], '/')) ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php endforeach; ?>

<!-- CTA -->
<div class="pf-cta">
    <div class="container">
        <h3>Have a project in mind?</h3>
        <p>Let's build something great together.</p>
        <a href="contact.php" class="btn-pf-primary">Get In Touch <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
