<?php

require("assets/inc/form_process.php");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel France - Agence de design graphique & web</title>

    <!-- og/metadata -->

    <meta name="description" content="Pixel France est une agence spécialisée en design graphique & web, 2D/3D et web développement" />
    <meta name="author" content="Simon Bénet" />
    <meta name="google-site-verification" content="" />
    <meta property="og:title" content="Pixel France - Agence de design graphique & web" />
    <meta property="og:site_name" content="Pixel France - Agence de design graphique & web" />
    <meta property="og:url" content="https://www.simonbenet.com/" />
    <meta property="og:description" content="Pixel France est une agence spécialisée en design graphique & web, 2D/3D et web développement" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/img/pixelfrance.jpg" />

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&family=Roboto+Flex&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style sheet -->
    
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <!-- script js -->

    <script src="assets/js/burgermenu.js" defer></script>
    <script src="assets/js/formValidation.js" defer></script>
    <script src="assets/js/projectSlider.js" defer></script>
    <script src="assets/js/includeSvg.js" defer></script>

    <!-- reCAPTCHA Script -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
    <!-- // ---- HEADER ---- // -->

    <header>
        <div id="headerMainContentContainer">
            <div id="logoContainer">

                <!-- logo -->

                <img id="headerLogo" src="assets/img/logo.png" alt="Portrait/logo">
            </div>

            <!-- navbar -->

            <div id="navbar">
                <ul>
                    <li class="quickAccess">
                        <a href="#homeSection" title="Home section quick access"><p class="navbarTxt">Accueil</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#teamSection" title="Team section quick access"><p class="navbarTxt">l'équipe</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#projectsSection" title="Projects section quick access"><p class="navbarTxt">nos réalisations</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="gallery.html" title="Gallery section quick access"><p class="navbarTxt">Gallerie</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#contactSection" title="Contact section quick access"><p class="navbarTxt">contact</p></a>
                    </li>
                </ul>
            </div>

            <!-- burger menu container -->

            <div id="burgerMenuMainContainer">
                <div id="burgerMenuOpenerContainer" class="burgerMenuImgContainer">
                    <img src="https://www.svgrepo.com/show/506800/burger-menu.svg" alt="Burger menu icone">
                </div>
                <div id="burgerMenuCloserContainer" class="burgerMenuImgContainer">
                    <img src="https://cdn-icons-png.flaticon.com/128/6423/6423881.png" alt="Burger menu close icone">
                </div>
            </div>
        </div>

        <!-- burger menu -->

        <div id="burgerMenu">
            <ul>
                <li class="quickAccess">
                    <a href="#homeSection" title="Home section quick access">accueil</a>
                </li>
                <li class="quickAccess">
                    <a href="#teamsSection" title="Team section quick access">l'équipe</a>
                </li>
                <li class="quickAccess">
                    <a href="#projectsSection" title="Projects section quick access">nos réalisations</a>
                </li>
                <li class="quickAccess">
                    <a href="gallery.html" title="Projects section quick access">gallerie</a>
                </li>
                <li class="quickAccess">
                    <a href="#contactSection" title="Contact section quick access">contact</a>
                </li>
            </ul>
        </div>
    </header>

    <!-- // ---- MAIN ---- // -->

    <main>

        <!-- Home Section -->
        
        <section id="homeSection">

            <!-- Headline -->

            <div id="homeMainContainer">
                <div id="headLineContainer">
                    <h1>Design</h1>
                    <div id="subContainer">
                        <h2 class="sub">web</h2>
                        <h3 class="sub sub2">graphique</h3>
                        <h3 class="sub red sub3">2d & 3d</h3>
                    </div>
                </div>

                <!-- Home cards -->

                <div id="homeCardContainer">
                    <div class="homeCard">
                        <img class="homeCardLogo" src="assets/img/homeCardIcon1.png" alt="home card icon" class="homeCardLogo">
                        <div class="homeCardTitle">graphisme 2d</div>
                        <div class="homeCardItem">logo</div>
                        <div class="homeCardItem">charte graphique</div>
                        <div class="homeCardItem">flyer</div>
                        <div class="homeCardItem">publicité</div>
                        <div class="homeCardItem">print</div>
                    </div>
                    <div class="homeCard">
                        <img class="homeCardLogo" src="assets/img/homeCardIcon2.png" alt="home card icon" class="homeCardLogo">
                        <div class="homeCardTitle">design 3d</div>
                        <div class="homeCardItem">modélisation 3d</div>
                        <div class="homeCardItem">3d architectural</div>
                        <div class="homeCardItem">design produit</div>
                        <div class="homeCardItem">jeux vidéos</div>
                        <div class="homeCardItem">mobilier publicitaire</div>
                    </div>
                    <div class="homeCard">
                        <img class="homeCardLogo" src="assets/img/homeCardIcon3.png" alt="home card icon" class="homeCardLogo">
                        <div class="homeCardTitle">développement web</div>
                        <div class="homeCardItem">site vitrine & portfolio</div>
                        <div class="homeCardItem">e-commerce & blog</div>
                        <div class="homeCardItem">réferencement</div>
                        <div class="homeCardItem">react & symfony</div>
                        <div class="homeCardItem">ux/ui</div>
                    </div>
                </div>
                <div id="homeSubContentContainer">
                    <div id="homeSubContent">Et bien plus encore...</div>
                    <div id="homeCta" class="ctaContainers">
                        <a href="gallery.html" class="cta" title="voir plus dans la gallerie">voir nos création</a>
                    </div>
                </div>
                <div id="homeScrollAnimationContainer">
                    <img src="assets/img/svg/bottomArrow.svg" alt="bottom arrow">
                </div>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>
        
        <!-- trust Section -->
        
        <section id="trustSection">

            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer">
                <h2 id="trustSectionTitle" class="sectionTitle">ils nous font confiance</h2>
                <div id="carouselContainer">
                    <div id="carousel">
                        <img class="carouselImages" src="assets/img/brandLogos/123Boost.jpg" alt="123Boost">
                        <img class="carouselImages" src="assets/img/brandLogos/BewellConnect.jpg" alt="BewellConnect">
                        <img class="carouselImages" src="assets/img/brandLogos/Bodeor.jpg" alt="Bodeor">
                        <img class="carouselImages" src="assets/img/brandLogos/BrainCube.jpg" alt="BrainCube">
                        <img class="carouselImages" src="assets/img/brandLogos/Cdiscount.jpg" alt="Cdiscount">
                        <img class="carouselImages" src="assets/img/brandLogos/CentralCourses.jpg" alt="CentralCourses">
                        <img class="carouselImages" src="assets/img/brandLogos/CloturesGrillages.jpg" alt="CloturesGrillages">
                        <img class="carouselImages" src="assets/img/brandLogos/DontNod.jpg" alt="DontNod">
                        <img class="carouselImages" src="assets/img/brandLogos/FaitsDarmes.jpg" alt="FaitsDarmes">
                        <img class="carouselImages" src="assets/img/brandLogos/Maketis.jpg" alt="Maketis">
                        <img class="carouselImages" src="assets/img/brandLogos/Normandy Ceramics.jpg" alt="Normandy Ceramics">
                        <img class="carouselImages" src="assets/img/brandLogos/Notube.jpg" alt="Notube">
                        <img class="carouselImages" src="assets/img/brandLogos/StudioDesign.jpg" alt="StudioDesign">
                        <img class="carouselImages" src="assets/img/brandLogos/TacticalAdventure.jpg" alt="TacticalAdventure">
                        <img class="carouselImages" src="assets/img/brandLogos/Tampographe.jpg" alt="Tampographe">
                        <img class="carouselImages" src="assets/img/brandLogos/winenot.jpg" alt="winenot">

                        <img class="carouselImages" src="assets/img/brandLogos/123Boost.jpg" alt="123Boost">

                        <!-- clone for carousel -->

                        <img class="carouselImages" src="assets/img/brandLogos/BewellConnect.jpg" alt="BewellConnect">
                        <img class="carouselImages" src="assets/img/brandLogos/Bodeor.jpg" alt="Bodeor">
                        <img class="carouselImages" src="assets/img/brandLogos/BrainCube.jpg" alt="BrainCube">
                        <img class="carouselImages" src="assets/img/brandLogos/Cdiscount.jpg" alt="Cdiscount">
                        <img class="carouselImages" src="assets/img/brandLogos/CentralCourses.jpg" alt="CentralCourses">
                        <img class="carouselImages" src="assets/img/brandLogos/CloturesGrillages.jpg" alt="CloturesGrillages">
                        <img class="carouselImages" src="assets/img/brandLogos/DontNod.jpg" alt="DontNod">
                        <img class="carouselImages" src="assets/img/brandLogos/FaitsDarmes.jpg" alt="FaitsDarmes">
                        <img class="carouselImages" src="assets/img/brandLogos/Maketis.jpg" alt="Maketis">
                        <img class="carouselImages" src="assets/img/brandLogos/Normandy Ceramics.jpg" alt="Normandy Ceramics">
                        <img class="carouselImages" src="assets/img/brandLogos/Notube.jpg" alt="Notube">
                        <img class="carouselImages" src="assets/img/brandLogos/StudioDesign.jpg" alt="StudioDesign">
                        <img class="carouselImages" src="assets/img/brandLogos/TacticalAdventure.jpg" alt="TacticalAdventure">
                        <img class="carouselImages" src="assets/img/brandLogos/Tampographe.jpg" alt="Tampographe">
                        <img class="carouselImages" src="assets/img/brandLogos/winenot.jpg" alt="winenot">
                    </div>
                </div>
            </div>
            <div class="ctaContainers">
                <a href="#contactSection" class="cta" title="Click to access to contact section">contactez nous !</a>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>

        <!-- team Section -->
        
        <section id="teamSection">


            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer">
                <h2 id="teamSectionTitle" class="sectionTitle">l'équipe</h2>
                <div id="teamCardContainer">
                    <div class="teamCard">
                        <img src="https://agencepixelfrance.fr/wp-content/uploads/2024/06/Avatar-Paul-600pxl.jpg" alt="" class="teamImg">
                        <div class="teamName">paul b.</div>
                        <div class="teamSub">Infographiste polyvalent</div>
                        <div class="teamSub">2D/3D & Web</div>
                    </div>
                    <div class="teamCard">
                        <img src="assets/img/pigeon.png" alt="" class="teamImg">
                        <div class="teamName">stéphane a.</div>
                        <div class="teamSub">Infographiste 3D</div>
                        <div class="teamSub">Game & Architecture</div>
                    </div>
                    <div class="teamCard">
                        <img src="assets/img/simon_pixelart.png" alt="" class="teamImg">
                        <div class="teamName">simon b.</div>
                        <div class="teamSub">Développeur web fullstack</div>
                        <div class="teamSub">Symfony/React - UX/UI</div>
                    </div>
                </div>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>

        <!-- Projects Section -->

        <section id="projectsSection">

            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer">
                <h2 id="projectSectionTitle" class="sectionTitle">nos réalisations</h2>
                <div id="projectCardMainContainer">
                    <div class="projectCardContainer">
                        <div class="projectCard">
                            <div class="projectCardTitle">création graphiqe 2d</div>
                            <div class="projectCardLeftNavigation projectCardNavigation">
                                <img src="assets/img/svg/leftArrow.svg" alt="slider left arrow navigation">
                            </div>
                            <div class="projectSlider">
                                <div class="projectSliderLightFilter"></div>
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/PAO_CD02-768x484.jpg" alt="project image 1">
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/Charte_LaPlage-768x484.jpg" alt="project image 2">
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/PAO_Logo-768x480.jpg" alt="project image 3">
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/Charte_Hectare-768x484.jpg" alt="project image 4">
                                <div class="projectCardImgIndexIndicator"></div>
                                <a href="gallery.html#section1" class="projectCardCta" title>voir plus</a>
                            </div>
                            <div class="projectCardRightNavigation projectCardNavigation">
                                <img src="assets/img/svg/rightArrow.svg" alt="slider right arrow navigation">
                            </div>
                        </div>
                    </div>
    
                    <div class="projectCardContainer">
                        <div class="projectCard">
                            <div class="projectCardTitle">conception et design 3d</div>
                            <div class="projectCardLeftNavigation projectCardNavigation">
                                <img src="assets/img/svg/leftArrow.svg" alt="slider left arrow navigation">
                            </div>
                            <div class="projectSlider">
                                <div class="projectSliderLightFilter"></div>
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/3DRender_Cave01-768x484.jpg" alt="project image 1">
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/Game_EnergyHeroes-768x484.jpg" alt="project image 2">
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/Decoupe_Laser01-768x484.jpg" alt="project image 3">
                                <img class="projectCardImg" src="https://agencepixelfrance.fr/wp-content/uploads/2024/07/3DRender_InterieurA-768x510.jpg" alt="project image 4">
                                <div class="projectCardImgIndexIndicator"></div>
                                <a href="gallery.html#section1" class="projectCardCta" title="Cliquez pour voir dans la gallerie">voir plus</a>
                            </div>
                            <div class="projectCardRightNavigation projectCardNavigation">
                                <img src="assets/img/svg/rightArrow.svg" alt="slider right arrow navigation">
                            </div>
                        </div>
                    </div>
    
                    <div class="projectCardContainer">
                        <div class="projectCard">
                            <div class="projectCardTitle">développement web</div>
                            <div class="projectCardLeftNavigation projectCardNavigation">
                                <img src="assets/img/svg/leftArrow.svg" alt="slider left arrow navigation">
                            </div>
                            <div class="projectSlider">
                                <div class="projectSliderLightFilter"></div>
                                <img class="projectCardImg" src="assets/img/mockups/winenot_mockup.jpg" alt="project image 1">
                                <img class="projectCardImg" src="assets/img/mockups/cleanupconcept_mockup.jpg" alt="project image 2">
                                <img class="projectCardImg" src="assets/img/mockups/landing_page2_mockup.jpg" alt="project image 3">
                                <img class="projectCardImg" src="assets/img/mockups/template_portfolio_mockup.jpg" alt="project image 4">
                                <div class="projectCardImgIndexIndicator"></div>
                                <a href="gallery.html#section1" class="projectCardCta" title="Cliquez pour voir dans la gallerie">voir plus</a>
                            </div>
                            <div class="projectCardRightNavigation projectCardNavigation">
                                <img src="assets/img/svg/rightArrow.svg" alt="slider right arrow navigation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctaContainers">
                <a href="gallery.html" class="cta" rel="noreferrer" title="Cliquez pour acceder à la gallerie">voir plus de réalisations !</a>
            </div>

            <!-- bottom divider svg -->

            <div class="bottomDividerContainer"></div>
        </section>

        <!-- Contact Section -->

        <section id="contactSection">

            <!-- top divider svg -->

            <div class="topDividerContainer"></div>

            <div class="mainSectionContainer" id="contactMainContainer">
                <h2 id="contactSectionTitle" class="sectionTitle">nous contacter</h2>
                <p>Pour plus d'information ou si vous avez besoin de notre expertise, n'hesitez pas à nous contacter via le formulaire de contact si dessous. Au plaisir de répondre à votre besoin !</p>
            </div>

            <!-- Contact form -->

            <div class="formMainContainer" id="contactFormContainer">
                <div class="card">
                    <div class="cardLogoContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/1182/1182791.png" alt="brain svg" class="formLogo">
                    </div>
                    <div class="cardHeader">
                        <h3 class="formTitle">Contactez nous</h3>
                        <p class="formTxt">Remplissez le formulaire avant son envoie</p>
                    </div>
                    <form action="" method="POST" class="forms" id="contactForm">
                        <div class="formItem">
                            <label for="nameInput">Nom & prénom</label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">person</span>
                                <input type="text" name="name" id="nameInput" aria-describedby="nameError nameValidation" class="formInput" placeholder="Entrez votre nom et prénom" onblur="validateName(this)" required>
                                <div class="nameValidation" aria-live="polite"></div>
                            </div>
                            <div class="nameError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="emailInput">Email</label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">mail</span>
                                <input type="email" name="email" id="emailInput" class="formInput" aria-describedby="emailError emailValidation" placeholder="Entrez votre adresse mail" onblur="validateEmail(this)" required>
                                <div class="emailValidation" aria-live="polite"></div>
                            </div>
                            <div class="emailError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="messageInput">Message</label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">comment</span>
                                <textarea name="message" id="messageInput" aria-describedby="messageError messageValidation" class="formInput messageInput" placeholder="Ecrivez votre message ici" onblur="validateMessage(this)" required></textarea>
                                <div class="messageValidation" aria-live="polite"></div>
                            </div>
                            <div class="messageError" aria-live="polite"></div>
                        </div>

                        <!-- reCAPTCHA -->

                        <div id="reCaptcha" class="g-recaptcha" data-sitekey="votre-site-key"></div>

                        <button class="formBtn" name="submit" type="submit" title="Send form data">Envoyer</button>
                        <div class="errorMessagesContainers">
                            <div id="contactErrorMessage"></div>
                        </div>
                        <div id="formSubmitValidationMessage">
                            <?php
                            if (!empty($validationMessage)) {
                                echo $validationMessage;
                            }
                            ?>
                        </div>
                        <div id="formSubmitErrorMessage">
                            <?php
                            if (!empty($errorMessage)) {
                                echo $errorMessage;
                            }
                            ?>
                        </div>

                        <!-- CSRF_TOKEN -->

                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    </form>
                </div>
            </div>
        </section>

        <!-- Map -->

        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </main>

    <!-- // ---- FOOTER ---- // -->
    
    <footer>
        <div id="footerMainContainer">
            <div id="footerBioContainer">
                <p id="footerName">Pixel France</p>
                <p id="footerBio">Graphisme, 2D & 3D développement web</p>
                <div id="contactMail">contact@agencepixelfrance.fr</div>
            </div>
            <div id="footerSocialContainer">
                <h2>social</h2>
                <ul>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Linkedin profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Facebook profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="Facebook icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Instagram profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="Instagram icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Twitter profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128212.png" alt="Twitter icon"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="propertyContainer">
            <p>Conçu et développé en 2024 par <a href="https://www.simonbenet.com/index.html" target="_blank" title="Direct link to Simon Bénet portfolio">Simon Bénet</a></p>
        </div>
    </footer>
</body>
</html>