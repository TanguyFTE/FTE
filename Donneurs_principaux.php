<!DOCTYPE html>
   

    <html class="no-js" lang="fr-FR">
      
    
            
    
    
    
    
    
    
    
        <head>                  
            <?php require("Head.php"); ?>
        </head>

        






        <body>


            
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
			                <h1 class="hero__title">Donneurs Principaux</h1>
			                <span class="hero__decoration hero__decoration--left" aria-hidden="true"></span>
			                <span class="hero__decoration hero__decoration--right" aria-hidden="true"></span>
		                </div>
	                </div>
	            </section>	
                <section class="page__content" aria-label="Contenu de page">
					<div class="page__summary">
				        <div class="container">
				            <div class="entry">
						    </div>
				        </div>
			        </div>
				    <div class="entry">
			            <section class="entry__section">
                            <div class="entry__row entry__row--wide">
                                <div class="full-text">
                                    <div class="container">
                                        <div class="entry__content entry__content--centered">
                                            
                                            <p style="text-align: justify; font-size:2em;">FTE tient à remercier les donneurs principaux qui contrubuent grandement à la vie du parti. Grâce à eux nous pouvons organiser de nombreux évènement à travers la France.</p>
                                            <br><br><br>
                                            
                                            <h5>NOM prenom</h5>
                                            <p>Motivation du donneur</p>
                                            
                                            <br><br><br><br><br>
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