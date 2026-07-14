<?php include 'includes/header.php'; ?>

<style>
.svc-hero {
    padding: 110px 0 60px;
    text-align: center;
    background: #f9f8ff;
}
.svc-hero .sub-label {
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
.svc-hero h1 { font-size: 46px; font-weight: 800; margin-bottom: 12px; }
.svc-hero p { font-size: 16px; max-width: 560px; margin: 0 auto; opacity: 0.7; line-height: 1.7; }

/* Service cards */
.svc-grid { padding: 80px 0; }
.svc-card {
    background: #fff;
    border-radius: 18px;
    padding: 36px 30px;
    margin-bottom: 28px;
    box-shadow: 0 4px 28px rgba(0,0,0,0.06);
    border: 1.5px solid transparent;
    transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
    height: 100%;
}
.svc-card:hover {
    border-color: #5544FF;
    box-shadow: 0 12px 48px rgba(85,68,255,0.12);
    transform: translateY(-4px);
}
.svc-card .svc-icon {
    width: 56px;
    height: 56px;
    background: rgba(85,68,255,0.08);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #5544FF;
}
.svc-card .svc-num {
    font-size: 11px;
    font-weight: 700;
    color: #5544FF;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 8px;
    display: block;
}
.svc-card h3 { font-size: 20px; font-weight: 800; margin-bottom: 12px; }
.svc-card p { font-size: 14px; line-height: 1.8; opacity: 0.7; margin-bottom: 16px; }
.svc-card ul { padding-left: 0; list-style: none; margin: 0; }
.svc-card ul li {
    padding: 6px 0 6px 22px;
    position: relative;
    font-size: 13px;
    opacity: 0.75;
    border-bottom: 1px dashed #f0f0f0;
}
.svc-card ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #5544FF;
    font-weight: 700;
}
.svc-card ul li:last-child { border-bottom: none; }

