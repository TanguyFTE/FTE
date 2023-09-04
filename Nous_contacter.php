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
			                <h1 class="hero__title">Nous contacter</h1>
			                <span class="hero__decoration hero__decoration--left" aria-hidden="true"></span>
			                <span class="hero__decoration hero__decoration--right" aria-hidden="true"></span>
		                </div>
	                </div>
	            </section>	


                <br><br><br>
                <section class="entry__section">
                    <div class="entry__row entry__row--wide">
                        <div class="full-text">
                            <div class="container">
                                <div class="entry__content entry__content--centered">
                                            
                                    <p style="text-align: justify; font-size:2em;">Vous pouvez nous contacter à tous moment. Nous ferons de notre mieux pour répondre au plus vite.</p>
                                    <br><br>
                                            
                                    <h5>Couriel</h5>
                                    <p><a href="mailto:tanguy.bourrat.fte@gmail.com">tanguy.bourrat.fte@gmail.com</a>

                                    <h5>Téléphone</h5>
                                    <p> 07 85 78 13 49</p>


                                    <br><br>
                                    </p>      
                                </div>
                            </div>
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