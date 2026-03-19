<?php
// -----------------------------
// DEV2 bootstrap (matches DEV0 pattern)
// -----------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts (Preconnect of performents) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Global CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css?v=2">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dashboard-queries.css">
    <title>Data Tshwane AI DEV2</title>
</head>

<body>
    <!-- Anchor at the very top of your page -->
    <div id="top"></div>
    <!-- rest of your page -->

    <div class="page-wrapper">

        <header>

            <nav class="dv2-navbar">
                <div class="dv2-navbar-inner">

                    <!-- LEFT COLUMN: logo -->
                    <div class="dv2-nav-left">
                        <img src="assets/images/DaTai-logo.png" alt="Data Tshwane AI Logo">
                    </div>

                    <!-- CENTER COLUMN: identity -->
                    <div class="dv2-nav-center">
                        Data Tshwane AI (PTY) Ltd ◆ www.data‑tshwane‑ai.co.za
                    </div>

                    <!-- RIGHT COLUMN: empty balancer -->
                    <div class="dv2-nav-right"></div>

                </div>
            </nav>

            <!-- NEW HERO SECTION -->
            <section class="hero-section-modern">

                <div class="hero-container">
                    <!-- Main Hero Text -->
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Discover what your data can unlock.<br>
                            <span class="highlight hero-title-highlight">Start</span> with us.
                        </h1>

                        <p class="hero-subtitle">
                            Whether you’re just beginning or improving what you already have, we help you turn
                            your everyday numbers, records, and information into clarity, insight, growth opportunities,
                            and confident decisions.
                        </p>

                        <a class="hero-cta-btn" href="#services">Explore our services</a>
                    </div>

                    <!-- Hero Service Tiles -->
                    <div class="hero-services-grid">

                        <div class="hero-service-card" tabindex="0">
                            <span class="hero-card-icon">🌐</span>
                            <p class="hero-card-text">Websites</p>
                            <span class="hero-card-teaser">Showcase your work, attract clients</span>
                        </div>

                        <div class="hero-service-card" tabindex="0">
                            <span class="hero-card-icon">🧹</span>
                            <p class="hero-card-text">Data cleaning</p>
                            <span class="hero-card-teaser">Make messy data usable</span>
                        </div>

                        <div class="hero-service-card" tabindex="0">
                            <span class="hero-card-icon">📊</span>
                            <p class="hero-card-text">Analytics</p>
                            <span class="hero-card-teaser">Find hidden insights faster</span>
                        </div>

                        <div class="hero-service-card" tabindex="0">
                            <span class="hero-card-icon">📈</span>
                            <p class="hero-card-text">Dashboards</p>
                            <span class="hero-card-teaser">See performance in real-time</span>
                        </div>

                        <div class="hero-service-card" tabindex="0">
                            <span class="hero-card-icon">🛡️</span>
                            <p class="hero-card-text">Revenue protection</p>
                            <span class="hero-card-teaser">Reduce losses, grow revenue</span>
                        </div>

                        <div class="hero-service-card" tabindex="0">
                            <span class="hero-card-icon">📘</span>
                            <p class="hero-card-text">Learn data basics</p>
                            <span class="hero-card-teaser">Understand data, drive decisions</span>
                        </div>

                    </div>

                </div>
            </section>

        </header>

        <!-- New, very small wrapper that owns the divider + buttons + spacing -->
        <section class="hero-stack">
            <div class="hero-divider" aria-hidden="true"></div>

            <div class="hero-auth-actions">
                <a class="btn btn-primary-outline" href="login.php">Login</a>
                <a class="btn btn-primary" href="register.php">Register</a>
            </div>
        </section>

        <main>

            <!-- FEATURES SECTION -->
            <section class="dv2-features">
                <div class="dv2-features-inner">

                    <h2 class="dv2-features-title">
                        Three essentials for confident, data‑driven <span class="highlight features-title-highlight">
                            decisions.</span>
                    </h2>

                    <div class="dv2-features-grid">

                        <!-- Feature 1 -->
                        <div class="dv2-feature-card">
                            <span class="dv2-feature-icon">🔍</span>
                            <h3>Clarity</h3>
                            <p>
                                We turn scattered spreadsheets and inconsistent data into clean,
                                structured, decision‑ready information.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="dv2-feature-card">
                            <span class="dv2-feature-icon">📊</span>
                            <h3>Visibility</h3>
                            <p>
                                Dashboards and analytics that reveal patterns, progress, and risks —
                                helping teams make informed decisions faster.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="dv2-feature-card">
                            <span class="dv2-feature-icon">⚙️</span>
                            <h3>Adaptability</h3>
                            <p>
                                Modular processes that scale from one project to enterprise-wide use,
                                supporting organisations of any size.
                            </p>
                        </div>

                    </div>

                </div>
            </section>

            <section class="dv2-cta-section">
                <div class="dv2-cta-card">
                    <h2 class="dv2-cta-heading">Start your data journey now.</h2>

                    <p class="dv2-cta-text">
                        Turn your organisation’s data into clarity, structure, and impact — with modern tools built for
                        Africa.
                    </p>

                    <div class="dv2-cta-actions">
                        <a class="btn btn-primary-dv2-outline" href="register.php">Get started</a>
                        <a class="btn btn-inverse-outline-dv2" href="#contact">Contact us</a>
                    </div>

                </div>
            </section>

            <!-- ABOUT SECTION -->
            <section class="dv2-about-preview" id="about">
                <div class="dv2-about-inner">

                    <h2 class="dv2-about-title">About Data Tshwane AI</h2>

                    <p class="dv2-about-text">
                        Founded by Dr. Mokone J. Roberts, Data Tshwane AI draws on more than two decades of combined
                        experience across metallurgy, mineral economics, molecular modelling, and <span
                            class="about-text-highlight">applied data
                            science</span>.
                        <br><br>
                        Our mission is simple: help African organisations make confident, evidence‑based decisions
                        through transparent, modular, and reproducible data processes.
                    </p>

                    <a class="btn btn-primary-outline dv2-about-btn" href="about.php">Learn more</a>

                </div>
            </section>

            <!-- SERVICES SECTION -->
            <section class="dv2-services" id="services">
                <div class="dv2-services-inner">

                    <h2 class="dv2-services-title">
                        Modern data &amp; AI services for organisations of every size.
                    </h2>

                    <p class="dv2-services-subtitle">
                        Practical, <span class="services-subtitle-highlight">results‑driven</span> solutions for
                        business, education, communities and government teams.
                    </p>

                    <div class="dv2-services-grid">

                        <!-- Service Card 1 -->
                        <div class="dv2-service-card">
                            <span class="dv2-services-card-icon">🖥️</span>
                            <h3>Business Intelligence</h3>
                            <p>Clear dashboards and reports that turn raw data into actionable business decisions.</p>
                        </div>

                        <!-- Service Card 2 -->
                        <div class="dv2-service-card">
                            <span class="dv2-services-card-icon">🔢</span>
                            <h3>Data Cleaning &amp; Preparation</h3>
                            <p>Fix messy, incomplete or inconsistent data so your insights are reliable and ready for
                                analysis.</p>
                        </div>

                        <!-- Service Card 3 -->
                        <div class="dv2-service-card">
                            <span class="dv2-services-card-icon">🔭</span>
                            <h3>Predictive Analytics</h3>
                            <p>Forecast trends, detect risks, and identify opportunities with transparent statistical
                                and ML models.</p>
                        </div>

                        <!-- Service Card 4 -->
                        <div class="dv2-service-card">
                            <span class="dv2-services-card-icon">🎞️</span>
                            <h3>Dashboards &amp; Web Systems</h3>
                            <p>Custom dashboards and web tools built with PHP and databases to manage information and
                                automate processes.</p>
                        </div>

                        <!-- Service Card 5 -->
                        <div class="dv2-service-card">
                            <span class="dv2-services-card-icon">𐦂𖨆𐀪𖠋</span>
                            <h3>Community &amp; Education Insight</h3>
                            <p>Tools for schools, NGOs and local groups to understand progress, feedback, and community
                                needs.</p>
                        </div>

                        <!-- Service Card 6 -->
                        <div class="dv2-service-card">
                            <span class="dv2-services-card-icon">📋</span>
                            <h3>Data Strategy &amp; Governance</h3>
                            <p>Structure your data environment with clear policies, secure processes, and responsible
                                architecture.</p>
                        </div>

                    </div>

                </div>
            </section>

            <!-- GUIDELINES SECTION -->
            <section class="dv2-guidelines" id="guidelines">
                <div class="dv2-guidelines-inner">

                    <h2 class="dv2-guidelines-title">Our approach to data clarity.</h2>

                    <p class="dv2-guidelines-subtitle">
                        A simple, transparent delivery process that helps teams move from
                        uncertainty to <span class="guidelines-subtitle-highlight">insight</span> — and from insight to
                        measurable progress.
                    </p>

                    <div class="dv2-guidelines-grid">

                        <!-- Guideline 1 -->
                        <div class="dv2-guideline-card">
                            <span class="dv2-guideline-icon">🟢</span>
                            <h3>Get started</h3>
                            <p>
                                We begin by understanding your operational context, existing data, and
                                the decisions that matter. This first step opens the door to clarity.
                            </p>
                        </div>

                        <!-- Guideline 2 -->
                        <div class="dv2-guideline-card">
                            <span class="dv2-guideline-icon">🟡</span>
                            <h3>Get involved</h3>
                            <p>
                                We work with your team to map the real problem, identify the right
                                inputs, and co‑shape a delivery plan with clear timelines and milestones.
                            </p>
                        </div>

                        <!-- Guideline 3 -->
                        <div class="dv2-guideline-card">
                            <span class="dv2-guideline-icon">🔵</span>
                            <h3>Get results</h3>
                            <p>
                                Together, we turn data into impact using dashboards, reports, and clear
                                narratives — built around transparency, reproducibility, and value.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- CONTACT SECTION -->
            <section id="contact" class="contact">
                <div class="form-container">
                    <h2>Contact us</h2>
                    <p>Let’s explore how Data Tshwane AI can support your data-driven journey.</p>
                    <form class="contact-form" action="src/routes/contact.php" method="POST">

                        <!-- CSRF token for security hardening -->
                        <input type="hidden" name="csrf_token"
                            value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

                        <!-- Split Name into Name + Surname -->
                        <div class="form-name">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" id="name" name="name" autocomplete="given-name" required>
                            </div>

                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" name="surname" autocomplete="family-name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" autocomplete="email" required>
                        </div>

                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company"
                                placeholder="Enter your company name or 'None'">
                        </div>

                        <!-- Province Dropdown -->
                        <div class="form-group">
                            <label for="province">Select Province</label>
                            <select id="province" name="province" class="form-select-province" required>
                                <option value="">--Choose Province--</option>
                                <option value="Gauteng">Gauteng</option>
                                <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                                <option value="Western Cape">Western Cape</option>
                                <option value="Eastern Cape">Eastern Cape</option>
                                <option value="Free State">Free State</option>
                                <option value="Mpumalanga">Mpumalanga</option>
                                <option value="Limpopo">Limpopo</option>
                                <option value="North West">North West</option>
                                <option value="Northern Cape">Northern Cape</option>
                                <option value="Other">Other</option>
                            </select>
                            <small>If you select "Other", please enter your country below.</small>
                        </div>

                        <!-- Conditional Country Field -->
                        <div class="form-group" id="countryField" style="display:none;">
                            <label for="country">Enter Your Country Name</label>
                            <input type="text" id="country" name="country" placeholder="Your country name">
                        </div>

                        <div class="form-group">
                            <label for="subject">topicTitle</label>
                            <input type="text" id="topicTitle" name="topicTitle"
                                placeholder="Briefly describe your inquiry">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" maxlength="1500"
                                placeholder="Please limit your message to 200 words (approx. 1500 characters)" required>
                            </textarea>
                        </div>

                        <div class="form-submit-wrapper">
                            <button type="submit" class="btn-primary">Submit inquiry</button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Case Studies Section -->
            <section class="dv2-case-studies" id="case-studies">

                <h2 class="dv2-case-title">Case studies</h2>

                <p class="dv2-case-subtitle">
                    Real-world <span class="dv2-case-highlight">projects</span> demonstrating Data Tshwane AI’s
                    ability to deliver clarity, insight, and impact.
                </p>

                <div class="dv2-case-grid">

                    <!-- Case 1 -->
                    <article class="dv2-case-card">
                        <h3>Critical minerals &amp; metals</h3>
                        <p class="dv2-case-summary">
                            Using ICMM Global Mining Dataset to identify green-economy critical minerals and design
                            reproducible processes for sustainable planning.
                        </p>

                        <button class="dv2-case-toggle">Read more</button>

                        <div class="dv2-case-hidden">
                            <h4>Executive summary</h4>
                            <p>
                                Full case study will be added including Introduction, Methods, Results, Discussion,
                                and Conclusions.
                            </p>

                            <button class="dv2-case-close">Collapse</button>
                            <a href="#case-studies" class="dv2-case-back">Back to case studies</a>

                        </div>
                    </article>

                    <!-- Case 2 -->
                    <article class="dv2-case-card">
                        <h3>Energy usage in Western Cape schools</h3>
                        <p class="dv2-case-summary">
                            Smart‑meter analytics from 53 schools reveals actionable insights for efficiency,
                            budgeting, and equitable access.
                        </p>

                        <button class="dv2-case-toggle">Read more</button>

                        <div class="dv2-case-hidden">
                            <h4>Executive summary</h4>
                            <p>
                                Full case study content will be inserted following the structured reporting process.
                            </p>

                            <button class="dv2-case-close">Collapse</button>
                            <a href="#case-studies" class="dv2-case-back">Back to case studies</a>

                        </div>
                    </article>

                    <!-- Case 3 -->
                    <article class="dv2-case-card">
                        <h3>Financial risk modelling</h3>
                        <p class="dv2-case-summary">
                            Transparent and reproducible models for risk assessment, stress testing, and
                            stakeholder-ready reporting.
                        </p>

                        <button class="dv2-case-toggle">Read more</button>

                        <div class="dv2-case-hidden">
                            <h4>Executive summary</h4>
                            <p>
                                Full case study will be added using the standard impact-model pipeline.
                            </p>

                            <button class="dv2-case-close">Collapse</button>
                            <a href="#case-studies" class="dv2-case-back">Back to case studies</a>

                        </div>
                    </article>

                </div>
            </section>

            <!-- FOOTER -->
            <footer class="dv2-footer" role="contentinfo">

                <!-- TIER 1 — IDENTITY -->
                <div class="dv2-footer-top">
                    <!-- Logo -->
                    <div class="dv2-footer-logo">
                        <a href="/"><img src="assets/images/DaTai-logo.png" alt="DaTAI logo" /></a>
                    </div>

                    <!-- Company summary -->
                    <p class="dv2-footer-summary">
                        Clean, practical data &amp; web solutions for African organisations — helping teams gain
                        clarity, modernise operations, and make confident decisions.
                    </p>
                </div>

                <!-- TIER 2 — NAVIGATION CLUSTER -->
                <div class="dv2-footer-row dv2-footer-row--nav" aria-label="Footer navigation">
                    <nav class="dv2-footer-links-wrap" aria-label="Quick links">
                        <ul class="dv2-footer-links">
                            <li><a href="/index-dev2.php">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#case-studies">Case studies</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <!-- Login / Register included in navigation -->
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- TIER 3 — CORPORATE STRIPE -->
                <div class="dv2-footer-corp" aria-label="Corporate identity">
                    <img src="assets/images/64px-Flag_RSA.png" alt="South African flag" class="dv2-footer-flag" />

                    <div class="dv2-corp-text">
                        <p>Data Tshwane AI (PTY) Ltd ®</p>
                        <p>Reg No: 2025/356968/07</p>
                        <p>Tax No: 9457911221</p>
                        <p>B‑BBEE Cert: 9434901443</p>
                        <p>South Africa · Gauteng Province</p>
                    </div>

                    <img src="assets/images/64px-Flag_RSA.png" alt="South African flag" class="dv2-footer-flag" />
                </div>

                <!-- TIER 4 — SOCIAL ICONS -->
                <div class="dv2-footer-row dv2-footer-row--social">
                    <nav class="dv2-footer-social-wrap" aria-label="Social media">
                        <ul class="dv2-footer-social">
                            <li>
                                <a href="https://x.com/" target="_blank" rel="noopener noreferrer"
                                    aria-label="X (Twitter)">
                                    <img src="assets/images/X.png" alt="X" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
                                    aria-label="Instagram">
                                    <img src="assets/images/instagram.svg" alt="Instagram" />
                                </a>
                            </li>
                            <li>
                                <a href="https://web.facebook.com/" target="_blank" rel="noopener noreferrer"
                                    aria-label="Facebook">
                                    <img src="assets/images/facebook.svg" alt="Facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer"
                                    aria-label="Tiktok">
                                    <img src="assets/images/tiktok.svg" alt="Tiktok" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer"
                                    aria-label="LinkedIn">
                                    <img src="assets/images/linkedin.svg" alt="LinkedIn" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"
                                    aria-label="YouTube">
                                    <img src="assets/images/youtube.svg" alt="YouTube" />
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- COPYRIGHT + REVISION -->
                <div class="dv2-footer-meta">
                    <p>© 2026 Data Tshwane AI (DaTai)</p>
                    <p>Revision: dv2.0 — 23 Mar 2026</p>
                </div>

                <!-- TIER 5 — FAITH PILLAR -->
                <div class="dv2-footer-faith">
                    <p>
                        I can do all things through Christ who strengthens me,
                        gives me wisdom, and helps me overcome my unbelief.
                    </p>
                </div>

            </footer>
    </div>

    <!-- Link to external JavaScript file -->
    <script src="assets/js/scripts.js" defer></script>
</body>

</html>