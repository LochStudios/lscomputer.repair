<?php
$css_v = @filemtime(__DIR__ . '/assets/css/theme.css') ?: time();
$js_v  = @filemtime(__DIR__ . '/assets/js/app.js')  ?: time();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LS Computer Repair — Custom builds, remote support &amp; on-site fixes</title>
    <meta name="description" content="Local computer technicians for custom-built PCs, remote troubleshooting and on-site visits. We sort the problem so you don't have to." />
    <meta name="theme-color" content="#0a0e1a" />
    <meta name="color-scheme" content="dark" />

    <meta property="og:title" content="LS Computer Repair" />
    <meta property="og:description" content="Custom builds, remote support and on-site fixes by qualified technicians." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://lscdn.com.au/static/logos/lspcr/lspcr.png" />

    <link rel="icon" href="https://lscdn.com.au/static/logos/lspcr/lspcr.png" type="image/png" />
    <link rel="apple-touch-icon" href="https://lscdn.com.au/static/logos/lspcr/lspcr.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="./assets/css/theme.css?v=<?= $css_v ?>" />
</head>
<body>
    <a href="#main" class="visually-hidden">Skip to content</a>

    <header class="site-header">
        <div class="container nav">
            <a href="./" class="nav-brand" aria-label="LS Computer Repair home">
                <img src="https://lscdn.com.au/static/logos/lspcr/lspcr-long.png" alt="" />
                <span class="visually-hidden">LS Computer Repair</span>
            </a>
            <nav aria-label="Primary">
                <ul class="nav-links">
                    <li><a href="./" data-nav="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="has-dropdown">
                        <a href="services.php" data-nav="services.php"><i class="fa-solid fa-screwdriver-wrench"></i> Services</a>
                        <ul class="dropdown" role="menu">
                            <li><a href="services.php"><i class="fa-solid fa-list-check"></i> All Services</a></li>
                            <li><a href="remote-support.php"><i class="fa-solid fa-headset"></i> Remote Support</a></li>
                            <li><a href="visit-me.php"><i class="fa-solid fa-house-laptop"></i> On-site Visit</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php" data-nav="contact.php"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                </ul>
            </nav>
            <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="./" data-nav="index.php"><i class="fa-solid fa-house"></i>&nbsp; Home</a></li>
            <li class="group-label">Services</li>
            <li class="submenu"><a href="services.php" data-nav="services.php">All services</a></li>
            <li class="submenu"><a href="remote-support.php" data-nav="remote-support.php">Remote support</a></li>
            <li class="submenu"><a href="visit-me.php" data-nav="visit-me.php">On-site visit</a></li>
            <li class="group-label">More</li>
            <li><a href="contact.php" data-nav="contact.php"><i class="fa-solid fa-envelope"></i>&nbsp; Contact us</a></li>
        </ul>
    </div>

    <main id="main">

        <!-- Hero -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="reveal">
                    <span class="eyebrow"><span class="badge"><span class="dot"></span>Open for jobs</span></span>
                    <h1>Computer trouble? <span class="gradient-text">We've got you sorted.</span></h1>
                    <p class="lead">From slow laptops and nasty viruses to ground-up custom builds, our qualified technicians fix the problem fast — at our workshop, your place, or right over a remote session.</p>
                    <div class="hero-cta">
                        <a href="services.php" class="btn btn-primary btn-lg">
                            <i class="fa-solid fa-wand-magic-sparkles"></i> See what we fix
                        </a>
                        <a href="contact.php" class="btn btn-outline btn-lg">
                            <i class="fa-solid fa-paper-plane"></i> Get in touch
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <div class="num">10+</div>
                            <div class="lbl">Years of experience</div>
                        </div>
                        <div class="hero-stat">
                            <div class="num">3</div>
                            <div class="lbl">Ways to get help</div>
                        </div>
                        <div class="hero-stat">
                            <div class="num">24/7</div>
                            <div class="lbl">Emergency call-outs</div>
                        </div>
                    </div>
                </div>

                <div class="hero-visual reveal">
                    <div class="window-bar">
                        <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                        <span class="title">~ /diagnostic</span>
                    </div>
                    <div class="window-body">
                        <span class="line"><span class="prompt">$</span> lspcr scan --device "your-pc"</span>
                        <span class="line">→ checking <span class="key">storage</span> ...... <span class="ok">ok</span></span>
                        <span class="line">→ checking <span class="key">memory</span> ....... <span class="ok">ok</span></span>
                        <span class="line">→ scanning for <span class="key">malware</span> ... <span class="ok">clean</span></span>
                        <span class="line">→ updating <span class="key">drivers</span> ...... <span class="ok">done</span></span>
                        <span class="line">→ optimising <span class="key">startup</span> ...... <span class="ok">done</span></span>
                        <span class="line"><span class="prompt">$</span> <span class="cursor"></span></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="section" id="what-we-do">
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow"><i class="fa-solid fa-bolt"></i> What we do</span>
                    <h2>Three ways we help you out</h2>
                    <p class="section-lead">Pick the path that suits you — drop the machine in, call us out to your place, or get help right now over a secure remote session.</p>
                </div>

                <div class="grid grid-3 reveal-stagger">
                    <article class="card reveal">
                        <div class="icon-wrap"><i class="fa-solid fa-microchip"></i></div>
                        <h3>Custom-built computers</h3>
                        <p>Need a machine that actually fits your needs — gaming, video editing, music production, design? We spec, source and assemble it for you.</p>
                        <p>Tired of guessing which parts to buy? Talk to a fully qualified technician and walk out with a build sheet that makes sense.</p>
                        <a href="contact.php" class="card-link">Get a quote <i class="fa-solid fa-arrow-right"></i></a>
                    </article>

                    <article class="card reveal">
                        <div class="icon-wrap"><i class="fa-solid fa-headset"></i></div>
                        <h3>Remote support</h3>
                        <p>Can't make it to the workshop? Most software issues — updates, installs, configuration tweaks — we can knock out remotely while you watch.</p>
                        <p>Secure session, on-call technician, fixed monthly plans available so you always have help on tap.</p>
                        <a href="remote-support.php" class="card-link">View plans <i class="fa-solid fa-arrow-right"></i></a>
                    </article>

                    <article class="card reveal">
                        <div class="icon-wrap"><i class="fa-solid fa-laptop-medical"></i></div>
                        <h3>Laptop &amp; PC repair</h3>
                        <p>Cracked screen, dead keyboard, dying battery, dodgy webcam? We replace, repair, recover — and explain what was wrong in plain English.</p>
                        <p>Drop-off at the workshop or book a call-out and we'll come to you.</p>
                        <a href="visit-me.php" class="card-link">Book a visit <i class="fa-solid fa-arrow-right"></i></a>
                    </article>
                </div>
            </div>
        </section>

        <!-- Why us -->
        <section class="section" id="why-us">
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow"><i class="fa-solid fa-shield-halved"></i> Why us</span>
                    <h2>Honest work, no surprises.</h2>
                    <p class="section-lead">Plain talk, fair pricing and proper diagnostics — not a script that points you at a $2k upgrade you don't need.</p>
                </div>

                <div class="grid grid-3">
                    <article class="card reveal">
                        <div class="icon-wrap"><i class="fa-solid fa-user-check"></i></div>
                        <h3>Qualified techs</h3>
                        <p>Every job is handled by a fully qualified technician. No call-centres, no hand-offs.</p>
                    </article>
                    <article class="card reveal">
                        <div class="icon-wrap"><i class="fa-solid fa-tags"></i></div>
                        <h3>Up-front pricing</h3>
                        <p>We tell you the cost before we start. If we hit a surprise, we stop and call you first.</p>
                    </article>
                    <article class="card reveal">
                        <div class="icon-wrap"><i class="fa-solid fa-clock-rotate-left"></i></div>
                        <h3>Fast turnaround</h3>
                        <p>Most remote jobs are done same-day. Workshop repairs typically inside 48 hours.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section">
            <div class="container">
                <div class="callout reveal">
                    <span class="eyebrow"><i class="fa-solid fa-comments"></i> Ready when you are</span>
                    <h2>Got a problem? Let's fix it.</h2>
                    <p>Tell us what's going wrong and we'll line up the fastest, cheapest way to get you back up and running.</p>
                    <div class="btn-row">
                        <a href="contact.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Contact us</a>
                        <a href="remote-support.php" class="btn btn-secondary btn-lg"><i class="fa-solid fa-bolt"></i> Get help now</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="https://lscdn.com.au/static/logos/lspcr/lspcr-long.png" alt="LS Computer Repair" />
                    <p>Family-run computer repair, custom builds and remote support — based locally, helping nationwide.</p>
                    <div class="social-row">
                        <a href="https://www.facebook.com/lochstudios" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/lochstudios" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://instagram.com/lochstudiosau" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="mailto:office@lscomputerrepair.com" aria-label="Email us"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="services.php"><i class="fa-solid fa-list-check"></i> All services</a></li>
                        <li><a href="remote-support.php"><i class="fa-solid fa-headset"></i> Remote support</a></li>
                        <li><a href="visit-me.php"><i class="fa-solid fa-house-laptop"></i> On-site visit</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Get in touch</h4>
                    <ul>
                        <li><a href="tel:+61256323092"><i class="fa-solid fa-phone"></i> (02) 5632-3092</a></li>
                        <li><a href="https://wa.me/61480001064"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a></li>
                        <li><a href="mailto:office@lscomputerrepair.com"><i class="fa-solid fa-envelope"></i> office@</a></li>
                        <li><a href="mailto:support@lscomputerrepair.com"><i class="fa-solid fa-life-ring"></i> support@</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Group</h4>
                    <ul>
                        <li><a href="https://media.lochstudios.com/"><i class="fa-solid fa-clapperboard"></i> Media production</a></li>
                        <li><a href="contact.php"><i class="fa-solid fa-map-pin"></i> Locations</a></li>
                    </ul>
                    <img src="https://lscdn.com.au/static/logos/lochstudios/4803721/4803721.png" alt="LochStudios" style="height:60px;width:auto;margin-top:1rem;opacity:0.85;" />
                </div>
            </div>

            <div class="footer-bottom">
                <div>&copy; <span data-year>2026</span> <strong>LS Computer Repair</strong> &amp; <strong>LochStudios</strong>. All rights reserved.</div>
                <div class="abn">
                    LOCHSTUDIOS ABN 20 447 022 747 &middot; LSPCR ABN 78 341 881 708
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js" defer></script>
    <script src="./assets/js/app.js?v=<?= $js_v ?>" defer></script>
</body>
</html>
