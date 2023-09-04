<!DOCTYPE html>
   

    <html class="no-js" lang="fr-FR">
      
    
            
    
    
    
    
    
    
    
        <head>               
            <?php require("Head.php"); ?>
        </head>

        









            
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
                <section class="hero hero--simple">
	                <div class="hero__header">
		                <div class="container">
			                <h1 class="hero__title">Equipe de FTE</h1>
			                <span class="hero__decoration hero__decoration--left" aria-hidden="true"></span>
			                <span class="hero__decoration hero__decoration--right" aria-hidden="true"></span>
		                </div>
	                </div>
	            </section>	
                  
               
	            <section class="page__content" aria-label="Contenu de page">
					<div class="entry">			
                        <section class="entry__section">
                            <div class="entry__row entry__row--mid-wide">
                                <div class="image-text">
                                    <div class="container">
								        <div class="entry__row">
                                            <div class="text-media ">
                                                <div class="row">
                                                    <div class="text-media__media text-media__media--slider">
                                                    <a class="media-overlay media-overlay__modal" href="Images/Tanguy.jpg" target="_blank">
                                                        <div class="media-overlay__media">
                                                            <figure aria-hidden="true">
                                                            <noscript>


                                                                <!-- data-location="verbatim-img" -->


                                                                    <img src="Images/Tanguy.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                                                </noscript>
                                                                <picture>
                                                                    <source data-srcset="Images/Tanguy.jpg, Images/Tanguy.jpg 2x" media="(max-width: 767px)" srcset="Images/Tanguy.jpg" />
                                                                    <source data-srcset="Images/Tanguy.jpg, Images/Tanguy.jpg 2x" srcset="Images/Tanguy.jpg" />
                                                                    <img src="Images/Tanguy.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt=""/>
                                                                </picture>
                                                                <figcaption>
                                                                    <div class="copyright copyright--vertical-md" aria-label="Copyright" aria-hidden="true">
                                                                        <span class="copyright__button">&copy;</span>
                                                                        <span> FTE</span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>	
                                                        </div>
                                                        <div class="media-overlay__legend"></div>
                                                        <span class="media-overlay__decoration" aria-hidden="true"></span>
                                                    </a>
                                                </div>
                                                <div class="text-media__caption">
                                                    <div class="entry__content">
                                                        <p>
                                                            <strong>TANGUY BOURRAT</strong><br />
                                                            Président
                                                        </p>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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