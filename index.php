<?php
// ✔  These lines execute immediately.
// ✔ Errors should now appear in browser output unless the hosting provider suppresses them (common on shared hosting).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ✔ A session is started (or resumed).
// ✔ If session cookies cannot be set (rare), PHP may produce warnings.
session_start();

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Get the requested path
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$request = str_replace('public-html', '', $request);

// Define allowed routes
$routes = [
    'dashboard' => 'dashboard.php',
    'login' => 'login.php',
    'register' => 'register.php',
    'register-success' => 'register-success.php',
    'admin-users' => 'admin-users.php',
    'admin-login-logs' => 'admin-login-logs.php'
];


// Homepage
if ($request === '') {
    // Allow index.php to render HTML below
} else if (array_key_exists($request, $routes)) {
    require $routes[$request];
    exit;
} else {
    require '404.php';
    exit;
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
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dashboard-queries.css">
    <title>Data Tshwane AI</title>
</head>

<body>
    <!-- Anchor at the very top of your page -->
    <div id="top"></div>
    <!-- rest of your page -->

    <div class="page-wrapper">

        <header>
            <!-- Main navbar -->
            <div class="nav-wrapper">
                <nav class="navbar">
                    <!-- Faith pillar row -->

                    <div class="nav-faith-pillar">
                        <img src="/assets/images/64px-Flag_RSA.png" alt="South Africa flag">
                        <span>I can do all things through Christ who strengthens me, gives me wisdom and helps my unbelief.</span>
                        <img src="/assets/images/64px-Flag_RSA.png" alt="South Africa flag">
                    </div>

                    <!-- Flex row -->
                    <div class="nav-main">
                        <a href="index.php">
                            <img class="logo-md" src="assets/images/DaTai-logo.png" alt="DaTai logo">
                        </a>
                        <div class="nav-middle">
                            <a href="about.html" class="nav-link">Data Tshwane AI</a>
                        </div>
                        <ul class="nav-btn-container">
                            <li><a class="btn btn-primary-outline" href="login.php">Login</a></li>
                            <li><a class="btn btn-primary" href="register.php">Register</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Secondary navbar -->
                <div class="subnav">
                    <ul class="subnav-links">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#about" class="dropdown-toggle">About</a>
                            <ul class="dropdown-menu">
                                <li><a href="#about-origin">Why DaTai was founded</a></li>
                                <li><a href="#about-founder">Meet the Founder</a></li>
                                <li><a href="#about-evolution">From frustration to framework</a></li>
                                <li><a href="#about-mission">Our mission & vision</a></li>
                                <li><a href="#about-values-principles">Our values & principles</a></li>
                            </ul>
                        </li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#guidelines">Guidelines</a></li>
                        <li><a href="#contact">Contact us</a></li>
                        <li><a href="#case-studies">Case studies</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-spacer"></div>

            <!-- HERO SECTION -->
            <section class="hero-section">
                <h1 class="hero-heading">
                    <span class="highlight highlight-secondary">Explore data.</span>
                    <span class="no-break">Use insights.</span>
                    <span class="block-advance">Advance. 📱</span>
                </h1>
                <p class="hero-paragraph">
                    Data Tshwane AI (DaTai) is the space where data science drives clarity,
                    strategic alignment, and intelligence across every layer.
                </p>

                <ul class="hero-btn-container">
                    <li><a class="btn btn-primary" href="register.php">Get started</a></li>
                    <li><a class="btn btn-primary-outline" href="#features">Learn more</a></li>
                </ul>
            </section>
        </header>

        <main>

            <!-- FEATURES SECTION -->
            <section class="features-section">
                <h2 class="features-main-heading"><span class="highlight highlight-tertiary">Impact-driven</span>
                    processes from data to delivery.
                </h2>
                <div class="features-grid-container">

                    <!-- Card 1: Text → Image -->
                    <div class="feature-text-1">
                        <h3 class="feature-headings">Start small, grow with ease.</h3>
                        <p>Whether you're a local team or a national department, our modular tools help you begin with
                            clarity and scale responsibly — no jargon, no overwhelm.</p>
                    </div>
                    <img class="feature-img feature-img-1" src="assets/images/features-start-small.png"
                        alt="simple online journaling">

                    <!-- Card 2: Image → Text -->
                    <img class="feature-img feature-img-2 feature-img-swop-order-2" src="assets/images/features-2.png"
                        alt="beautifully displayed journals">
                    <div class="feature-text-2">
                        <h3 class="feature-headings">See what’s happening, every step of the way.</h3>
                        <p>From community programs to enterprise reports, every action is traceable and explainable. You
                            stay in control, with full visibility from input to outcome.</p>
                    </div>

                    <!-- Card 3: Text → Image -->
                    <div class="feature-text-3">
                        <h3 class="feature-headings">Accessible tools for every setting.</h3>
                        <p>Whether you're in a classroom, council office, boardroom, or field site — our platform adapts
                            to your environment, helping you reflect, report, and respond with confidence.</p>
                    </div>
                    <img class="feature-img feature-img-3" src="assets/images/features-accessible.png"
                        alt="create journals anywhere">

                    <!-- Card 4: Image → Text -->
                    <img class="feature-img feature-img-4 feature-img-swop-order-4" src="assets/images/features-your-data.png"
                        alt="secure journal storage">
                    <div class="feature-text-4">
                        <h3 class="feature-headings">Your data, your rules.</h3>
                        <p>We protect sensitive information across sectors — from student records to municipal insights.
                            You decide what’s shared, and with whom. Security is never an afterthought.</p>
                    </div>

                </div>
            </section>

            <!-- CTA SECTION -->
            <section class="cta-section">
                <div class="cta-card">
                    <h2 class="cta-heading">Start your data journey now!</h2>
                    <a class="btn btn-secondary" href="register.php">Get started</a>
                </div>
            </section>

            <!-- ABOUT SECTION -->
            <section class="first-about-section" id="about">
                <h2 class="first-about-main-heading">
                    <span class="first-about-highlight first-about-highlight-tertiary">Behind</span>
                    DaTai<br>
                    Modular clarity from mining to modelling.
                </h2>

                <div class="first-about-grid-container">

                    <!-- About: Card 1: Text → Image -->
                    <div id="about-origin" class="first-about-text-1">
                        <h3 class="first-about-heading">Why DaTai was founded</h3>
                        <p>
                            DaTai — the registered Data Tshwane AI company — was founded to challenge brittle, black‑box
                            data solutions. Its mission is to deliver modular, transparent, and stakeholder‑aligned
                            workflows
                            that build trust through reproducibility and principled refinement.
                        </p>
                        <p>
                            Over time, these refinements have created space for deeper stakeholder engagement and more
                            resilient workflows. Each added layer of clarity ensures that the platform remains
                            adaptable,
                            scalable, and aligned with its founding mission.
                        </p>
                    </div>
                    <img class="first-about-img first-about-img-1" src="assets/images/about-why-founded.png"
                        alt="Illustration showing DaTai’s founding inspiration">

                    <!-- About: Card 2: Image → Text -->
                    <img class="first-about-img first-about-img-2 first-about-img-swop-order-2"
                        src="assets/images/about-founder-1.png" alt="Portrait of DaTai founder Dr Mokone J. Roberts">
                    <div id="about-founder" class="first-about-text-2">
                        <h3 class="first-about-heading">Meet the founder</h3>
                        <p>
                            Dr Mokone J. Roberts brings two decades of expertise across metallurgical operations,
                            mineral economics, molecular modelling, and editorial leadership.
                        </p>
                        <p>
                            His multidisciplinary journey, coupled with an academic depth in computational chemistry
                            and a career spanning North‑West University and the University of Cape Town, fuels DaTai’s
                            resolution: to create data science workflows that are as transparent and reproducible as
                            they are impactful. Mokone’s PhD-level precision anchors DaTai’s mission in operational
                            grit, policy insight, and reproducible scientific clarity.
                        </p>
                    </div>

                    <!-- About: Card 3: Text → Image -->
                    <div id="about-evolution" class="first-about-text-3">
                        <h3 class="first-about-heading">From frustration to framework</h3>
                        <p>
                            The DaTai company is growing into a principled architecture for modular,
                            stakeholder‑facing data products. Each iteration — whether in stakeholder dialogue,
                            data preparation, anomaly detection, feature engineering, layout logic, or continuous
                            stakeholder messaging — has been a deliberate step toward operational clarity and trusted
                            scalability. What began as a vision for transparent workflows now anchors a platform built
                            on reproducibility and stakeholder trust, data-driven problem-solving and decision‑making.
                        </p>
                    </div>
                    <img class="first-about-img first-about-img-3" src="assets/images/about-framework-3.png"
                        alt="Timeline graphic showing DaTai’s growth from consultancy to platform">

                    <!-- About: Card 4: Image → Text -->
                    <img class="first-about-img first-about-img-4 first-about-img-swop-order-4"
                        src="assets/images/about-vision-4.png" alt="Visual illustration of DaTai’s mission and vision">
                    <div id="about-mission" class="first-about-text-4">
                        <h3 class="first-about-heading">Our mission & vision</h3>
                        <p>
                            DaTai empowers decision‑makers with reproducible, transparent, and modular data science
                            workflows.
                        </p>
                        <p>
                            Its vision is to become the trusted architecture behind Africa’s most principled,
                            stakeholder‑aligned data platforms — one modular launchpad at a time.
                        </p>
                    </div>

                    <!-- About: Card 5: Text → Image -->
                    <div id="about-values-principles" class="first-about-text-5">
                        <h3 class="values-heading">Our values & principles</h3>
                        <p class="values-paragraph">
                            DaTai is built on a foundation of reproducibility, transparency, and principled refinement.
                            These values guide every workflow, ensuring that stakeholders can trust both the process
                            and the outcomes.
                        </p>
                        <ul class="values-list">
                            <li>
                                <strong>Transparency:</strong> Every step is documented and open to review.
                            </li>
                            <li>
                                <strong>Modularity:</strong> Components are designed to be reusable and adaptable.
                            </li>
                            <li>
                                <strong>Stakeholder alignment:</strong> Plain-language communication keeps
                                decision-makers
                                engaged.
                            </li>
                            <li>
                                <strong>Resilience:</strong> Iterative refinement ensures scalability without
                                sacrificing
                                clarity.
                            </li>
                        </ul>
                    </div>
                    <img class="first-about-img about-values-img-5" src="assets/images/about-values-principles-1.png"
                        alt="Illustration highlighting DaTai’s core values and guiding principles">
                </div>
            </section>

            <!-- SERVICES SECTION -->
            <section class="services-section" id="services">
                <h2 class="services-main-heading">
                    What DaTai <span class="services-main-heading-tertiary">offers</span>
                </h2>

                <div class="services-grid-container">

                    <!-- ================= BUSINESS ================= -->
                    <div class="services-sector">
                        <h3 class="services-heading">Business Insight</h3>

                        <article class="services-card">
                            <p class="services-sub">Strategic forecasting</p>
                            <p>Predictive models to anticipate customer churn, market shifts, and operational risks
                                across all business sizes.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Business intelligence dashboards</p>
                            <p>Interactive dashboards that transform raw data into actionable insights for executive and
                                operational decision-making.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Data strategy</p>
                            <p>Empowering businesses to build a strong data foundation. We guide teams to generate,
                                document, and make their own data accessible, while showing how external sources can
                                illuminate business challenges.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Anomaly detection</p>
                            <p>Tech-driven data observations to categorise your data, unlock business insights and
                                identify data points that deviate significantly from expected trends.</p>
                        </article>
                    </div>


                    <!-- ================= COMMUNITY ================= -->
                    <div class="services-sector">
                        <h3 class="services-heading">Community Insight</h3>

                        <article class="services-card">
                            <p class="services-sub">Community data mapping</p>
                            <p>Visual tools to help NGOs and local groups understand needs, track impact, and
                                communicate outcomes.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Sentiment & feedback analysis</p>
                            <p>Natural language processing to analyse community feedback, social media, and surveys for
                                better engagement.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Accessible data literacy</p>
                            <p>Workshops and resources to empower individuals and grassroots organisations with data
                                skills and storytelling tools.</p>
                        </article>

                        <article class="services-card placeholder">
                            <p class="services-sub">Informing local decision-making</p>
                            <p>Developing data action plans that are bottom-up and focus on community needs first,
                                before exploring how data can address those needs.</p>
                        </article>
                    </div>


                    <!-- ================= EDUCATION ================= -->
                    <div class="services-sector">
                        <h3 class="services-heading">Education Insight</h3>

                        <article class="services-card">
                            <p class="services-sub">Curriculum-aligned analytics</p>
                            <p>Data tools for tracking learner progress, identifying gaps, and supporting evidence-based
                                teaching strategies.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">AI for learning platforms</p>
                            <p>Machine learning models to personalise learning experiences and support adaptive
                                educational technologies.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Education analytics</p>
                            <p>Analysing data to predict scholar performance using machine learning techniques that may
                                trigger interventions by educators.</p>
                        </article>

                        <article class="services-card placeholder">
                            <p class="services-sub">Energy & minerals research</p>
                            <p>Using advanced analytics and machine learning on complex datasets to enable quick and
                                informed decisions across energy and minerals sectors.</p>
                        </article>
                    </div>


                    <!-- ================= GOVERNMENT ================= -->
                    <div class="services-sector">
                        <h3 class="services-heading">Government Insight</h3>

                        <article class="services-card">
                            <p class="services-sub">Enhance policy impact assessment</p>
                            <p>Predictive analytics to simulate policy outcomes and guide evidence-based decision-making
                                across government tiers.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Public sector dashboards</p>
                            <p>Custom dashboards for service delivery tracking, budget transparency, and citizen
                                engagement.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Infrastructure & planning analytics</p>
                            <p>Geospatial and temporal data modelling to support infrastructure rollout, resource
                                allocation, and urban planning.</p>
                        </article>

                        <article class="services-card">
                            <p class="services-sub">Data governance & architecture</p>
                            <p>Consulting on secure, scalable data infrastructure for local, regional, provincial, and
                                national government systems.</p>
                        </article>
                    </div>

                </div>
            </section>

            <!-- GUIDELINES SECTION -->
            <section class="guidelines-section" id="guidelines">
                <h2 class="section-heading">
                    The <span class="guidelines-main-heading-highlight guidelines-main-heading-highlight-tertiary">path
                        forward</span>
                </h2>
                <div class="guidelines-grid">
                    <!-- Guideline 1 -->
                    <div class="guideline-card">
                        <h3 class="guideline-heading">Get started</h3>
                        <p>The data‑driven future begins with a single step. Opportunities open up for those who start
                            today.</p>
                    </div>

                    <!-- Guideline 2 -->
                    <div class="guideline-card">
                        <h3 class="guideline-heading">Get involved</h3>
                        <p>Shape the journey together: define the problem, identify the right data, and co‑create a plan
                            with clear resources, timelines, and milestones.</p>
                    </div>

                    <!-- Guideline 3 -->
                    <div class="guideline-card">
                        <h3 class="guideline-heading">Get results</h3>
                        <p>Turn progress into impact with clear reporting. Share your story through slides and technical
                            reports, using standard templates that highlight methods, results, and conclusions. Your
                            data can picture the journey and open doors to next possibilities — from model deployment to
                            ongoing monitoring and evaluation.</p>
                    </div>

                </div>
            </section>

            <!-- CONTACT SECTION -->
            <section id="contact" class="contact">
                <div class="form-container">
                    <h2>Contact us</h2>
                    <p>Let’s explore how DaTai can support your data-driven journey.</p>
                    <form class="contact-form" action="src/routes/contact.php" method="POST">

                        <!-- CSRF token for security hardening -->
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

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

                        <button type="submit" class="btn-primary">Submit inquiry</button>
                    </form>
                </div>
            </section>

            <!-- Case Studies Section -->

            <section id="case-studies" class="case-studies-section">
                <div id="case-studies-anchor"></div>
                <div class="case-studies-container">
                    <h2>Case studies</h2>
                    <p>
                        Real-world <span class="case-highlight-projects">projects</span> showcasing DaTai’s impact.
                    </p>

                    <!-- ========================= -->
                    <!-- Case Study 1: Mining & Metals -->
                    <!-- ========================= -->
                    <article class="case-card">
                        <h3 class="case-title">
                            Critical minerals and metals for the green economy aspirations.
                        </h3>

                        <p class="case-summary">
                            Leveraged ICMM’s Global Mining Dataset to identify and model critical minerals
                            and metals essential for energy transition. Analysis highlights reproducible
                            workflows for sustainable resource planning and energy‑linked supply chains.
                        </p>

                        <div class="case-details" data-expanded="false">
                            <button class="read-more-button case-action">Read more</button>
                            <div class="case-hidden">
                                <h4>Executive summary</h4>
                                <p>
                                    Full case study content for "Critical Minerals and Metals for the Green Economy"
                                    will be added as soon as the Introduction, Methods, Results, Discussion, and
                                    Conclusions sections are complete.
                                </p>

                                <a href="" class="case-return-link case-action">
                                    <span class="case-highlight-return">Back</span> to Case studies
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- ========================= -->
                    <!-- Case Study 2: Energy -->
                    <!-- ========================= -->
                    <article class="case-card">
                        <h3 class="case-title">Energy usage in Western Cape schools.</h3>

                        <p class="case-summary">
                            Analyzed smart‑meter data from 53 energy‑poor schools (Dec 2022 – Nov 2023)
                            to uncover actionable insights for efficiency and equitable energy access.
                        </p>

                        <div class="case-details" data-expanded="false">
                            <button class="read-more-button case-action">Read more</button>
                            <div class="case-hidden">
                                <h4>Executive summary</h4>
                                <p>
                                    Full case study content for "Energy usage in Western Cape schools" will be added
                                    as soon as the Introduction, Methods, Results, Discussion, and Conclusions
                                    sections are complete.
                                </p>

                                <a href="" class="case-return-link case-action">
                                    <span class="case-highlight-return">Back</span> to Case studies
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- ========================= -->
                    <!-- Case Study 3: Financial Risk -->
                    <!-- ========================= -->
                    <article class="case-card">
                        <h3 class="case-title">Financial risk modelling.</h3>

                        <p class="case-summary">
                            Applied robust statistical models to real financial datasets, highlighting
                            transparent risk assessment and reproducible decision‑support pipelines
                            for stakeholders.
                        </p>

                        <div class="case-details" data-expanded="false">
                            <button class="read-more-button case-action">Read more</button>
                            <div class="case-hidden">
                                <h4>Executive summary</h4>
                                <p>
                                    Full case study content for "Financial risk modelling" will be added
                                    as soon as the Introduction, Methods, Results, Discussion, and Conclusions
                                    sections are complete.
                                </p>

                                <a href="" class="case-return-link case-action">
                                    <span class="case-highlight-return">Back</span> to Case studies
                                </a>
                            </div>
                        </div>
                    </article>

                </div> <!-- end .case-studies-container -->
            </section>

            <!-- FOOTER -->
            <footer class="footer">
                <a href="index.php"><img class="logo-sm" src="assets/images/DaTai-logo.png" alt="DaTAI logo"></a>
                <!-- Add in Quill logo and hyperlinks later -->
                <!-- Add in social media icons later -->
                <ul class="social-icons-container">
                    <li><a href="https://www.instagram.com/"><img class="social-icon" src="assets/images/instagram.svg"
                                alt="instagram logo"></a></li>
                    <li><a href="https://web.facebook.com/"><img class="social-icon" src="assets/images/facebook.svg"
                                alt="facebook logo"></a></li>
                    <li><a href="https://www.tiktok.com/"><img class="social-icon" src="assets/images/tiktok.svg"
                                alt="tiktok logo"></a></li>
                    <li><a href="https://www.linkedin.com/"><img class="social-icon" src="assets/images/linkedin.svg"
                                alt="linkedin logo"></a></li>
                    <li><a href="https://www.youtube.com/"><img class="social-icon" src="assets/images/youtube.svg"
                                alt="youtube logo"></a></li>
                </ul>
                <ul class="footer-links-container">
                    <li><a href="">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>

                <p class="small-text">&copy; 2025 Data Tshwane AI (DaTai). All rights reserved.</p>
            </footer>

            <!-- Floating Home/Up button -->
            <a href="#top" class="home-container" aria-label="Scroll to top">
                <span class="home-icon">⬆</span>
                <span class="home-text">Home</span>
            </a>

            <!-- Link to external JavaScript file -->
            <script src="assets/js/scripts.js" defer></script>
</body>

</html>