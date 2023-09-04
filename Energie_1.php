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
			                <h1 class="hero__title">La france, un pays tout nucléaire ?</h1>
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
                                            
                                            <p style="text-align: justify; font-size: 2em; line-height: 30px">Dans la conscience collective, la France est souvent perçue comme un pays entièrement nucléaire. Cette impression découle du fait que plus de 70 % de l'électricité est produite grâce à l'énergie atomique.</p>
                                            <br><br><br>

                                            <img src="Images/Energie_1.1.png">
                                            <br><br><br><br>
                                            <p style="text-align: justify; font-size: 2em; line-height: 30px">Cependant, beaucoup semblent oublier que l'électricité n'est pas la seule forme d'énergie finale que nous utilisons. En réalité, elle ne représente que 23 % de la consommation totale.</p>
                                            <br><br><br>
                                            <img src="Images/Energie_1.2.png">
                                            <br><br><br>
                                            <p style="text-align: justify; font-size: 2em; line-height: 30px">Voici le véritable bilan énergétique de la France.</p>
                                            <p style="text-align: justify">La transition énergétique ne consiste pas seulement à décarboner notre production d'électricité, elle doit s'attaquer à toutes les formes d'énergie.</p>
                                            <p style="text-align: justify">Chez FTE, nous avons donc identifié le problème et nous proposons un plan en deux parties :</p>
                                            <p style="text-align: justify"><strong style="font-size: 1.5em;">-></strong> Tout d'abord, il faut électrifier massivement la France, afin de se passer des carburants.</p>
                                            <p style="text-align: justify"><strong style="font-size: 1.5em;">-></strong> Ensuite, il faut décarboner la production d'électricité et augmenter la production nette pour pouvoir répondre à l'électrification.</p>
                                            <img src="Images/Energie_1.4.jpg" style="width: 100%; max-width: 1000px;">
                                            <br><br>
                                            <p style="text-align: justify">Ainsi, nous augmenterons la production d'électricité. Pour en savoir plus, cliquez <a href="Energie_2.php" style="text-decoration: none;"><strong>ici.</strong></a> Cependant, la consommation totale d'énergie devra baisser d'ici à 2050. Nous organiserons donc le pays afin de préparer la contraction énergétique.</p>
                                            <br><br>
                                            <h6 style="text-align: justify">Il est certainement bon de rappeler que chez FTE, notre postulat est de faire une transition énergétique voulue plutôt que subie et ainsi préserver au maximum le niveau de vie élevé des Français que nous avons acquis au cours de ce dernier siècle.</h6>                                            <br><br>
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