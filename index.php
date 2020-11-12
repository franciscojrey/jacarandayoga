<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jacarandá Yoga</title>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="static/css/bootstrap.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="static/css/styles.css">
        <!-- LOGO -->
        <link rel="shortcut icon" type="image/x-icon" href="static/img/icono.png">   
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/8ca6f1cadf.js" crossorigin="anonymous"></script>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- GOOGLE FONTS: OPEN SANS -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- GOOGLE FONTS: LATO-->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="static/img/logo.jpg" alt="" class="logo">
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
                <ul>
                    <li><a href="#hero" class="header__button uppercase">Inicio</a></li>
                    <li><a href="#classes" class="header__button uppercase">Clases</a></li>
                    <li><a href="#about-us" class="header__button uppercase">Nosotras</a></li>
                    <li><a href="#plans" class="header__button uppercase">Aranceles</a></li>
                    <li><a href="#contact" class="header__button uppercase">Contacto</a></li>
                </ul>
            </nav>
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
        </header>
        <main>
            <section class="hero" id="hero">
                <div class="hero__body">
                    <h1 class="hero__title section-title mb-7 uppercase">Jacarandá Yoga</h1>
                    <h4 class="hero__description mb-7">El yoga nos trae al momento presente, el único lugar donde la vida existe.</h4>
                    <a href="#contact" class="hero__btn uppercase">contacto</a>
                </div>
            </section>
            
            <section class="classes" id="classes">
                <div class="classes__title">
                    <h3>Clases</h3>
                </div>
                <div class="class-wrapper class1">
                    <img src="static/gif/yoga1.gif" class="class__gif" alt="">
                    <div class="class__box">
                        <div class="class__text-box class__description">
                            <h3 class="class__title">Yoga suave</h3>
                            <p class="class__text">Se busca mediante la respiración, la propiocepción y las asanas,  movilizar el cuerpo y relajar la mente, cada uno respetando su propio ritmo.</p>
                        </div>
                        <div class="class__text-box class__schedule">
                            <h4 class="schedule__title">Horario</h4>
                            <p class="schedule__text">Martes 19.00-20.00</p>
                            <p class="schedule__text">Miércoles 9.30-10.30</p>
                            <p class="schedule__text">Jueves 19.00-20.00</p>
                            <p class="schedule__text">Viernes 9.30-10.30</p>
                        </div>
                        <div class="class__text-box class__instructor">
                            <h4 class="schedule__title">Instructora</h4>
                            <p class="schedule__text">Griselda</p>
                        </div>
                    </div>
                </div>
                <div class="class-wrapper class2">
                    <img src="static/gif/yoga2.gif" class="class__gif" alt="">
                    <div class="class__box">
                        <div class="class__text-box class__description">
                            <h3 class="class__title"> Yoga intermedio</h3>
                            <p class="class__text">Trabajamos desde la respiración y el movimiento, irrigando, tonificando y relajando nuestro cuerpo.</p>
                        </div>
                        <div class="class__text-box class__schedule">
                            <h4 class="schedule__title">Horario</h4>
                            <p class="schedule__text">Lunes 14.30-15.30</p>
                            <p class="schedule__text">Miércoles 14.30-15.30</p>
                        </div>
                        <div class="class__text-box class__instructor">
                            <h4 class="schedule__title">Instructora</h4>
                            <p class="schedule__text">Anahí</p>
                        </div>
                    </div>
                </div>
                <div class="class-wrapper class3">
                    <img src="static/gif/yoga3.gif" class="class__gif" alt="">
                    <div class="class__box">
                        <div class="class__text-box class__description">
                            <h3 class="class__title">Ashtanga Vinyasa</h3>
                            <p class="class__text">Basada en la primera serie de posturas de Pattabhi Jois, es una secuencia sincronizando la respiración y el movimiento que , entre otras cosas, nos posibilita desintoxicar el cuerpo y calmar la mente.</p>
                        </div>
                        <div class="class__text-box class__schedule">
                            <h4 class="schedule__title">Horario</h4>
                            <p class="schedule__text">Martes 9.30-10.45</p>
                            <p class="schedule__text">Miércoles 19.00-20.15</p>
                            <p class="schedule__text">Jueves 9.30-10.45</p>
                            <p class="schedule__text">Sábado 9.30-10.45</p>
                        </div>
                        <div class="class__text-box class__instructor">
                            <h4 class="instructor__title">Instructora</h4>
                            <p class="instructor__text">Anahí</p>
                        </div>
                    </div>
                </div>     
            </section>

            <section class="carousel-container">
                <div class="carousel__block">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="static/img/yoga1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="static/img/yoga2.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="static/img/yoga3.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="static/img/yoga4.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="about-us-container">
                <div class="about-us__title">
                    <h3>Nosotras</h3>
                </div>
                <div class="about-us about-us1" id="about-us">
                    <div class="about-us__intro">
                        <img src="static/img/about_us1.jpeg" alt="" class="about-us__image">
                    </div>
                    <div class="about-us__body">
                        <p class="about-us__body-title">Anahí</p>
                        <p class="about-us__description">Comencé a practicar Ashtanga con Alejandro Chiarella y Ariel Micheletto en el año 2001 y luego practiqué con Ricardo Filomena. En el año 2009 dejé mi trabajo en la oficina y comencé a dar clases y a formarme como instructora en Ashtangabaires y en el centro Ananda yoga en los cursos básico, yogaterapia y maestría,  en ese tiempo mi práctica incorporó entre otras cosas elementos de la biomecánica convirtiéndose en una práctica más segura y liviana.
                            Lo que experimenté al tomar mis primeras clases de yoga fue un distanciamiento, como de repente ver todo con distintos ojos, me recuerdo cuestionándome mis pensamientos como si fueran algo ajeno (de hecho lo son) en poco tiempo resolví un conflicto que venía arrastrando hace años, viendo que no era real se disolvió sin más.
                            Practicar Yoga junto con Ayurveda me resulta sumamente útil y práctico a todo nivel: nos ayuda a mantener un cuerpo cómodo y limpio,  tanto en el movimiento como en el metabolismo, nos ayuda a despejar y calmar la mente, a tomar distancia de nuestros pensamientos y emociones, dándonos espacio para la observación y permitiéndonos responder con más claridad a las demandas de la vida diaria.   
                            Es un hábito saludable que todos podemos adquirir, practicarlo en el momento y lugar que dispongamos, reconozco que me llevó bastante tiempo hacerme una rutina diaria en casa pero llega un momento que no hay cuestionamiento, se experimentan los beneficios, nuestro cuerpo-mente  lo recuerda, lo agradece y lo pide!</p>
                    </div>
                </div>
                <div class="about-us about-us2" id="about-us">
                    <div class="about-us__body">
                        <p class="about-us__body-title">Griselda</p>
                        <p class="about-us__description">Durante toda mi vida hice actividad física, en el año 2013 comencé a practicar yoga con Anahí Menendez, al cabo de un tiempo descubrí que el yoga generaba cambios más allá del cuerpo, además del bienestar corporal comencé a notar que mi mente estaba más relajada y más centrada.  Decidí incrementar y profundizar mi práctica del yoga cursando el instructorado y yogaterapia en el centro Ananda y tomando clases de yoga, ayurveda, astrología y filosofía en Shanti Yoga.</p>
                    </div>
                    <div class="about-us__intro">
                        <img src="static/img/about_us2.jpg" alt="" class="about-us__image">
                    </div>
                </div>
            </section>
            
            <section class="plans-container" id="plans">
                <div class="plans">
                    <div class="plans__title">
                        <h3>Aranceles</h3>
                    </div>
                    <div class="plan__wrapper plan1">
                        <img src="static/img/arancel1.png" class="plan__img" alt="">
                        <div class="plan__description">
                            <h3 class="plan__title">Clase suelta</h3>
                            <p class="plan__text">Si se realiza una clase suelta de prueba y luego decide tomar clases regularmente se descuenta del abono mensual.</p>
                        </div>
                        <div class="plan__price">
                            <h4 class="plan__price-title">$450/por clase</h4>
                        </div>
                    </div>
                    <div class="plan__wrapper plan2">
                        <img src="static/img/arancel2.png" class="plan__img" alt="">
                        <div class="plan__description">
                            <h3 class="plan__title">Básico</h3>
                            <p class="plan__text">Este plan permite el acceso a 1 clase por semana.</p>
                        </div>
                        <div class="plan__price">
                            <h4 class="plan__price-title">$1300/por mes</h4>
                        </div>
                    </div>
                    <div class="plan__wrapper plan3">
                        <img src="static/img/arancel3.png" class="plan__img" alt="">
                        <div class="plan__description">
                            <h3 class="plan__title">Premium</h3>
                            <p class="plan__text">Este plan permite el acceso a 2 clase por semana.</p>
                        </div>
                        <div class="plan__price">
                            <h4 class="plan__price-title">$1500/por mes</h4>
                        </div>
                    </div>
                    <div class="plan__wrapper plan4">
                        <img src="static/img/arancel4.png" class="plan__img" alt="">
                        <div class="plan__description">
                            <h3 class="plan__title">Ilimitado</h3>
                            <p class="plan__text">Este plan permite el acceso a todas las clases que desee.</p>
                        </div>
                        <div class="plan__price">
                            <h4 class="plan__price-title">$1700/por mes</h4>
                        </div>
                    </div>  
                </div>
            </section>
        </main>
        
        <section class="form__container" id="contact">
            <form action="send_mail.php" method="post" class="form">
                <!-- Está bien el texto dentro del form? -->
                <div class="form__header">
                    <p class="form__title"><strong>CONTACTO</strong></p>
                </div>
                
                <div class="form__item">
                    <input type="text" class="form__input" id="form_name" name="name" placeholder="Nombre completo" aria-label="nombre completo" required minlength="2">
                </div>

                <div class="form__item">
                    <input type="email" class="form__input" id="form_email" name="email" placeholder="Correo electrónico" aria-label="correo electrónico" required minlength="4">
                </div>

                <div class="form__item">
                    <input type="hidden" class="form__input" id="form_name" name="subject" value="Enviado desde Jacarandayoga.com.ar" aria-label="subject" required minlength="2">
                </div>

                <div class="form__item">
                    <textarea class="form__input" id="form_message" name="message" placeholder="Mensaje" aria-label="mensaje" required minlength="4"></textarea>
                </div>
                <div class="form__button-container">
                    <button class="form__button uppercase" id="form_button" type="submit" name="submit">enviar</button>
                </div>
            </form>
        </section>

        <footer>
            <div class="footer__contact-info">
                <div class="footer__contact-block">
                    <h4 class="uppercase">contacto</h4>
                    <span class="footer-contact-line"></span>
                    <p class="contact-text">info@jacarandayoga.com.ar</p>
                    <p class="contact-text">anahi@jacarandayoga.com.ar</p>
                    <p class="contact-text">griselda@jacarandayoga.com.ar</p>
                    <p class="contact-text">11 5909 3849</p>
                    <p class="contact-text">11 4037 6690</p>
                </div>
                <div class="footer__contact-block">
                    <h4 class="uppercase">ubicación</h4>
                    <span class="footer-contact-line"></span>
                    <p class="contact-text">Parque Chacabuco, Capital Federal</p>
                    
                </div>
            </div>
            <div class="footer__social-media">
                <!--<div class="footer__btn-block">
                    <a href="http://instagram.com/" class="btn-social-media"><i class="fab fa-instagram"></i></a>
                </div>-->
                <div class="footer__btn-block">
                    <a href="https://www.facebook.com/yogaparquechacabuco" class="btn-social-media" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </footer>
        <!-- JQUERY -->
        <script src="static/js/jquery-3.5.1.min.js"></script>
        <!-- BOOTSTRAP -->
        <script src="static/js/bootstrap.bundle.js"></script>
    </body>
    
</html>