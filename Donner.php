<!DOCTYPE html>
   

    <html class="no-js" lang="fr-FR">
      
    
            
    
    
    
    
    
    
    
        <head>                  
            <link href="Inscription.css" rel="stylesheet" >
            <link href="Adherer.css" rel="stylesheet" >
            <link href="Header.css" rel="stylesheet">
            <title>Tanguy Industry</title>
            <link rel="icon" href="images/logo.png" type="image/x-icon">
            <meta charset="UTF-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
			                <h1 class="hero__title">Faire un Don</h1>
			                <span class="hero__decoration hero__decoration--left" aria-hidden="true"></span>
			                <span class="hero__decoration hero__decoration--right" aria-hidden="true"></span>
		                </div>
	                </div>
	            </section>	
                

                <div class="main-w3layouts wrapper">
                <h5 style="text-align: center;">Renseigner nous votre identité et le montant de votre don</h5>
                <div class="main-agileinfo">
                    <div class="agileits-top">
                        <form action="Payement_D.php" method="post">


                            <input class="text" type="text" name="nom" placeholder="NOM" required="" minlength="1" maxlength="255">
                            <input class="text email" type="text" name="prenom" placeholder="Prénom" required="" minlength="5" maxlength="255">
                            <input name='mail' type='text' value='' class='medium'   placeholder='Mail' aria-required="true" aria-invalid="false"  autocomplete="email"/>                              
                            <input class="text email" type="text" name="prix" placeholder="Montant du don en euro" required="" minlength="" maxlength="255">


                          
                                    
                         
                            <div class="wthree-text">
                                <label class="anim">
                                    <input type="checkbox" class="checkbox" required="">
                                    <span style="color:#FFC000; font-size:1.2em" >Accepter les <a href="CGU.php" style="color:#FFC000;text-decoration:underline;" target="_blank">conditions générales d'utilisations</a></span>
                                </label>
                            <div class="clear"></div>
                            </div>
                            <input type="submit" value="Payer" name="inscription">
                        </form>
                    </div>
                </div>


                <!-- copyright -->


                <div class="colorlibcopy-agile">
                    <p>Copyright Tanguy BOURRAT 2023 ©</p>
                </div>


                <!-- //copyright -->


                <ul class="colorlib-bubbles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>


                <!-- BUTTON BACK TO TOP -->


                <button type="button" class="btn btn--scrollup">
                    <span class="sr-only" id="btn-text">Retour en haut</span>
                    <img src="Images/fleche2.png" alt="flèche" style="width: auto;height: 50%;">	
                </button>
            </main> 
        

            <!-- Main content -->




            
            <script type="text/javascript">
                <?php require("JS.php"); ?>
            </script>
        
        </body>


    </html>