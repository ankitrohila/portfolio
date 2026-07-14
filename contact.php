<?php include 'includes/header.php'; ?>

<style>
.contact-hero {
    padding: 110px 0 50px;
    text-align: center;
    background: #f9f8ff;
}
.contact-hero .sub-label {
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
.contact-hero h1 { font-size: 46px; font-weight: 800; margin-bottom: 14px; }
.contact-hero p { font-size: 16px; max-width: 560px; margin: 0 auto; opacity: 0.7; line-height: 1.7; }

.contact-cards { padding: 80px 0; }
.contact-card {
    background: #fff;
    border-radius: 16px;
    padding: 40px 28px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0,0,0,0.06);
    border: 1.5px solid transparent;
    transition: border-color 0.2s, transform 0.2s;
    height: 100%;
}
.contact-card:hover {
    border-color: #5544FF;
    transform: translateY(-4px);
}
.contact-card .icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: rgba(85,68,255,0.1);
    color: #5544FF;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin: 0 auto 18px;
}
.contact-card h4 { font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
.contact-card a, .contact-card p { font-size: 16px; font-weight: 600; color: #333; text-decoration: none; margin: 0; }
.contact-card a:hover { color: #5544FF; }

.contact-cta { padding: 60px 0; text-align: center; background: #0d0d0d; }
.contact-cta h3 { color: #fff; font-size: 28px; font-weight: 800; margin-bottom: 10px; }
.contact-cta p { color: rgba(255,255,255,0.5); margin-bottom: 24px; }
.contact-cta .btn-wa {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #25D366;
    color: #fff;
    padding: 14px 30px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: background 0.2s;
}
.contact-cta .btn-wa:hover { background: #1da851; color: #fff; }
.contact-cta .btn-email {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: 2px solid #5544FF;
    color: #5544FF;
    padding: 12px 28px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
}
.contact-cta .btn-email:hover { background: #5544FF; color: #fff; }

@media (max-width: 991px) {
    .contact-hero { padding: 90px 0 36px; }
    .contact-hero h1 { font-size: 32px; }
}
@media (max-width: 575px) {
    .contact-hero h1 { font-size: 26px; }
}
</style>

<!-- HERO -->
<div class="contact-hero">
    <div class="container">
        <span class="sub-label">Contact</span>
        <h1>Let's Work Together</h1>
        <p>Have a project in mind? Reach out via phone, email, or WhatsApp — I'm available for freelance and full-time opportunities.</p>
    </div>
</div>

<!-- CONTACT CARDS -->
<div class="contact-cards">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>Phone</h4>
                    <a href="tel:+918950205038">+91-8950205038</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <h4>Email</h4>
                    <a href="mailto:rohilla77@gmail.com">rohilla77@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Location</h4>
                    <p>India — Remote Available</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="contact-card">
                    <div class="icon"><i class="fab fa-whatsapp"></i></div>
                    <h4>WhatsApp</h4>
                    <a href="https://wa.me/918950205038" target="_blank">Chat on WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-card">
                    <div class="icon"><i class="fab fa-linkedin"></i></div>
                    <h4>LinkedIn</h4>
                    <a href="https://www.linkedin.com/in/rohillaankit/" target="_blank">linkedin.com/in/rohillaankit</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-clock"></i></div>
                    <h4>Availability</h4>
                    <p>40 Hours / Weekly — Active</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="contact-cta">
    <div class="container">
        <h3>Ready to start a project?</h3>
        <p>Let's discuss your requirements and bring your ideas to life.</p>
        <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
            <a href="https://wa.me/918950205038" target="_blank" class="btn-wa">
                <i class="fab fa-whatsapp"></i> WhatsApp Me
            </a>
            <a href="mailto:rohilla77@gmail.com" class="btn-email">
                <i class="fas fa-envelope"></i> Send Email
            </a>
        </div>
    </div>
</div>

<?php include 'chatbot/chatbot.php'; ?>
<?php include 'includes/footer.php'; ?>
