<?php   session_start();   require_once _DIR_.'/email/lib.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Green Smart Tech te ayuda hacer el mundo mas verde"/>
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
                        <a href="#about" class="nav-link">Nosotros</a>
                        <a href="#services" class="nav-link">Servicios</a>
                        <!-- <a href="#projects" class="nav-link">Proyectos</a> -->
                        <a href="#articles" class="nav-link">Artículos</a>
                        <a href="#contact" class="nav-link">Contacto</a>
                        <div class="nav-link" id="dropdown-menu">
                            <img src="/images/es.svg" alt="Spanish">                                   
                            <div class="language-menu">
                                <a href="/pages/en.html">
                                    <img src="/images/gb.svg" alt="English">                                                                       
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
                        <p>Ponemos el <span id="color-smart">SMART</span> en energía verde sustentable</p>
                    </div>
                    <div class="submit-btn-container">
                        <a href="#contact"><button>Contactános</button></a>
                    </div>    
                </div>
                <div class="img-container">
                    <div class="img"></div>
                </div>
            </section>
            <main class="main-section">
                <section class="about" id="about">
                    <h2>Nosotros</h2>
                    <p>
                        <span>GREEN SMART TECH</span> es una empresa joven con ideas
                        innovadoras, que cuenta con un equipo de trabajo de
                        experiencia en proyectos tecnológicos a nivel europeo. Nos
                        especializamos en brindar soluciones a medida en tus
                        proyectos de Smart Cities, Movilidad Eléctrica, Energías
                        Renovables y Eficiencia Energética.
                        <br>
                        <br>
                        Al brindar nuestros servicios, buscamos incorporar nuevos
                        partners que formen parte de nuestra cadena de valor, que
                        tiene como principal objetivo encontrar la sustentabilidad y
                        neutralidad de carbono que nuestro planeta necesita.
                    </p>
                </section>
                <section class="services" id="services">
                    <h2>Servicios</h2>
                    <div class="card-container">
                        <div class="direction-container">
                            <div class="card-item">
                                <h3>Consultoría de infraestructura de recarga para vehículos eléctricos</h3>
                                <i class='fas fa-charging-station'></i>
                                <ul>
                                    <li>Introducción de nuevas tecnologías</li>
                                    <li>Plan de interoperabilidad</li>
                                    <li>Proyectos de instalación IRVE</li>
                                    <li>Análisis y estudios de mercados</li>
                                    <li>Contacto con proveedores internacionales</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Plan estratégico de electromovilidad</h3>
                                <i class='fas fa-route'></i>
                                <ul>
                                    <li>Estudios de proyección</li>
                                    <li>Recambio estratégico a flota eléctrica</li>
                                    <li>Ubicación IRVE urbana estratégica</li>
                                    <li>Plan de micromovilidad urbana</li>
                                    <li>Servicios de e-scooter y bike sharing</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Gestión inteligente de la energía</h3>
                                <i class='fas fa-solar-panel'></i>
                                <ul>
                                    <li>Proyectos de instalación fotovoltaica</li>
                                    <li>Software de integración fotovoltaica</li>
                                    <li>Dimensionamiento de baterías de soporte</li>
                                    <li>Software de smart-charging</li>
                                    <li>Análisis y previsión en la demanda de potencia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="direction-container">
                            <div class="card-item">
                                <h3>Consultoría y Proyectos <br>de Smart Cities</h3>
                                <i class='fas fa-road'></i>
                                <ul>
                                    <li>Contacto con proveedores internacionales</li>
                                    <li>Instalación sensores LoRaWAN</li>
                                    <li>Estudios de emisiones sonaras y CO2</li>
                                    <li>Estimación y optimización de tránsito</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Servicios de importación <br>LATAM, Europa y Asia</h3>
                                <i class='fas fa-globe'></i>
                                <ul>
                                    <li>Estudio de productos, normas y certificaciones</li>
                                    <li>Contacto, y negociación con proveedores</li>
                                    <li>Solicitudes y gestión de importación</li>
                                    <li>Seguimiento y logística final</li>
                                </ul>
                            </div>
                            <div class="card-item">
                                <h3>Capacitaciones</h3>
                                <i class='fas fa-seedling'></i>
                                <ul>
                                    <li>Infraestructura de recarga</li>
                                    <li>Gestión energética</li>
                                    <li>Integración entre sistemas</li>
                                    <li>Protocolos de comunicación</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <section class="projects" id="projects">
                    <h2>Proyectos</h2>
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
                                <a href="#" class="project-more">Leer más</a>
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
                                <a href="#" class="project-more">Leer más</a>
                            </div>
                        </div>
                    </div>
                </section> -->
                <section class="articles" id="articles">
                    <h2>Artículos</h2>
                    <div class="article-container">
                        <div class="article-item">
                            <div class="article-img">
                                <img src="/images/chuttersnap-xJLsHl0hIik-unsplash.jpg" alt="article1">
                            </div>
                            <a href="https://portalmovilidad.com/opinion-que-fue-primero-la-red-de-recarga-o-el-coche-electrico/" target="_blank" rel="noopener noreferrer">
                                Opinión: ¿Qué fue primero, la red de recarga o el coche eléctrico?
                            </a>
                        </div>
                    </div>
                </section>
                <section class="contact" id="contact">
                    <h2>Contactános</h2>
                    <form name="contactForm" class="contact-form" id="contactform" method="post" action="email/send.php">
                        <input type="hidden" name="token" value="<?=EmailTokenizer::getToken()?>">
                        <div class="contact-input">
                            <label for="name">Nombre & Apellido <span class="required">(requerido)</span></label>
                            <input required type="text" name="name" id="name" placeholder="i.e. John Doe">
                        </div>
                        <div class="contact-input">
                            <label for="email">Email <span class="required">(requerido)</span></label>
                            <input required type="text" name="email" id="email" placeholder="i.e. johndoe@example.com">
                        </div>
                        <div class="contact-input">
                            <label for="company">Empresa</label>
                            <input type="text" name="company" id="company" placeholder="i.e. Green Smart Technologies">
                        </div>
                        <div class="contact-input">
                            <label for="message">Mensaje<span class="required"> (requerido)</span></label>
                            <textarea required rows="4" cols="50" id="message" name="message"></textarea>
                        </div>
                        <div class="submit-btn-container">
                            <input id="send-btn" type="submit" value="Enviar">
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
                            <a href="#" class="nav-link">Inicio</a>
                            <a href="#about" class="nav-link">Nosotros</a>
                            <a href="#services" class="nav-link">Servicios</a>
                            <!-- <a href="#projects" class="nav-link">Proyectos</a> -->
                            <a href="#articles" class="nav-link">Artículos</a>
                            <a href="#contact" class="nav-link">Contacto</a>
                        </div>  
                    </div>
                    <div class="info-container">
                        <h3>Contacto</h3>
                        <div class="info-item">
                            <p>Tel</p>
                            <p>Email</p>
                            <!-- <p>Direccion</p> -->
                            <!-- <div class="info-social">
                                <a href="#"><i class='fab fa-linkedin'></i></a>
                                <a href="#"><i class='fab fa-twitter-square'></i></a>
                                <a href="#"><i class='fab fa-facebook-square'></i></a>
                                <a href="#"><i class='fab fa-youtube-square'></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="qr-container">
                        <h3>Escanea Para Guardar Nuestro Contacto</h3>
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