/* Stack pills section */
.stack-section {
    background: #0d0d0d;
    color: #fff;
    padding: 70px 0;
    text-align: center;
}
.stack-section h2 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }
.stack-section p { opacity: 0.55; margin-bottom: 36px; }
.stack-pills { display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; }
.stack-pill {
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.12);
    color: #fff;
    padding: 10px 22px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.3px;
    transition: background 0.2s;
}
.stack-pill:hover { background: rgba(85,68,255,0.35); border-color: #5544FF; }

/* CTA */
.svc-cta { padding: 80px 0; text-align: center; background: #f9f8ff; }
.svc-cta h2 { font-size: 34px; font-weight: 800; margin-bottom: 12px; }
.svc-cta p { opacity: 0.65; margin-bottom: 28px; font-size: 15px; }

@media (max-width: 991px) {
    .svc-hero { padding: 90px 0 44px; }
    .svc-hero h1 { font-size: 32px; }
    .svc-grid { padding: 56px 0; }
    .svc-card { margin-bottom: 20px; }
}
@media (max-width: 575px) {
    .svc-hero h1 { font-size: 26px; }
    .stack-section h2 { font-size: 24px; }
    .svc-cta h2 { font-size: 26px; }
}
</style>

<!-- Hero -->
<div class="svc-hero">
    <div class="container">
        <span class="sub-label">What I Offer</span>
        <h1>Professional Web Development Services</h1>
        <p>From WordPress websites to full PHP applications — built for performance, SEO, and long-term business growth.</p>
    </div>
</div>

<!-- Services Grid -->
<div class="svc-grid">
    <div class="container">
        <div class="row">

            <!-- 01 WordPress Development -->
            <div class="col-lg-6 d-flex">
                <div class="svc-card">
                    <div class="svc-icon"><i class="fab fa-wordpress"></i></div>
                    <span class="svc-num">01</span>
                    <h3>WordPress Development</h3>
                    <p>Custom WordPress websites built from scratch — child themes, multi-builder expertise (Elementor Pro, Divi, Gutenberg, Be), WooCommerce, and plugin customisation.</p>
                    <ul>
                        <li>Elementor Pro / Divi / Gutenberg / Be Theme</li>
                        <li>Custom Child Theme & Full Theme Development</li>
                        <li>WooCommerce / eCommerce Integrations</li>
                        <li>Plugin Development & Customisation</li>
                        <li>Performance, Security & Uptime Management</li>
                    </ul>
                </div>
            </div>

            <!-- 02 PHP / Laravel Development -->
            <div class="col-lg-6 d-flex">
                <div class="svc-card">
                    <div class="svc-icon"><i class="fab fa-php"></i></div>
                    <span class="svc-num">02</span>
                    <h3>PHP / Laravel Development</h3>
                    <p>Full-stack web applications, custom CRMs, and event portals using PHP frameworks — deployed on AWS EC2, GoDaddy, Hostinger, and Cloudflare.</p>
                    <ul>
                        <li>Laravel, CodeIgniter & Yii Frameworks</li>
                        <li>Custom CRM & Admin Dashboard Development</li>
                        <li>Event Management & Registration Portals</li>
                        <li>REST API Integration & Development</li>
                        <li>AWS S3 / EC2 / Cloudflare Deployment</li>
                    </ul>
                </div>
            </div>

            <!-- 03 SEO, AEO & GEO -->
            <div class="col-lg-6 d-flex">
                <div class="svc-card">
                    <div class="svc-icon"><i class="fas fa-search"></i></div>
                    <span class="svc-num">03</span>
                    <h3>SEO, AEO &amp; GEO Optimisation</h3>
                    <p>Modern search strategies for AI-era discoverability — optimising not just for Google, but for AI answer engines (ChatGPT, Perplexity, Gemini) and generative search results.</p>
                    <ul>
                        <li>On-Page & Technical SEO Audit</li>
                        <li>Answer Engine Optimisation (AEO / AI-IO)</li>
                        <li>Generative Engine Optimisation (GEO)</li>
                        <li>Schema Markup & Structured Data</li>
                        <li>Core Web Vitals & Page Speed Optimisation</li>
                    </ul>
                </div>
            </div>

            <!-- 04 Custom Website & Landing Pages -->
            <div class="col-lg-6 d-flex">
                <div class="svc-card">
                    <div class="svc-icon"><i class="fas fa-laptop-code"></i></div>
                    <span class="svc-num">04</span>
                    <h3>Custom Website &amp; Landing Page Design</h3>
                    <p>Pixel-perfect, conversion-focused websites for businesses across real estate, hospitality, home services, education, and more — built with Bootstrap, HTML5, and CSS3.</p>
                    <ul>
                        <li>Responsive HTML5 / CSS3 / Bootstrap Builds</li>
                        <li>High-Converting Landing Pages</li>
                        <li>Figma / Adobe XD to Code</li>
                        <li>Multi-industry Experience (Real Estate, HVAC, Events)</li>
                        <li>Cross-browser Compatibility</li>
                    </ul>
                </div>
            </div>

            <!-- 05 Website Maintenance -->
            <div class="col-lg-6 d-flex">
                <div class="svc-card">
                    <div class="svc-icon"><i class="fas fa-tools"></i></div>
                    <span class="svc-num">05</span>
                    <h3>Website Maintenance &amp; Support</h3>
                    <p>Ongoing website care — updates, backups, security patches, speed optimisation, and content changes — so your website stays fast, secure, and running 24/7.</p>
                    <ul>
                        <li>WordPress Core, Theme & Plugin Updates</li>
                        <li>Regular Backups & Security Hardening</li>
                        <li>Uptime Monitoring & Emergency Fixes</li>
                        <li>Content Updates & Image Optimisation</li>
                        <li>Hosting Migration & Domain Management</li>
                    </ul>
                </div>
            </div>

            <!-- 06 AI-Integrated Solutions -->
            <div class="col-lg-6 d-flex">
                <div class="svc-card">
                    <div class="svc-icon"><i class="fas fa-robot"></i></div>
                    <span class="svc-num">06</span>
                    <h3>AI-Integrated Web Solutions</h3>
                    <p>Embedding AI automation into websites and business workflows — chatbots, AI content pipelines, smart lead capture, and intelligent CRM integrations that save time and drive revenue.</p>
                    <ul>
                        <li>AI Chatbot Integration (Website / WhatsApp)</li>
                        <li>AI Content & SEO Automation Pipelines</li>
                        <li>Smart Lead Capture & CRM Workflows</li>
                        <li>OpenAI / Claude API Integration</li>
                        <li>Business Process Automation</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Tech Stack -->
<div class="stack-section">
    <div class="container">
        <h2>Technologies I Work With</h2>
        <p>A battle-tested stack across 5 companies and 80+ websites</p>
        <div class="stack-pills">
            <span class="stack-pill">PHP (Core)</span>
            <span class="stack-pill">Laravel</span>
            <span class="stack-pill">CodeIgniter</span>
            <span class="stack-pill">Yii</span>
            <span class="stack-pill">WordPress</span>
            <span class="stack-pill">Elementor Pro</span>
            <span class="stack-pill">Divi Builder</span>
            <span class="stack-pill">WooCommerce</span>
            <span class="stack-pill">Shopify</span>
            <span class="stack-pill">HTML5</span>
            <span class="stack-pill">CSS3</span>
            <span class="stack-pill">Bootstrap 5</span>
            <span class="stack-pill">JavaScript</span>
            <span class="stack-pill">jQuery</span>
            <span class="stack-pill">MySQL</span>
            <span class="stack-pill">AWS S3 / EC2</span>
            <span class="stack-pill">Cloudflare</span>
            <span class="stack-pill">Hostinger</span>
            <span class="stack-pill">GoDaddy</span>
            <span class="stack-pill">SEO / AEO / GEO</span>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="svc-cta">
    <div class="container">
        <h2>Have a project in mind?</h2>
        <p>Let's discuss your requirements and build something that drives real results for your business.</p>
        <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
            <a href="contact.php" style="display:inline-flex;align-items:center;gap:8px;background:#5544FF;color:#fff;padding:14px 30px;border-radius:30px;font-weight:700;text-decoration:none;font-size:15px;">
                Get In Touch <i class="fas fa-arrow-right"></i>
            </a>
            <a href="projects.php" style="display:inline-flex;align-items:center;gap:8px;border:2px solid #5544FF;color:#5544FF;padding:13px 28px;border-radius:30px;font-weight:700;text-decoration:none;font-size:15px;">
                <i class="fas fa-th-large"></i> View Portfolio
            </a>
        </div>
    </div>
</div>

<?php include 'chatbot/chatbot.php'; ?>
<?php include 'includes/footer.php'; ?>
