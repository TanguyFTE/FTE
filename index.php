<!DOCTYPE html>
   

    <html class="no-js" lang="fr-FR">
      
    
            
    
    
    
    
    
    
    
        <head>               
            <?php require("Head.php"); ?>
        </head>

        








        <body itemscope itemtype="http://schema.org/WebPage" class="home page-template-default page page-id-53853 wp-embed-responsive tax__color-groupe no-notifications">

            
        <!-- Fast access navigation -->
            
            
            <nav id="nav-fast-access">
                <ul class="menu-fastaccess">
                    <li><a href="#" data-anchor="header" role="button" class="menu-fastaccess__menu">Accès direct au menu</a></li>
                    <li><a href="#" data-anchor="footer" class="menu-fastaccess__footer">Accès direct au pied de page</a></li>
                </ul>
            </nav>

            
            <!-- Header -->
            
            
            <header id="header" class="header" role="banner" tabindex="-1">
                <?php require("header.php"); ?>
            </header>









      
            <main id="main-content" class="main-content" tabindex="-1">
                <section class="page__header page__header--A">
                    <div class="hero hero--hp">
                        <div class="css-slider css-slider--hero css-slider--loading css-slider--animation-in">
                            <div class="css-slider__items">
                                <div class="css-slider__item">
                                    <figure aria-hidden="true">
                                        <noscript>
                
                
                                        <!-- data-location="hero-hp-img" -->


                                            <img src="Images/Paris.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                        </noscript>
                                        <picture>
                                            <source data-srcset="Images/Paris.jpg, Images/Paris.jpg 2x" media="(max-width: 767px)" srcset="Images/Paris.jpg" />
                                            <source data-srcset="Images/Paris.jpg, Images/Paris.jpg 2x" srcset="Images/Paris.jpg  " />
                                            <img src="Images/Paris.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt=""/>
                                        </picture>
                                        <figcaption>
                                            <div class="copyright" aria-label="Copyright" aria-hidden="true">
                                                <span class="copyright__button">&copy;</span>
                                                <span> FTE</span>
                                            </div>
                                        </figcaption>
                                    </figure>			
                                </div>
                            </div>
                            <div class="hero__caption">
                                <div class="css-slider__caption">
                                    <div class="css-slider__caption-item visible" style="display: block;">
                                        <h1 class="hero__title hero__title--big" style="font-size: 250%;">le seul parti de la<br /><strong>transition énergétique</strong></div>	</h1>
                                        <a title="Lien dans un nouvel onglet" target="_blank" href="Calendrier.php" class="hero__link" rel="noopener" style="padding-bottom: 10px;">Calendrier 2023</a>									
                                    </div>
                                    <div class="css-slider__caption--decoration" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="css-slider__caption css-slider__caption--mobile"></div>
                            <div class="css-slider__img-caption"></div>
                        </div>
                    </div>	
                </section>
                <section class="page__content" aria-label="Contenu de page">
                    <div class="entry">
                        <div class="entry__section entry__section--top entry__section--lightgray">
                            <section class="verbatim">
                                <div class="container">
                                    <div class="row row--ai-center">
                                        <div class="verbatim__text">
                                            <p style="text-align: justify;">France Transition énergétique (FTE) est à ce jour le seul véritable parti de la transition énergétique et écologique. Pour en connaitre plus sur FTE, vous pouvez consulter notre programme <a href="Programme.php">ici</a> ou découvrir l'histoire et les ambitions du parti en ciquant ci-dessous.</p>
                                            <div class="verbatim__more">
                                                <a href="Presentation.php" class="btn btn--arrow btn--link" style="color:#FFC000">Voir la rubrique &quot;Nous connaitre&quot;</a>
                                            </div><hr>
                                        </div>
                                        <div class="verbatim__thumbnail">
                                            <a class="media-overlay media-overlay__modal" href="Images/Presentation.jpg"aria-label="">
                                                <div class="media-overlay__media">
                                                    <figure aria-hidden="true">
                                                        <noscript>


                                                        <!-- data-location="verbatim-img" -->


                                                            <img src="Images/Presentation.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                                        </noscript>
                                                        <picture>
                                                            <source data-srcset="Images/Presentation.jpg, Images/Presentation.jpg 2x" media="(max-width: 767px)" srcset="Images/Presentation.jpg" />
                                                            <source data-srcset="Images/Presentation.jpg, Images/Presentation.jpg 2x" srcset="Images/Presentation.jpg" />
                                                            <img src="Images/Presentation.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt=""/>
                                                        </picture>
                                                        <figcaption>
                                                            <div class="copyright copyright--vertical-md" aria-label="Copyright" aria-hidden="true">
                                                                <span class="copyright__button">&copy;</span>
                                                                <span> Tanguy BOURRAT</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>	
                                                </div>
                                                <div class="media-overlay__legend"></div>
                                                <span class="media-overlay__decoration" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>


                        <br><br><br>


                        <?php require("INC_Programme_politique.php"); ?>

                        
                        <?php require("INC_Economie_Intro.php"); ?>
                        
                        
                        <?php require("INC_Sociale_Intro.php"); ?>


                        <?php require("INC_Militer.php"); ?>
                                                    
                        
                    </div>
                </div>
            </section>


            <!-- BUTTON BACK TO TOP -->


            <button type="button" class="btn btn--scrollup">
                <span class="sr-only" id="btn-text">Retour en haut</span>
                <img src="Images/fleche2.png" alt="flèche" style="width: auto;height: 50%;">	
            </button>
            </main> 
        

            <!-- Main content -->


            <footer role="contentinfo" class="footer" id="footer" tabindex="-1">
                <?php require("Footer.php"); ?>
            </footer>

            
            <script type="text/javascript">
                <?php require("JS.php"); ?>
            </script>
        
        </body>


    </html>
