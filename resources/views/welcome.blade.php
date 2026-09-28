<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MafiaPS | Growtopia Private Server</title>
        <meta name="description" content="MafiaPS is a private Growtopia server experience with community, custom worlds, active events, and trusted support.">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="page-shell">
            <div class="scroll-progress" aria-hidden="true"></div>
            <header class="topbar container">
                <div class="brand" aria-label="MafiaPS logo">
                    <span class="brand-mark">M</span>
                    <span>MafiaPS</span>
                </div>

                <nav class="main-nav" aria-label="Main navigation">
                    <a href="#home">Home</a>
                    <a href="#play">How to Play</a>
                    <a href="#features">Why Choose</a>
                    <a href="#about">About</a>
                    <a href="#team">Team</a>
                </nav>

                <div class="nav-actions">
                    <a href="https://discord.gg/bCp5F72mj" target="_blank" rel="noreferrer" class="ghost-link">Discord</a>
                    <a href="#play" class="btn btn-primary">Play Now</a>
                </div>
            </header>

            <main id="home">
                <section class="hero container">
                    <div class="hero-copy">
                        <span class="eyebrow">Growtopia Private Server</span>
                        <h1>Welcome To <span>Mafia Private Server</span></h1>
                        <p>
                            Discover exclusive features, meet incredible players from around the world,
                            and dive into a community built for epic journeys and unforgettable experiences.
                        </p>

                        <div class="cta-group">
                            <a href="#play" class="btn btn-primary">Press Me!</a>
                            <a href="https://discord.gg/mafiaps" target="_blank" rel="noreferrer" class="btn btn-secondary">Join Discord</a>
                        </div>

                        <div class="hero-stats" aria-label="Server stats">
                            <div>
                                <strong>19K+</strong>
                                <span>members</span>
                            </div>
                            <div>
                                <strong>24/7</strong>
                                <span>uptime</span>
                            </div>
                            <div>
                                <strong>100%</strong>
                                <span>community</span>
                            </div>
                        </div>
                    </div>

                    <div class="hero-visual" aria-label="MafiaPS logo card">
                        <div class="orb orb-one"></div>
                        <div class="orb orb-two"></div>
                        <div class="visual-card">
                            <img src="{{ asset('images/mps-logo-independence.webp') }}" alt="MafiaPS official logo">
                            <div class="badge-pill">PT MAFIA JAYA</div>
                        </div>
                    </div>
                </section>

                <section id="play" class="section container">
                    <div class="section-heading">
                        <span class="section-tag">How to Play</span>
                        <h2>Please select the application you want to use.</h2>
                    </div>

                    <div class="device-grid">
                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mps-logo-cube-independence.webp') }}" alt="MafiaPS mobile icon">
                            <h3>MafiaPS Mobile APK</h3>
                            <ol>
                                <li>Uninstall Real Growtopia if you have it</li>
                                <li>Restart your device (optional but recommended)</li>
                                <li>Install <a href="https://www.mediafire.com/file/14ra2dutwtaay6l/MafiaPS_v5.57.apk/file" target="_blank" rel="noreferrer">MafiaPS APK</a></li>
                                <li>Open MafiaPS APK use your MafiaPS account to login</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mps-logo-cube-independence.webp') }}" alt="MafiaPS Windows icon">
                            <h3>MafiaPS Windows Installer</h3>
                            <ol>
                                <li>Uninstall Real Growtopia if you have it</li>
                                <li>Install <a href="https://www.mediafire.com/file/fjner4ty9qlj4ut/MafiaPS_Setup_v5.57.exe/file" target="_blank" rel="noreferrer">MafiaPS APK</a></li>
                                <li>Open MafiaPS Installer MafiaPS account to login</li>
                                <li>Wait until installing succes, then login MafiaPS account to login</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mafiaps_windows.webp') }}" alt="Windows icon">
                            <h3>Windows</h3>
                            <ol>
                                <li>Press Win+R → paste <code>C:\Windows\System32\drivers\etc</code></li>
                                <li>Open hosts with Notepad (Admin)</li>
                                <li>Add:<br><code>103.126.117.167 www.growtopia1.com<br>103.126.117.167 www.growtopia2.com</code></li>
                                <li>Save → launch Growtopia</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mafiaps_powertunnel.webp') }}" alt="PowerTunnel icon">
                            <h3>PowerTunnel (Android)</h3>
                            <ol>
                                <li>Install <a href="https://android.izzysoft.de/repo/apk/io.github.krlvm.powertunnel.android" target="_blank" rel="noreferrer">PowerTunnel APK</a></li>
                                <li>Open → Plugin → Hosts → Open the Setting</li>
                                <li>Enter: <code>https://growtopia.id/android</code></li>
                                <li>Back, Click "CONNECT" button, open Growtopia</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mafiaps_hostsgo.webp') }}" alt="Hosts Go icon">
                            <h3>Hosts Go (Android)</h3>
                            <ol>
                                <li>Install <a href="https://www.mediafire.com/file/ctly08te3i8rlwq/%28No_root%29_Hosts_Go_2.1.9_Apkpure.apk/file" target="_blank" rel="noreferrer">Hosts Go (No Root)</a></li>
                                <li>Open → Hosts Editor → enable → Download Hosts File</li>
                                <li>Enter: <code>https://growtopia.id/android</code></li>
                                <li>Apply, start protection, open Growtopia</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mafiaps_virtualhost.webp') }}" alt="Virtual Host icon">
                            <h3>Virtual Host (Android)</h3>
                            <ol>
                                <li>Install <a href="https://www.apkshub.com/app/com.github.xfalcon.vhosts" target="_blank" rel="noreferrer">Virtual Host APK</a></li>
                                <li>Download Hosts File <a href="https://www.mediafire.com/file/81y7h7d2c9jv51t/MAFIA-PS-2026+(1).txt/file" target="_blank" rel="noreferrer">here</a></li>
                                <li>Open → SELECT HOSTS FILE</li>
                                <li>Select the downloaded host file (<code>MAFIAPS-HOST (2).txt</code>)</li>
                                <li>open Growtopia</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mafiaps_apple.webp') }}" alt="Mac icon">
                            <h3>Mac</h3>
                            <ol>
                                <li>Finder → Go → Go to Folder → <code>/private/etc/hosts</code></li>
                                <li>Copy to Desktop, edit, then add:<br><code>103.126.117.167 www.growtopia1.com<br>103.126.117.167 www.growtopia2.com</code></li>
                                <li>Save and move back → start Growtopia</li>
                            </ol>
                        </article>

                        <article class="device-card">
                            <img class="device-icon" src="{{ asset('images/mafiaps_surge5.webp') }}" alt="Surge5 icon">
                            <h3>Surge5 (iPhone)</h3>
                            <ol>
                                <li>Install <a href="https://apps.apple.com/us/app/surge-5/id1442620678" target="_blank" rel="noreferrer">Surge5</a></li>
                                <li>Import Profile: <code>https://growtopia.id/ios</code></li>
                                <li>Allow VPN Configuration → Connect → Open Growtopia</li>
                            </ol>
                        </article>
                    </div>
                </section>

                <section id="features" class="section section-alt">
                    <div class="container">
                        <div class="section-heading center">
                            <span class="section-tag">Why Choose MPS?</span>
                            <h2>Check out the awesome features that make our server the best choice.</h2>
                        </div>

                        <div class="feature-grid">
                            <article class="feature-card">
                                <div class="feature-icon">🛡️</div>
                                <h3>Safe Environment</h3>
                                <p>Strong moderation and a zero-tolerance policy keep the community peaceful and enjoyable.</p>
                            </article>

                            <article class="feature-card">
                                <div class="feature-icon">👥</div>
                                <h3>Active Community</h3>
                                <p>Join a thriving player base where creativity, sharing, and teamwork grow every day.</p>
                            </article>

                            <article class="feature-card">
                                <div class="feature-icon">✨</div>
                                <h3>Cool Features</h3>
                                <p>Enjoy surgery, cooking, fishing, ship-building, parkour, and much more.</p>
                            </article>

                            <article class="feature-card">
                                <div class="feature-icon">⏰</div>
                                <h3>24/7 Uptime</h3>
                                <p>Stay online anytime with a reliable server that minimizes downtime and interruptions.</p>
                            </article>

                            <article class="feature-card">
                                <div class="feature-icon">💬</div>
                                <h3>Discord Integration</h3>
                                <p>Connect to support, events, announcements, and the broader player community instantly.</p>
                            </article>

                            <article class="feature-card">
                                <div class="feature-icon">🎉</div>
                                <h3>Regular Events</h3>
                                <p>Take part in server-wide challenges with rewards, surprises, and exclusive benefits.</p>
                            </article>

                            <article class="feature-card">
                                <div class="feature-icon">🎧</div>
                                <h3>Player Support</h3>
                                <p>Get fast help from the community and staff whenever you need a hand.</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="about" class="section container about-section">
                    <div class="about-copy">
                        <span class="section-tag">Server About</span>
                        <h2>MafiaPS | The Growtopia Private Server</h2>
                        <p class="about-lead">PT MAFIA JAYA</p>
                        <p>
                            Founded on October 10, 2023, by Fery, MafiaPS has grown into a thriving community with
                            more than 19,000 members. More than just a game, it is a place where creativity,
                            exploration, and connection come together.
                        </p>
                        <p>
                            MafiaPS is a safe, welcoming, and inclusive server with strong moderation and a
                            zero-tolerance policy for disruptive behavior. Players can enjoy building, learning,
                            competing, and sharing experiences with friends and new allies.
                        </p>
                    </div>

                    <div class="about-media">
                        <img src="https://www.growtopia.id/img/mps-logo-cube-independence.webp" alt="MafiaPS cube logo">
                    </div>
                </section>

                <section id="community" class="section container community-section">
                    <div class="community-box">
                        <div>
                            <span class="section-tag">Server Community</span>
                            <h2>Join our community to connect, explore, and shape the future of MafiaPS.</h2>
                        </div>

                        <div class="community-links" aria-label="Community links">
                            <a href="https://discord.gg/mafiaps" target="_blank" rel="noreferrer">Discord</a>
                            <a href="https://whatsapp.com/channel/0029VbB0sjcId7nE4TsAgl23" target="_blank" rel="noreferrer">WhatsApp</a>
                            <a href="https://www.tiktok.com/@ferystream" target="_blank" rel="noreferrer">TikTok</a>
                        </div>
                    </div>
                </section>

                <section id="team" class="section container team-section">
                    <div class="section-heading center">
                        <span class="section-tag">Server Team</span>
                        <h2>The architects of seamless server operations.</h2>
                    </div>

                    <div class="team-grid">
                        <div class="team-track">
                            <article class="team-card">
                                <div class="team-avatar">F</div>
                                <h3>Fery</h3>
                                <span>Server Owner</span>
                                <p>“MafiaPS is the best place to play, chill, and grind without limits.”</p>
                            </article>

                            <article class="team-card">
                                <div class="team-avatar">T</div>
                                <h3>Tron</h3>
                                <span>Server Coder</span>
                                <p>“I love creating challenging worlds here. The tools and support are amazing.”</p>
                            </article>

                            <article class="team-card">
                                <div class="team-avatar">H</div>
                                <h3>HTA</h3>
                                <span>Server Staff</span>
                                <p>“MafiaPS is not just a server, it is a family full of teamwork and energy.”</p>
                            </article>

                            <article class="team-card">
                                <div class="team-avatar">S</div>
                                <h3>sneevilz</h3>
                                <span>Server Staff</span>
                                <p>“Every login feels different on MafiaPS. It is a mix of chill vibes and fun.”</p>
                            </article>

                            <article class="team-card">
                                <div class="team-avatar">A</div>
                                <h3>Angga</h3>
                                <span>Server Staff</span>
                                <p>“MafiaPS gives me the chance to enjoy the game freely, with friends and fun.”</p>
                            </article>

                            <article class="team-card">
                                <div class="team-avatar">I</div>
                                <h3>Ilham</h3>
                                <span>Server Staff</span>
                                <p>“The atmosphere feels close and every day there is something new to do.”</p>
                            </article>

                            <article class="team-card" aria-hidden="true">
                                <div class="team-avatar">F</div>
                                <h3>Fery</h3>
                                <span>Server Owner</span>
                                <p>“MafiaPS is the best place to play, chill, and grind without limits.”</p>
                            </article>

                            <article class="team-card" aria-hidden="true">
                                <div class="team-avatar">T</div>
                                <h3>Tron</h3>
                                <span>Server Coder</span>
                                <p>“I love creating challenging worlds here. The tools and support are amazing.”</p>
                            </article>

                            <article class="team-card" aria-hidden="true">
                                <div class="team-avatar">H</div>
                                <h3>HTA</h3>
                                <span>Server Staff</span>
                                <p>“MafiaPS is not just a server, it is a family full of teamwork and energy.”</p>
                            </article>

                            <article class="team-card" aria-hidden="true">
                                <div class="team-avatar">S</div>
                                <h3>sneevilz</h3>
                                <span>Server Staff</span>
                                <p>“Every login feels different on MafiaPS. It is a mix of chill vibes and fun.”</p>
                            </article>

                            <article class="team-card" aria-hidden="true">
                                <div class="team-avatar">A</div>
                                <h3>Angga</h3>
                                <span>Server Staff</span>
                                <p>“MafiaPS gives me the chance to enjoy the game freely, with friends and fun.”</p>
                            </article>

                            <article class="team-card" aria-hidden="true">
                                <div class="team-avatar">I</div>
                                <h3>Ilham</h3>
                                <span>Server Staff</span>
                                <p>“The atmosphere feels close and every day there is something new to do.”</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="container cta-panel">
                    <div>
                        <span class="section-tag">Ready?</span>
                        <h2>Press the button below to begin.</h2>
                    </div>
                    <a href="#play" class="btn btn-primary big">Play Now</a>
                </section>
            </main>

            <footer class="site-footer">
                <div class="container footer-inner">
                    <div>
                        <div class="brand footer-brand">
                            <span class="brand-mark">M</span>
                            <span>MafiaPS</span>
                        </div>
                        <p>MafiaPS is not affiliated with Growtopia or Ubisoft Entertainment.</p>
                    </div>

                    <div class="footer-meta">
                        <span>© 2023 - 2026 Mafia Private Server</span>
                        <span>All rights reserved.</span>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
