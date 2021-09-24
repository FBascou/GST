<?php   session_start();   require_once _DIR_.'/email/lib.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Green Smart Tech is here to help you make this world greener"/>
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="/css/main.css">
        <script src='https://kit.fontawesome.com/13e0b18f37.js' crossorigin='anonymous'></script>
        <title>GST</title>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="nav-bar">
                    <div class="logo">
                        <a href="/index.html">
                            <h4 id="logo-text">GST</h4>
                        </a>
                    </div>
                    <div class="nav-menu">
                        <a href="#about" class="nav-link">About</a>
                        <a href="#services" class="nav-link">Services</a>
                        <!-- <a href="#projects" class="nav-link">Projects</a> -->
                        <a href="#articles" class="nav-link">Articles</a>
                        <a href="#contact" class="nav-link">Contact</a>
                        <div class="nav-link" id="dropdown-menu">
                            <img src="/images/gb.svg" alt="English">                                   
                            <div class="language-menu">
                                <a href="/index.html">
                                    <img src="/images/es.svg" alt="Spanish">                                                                       
                                </a>
                            </div>
                        </div>
                        <button class="nav-btn" onclick= "toggleMenu()" id="menu-btn"><i class='fas fa-bars'></i></button>
                    </div>
                </nav>
            </header>
            <section class="hero">
                <div class="title-container">
                    <div class="title">
                        <p>GREEN</p>
                        <p>SMART</p>
                        <p>TECH</p>
                    </div>
                    <div class="subtitle">
                        <p>We put the <span id="color-smart">SMART</span> in green sustainable mobility</p>
                    </div>
                    <div class="submit-btn-container">
                        <a href="#contact"><button>Contact us</button></a>
                    </div>    
                </div>
                <div class="img-container">
                    <div class="img"></div>
                </div>
            </section>
            <main class="main-section">
                <section class="about" id="about">
                    <h2>About</h2>
                    <p>
                        <span>GREEN SMART TECH</span> is a young company with innovative ideas 
                        and a team with work experience in tech projects within Europe.
                        We specialize in providing customized solutions in your Smart Cities, 
                        Electric Mobility, Renewable Energies and Energy Efficiency projects.
                        <br>
                        <br>
                        By providing our services, we seek to incorporate new partners 
                        that are part of our value chain, whose main objective is to find 
                        the sustainability and carbon neutrality that our planet needs.
                    </p>
                </section>
                <section class="services" id="services">
                    <h2>Services</h2>
                    <div class="card-container">
                        <div class="direction-container">
                            <div class="card-item">
                                <h3>Charging station infrastructure consulting for electric vehicles</h3>
                                <i class='fas fa-charging-station'></i>
                                <ul>
                                    <li>Introduction of new technologies</li>
                                    <li>Interoperability plan</li>
                                    <li>EVCI installation projects</li>
                                    <li>Market analysis</li>
                                    <li>Contact with international suppliers</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Strategic electromobility plan</h3>
                                <i class='fas fa-route'></i>
                                <ul>
                                    <li> Projection studies</li>
                                    <li> Strategic replacement of electric fleet</li>
                                    <li> Strategic urban EVCI location</li>
                                    <li> Urban micromobility plan</li>
                                    <li> E-scooter and bike sharing services</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Smart energy management</h3>
                                <i class='fas fa-solar-panel'></i>
                                <ul>
                                    <li> Photovoltaic installation projects</li>
                                    <li> Photovoltaic integration software</li>
                                    <li> Sizing of support batteries</li>
                                    <li> Smart-charging software</li>
                                    <li> Analysis and forecast of power demand</li>
                                </ul>
                            </div>
                        </div>
                        <div class="direction-container">
                            <div class="card-item">
                                <h3>Consulting and projects<br>for Smart Cities</h3>
                                <i class='fas fa-road'></i>
                                <ul>
                                    <li> Contact with international suppliers</li>
                                    <li> Installation of LoRaWAN sensors</li>
                                    <li> Studies of noise emissions and CO2</li>
                                    <li> Traffic estimation and optimization</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Import services<br>LATAM, Europe and Asia</h3>
                                <i class='fas fa-globe'></i>
                                <ul>
                                    <li> Study of products, standards and certifications</li>
                                    <li> Contact and negotiation with suppliers</li>
                                    <li> Requests and import management</li>
                                    <li> Tracking and final logistics</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Training</h3>
                                <i class='fas fa-seedling'></i>
                                <ul>
                                    <li> Charging infrastructure </li>
                                    <li> Energy management </li>
                                    <li> Integration between systems </li>
                                    <li> Communication protocols </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <section class="projects" id="projects">
                    <h2>Projects</h2>
                    <div class="project-container">
                        <div class="project-item">
                            <div class="project-text-container">
                                <h3 class="project-title">Project Title</h3>
                                <p class="project-description">
                                    Al brindar nuestros servicios, buscamos incorporar nuevos
                                    partners que formen parte de nuestra cadena de valor, que
                                    tiene como principal objetivo encontrar la sustentabilidad y
                                    neutralidad de carbono que nuestro planeta necesita.
                                </p>
                                <a href="#" class="project-more">More on this project...</a>
                            </div>
                            <div class="project-img-container">
                                <div class="project-img-bg"></div>
                                <div class="project-img">
                                    <img async src="/images/ather-energy-PoxO2O9mSW0-unsplash.jpg" alt="project1">
                                </div>
                            </div>
                        </div>
                        <div class="project-separator"></div>
                        <div class="project-item">
                            <div class="project-img-container">
                                <div class="project-img-bg"></div>
                                <div class="project-img">
                                    <img async src="/images/chuttersnap-xJLsHl0hIik-unsplash.jpg" alt="project2">
                                </div>
                            </div>
                            <div class="project-text-container">
                                <h3 class="project-title">Project Title</h3>
                                <p class="project-description">
                                    Al brindar nuestros servicios, buscamos incorporar nuevos
                                    partners que formen parte de nuestra cadena de valor, que
                                    tiene como principal objetivo encontrar la sustentabilidad y
                                    neutralidad de carbono que nuestro planeta necesita.
                                </p>
                                <a href="#" class="project-more">More on this project...</a>
                            </div>
                            
                        </div>
                    </div>
                </section> -->
                <section class="articles" id="articles">
                    <h2>Articles</h2>
                    <div class="article-container">
                        <div class="article-item">
                            <div async class="article-img">
                                <img src="/images/chuttersnap-xJLsHl0hIik-unsplash.jpg" alt="article1">
                            </div>
                            <a href="https://portalmovilidad.com/opinion-que-fue-primero-la-red-de-recarga-o-el-coche-electrico/" target="_blank" rel="noopener noreferrer">
                                Opinión: ¿Qué fue primero, la red de recarga o el coche eléctrico? (Spanish only)
                            </a>
                        </div>
                    </div>
                </section>
                <section class="contact" id="contact">
                    <h2>Contact Us</h2>
                    <form name="contactForm" class="contact-form" id="contactform" method="post" action="email/send.php">
                        <input type="hidden" name="token" value="<?=EmailTokenizer::getToken()?>">
                        <div class="contact-input">
                            <label for="name">Full Name <span class="required">(required)</span></label>
                            <input required type="text" name="name" id="name" placeholder="i.e. John Doe">
                        </div>
                        <div class="contact-input">
                            <label for="email">Email <span class="required">(required)</span></label>
                            <input required type="text" name="email" id="email" placeholder="i.e. johndoe@example.com">
                        </div>
                        <div class="contact-input">
                            <label for="company">Company</label>
                            <input type="text" name="company" id="company" placeholder="i.e. Green Smart Technologies">
                        </div>
                        <div class="contact-input">
                            <label for="message">Message <span class="required">(required)</span></label>
                            <textarea required rows="4" cols="50" id="message" name="message"></textarea>
                        </div>
                        <div class="submit-btn-container">
                            <input id="send-btn" type="submit" value="Send">
                        </div>
                    </form>
                    <div class="form-sent-container">
                        <div class="form-sent-msg">
                            <h1>Thank you for getting in touch!</h1>
                            <p>We will get back in touch with you soon! Have a great day!</p>
                        </div>
                    </div>
                </section>
            </main>
            <footer>
                <div class="site-info-container">
                    <div class="sitemap-container">
                        <h3>Green Smart Tech S.A.</h3>
                        <div class="sitemap-item">
                            <a href="#" class="nav-link">Home</a>
                            <a href="#about" class="nav-link">About</a>
                            <a href="#services" class="nav-link">Services</a>
                            <!-- <a href="#projects" class="nav-link">Projects</a> -->
                            <a href="#articles" class="nav-link">Articles</a>
                            <a href="#contact" class="nav-link">Contact</a>
                        </div>  
                    </div>
                    <div class="info-container">
                        <h3>Contact</h3>
                        <div class="info-item">
                            <p>Tel</p>
                            <p>Mail</p>
                            <!-- <p>Address</p> -->
                            <!-- <div class="info-social">
                                <a href="#"><i class='fab fa-linkedin'></i></a>
                                <a href="#"><i class='fab fa-twitter-square'></i></a>
                                <a href="#"><i class='fab fa-facebook-square'></i></a>
                                <a href="#"><i class='fab fa-youtube-square'></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="qr-container">
                        <h3>Scan To Save Contact</h3>
                        <div class="qr-item">
                            <img src="/images/qr_code.png" alt="Scan me!">
                        </div>
                    </div>
                </div>
                <div class="copyright-container">© Green Smart Tech 2021</div>
            </footer>
        </div>
        <script type="text/javascript" src="/js/index.js"></script>
    </body>
</html>