<?php
$css_v = @filemtime(__DIR__ . '/assets/css/theme.css') ?: time();
$js_v  = @filemtime(__DIR__ . '/assets/js/app.js')  ?: time();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Remote Support Plans — LS Computer Repair</title>
    <meta name="description" content="Monthly remote support plans for home and small business — from 2 calls a month through to unlimited support, plus included on-site call-outs." />
    <meta name="theme-color" content="#0a0e1a" />
    <meta name="color-scheme" content="dark" />

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
                            <li><a href="remote-support.php" data-nav="remote-support.php"><i class="fa-solid fa-headset"></i> Remote Support</a></li>
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

        <section class="page-hero">
            <div class="container">
                <span class="eyebrow reveal"><i class="fa-solid fa-headset"></i> Remote support</span>
                <h1 class="reveal">Help over the wire — <span class="gradient-text">no waiting in line</span></h1>
                <p class="reveal">Have an issue you can't bring in to us? Most software problems we can sort right now over a secure remote session. Pick a monthly plan or read about our <a href="visit-me.php">on-site call-out rates</a>.</p>
            </div>
        </section>

        <section class="section" style="padding-top:1rem;">
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow"><i class="fa-solid fa-tags"></i> Starter plans</span>
                    <h2>Light to moderate use</h2>
                    <p class="section-lead">Perfect for households and individuals who hit the occasional snag.</p>
                </div>

                <div class="pricing-grid">
                    <article class="price-card reveal">
                        <div class="price-name">Starter</div>
                        <p class="section-lead" style="text-align:left;font-size:0.9rem;">Two remote sessions every month.</p>
                        <div class="price-tag">
                            <span class="currency">$</span><span class="amount">30</span>
                        </div>
                        <div class="price-period">per month</div>
                        <ul class="price-features">
                            <li><i class="fa-solid fa-circle-check"></i> 2 remote support calls / month</li>
                            <li><i class="fa-solid fa-circle-check"></i> Same-day response</li>
                            <li><i class="fa-solid fa-circle-check"></i> Cancel any time</li>
                        </ul>
                        <a href="https://square.link/u/DhvVMELf" class="btn btn-secondary btn-block" target="_blank" rel="noopener">
                            <i class="fa-solid fa-credit-card"></i> Subscribe
                        </a>
                    </article>

                    <article class="price-card featured reveal">
                        <div class="price-name">Plus</div>
                        <p class="section-lead" style="text-align:left;font-size:0.9rem;">Five remote sessions plus an included call-out.</p>
                        <div class="price-tag">
                            <span class="currency">$</span><span class="amount">50</span>
                        </div>
                        <div class="price-period">per month</div>
                        <ul class="price-features">
                            <li><i class="fa-solid fa-circle-check"></i> 5 remote support calls / month</li>
                            <li><i class="fa-solid fa-circle-check"></i> 1 on-site call-out included</li>
                            <li><i class="fa-solid fa-circle-check"></i> Priority response</li>
                            <li><i class="fa-solid fa-circle-check"></i> Cancel any time</li>
                        </ul>
                        <a href="https://square.link/u/eERL2BZt" class="btn btn-primary btn-block" target="_blank" rel="noopener">
                            <i class="fa-solid fa-credit-card"></i> Subscribe
                        </a>
                    </article>

                    <article class="price-card reveal">
                        <div class="price-name">Pro</div>
                        <p class="section-lead" style="text-align:left;font-size:0.9rem;">Heavier user? This is the sweet spot.</p>
                        <div class="price-tag">
                            <span class="currency">$</span><span class="amount">100</span>
                        </div>
                        <div class="price-period">per month</div>
                        <ul class="price-features">
                            <li><i class="fa-solid fa-circle-check"></i> 15 remote support calls / month</li>
                            <li><i class="fa-solid fa-circle-check"></i> 2 on-site call-outs included</li>
                            <li><i class="fa-solid fa-circle-check"></i> Priority response</li>
                            <li><i class="fa-solid fa-circle-check"></i> Cancel any time</li>
                        </ul>
                        <a href="https://square.link/u/WBY4YHZp" class="btn btn-secondary btn-block" target="_blank" rel="noopener">
                            <i class="fa-solid fa-credit-card"></i> Subscribe
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" style="padding-top:0;">
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow"><i class="fa-solid fa-rocket"></i> Power plans</span>
                    <h2>Heavy use &amp; small business</h2>
                    <p class="section-lead">For when your machines are always doing something and you need help on tap.</p>
                </div>

                <div class="pricing-grid">
                    <article class="price-card reveal">
                        <div class="price-name">Business</div>
                        <p class="section-lead" style="text-align:left;font-size:0.9rem;">Solid for a small office or busy household.</p>
                        <div class="price-tag">
                            <span class="currency">$</span><span class="amount">150</span>
                        </div>
                        <div class="price-period">per month</div>
                        <ul class="price-features">
                            <li><i class="fa-solid fa-circle-check"></i> 30 remote support calls / month</li>
                            <li><i class="fa-solid fa-circle-check"></i> 3 on-site call-outs included</li>
                            <li><i class="fa-solid fa-circle-check"></i> Priority response</li>
                            <li><i class="fa-solid fa-circle-check"></i> Account manager</li>
                        </ul>
                        <a href="https://square.link/u/A6kTHs9s" class="btn btn-secondary btn-block" target="_blank" rel="noopener">
                            <i class="fa-solid fa-credit-card"></i> Subscribe
                        </a>
                    </article>

                    <article class="price-card featured reveal">
                        <div class="price-name">Business Plus</div>
                        <p class="section-lead" style="text-align:left;font-size:0.9rem;">Multiple machines, multiple users, lots of moving parts.</p>
                        <div class="price-tag">
                            <span class="currency">$</span><span class="amount">200</span>
                        </div>
                        <div class="price-period">per month</div>
                        <ul class="price-features">
                            <li><i class="fa-solid fa-circle-check"></i> 50 remote support calls / month</li>
                            <li><i class="fa-solid fa-circle-check"></i> 4 on-site call-outs included</li>
                            <li><i class="fa-solid fa-circle-check"></i> Priority response</li>
                            <li><i class="fa-solid fa-circle-check"></i> Account manager</li>
                        </ul>
                        <a href="https://square.link/u/RCBWZfLI" class="btn btn-primary btn-block" target="_blank" rel="noopener">
                            <i class="fa-solid fa-credit-card"></i> Subscribe
                        </a>
                    </article>

                    <article class="price-card reveal">
                        <div class="price-name">Unlimited</div>
                        <p class="section-lead" style="text-align:left;font-size:0.9rem;">Stop counting. Just call when you need us.</p>
                        <div class="price-tag">
                            <span class="currency">$</span><span class="amount">300</span>
                        </div>
                        <div class="price-period">per month</div>
                        <ul class="price-features">
                            <li><i class="fa-solid fa-infinity"></i> Unlimited remote support calls</li>
                            <li><i class="fa-solid fa-circle-check"></i> 6 on-site call-outs included</li>
                            <li><i class="fa-solid fa-circle-check"></i> Highest priority response</li>
                            <li><i class="fa-solid fa-circle-check"></i> Account manager</li>
                        </ul>
                        <a href="https://square.link/u/IGWgjCib" class="btn btn-secondary btn-block" target="_blank" rel="noopener">
                            <i class="fa-solid fa-credit-card"></i> Subscribe
                        </a>
                    </article>
                </div>

                <p class="price-note reveal">Need extra call-outs beyond what's included in your plan? See the standard rates on the <a href="visit-me.php">on-site visit page</a>.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="callout reveal">
                    <span class="eyebrow"><i class="fa-solid fa-circle-question"></i> Not sure?</span>
                    <h2>Pick a plan, or just ask us first.</h2>
                    <p>If you're not sure which tier fits your usage, drop us a message describing what you typically run into — we'll point you at the right one.</p>
                    <div class="btn-row">
                        <a href="contact.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-paper-plane"></i> Ask a question</a>
                        <a href="#"
                           class="btn btn-outline btn-lg"
                           data-alert="Plans are billed monthly via Square. You can cancel any time from your Square subscription page. Need a custom plan? Email office@lscomputerrepair.com."
                           data-alert-icon="info"
                           data-alert-title="Billing &amp; cancellations">
                            <i class="fa-solid fa-circle-info"></i> Billing info
                        </a>
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
