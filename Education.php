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
                
                         
                <?php require("INC_Sociale_Intro.php"); ?>


            <div class="entry__row">                             
                <section class="une une--filters">
                    <div class="tabs tabs--masonry">
                        <div class="container">

            
                            <?php require("INC_Sociale_Menu_2.php"); ?>
                        
                            
                            <?php require("INC_Sociale.php"); ?>
                   

                        </div>
                    </div>
                </section>      
            </div>


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
