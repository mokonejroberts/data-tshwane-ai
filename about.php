<?php
// -----------------------------
// DEV2 bootstrap (optional here, but keeps consistency with DEV2-PHP)
// -----------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts (Preconnect for performance) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dashboard-queries.css">

    <title>About Data Tshwane AI</title>
</head>

<body>

    <!-- dv2 Navbar (aligned to homepage structure) -->
    <nav class="dv2-navbar">
        <div class="dv2-navbar-inner">

            <!-- LEFT COLUMN: logo -->
            <div class="dv2-nav-left">
                <a href="index-dev2.php" aria-label="Back to home">
                    <img src="assets/images/DaTai-logo.png" alt="Data Tshwane AI Logo">
                </a>
            </div>

            <!-- CENTER COLUMN: identity -->
            <div class="dv2-nav-center">
                Data Tshwane AI (PTY) Ltd ◆ www.data‑tshwane‑ai.co.za
            </div>

            <!-- RIGHT COLUMN: empty balancer -->
            <div class="dv2-nav-right"></div>

        </div>
    </nav>

    <main>
        <!-- dv2 About Hero Header -->
        <section class="dv2-about-hero">
            <div class="dv2-about-hero-inner">
                <h1>About Data Tshwane AI</h1>
                <p>Transparent, modular, reproducible data workflows for African organisations.</p>
            </div>
        </section>

        <div class="first-about-grid-container">

            <!-- About: Card 1: Text → Image -->
            <div id="about-origin" class="first-about-text-1">
                <h3 class="first-about-heading">Why DataTshwane AI was founded</h3>
                <p>
                    Data Tshwane AI company was founded to challenge brittle, black‑box
                    data solutions. Its mission is to deliver modular, transparent, and stakeholder‑aligned
                    workflows
                    that build trust through reproducibility and principled refinement. A workfolw, as defined by IBM,
                    is "a system for managing repetitive processes and tasks that occur in a particular order".
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
                    Dr Mokone J. Roberts brings to Data Tshwane AI, two and a half decades of expertise across
                    metallurgical operations,
                    mineral economics, molecular modelling, and editorial leadership.
                </p>
                <p>
                    His multidisciplinary journey, coupled with an academic depth in computational chemistry
                    and a career spanning North‑West University and the University of Cape Town, fuels Data Tshwane AI’s
                    resolution: to create data science workflows that are as transparent and reproducible as
                    they are impactful. Dr Roberts' PhD-level precision at an atomistic level anchors Data Tshwane AI’s
                    mission in operational
                    grit, policy insight, and reproducible scientific clarity.
                </p>
            </div>

            <!-- About: Card 3: Text → Image -->
            <div id="about-evolution" class="first-about-text-3">
                <h3 class="first-about-heading">From frustration to framework</h3>
                <p>
                    Data Tswane AI company is growing into a principled architecture for modular,
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
                <h3 class="first-about-heading">Our mission &amp; vision</h3>
                <p>
                    Data Tshwane AI empowers decision‑makers with reproducible, transparent, and modular data science
                    workflows.
                </p>
                <p>
                    Its vision is to become the trusted architecture behind Africa’s most principled,
                    stakeholder‑aligned data platforms — one modular launchpad at a time.
                </p>
            </div>

            <!-- About: Card 5: Text → Image -->
            <div id="about-values-principles" class="first-about-text-5">
                <h3 class="values-heading">Our values &amp; principles</h3>
                <p class="values-paragraph">
                    Data Tshwane AI company is built on a foundation of reproducibility, transparency, and principled
                    refinement.
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
                        <strong>Stakeholder alignment:</strong> Plain-language communication keeps decision-makers
                        engaged.
                    </li>
                    <li>
                        <strong>Resilience:</strong> Iterative refinement ensures scalability without sacrificing
                        clarity.
                    </li>
                </ul>
            </div>
            <img class="first-about-img about-values-img-5" src="assets/images/about-values-principles-1.png"
                alt="Illustration highlighting DaTai’s core values and guiding principles">

        </div>
    </main>

    <script src="assets/js/scripts.js" defer></script>
</body>

</html>